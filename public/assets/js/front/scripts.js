// // const TRAY = document.querySelector("js-tray-slide");
// // // Function - Build Colors
// // function buildColors(colors) {
// //   for (let [i, color] of colors.entries()) {
// //     let swatch = document.createElement("div");
// //     swatch.classList.add("tray__swatch");

// //     swatch.style.backgroundImage  = "url(" + color.color + ")";

// //     swatch.setAttribute("data-key", i);
// //     TRAY.append(swatch);
// //   }
// // }
// // buildColors(colors);
// // Swatches
// const swatches = document.querySelectorAll(".product--textures__item img");





// // нужно разобраться с масштабированием текстур
// var textureLoader = new THREE.TextureLoader();

// texture = textureLoader.load(file_texture_black);
// texture.repeat.set(3, 3);
// texture.wrapS = THREE.RepeatWrapping;
// texture.wrapT = THREE.RepeatWrapping;

// texture2 = textureLoader.load(file_texture_gray);
// texture2.repeat.set(5, 5);
// texture2.wrapS = THREE.RepeatWrapping;
// texture2.wrapT = THREE.RepeatWrapping;

// textureG1 = textureLoader.load(file_texture_green);
// textureG1.repeat.set(5, 5);
// textureG1.wrapS = THREE.RepeatWrapping;
// textureG1.wrapT = THREE.RepeatWrapping;

// textureP1 = textureLoader.load(file_texture_gray_p1);
// textureP1.repeat.set(5, 5);
// textureP1.wrapS = THREE.RepeatWrapping;
// textureP1.wrapT = THREE.RepeatWrapping;

// materialBlack = new THREE.MeshStandardMaterial({
//   map: texture,
//   color: 0x050505,
//   metalness: 0.8,
//   roughness: 0.3
// });
// materialGray = new THREE.MeshStandardMaterial({
//   map: texture2,
//   color: 0x101010,
//   metalness: 0.3,
//   roughness: 0.8
// });

// materialGreen = new THREE.MeshStandardMaterial({
//   map: texture2,
//   color: 0x000500,
//   metalness: 0.3,
//   roughness: 0.8
// });
// materialDarkGray = new THREE.MeshStandardMaterial({
//   map: texture2,
//   color: 0x0d0d0d,
//   metalness: 0.8,
//   roughness: 0.3
// });

// // материалы для полировки постамента
// material_x1 = [
//   materialGray, // правая грань
//   materialGray, // левая грань
//   materialBlack, // верхняя грань
//   materialGray, // нижняя грань
//   materialGray, // передняя грань
//   materialGray // задняя грань
// ];

// material_x4 = [
//   materialBlack, // правая грань
//   materialBlack, // левая грань
//   materialBlack, // верхняя грань
//   materialGray, // нижняя грань
//   materialBlack, // передняя грань
//   materialGray // задняя грань
// ];

// material_x5 = [
//   materialBlack, // правая грань
//   materialBlack, // левая грань
//   materialBlack, // верхняя грань
//   materialGray, // нижняя грань
//   materialBlack, // передняя грань
//   materialBlack // задняя грань
// ];

// materials = {
//   1: material_x1,
//   4: material_x4,
//   5: material_x5
// };

// // материалы для полировки балок цветника
// material_b_l_x4 = [
//   // левая балка
//   materialGray, // правая грань
//   materialBlack, // левая грань
//   materialBlack, // верхняя грань
//   materialGray, // нижняя грань
//   materialGray, // передняя грань
//   materialGray // задняя грань
// ];

// material_b_r_x4 = [
//   // правая балка
//   materialBlack, // правая грань
//   materialGray, // левая грань
//   materialBlack, // верхняя грань
//   materialGray, // нижняя грань
//   materialGray, // передняя грань
//   materialGray // задняя грань
// ];

// material_b_f_x4 = [
//   // передняя балка
//   materialBlack, // правая грань
//   materialBlack, // левая грань
//   materialBlack, // верхняя грань
//   materialGray, // нижняя грань
//   materialBlack, // передняя грань
//   materialGray // задняя грань
// ];

