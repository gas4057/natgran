let cameraFar = 200;

let yOffset = -45;

let firstTexture;
let INITIAL_MAP = [];
let stella;
let tombstones;
let pedestals;
let parterres;
let parterresModelLeft;
let parterresModelRight;
let tombstonesModelRight;
let tombstonesModelLeft;
let theModel;
let loader = new THREE.OBJLoader();
const scene = new THREE.Scene();
let geometry = new THREE.Geometry();
const PLAY_SCENE = document.getElementById("playpause");

let firstSize3DModel = {};

const BACKGROUND_COLOR = 0xe1e1e1;

let _token = document.querySelector('[name="_token"]').value;
let product_id = document.location.pathname.split("/").slice(2, 3)[0];

const params = `_token=${_token}&product_id=${product_id}`;

let promiseRequest = new Promise((resolve, reject) => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/models_object", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(params);

    xhr.onload = () => {
        if (xhr.status != 200) {
            // ошибка
            console.log(xhr.status + ": " + xhr.statusText);
        } else {
            // результат
            let responseModelParse = JSON.parse(xhr.response);
            resolve(responseModelParse);
        }
    };
}).then(async function (data) {
    // Загрузка первай текстуры
    console.log(data);
    firstTexture = await loadTexture(data.texture);
    firstTexture.shininess = 1000
    INITIAL_MAP = [
        { childID: "stella", mtl: firstTexture },
        { childID: "tombstones", mtl: firstTexture },
        { childID: "pedestals", mtl: firstTexture },
        { childID: "parterres", mtl: firstTexture },
        { childID: "parterresModelRight", mtl: firstTexture },
        { childID: "parterresModelLeft", mtl: firstTexture },
        { childID: "tombstonesModelRight", mtl: firstTexture },
        { childID: "tombstonesModelLeft", mtl: firstTexture },
    ];
    // загрузка моделей для одиночного памятника и дефолтного состояния двойного памятника
    stella = await loadModel(data.stellaModel, "stella");
    tombstones = await loadModel(data.tombstonesModel, "tombstones");
    pedestals = await loadModel(data.pedestalsModel, "pedestals");
    parterres = await loadModel(data.parterresModel, "parterres");
    // добавление на сцену дефолтных моделей
    scene.add(stella);
    scene.add(tombstones);
    scene.add(pedestals);
    scene.add(parterres);

    theModel = stella;

    if (data.parterresModel_left) {
        parterresModelRight = await loadModel(
            data.parterresModel_right,
            "parterresModelRight"
        );
        parterresModelLeft = await loadModel(
            data.parterresModel_left,
            "parterresModelLeft"
        );
        tombstonesModelRight = await loadModel(
            data.tombstonesModel_right,
            "tombstonesModelRight"
        );
        tombstonesModelLeft = await loadModel(
            data.tombstonesModel_left,
            "tombstonesModelLeft"
        );

        // scene.add(parterresModelRight);
        // scene.add(parterresModelLeft);
        // scene.add(tombstonesModelRight);
        // scene.add(tombstonesModelLeft);
    }
});

// Инициируем сцену
const canvas = document.querySelector("#canvas");

// Инициируем рендерер
const renderer = new THREE.WebGLRenderer({ canvas, antialias: true });

renderer.shadowMap.enabled = true;

renderer.shadowMapSoft = false;

renderer.setPixelRatio(window.devicePixelRatio);

// Устанавливаем цвет фона и с помощью тумана сглаживаем уровень пола
scene.background = new THREE.Color(BACKGROUND_COLOR);

// Добавляем камеру
let camera = new THREE.PerspectiveCamera(
    50,
    window.innerWidth / window.innerHeight,
    0.1,
    1000
);
camera.position.set(0, 50, cameraFar);
// Хелпер для камеры чтоб смотреть куда она смотрит
// const helper = new THREE.CameraHelper( camera );
// scene.add( helper );

// Исходный материалл
// const INITIAL_MTL = firstTexture;

function loadTexture(texture) {
    return new Promise((resolve, reject) => {
        let txt = new THREE.TextureLoader().load(texture);

        txt.wrapS = THREE.RepeatWrapping;
        txt.wrapT = THREE.RepeatWrapping;

        set_mtl = new THREE.MeshPhongMaterial({
            map: txt,
            shininess: 100,
            // wireframe: true,
        });

        resolve(set_mtl);
    });
}

