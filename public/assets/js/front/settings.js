var reelIndexConfig = false,
  reelPartsTypes = {
    "1": "stella",
    "3": "pedestal",
    "4": "flower",
    "5": "tombstone"
  };

/**
 * Возвращает конфигурацию индексов деталей
 * @returns {boolean}
 */
function reelGetIndexConfig() {
  var config;
  if (reelIndexConfig === false) {
    config = {};
    config.forward = {
      stella: "4",
      pedestal: "3",
      flower: "1",
      tombstone: "2"
    };
    config.backward = {
      stella: "4",
      pedestal: "1",
      flower: "2",
      tombstone: "3"
    };
    reelIndexConfig = config;
  }

  return reelIndexConfig;
}
/**
 * � зменение z-index
 * @param nFrame
 * @param part
 */
function reelChangeIndexPart(nFrame, part) {
  var productType = part.data("product-type"),
    configIndex = reelGetIndexConfig(),
    parentDiv = part.parent().parent();

  if (nFrame >= 18 && nFrame <= 67) {
    // передний план
    parentDiv.css("z-index", configIndex.forward[reelPartsTypes[productType]]);
  } else {
    // задний план
    parentDiv.css("z-index", configIndex.backward[reelPartsTypes[productType]]);
  }
}

$(document).ready(function() {
  var imageMaster = $("img.reel.master");
  var buttonAnimate = $(".animate-run");
  var allRellCount = $("img.reel").length,
    loadedReelCount = 0;
  var allowSaveFrame = false;
  if (allRellCount) {
    $("img.reel").on("loaded", function() {
      if (++loadedReelCount == allRellCount) {
        allowSaveFrame = true;
      }
      $(this).reel("frame", $("#frame-number").val());
      $(this).show();
    });
  }

  /** Загрузка деталей slave после загрузки master */
  imageMaster.on("loaded", function() {
    var imagesSlave = $(this)
      .closest("div.animated")
      .find("img.slave");
    imagesSlave.each(function(index, slave) {
      $(slave).trigger("click");
    });
  });

  /** Отслеживание поворота master и соответствующий поворот деталей slave */
  imageMaster.on("frameChange", function() {
    var nFrame = $(this).reel("frame");
    var imagesSlave = $(this)
      .closest("div.animated")
      .find("img.slave");
    reelChangeIndexPart(nFrame, $(this));
    if (allowSaveFrame) {
      $("#frame-number").val($(this).reel("frame"));
    }
    imagesSlave.each(function(index, slave) {
      $(slave).reel("frame", nFrame);
      reelChangeIndexPart(nFrame, $(slave));
    });
  });

  /** Событие "Нажатие кнопки анимации" */
  buttonAnimate.on("click", function() {
    var reelElement = $(this)
      .parent()
      .parent()
      .find("img.master");
    var inputStatus = $("#status-3d-animate");
    reelElement.trigger("click");
    if (!reelElement.data("playing")) {
      reelElement.trigger("play", 0.2);
      reelElement.trigger("playing", true);
      if (inputStatus !== undefined) {
        inputStatus.val("playing");
      }
    } else {
      reelElement.trigger("stop");
      reelElement.data("playing", false);
      if (inputStatus !== undefined) {
        inputStatus.val("stop");
      }
    }
    $(this).toggleClass("fa-play fa-pause");
  });
});