// // загрузка благоустройства
// function setLandscaping(src) {
//   removeLandscaping();

//   file_landscaping_3d = src;
//   console.log(file_landscaping_3d);
//   console.log(src);
//   if (!file_landscaping_3d) {
//     return;
//   }

//   // колбэк после загрузки модели
//   function loadModel() {
//     objectLandscaping.traverse(function(child) {
//       // перебираем все эелементы модели
//       // навешиваем разные текстуры

//       if (child.isMesh && child.name == "X1") child.material = materialBlack;
//       if (child.isMesh && child.name == "X0") child.material = materialGray;
//       if (child.isMesh && child.name == "G1") child.material = materialGreen;
//       if (child.isMesh && child.name == "P1") child.material = materialDarkGray;
//     });

//     monument.add(objectLandscaping); // добавляем модель к памятнику
//   }

//   // загружаем модель
//   manager = new THREE.LoadingManager(loadModel);

//   var loader = new THREE.OBJLoader(manager);
//   console.log(manager);
//   loader.load(
//     file_landscaping_3d,
//     function(obj) {
//       objectLandscaping = obj;

//       // сдвигаем благоустройство вних, на половину высоты постамента
//       objectLandscaping.position.y = -postament.geometry.parameters.height / 2;

//       // сдвигаем благоустройство на шаг сдвига памятника
//       objectLandscaping.position.z =
//         getPositionShift() - (getObjectsSizes("postament").z * 10) / 2;
//       console.log(obj);
//     },
//     function(xhr) {
//       if (xhr.lengthComputable) {
//         var percentComplete = (xhr.loaded / xhr.total) * 100;
//         console.log("model " + Math.round(percentComplete, 2) + "% downloaded");
//       }
//       console.log(xhr);
//     }
//   );

//   canvasResize(canvas_size_landscaping, canvas_size, 25);
// }

// function removeLandscaping() {
//   if (typeof objectLandscaping != "undefined")
//     monument.remove(objectLandscaping); // если уже есть, удаляем
//   canvasResize(canvas_size, canvas_size);
// }

// // считает базовый сдвиг элементов относительно центра вращения
// function getPositionShift() {
//   return -750 / 2;
// }

// // создаём слой оформления для плиты
// function createDecorLayerTomb(x, y, z) {
//   // Создаём слой для оформления
//   var map = new THREE.TextureLoader().load(svgTombPath);
//   map.wrapS = map.wrapT = THREE.RepeatWrapping;

//   var geometry = new THREE.PlaneBufferGeometry(x * 10, z * 10);
//   var material = new THREE.MeshBasicMaterial({
//     map: map,
//     transparent: true
//   });
//   decorLayerTomb = new THREE.Mesh(geometry, material);
//   decorLayerTomb.position.y = plate.position.y + (y * 10) / 2 + 2;
//   decorLayerTomb.position.z = plate.position.z;
//   decorLayerTomb.rotation.x = -(Math.PI / 2);

//   monument.add(decorLayerTomb);
// }

// function fsetPlate(x, y, z, filePlate) {
//   removePlate();
//   setObjectsSizes("plate", x, y, z);
//   if (!filePlate) {
//     var geometry = new THREE.BoxGeometry(x * 10, y * 10, z * 10); // создаем бокс
//     material = materials[polishComplect];
//     plate = new THREE.Mesh(geometry, material); // создаем объект плиты
//     plate.name = "plate";

//     var flowerSizes = getObjectsSizes("flower");
//     plate.position.z =
//       getPositionShift() +
//       (z * 10) / 2 +
//       postament.geometry.parameters.depth / 2; // придвигаем плиту к постаменту - отодвигаем на половину длины цветника, придвигаем на половину толщины постамента, добавляем щель
//     plate.position.y =
//       -postament.geometry.parameters.height / 2 +
//       flowerSizes.y * 10 +
//       (y * 10) / 2; // кладем плиту на цветник - опускаем на половину высоты постамента, поднимаем на сечение балки цветника и еща на половину толщины плиты