function loadModel(path, nameModel) {
    let objModel;

    return new Promise((resolve, reject) => {
        loader.load(
            path,
            (obj) => {
                objModel = obj;

                objModel.name = nameModel;
                objModel.position.y = yOffset;

                // Добавление теней
                objModel.traverse((o) => {
                    if (o.isMesh) {
                        o.castShadow = true;
                        o.receiveShadow = true;
                    }
                });

                for (let object of INITIAL_MAP) {
                    initColor(objModel, object.childID, object.mtl);
                }

                // scene.add(objModel);
                firstSize3DModel[nameModel] = getBoundaryGeometry(
                    objModel,
                    nameModel
                );
                resolve(objModel);
            },
            undefined,
            function (error) {
                console.error(error);
            }
        );
    });
}

function getBoundaryGeometry(obj, name) {
    let modelBoundingBox;

    modelBoundingBox = new THREE.Box3().setFromObject(obj);
    // let helper = new THREE.Box3Helper( modelBoundingBox, 0xffff00 );
    // scene.add( helper );
    modelBoundingBox.size = {};
    modelBoundingBox.size.x = modelBoundingBox.max.x - modelBoundingBox.min.x;
    modelBoundingBox.size.y = modelBoundingBox.max.y - modelBoundingBox.min.y;
    modelBoundingBox.size.z = modelBoundingBox.max.z - modelBoundingBox.min.z;

    return modelBoundingBox;
}

// Функция - добавление текстур к моделям.
function initColor(parent, type, mtl) {
    parent.traverse((o) => {
        if (o.isMesh) {
            if (o.name.includes(type)) {
                o.material = mtl;
                o.nameID = type; // Установить новое свойство для идентификации этого объекта
            }
        }
    });
}

// Добавляем свет
const directionalLight = new THREE.DirectionalLight( 0xffffff, 1 );
directionalLight.castShadow = true
directionalLight.name = "directionalLight"
directionalLight.position.set(-100, 150, 50)
directionalLight.target.position.set(25, 10, 0);

directionalLight.shadow.camera.scale.x = 25;
directionalLight.shadow.camera.scale.y = 25;
directionalLight.shadow.camera.scale.z = 25;


// const shadowCameraHelper = new THREE.CameraHelper( directionalLight.shadow.camera )
// directionalLightHelper = new THREE.DirectionalLightHelper(directionalLight, 5); 
// scene.add( shadowCameraHelper); 
scene.add( directionalLight );

directionalLight.shadow.mapSize.width = 1024; // default
directionalLight.shadow.mapSize.height = 1024; // default
directionalLight.shadow.camera.near = 0.5; // default
directionalLight.shadow.camera.far = 500; // default

// const helper = new THREE.CameraHelper( directionalLight.shadow.camera );
// scene.add( helper );
// Свет полушария
let hemiLight = new THREE.HemisphereLight(0xffffff, 0xffffff, 1);
hemiLight.position.set(0, 500, 0);
hemiLight.name = "hemiLight";
// Добовляем свет полушария к сцене
scene.add(hemiLight);

// Свет прожектора
const degSpotLight = 25
const spotLight = new THREE.SpotLight(0xFFFFFF, 2);
spotLight.position.set( -40, 10, 100 );
spotLight.target.position.set(0, 20 ,0);
spotLight.castShadow = false;
spotLight.angle = degSpotLight * 3.14 / 180;
spotLight.distance = 120;

scene.add(spotLight.target);
scene.add(spotLight);
spotLight.target.updateMatrixWorld();
 
// const SpotLightHelper = new THREE.SpotLightHelper(spotLight);
// scene.add(SpotLightHelper);


