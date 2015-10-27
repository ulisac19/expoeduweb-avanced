(function () {
  window.Region = {
    container: null,
    p1: {
      x: 0,
      y: 0,
      elem: null,
      down: false
    },
    p2: {
      x: 0,
      y: 0,
      elem: null,
      down: false
    },
    rect: {
      x: 0, y: 0,
      width: 0,
      height: 0
    },
    boxElem: null,
    imgElem: null,
    imgSource: "",
    pointColor: "#00aaff",
    boxColor: "#66ffff",
    callback: function () {console.log("Region Callback");}
  };
  var pointStyle =
    "width:10px;height:10px;position:absolute;transform:translate(-5px,-5px);cursor:move;";
  var boxStyle =
    "border-style:dashed;border-width:2px;position:absolute;transform:translate(-2px, -2px);";
  var imgStyle = "width:100%;height:100%;position:absolute;";
  Region.init = function () {
    if (this.container && this.container.jquery) {
      this.container = this.container.get(0);
    }
    if (!this.container) {
      console.warn("No se puede iniciar Region porque falta el contenedor!");
      return;
    }
    var p1 = this.p1;
    var p2 = this.p2;
    p1.elem = document.createElement("div");
    p2.elem = document.createElement("div");
    this.boxElem = document.createElement("div");

    p1.elem.setAttribute("style", pointStyle);
    p2.elem.setAttribute("style", pointStyle);
    p1.elem.style.backgroundColor = this.pointColor;
    p2.elem.style.backgroundColor = this.pointColor;
    this.boxElem.setAttribute("style", boxStyle);
    this.boxElem.style.borderColor = this.boxColor;

    this.imgElem = document.createElement("img");
    this.imgElem.setAttribute("style", imgStyle);
    this.imgElem.src = this.imgSource;

    this.container.appendChild(this.imgElem);
    this.container.appendChild(this.boxElem);
    this.container.appendChild(p1.elem);
    this.container.appendChild(p2.elem);

    document.addEventListener("mousemove", function (ev) {
      if (p1.down) {
        var pos = getPosition(ev);
        p1.x = Math.max(Math.min(pos.x, p2.x), 0);
        p1.y = Math.max(Math.min(pos.y, p2.y), 0);
        Region.movePoint(p1);
      }
      if (p2.down) {
        pos = getPosition(ev);
        p2.x = Math.min(Math.max(p1.x, pos.x), 1);
        p2.y = Math.min(Math.max(p1.y, pos.y), 1);
        Region.movePoint(p2);
      }
      if (p1.down || p2.down) {
        ev.preventDefault();
        ev.stopPropagation();
        Region.rect.x = p1.x;
        Region.rect.y = p1.y;
        Region.rect.width = p2.x - p1.x;
        Region.rect.height = p2.y - p1.y;
        Region.updateRectangle();
      }
    });
    document.addEventListener("mouseup", function (ev) {
      if (p1.down || p2.down) {
        Region.callback();
      }
      p1.down = false;
      p2.down = false;
    });
    p1.elem.addEventListener("mousedown", function (ev) {
      p1.down = true;
    });
    p2.elem.addEventListener("mousedown", function (ev) {
      p2.down = true;
    });
    function getPosition (ev) {
      var box = Region.container.getBoundingClientRect();
      var x = ev.clientX - box.left;
      var y = ev.clientY - box.top;
      var width  = box.right - box.left;
      var height = box.bottom - box.top;
      return {"x": (x/width), "y": (y/height)};
    }
  }
  Region.movePoint = function (p) {
    p.elem.style.left = (p.x*100) + "%";
    p.elem.style.top = (p.y*100) + "%";
  }
  Region.updateRectangle = function () {
    this.boxElem.style.left = (this.rect.x*100) + "%";
    this.boxElem.style.top = (this.rect.y*100) + "%";
    this.boxElem.style.width = (this.rect.width*100) + "%";
    this.boxElem.style.height = (this.rect.height*100) + "%";
  }
  Region.setRect = function (x,y,w,h) {
    this.rect.x = x;
    this.rect.y = y;
    this.rect.width = w;
    this.rect.height = h;
    this.p1.x = x;
    this.p1.y = y;
    this.p2.x = x + w;
    this.p2.y = y + h;
    this.movePoint(this.p1);
    this.movePoint(this.p2);
    this.updateRectangle();
  }
  Region.setImage = function (url) {
    this.imgSource = url;
    if (this.imgElem) {
      this.imgElem.src = url;
    }
  }
})();