//     // добавляем к памятнику
//     monument.add(plate);

//     createDecorLayerTomb(x, y, z);
//   } else {
//     // колбэк после загрузки модели
//     function loadModel() {
//       plate.traverse(function(child) {
//         // перебираем все эелементы модели

//         switch (
//           polishComplect // выбираем материалы
//         ) {
//           case 4:
//             t1 = materialBlack;
//             t2 = materialBlack;
//             break;
//           case 5:
//             t1 = materialBlack;
//             t2 = materialBlack;
//             break;
//           default:
//             t1 = materialBlack;
//             t2 = materialGray;
//         }

//         // навешиваем разные текстуры
//         if (child.isMesh && child.name == "X1") child.material = t1;
//         if (child.isMesh && child.name == "X4") child.material = t2;
//       });

//       var flowerSizes = getObjectsSizes("flower");
//       plate.position.z =
//         getPositionShift() +
//         (z * 10) / 2 +
//         postament.geometry.parameters.depth / 2; // придвигаем плиту к постаменту - отодвигаем на половину длины цветника, придвигаем на половину толщины постамента, добавляем щель
//       plate.position.y =
//         -postament.geometry.parameters.height / 2 +
//         flowerSizes.y * 10 +
//         (y * 10) / 2; // кладем плиту на цветник - опускаем на половину высоты постамента, поднимаем на сечение балки цветника и еща на половину толщины плиты

//       monument.add(plate); // добавляем модель к памятнику

//       createDecorLayerTomb(x, y, z);
//     }

//     // загружаем модель
//     manager = new THREE.LoadingManager(loadModel);

//     var loader = new THREE.OBJLoader(manager);
//     loader.load(
//       filePlate,
//       function(obj) {
//         plate = obj;

//         var box = new THREE.Box3().setFromObject(obj);
//         var plateSizes = box.getSize();

//         var objectScaleX = (x * 10) / plateSizes.x;
//         var objectScaleY = (y * 10) / plateSizes.y;
//         var objectScaleZ = (z * 10) / plateSizes.z;
//         object.scale.set(objectScaleX, objectScaleY, objectScaleZ);
//       },
//       function(xhr) {
//         if (xhr.lengthComputable) {
//           var percentComplete = (xhr.loaded / xhr.total) * 100;
//           console.log(
//             "model " + Math.round(percentComplete, 2) + "% downloaded"
//           );
//         }
//       }
//     );
//   }
// }

// function removePlate() {
//   if (typeof decorLayerTomb != "undefined") monument.remove(decorLayerTomb);
//   if (typeof plate != "undefined") monument.remove(plate); // если уже есть, удаляем
//   clearObjectsSizes("plate");
// }

// // создаем постамент
// function setPostament(x, y, z) {
//   // параметры это ширина, высота и толщина постамента
//   removePostament();
//   setObjectsSizes("postament", x, y, z);
//   var geometry = new THREE.BoxGeometry(x * 10, y * 10, z * 10); // создаем бокс
//   // geometry.receiveShadow = true;
//   var material = []; // создаем пустой материал

//   material = materials[polishComplect];

//   postament = new THREE.Mesh(geometry, material); // создаем объект постамента
//   if (typeof object != "undefined") object.position.y = (y * 10) / 2; // перемещаем стелу вверх на половину высоту постамента, чтобы стояла на постаменте
//   postament.position.z = getPositionShift();
//   monument.add(postament); // добавляем постамент в группу паматника

//   if (typeof object != "undefined") object.position.z = getPositionShift(); // если уже загружена стела сдвигаем ее тоже

//   /*
//     if (typeof flower != "undefined") { // если у памятника есть цветник
//     flower.position.z = z*10/2+2 // двигаем его вперед на половину толщины постамента, чтобы находился перед постаментом, добавляем щель
//     postament.position.z = 100*10/-2-2 // сдвигаем постамент на половину длины боковой балки и зазор для щели
//     flower.position.y = -y*10/2+80 // кладем цветник на землю, опуская на половину высоты постамента и поднимая на сечение балки
//     }
//     */
// }