/*
// // Добовляем направленный свет к сцене
// let light = new THREE.DirectionalLight(0xff0000, 1);
// light.position.set(90, 90, 90);
// light.castShadow = true;
// light.shadow.mapSize = new THREE.Vector2(1024, 1024);
// scene.add(light);

let lightPoint = new THREE.PointLight(0xcccccc, 1.5);
lightPoint.position.set(-40, 170, 40);
lightPoint.castShadow = true;
lightPoint.radius = 50;
lightPoint.name = "lightPoint";
scene.add(lightPoint);

let lightPoint2 = new THREE.PointLight(0xcccccc, 0.9);
lightPoint2.position.set(40, 70, -40);
lightPoint2.castShadow = false;
lightPoint2.radius = 50;
lightPoint2.name = "lightPoint2";
scene.add(lightPoint2);

// var helper = new THREE.PointLightHelper( lightPoint, 1.5 );
// scene.add( helper );

// Добовляем направленный свет к сцене
let dirLight = new THREE.DirectionalLight(0xffffff, 1.5);
dirLight.position.set(-8, 12, 8);
dirLight.castShadow = false;
dirLight.shadow.mapSize = new THREE.Vector2(1024, 1024);
dirLight.name = "dirLight";
scene.add(dirLight);
// var helper = new THREE.DirectionalLightHelper( dirLight, 5 );
// scene.add( helper );
*/

// Добовляем пол
let floorGeometry = new THREE.PlaneGeometry(512, 512, 1, 1);
let floorMaterial = new THREE.MeshPhongMaterial({
    color: 0x7a7a7a,
    shininess: 0,
    opacity: 0.25,
    transparent: true,
    side: THREE.DoubleSide,
    depthWrite: false,
});

let floor = new THREE.Mesh(floorGeometry, floorMaterial);
floor.rotation.x = -0.5 * Math.PI;
floor.receiveShadow = true;
floor.position.y = yOffset - 1;
floor.name = "floor";
scene.add(floor);

// Добовляем элементы управления
let controls = new THREE.OrbitControls(camera, renderer.domElement);
controls.maxPolarAngle = Math.PI / 2;
controls.minPolarAngle = Math.PI / 3;
controls.enableDamping = true;
controls.enablePan = false; // изменение камеры на правую кнопук мыщши
controls.dampingFactor = 0.1;
controls.autoRotate = false; // Включите, если хотите, чтоб объект автоматически поворачивался
controls.autoRotateSpeed = 0.5; // (дефолт 1)
controls.rotateSpeed = 0.2; // скорость вращения модели мышью (дефолт 1)
controls.minDistance = 30;
controls.maxDistance = 400;

function animate() {
    controls.update();
    renderer.render(scene, camera);
    requestAnimationFrame(animate);

    if (resizeRendererToDisplaySize(renderer)) {
        const canvas = renderer.domElement;
        camera.aspect = canvas.clientWidth / canvas.clientHeight;
        camera.updateProjectionMatrix();
    }

    if (theModel != null) {
        initialRotation();
        // DRAG_NOTICE.classList.add("start");
    }
}

animate();

// автоизменение размера окна
function resizeRendererToDisplaySize(renderer) {
    const canvas = renderer.domElement;
    let width = window.innerWidth;
    let height = window.innerHeight;
    let canvasPixelWidth = canvas.width / window.devicePixelRatio;
    let canvasPixelHeight = canvas.height / window.devicePixelRatio;

    const needResize =
        canvasPixelWidth !== width || canvasPixelHeight !== height;
    if (needResize) {
        renderer.setSize(width, height, false);
    }
    return needResize;
}

// Выбор опции для изменения цвета
function selectOption(monumentElement) {
    for (let child of scene.children) {
        if (child.children[0] == undefined) {
            continue;
        } else if (monumentElement == child.children[0].nameID) {
            theModel = child.children[0];
        }
    }
}

function setMaterial(parent, type, mtl) {
    parent.traverse((o) => {
        if (o.isMesh && o.nameID != null) {
            if (o.nameID == type) {
                o.material = mtl;
            }
        }
    });
}

// Фукция прокручивания при открытии
let initRotate = 0;

function initialRotation() {
    initRotate++;
    if (initRotate <= 130) {
        scene.rotation.y += Math.PI / 60;
    }
}

// старт / стоп поворот сцены
if (PLAY_SCENE) {
    PLAY_SCENE.addEventListener("change", (e) => {
        e.preventDefault();

        if (!controls.autoRotate) {
            controls.autoRotate = true;
        } else {
            controls.autoRotate = false;
        }
    });
}