// // создаем цветник
// function setFlower(width, length, dx, dy) {
//   // параметры это ширина и длина постамента и сечение балки
//   removeFlower();

//   // центром вращения памятника будет цент цветника
//   // postament.position.z = getPositionShift(); // сдвигаем постамент на половину длины боковой балки и зазор для щели
//   // if (typeof object != "undefined") object.position.z = getPositionShift(); // если уже загружена стела сдвигаем ее тоже

//   if (width == 0 || length == 0) {
//     // если не задан какой-то размер цветника ничего больше не делаем
//     return;
//   }
//   setObjectsSizes("flower", width, dy, length, dx);

//   flower = new THREE.Group(); // создаем новую группу
//   var geometry1 = new THREE.BoxGeometry(dx * 10, dy * 10, (length - dx) * 10); // создаем бокс для боковых балок, они одинаковые
//   // geometry1.receiveShadow = true;
//   var material = []; // создаем пустой материал

//   switch (
//     polishComplect // в зависимости от полировки назначаем материал для левой балки
//   ) {
//     case 1:
//       material = material_x1;
//       break;
//     case 4:
//       material = material_b_l_x4;
//       break;
//     case 5:
//       material = material_b_l_x4;
//       break;
//   }

//   balka1 = new THREE.Mesh(geometry1, material); // создаем левую балку
//   // balka1.position.z = getPositionShift() + length*10/2; // перемещаем ее вперед на половину длины, чтобы была перед постаментом
//   balka1.position.y = -postament.geometry.parameters.height / 2 + (dy * 10) / 2; // постамент на половину находится под уровнем 0, поэтому сдвигаем балки вниз на половину высоты постамента и на половину их содственной высоты
//   balka1.position.x = (width * 10) / -2 + (dx * 10) / 2; // сдвигаем балку влево на половину ширины цветника и на половину толщины сечения балки
//   flower.add(balka1); // добавляем балку в цветник

//   switch (
//     polishComplect // выбираем материал для правой балки
//   ) {
//     case 1:
//       material = material_x1;
//       break;
//     case 4:
//       material = material_b_r_x4;
//       break;
//     case 5:
//       material = material_b_r_x4;
//       break;
//   }
//   balka2 = new THREE.Mesh(geometry1, material); // добавляем такой же бокс
//   //balka2.position.z = length*10/2; // сдвигаем его вперед на половину длины
//   balka2.position.y = -postament.geometry.parameters.height / 2 + (dy * 10) / 2; // так же смещаем вниз, чтобы лежал на земле
//   balka2.position.x = (width * 10) / 2 - (dx * 10) / 2; // сдвигаем правую балку в правую сторону по такому же принципу
//   flower.add(balka2); // добавляем правую балку

//   var geometry2 = new THREE.BoxGeometry(width * 10, dy * 10, dx * 10); // создаем геометрию для передней балки
//   // geometry2.receiveShadow = true;
//   switch (
//     polishComplect // выбираем для нее материал
//   ) {
//     case 1:
//       material = material_x1;
//       break;
//     case 4:
//       material = material_b_f_x4;
//       break;
//     case 5:
//       material = material_b_f_x4;
//       break;
//   }
//   balka3 = new THREE.Mesh(geometry2, material); // создаем балку
//   balka3.position.z = (length * 10) / 2; // сдвигаем вперед на длину цветника, чтобы оказалась спереди, добавляем зазор, чтобы вила видна щель
//   balka3.position.y = -postament.geometry.parameters.height / 2 + (dy * 10) / 2; // кладем на землю
//   flower.add(balka3); // добавляем балку в цветник

//   flower.position.z =
//     getPositionShift() +
//     postament.geometry.parameters.depth / 2 +
//     ((length - dx) * 10) / 2; // осталось подвинуть цветник вперед на половину толщины постамента, чтобы находился перед постаментом, тоже добавляем щель

//   monument.add(flower); // добавляем цветник к памятнику
// }

// function removeFlower() {
//   if (typeof flower != "undefined") monument.remove(flower); // если постамент у памятника есть, удаляем его
//   clearObjectsSizes("flower");
// }

// function removePostament() {
//   if (typeof postament != "undefined") monument.remove(postament); // если он уже есть, удаляем
//   clearObjectsSizes("postament");
// }

// function setPolishComplect(polish) {
//   if (polishComplect != polish) {
//     polishComplect = polish;

//     var i = 0;

//     switch (
//       polishComplect // выбираем материалы
//     ) {
//       case 4:
//         t1 = materialBlack;
//         t2 = materialBlack;
//         t3 = materialGray;
//         break;
//       case 5:
//         t1 = materialBlack;
//         t2 = materialBlack;
//         t3 = materialBlack;
//         break;
//       default:
//         t1 = materialBlack;
//         t2 = materialGray;
//         t3 = materialGray;
//     }

//     object.traverse(function(child) {
//       // перебираем все эелементы модели стелы
//       console.log(child);
//       // навешиваем текстуры
//       if (child.isMesh && child.name == "X1") child.material = t1;
//       if (child.isMesh && child.name == "X4") child.material = t2;
//       if (child.isMesh && child.name == "X5") child.material = t3;
//       i++;
//     });
//   }
// }

// function setStelaSize(sizeX, sizeY, sizeZ) {
//   var objectScaleX = (sizeX * 10) / objectSizes.x;
//   var objectScaleY = (sizeY * 10) / objectSizes.y;
//   var objectScaleZ = (sizeZ * 10) / objectSizes.z;
//   object.scale.set(objectScaleX, objectScaleY, objectScaleZ);

//   if (typeof decorLayerFront != "undefined") monument.remove(decorLayerFront); // если он уже есть, удаляем
//   if (typeof decorLayerBack != "undefined") monument.remove(decorLayerBack); // если он уже есть, удаляем
//   if (typeof layerEngraving != "undefined") monument.remove(layerEngraving); // если он уже есть, удаляем

//   var map = new THREE.TextureLoader().load(image_engraving);
//   map.wrapS = map.wrapT = THREE.RepeatWrapping;

//   var geometry = new THREE.PlaneBufferGeometry(objectSizes.x, objectSizes.y);
//   geometry.scale(objectScaleX, objectScaleY, 1);

//   var material = new THREE.MeshBasicMaterial({
//     map: map,
//     transparent: true
//   });

//   layerEngraving = new THREE.Mesh(geometry, material);
//   layerEngraving.position.y =
//     (objectSizes.y * objectScaleY) / 2 +
//     postament.geometry.parameters.height / 2;
//   layerEngraving.position.z =
//     getPositionShift() + (objectSizes.z * objectScaleZ) / 2 + 2;

//   monument.add(layerEngraving);

//   var map = new THREE.TextureLoader().load(svgFrontPath);
//   map.wrapS = map.wrapT = THREE.RepeatWrapping;

//   var geometry = new THREE.PlaneBufferGeometry(objectSizes.x, objectSizes.y);
//   geometry.scale(objectScaleX, objectScaleY, 1);

//   var material = new THREE.MeshBasicMaterial({
//     map: map,
//     transparent: true
//   });

//   decorLayerFront = new THREE.Mesh(geometry, material);
//   decorLayerFront.position.y =
//     (objectSizes.y * objectScaleY) / 2 +
//     postament.geometry.parameters.height / 2;
//   decorLayerFront.position.z =
//     getPositionShift() + (objectSizes.z * objectScaleZ) / 2 + 4;

//   monument.add(decorLayerFront);

//   if (polishComplect == 5) {
//     var map = new THREE.TextureLoader().load(svgBackPath);
//     map.wrapS = map.wrapT = THREE.RepeatWrapping;

//     var geometry = new THREE.PlaneBufferGeometry(objectSizes.x, objectSizes.y);
//     geometry.scale(objectScaleX, objectScaleY, 1);

//     var material = new THREE.MeshBasicMaterial({
//       map: map,
//       transparent: true
//     });

//     decorLayerBack = new THREE.Mesh(geometry, material);
//     decorLayerBack.position.y =
//       (objectSizes.y * objectScaleY) / 2 +
//       postament.geometry.parameters.height / 2;
//     decorLayerBack.position.z =
//       getPositionShift() - (objectSizes.z * objectScaleZ) / 2 - 2;
//     decorLayerBack.rotation.y = Math.PI;

//     monument.add(decorLayerBack);
//   }
// }

// function setObjectsSizes(entity, x, y, z, dx = 0) {
//   objectsSizes[entity] = { x: x, y: y, z: z, dx: dx };
// }

// function getObjectsSizes(entity) {
//   return objectsSizes[entity];
// }

// function clearObjectsSizes(entity) {
//   setObjectsSizes(entity, 0, 0, 0, 0);
// }

// function getAutoRotateSpeed(x, y) {
//   if (cameraX && cameraY) {
//     if (cameraX > 0) {
//       autoRotateSpeed = cameraY > y ? -1 : 1;
//     } else {
//       autoRotateSpeed = cameraY < y ? -1 : 1;
//     }
//   }
//   cameraX = x;
//   cameraY = y;
//   return autoRotateSpeed;
// }

// function setComplectHash(complectHash) {
//   svgFrontPath =
//     "/order-decoration-show-svg.svg?h=" + complectHash + "&s=1&base64";

//   svgBackPath =
//     "/order-decoration-show-svg.svg?h=" + complectHash + "&s=2&base64";

//   svgTombPath =
//     "/order-decoration-show-svg.svg?h=" + complectHash + "&s=3&base64";
// }

// var container;
// var camera, scene, renderer, controls;
// var mouseX = 0,
//   mouseY = 0;
// var windowHalfX = window.innerWidth / 2;
// var windowHalfY = window.innerHeight / 2;
// var object, objectLandscaping;
// var polishComplect = 1;
// var objectSizes;
// var objectsSizes = {
//   flower: { x: 0, y: 0, z: 0, dx: 0 },
//   plate: { x: 0, y: 0, z: 0 },
//   postament: { x: 0, y: 0, z: 0 }
// };
// var autoRotateSpeed = -1;
// var cameraX, cameraY;
// var decorLayerFront, decorLayerBack, decorLayerTomb;
// var layerEngraving;
// var svgFrontPath, svgBackPath, svgTombPath;

// init();

// function init() {
//   container = document.createElement("div"); // создаем контейнер для крутилки
//   container.setAttribute("style", "height: " + canvas_size + "px");

//   var blockReel3D = document.getElementById("update-part-3d-reel-new");

//   if (!blockReel3D) {
//     return false;
//   }
//   blockReel3D.appendChild(container); // добавляем в тело документа

//   // создаем камеру, указывая угол обзора, пропорции экрана, переднюю и заднюю плоскости обзора
//   camera = new THREE.PerspectiveCamera(19, 1, 100, 12000);

//   // создаем группу для объединения элементов памятника в один объект
//   monument = new THREE.Group();
//   // опускаем монумент, относительно горизонта сцены
//   monument.position.y = -520;

//   // создаем сцену
//   scene = new THREE.Scene();

//   // создаем объемный не направленный источник света в качестве заполняющего источника света
//   // var ambientLight = new THREE.AmbientLight( 0xcccccc, 0.4 );
//   // // добавляем его в сцену
//   // scene.add( ambientLight );

//   // создаем направленный источник света в качестве рисующего источника света
//   // var pointLight = new THREE.PointLight( 0xffffff, 0.8 );
//   //
//   // // источник света добавляем на камеру, чтобы светил из нее
//   // camera.add( pointLight );

//   // var light = new THREE.PointLight( 0xffffff, 1 );
//   // light.position.set( 0, 0, 0 );
//   // // light.castShadow = true; // default false
//   // camera.add( light );
//   //
//   // //Set up shadow properties for the light
//   // light.shadow.mapSize.width = 512; // default
//   // light.shadow.mapSize.height = 512; // default
//   // light.shadow.camera.near = 0.5; // default
//   // light.shadow.camera.far = 500; // default

//   // var light = new THREE.DirectionalLight( 0xffffff, 1 );
//   // light.position.set( 1, 1, 1 );
//   // // camera.add( light );
//   // scene.add( light );
//   //
//   // var light = new THREE.DirectionalLight( 0xffffff );
//   // light.position.set( 1, 1, 1 );
//   // scene.add( light );
//   // var light = new THREE.DirectionalLight( 0xffffff );
//   // light.position.set( - 1, - 1, - 1 );
//   // scene.add( light );
//   // var light = new THREE.AmbientLight( 0x222222 );
//   // scene.add( light );

//   // var directionalLight = new THREE.DirectionalLight( 0xffffff, 6 );
//   // // directionalLight.target = monument;
//   // directionalLight.position.set( 0, 2000, 1000 ); //default; light shining from top
//   // // directionalLight.castShadow = true;
//   // // scene.add( directionalLight );
//   // scene.add( directionalLight );

//   var ambientLight = new THREE.AmbientLight(0xffffff, 1.5);
//   scene.add(ambientLight);

//   var lights = [];
//   lights[0] = new THREE.PointLight(0xffffff, 20, 0);
//   lights[1] = new THREE.PointLight(0xffffff, 11, 0);
//   lights[2] = new THREE.PointLight(0xffffff, 2, 0);
//   // lights[ 3 ] = new THREE.PointLight( 0xffffff, 1, 0 );

//   lights[0].position.set(2000000, 10000000, 2000000);
//   lights[1].position.set(-2000000, 2000000, 2000000);
//   lights[2].position.set(2000000, 10000000, -10000000);
//   // lights[ 3 ].position.set( 0, -600, 0);
//   // lights[ 1 ].position.set( 1000, 2000, 1000 );
//   // lights[ 2 ].position.set( - 1000, - 2000, - 1000 );

//   camera.add(lights[0]);
//   camera.add(lights[1]);
//   // camera.add( lights[ 2 ] );
//   // scene.add( lights[ 3 ] );

//   // добавляем камеру в сцену
//   scene.add(camera);

//   // колбэк после загрузки модели
//   function loadModel() {
//     object.traverse(function(child) {
//       // перебираем все эелементы модели
//       // навешиваем разные текстуры
//       //console.log(child)

//       for (const swatch of swatches) {
//         swatch.addEventListener("click", selectSwatch);
//       }

//       function setMaterial(child, mtl) {
//         child.traverse(function(node) {
//           if (node.isMesh) {
//             node.material = mtl;
//           }
//         });
//       }
//       function selectSwatch(e) {
//         let color = colors[parseInt(e.target.dataset.key)];
//         console.log(color);
//         let new_mtl;

//         var textr = new THREE.TextureLoader().load( color.color );
//           textr.wrapS = THREE.RepeatWrapping;
//           textr.wrapT = THREE.RepeatWrapping;
//           textr.repeat.set(1, 1);

//         new_mtl = new THREE.MeshStandardMaterial({
//           map: textr,
//           metalness: 0.8,
//           roughness: 0.3,
//         });
        

//         setMaterial(child, new_mtl);
//       }

//       // if (child.isMesh && child.name == "X0") child.material = materialGray;
//       // if (child.isMesh && child.name == "X1") child.material = materialBlack;
//       // if (child.isMesh && child.name == "X4") child.material = materialGray;
//       // if (child.isMesh && child.name == "X5") child.material = materialGray;
//     });
//     monument.add(object); // добавляем модель к памятнику
//   }

//   // загружаем модель
//   manager = new THREE.LoadingManager(loadModel);
//   manager.onProgress = function(item, loaded, total) {
//     // выводим в консоль информацию о загрузке
//     console.log(item, loaded, total);
//   };

//   scene.add(monument);

//   // model
//   function onProgress(xhr) {
//     if (xhr.lengthComputable) {
//       var percentComplete = (xhr.loaded / xhr.total) * 100;
//       console.log("model " + Math.round(percentComplete, 2) + "% downloaded");
//     }
//   }
//   function onError() {}

//   var loader = new THREE.OBJLoader(manager);
//   loader.load(
//     file_model_3d,
//     function(obj) {
//       object = obj;

//       var box = new THREE.Box3().setFromObject(object);
//       objectSizes = box.getSize();

//       // object.position.z = getPositionShift() - 2;
//     },
//     onProgress,
//     onError
//   );

//   renderer = new THREE.WebGLRenderer({ antialias: true }); // создаем рендерер
//   renderer.setPixelRatio(window.devicePixelRatio);
//   renderer.setSize(canvas_size, canvas_size);
//   renderer.setClearColor(0xe2e2e2); // цвет фона
//   // renderer.setClearColor( 0xffaa00 ); // цвет фона
//   // renderer.shadowMap.enabled = true;
//   // renderer.shadowMap.type = THREE.PCFSoftShadowMap; // default
//   container.appendChild(renderer.domElement);

//   controls = new THREE.OrbitControls(camera, renderer.domElement);
//   //controls.addEventListener( 'change', render ); // call this only in static scenes (i.e., if there is no animation loop)
//   controls.enableDamping = true; // an animation loop is required when either damping or auto-rotation are enabled
//   controls.dampingFactor = 0.3;
//   controls.rotateSpeed = 0.4;
//   controls.screenSpacePanning = false;
//   controls.minDistance = mode_3d_reel == "adaptive" ? 2500 : 5000;
//   controls.maxDistance = 5000;
//   controls.minPolarAngle = 1.4;
//   //controls.maxPolarAngle = 1.45;
//   controls.maxPolarAngle = 1.6;

//   controls.autoRotate = true;
//   controls.autoRotateSpeed = getAutoRotateSpeed();

//   controls.enableKeys = false;
//   controls.enableZoom = false;
//   controls.enablePan = false;

//   document.addEventListener("mousemove", onDocumentMouseMove, false); // слушаем передмщения мыши
//   //window.addEventListener( 'resize', onWindowResize, false ); // слушаем, если изменился размер экрана
// }

// function onWindowResize() {
//   // меняем настройки камеры, если изменился размер экрана
//   windowHalfX = window.innerWidth / 2;
//   windowHalfY = window.innerHeight / 2;
//   camera.aspect = window.innerWidth / window.innerHeight;
//   camera.updateProjectionMatrix();
//   renderer.setSize(window.innerWidth, window.innerHeight);
// }

// function canvasResize(width, height, fov = 19) {
//   camera.fov = fov;
//   camera.aspect = width / height;
//   camera.updateProjectionMatrix();
//   renderer.setSize(width, height);
// }

// function onDocumentMouseMove(event) {
//   mouseX = (event.clientX - windowHalfX) / 2;
//   mouseY = (event.clientY - windowHalfY) / 2;
// }

// //
// function animate() {
//   // анимация
//   animationID = requestAnimationFrame(animate); // про requestAnimationFrame https://habr.com/post/114358/
//   controls.update();
//   controls.autoRotateSpeed = getAutoRotateSpeed(
//     camera.position.x,
//     camera.position.z
//   );
//   render(); // рендерим сцену
// }

// function render() {
//   renderer.render(scene, camera);
// }

// $(document).ready(function() {
//   var buttonAnimate = $(".animate-run-new");

//   /** Событие "Нажатие кнопки анимации" */
//   buttonAnimate.on("click", function() {
//     var button = $(this);
//     button.toggleClass("fa-play fa-pause");

//     if (button.hasClass("fa-pause")) {
//       controls.autoRotate = false;
//     } else if (button.hasClass("fa-play")) {
//       controls.autoRotate = true;
//     }
//   });
// });
