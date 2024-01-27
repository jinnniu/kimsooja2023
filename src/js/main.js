// loading
function onReady(callback) {
  var intervalId = window.setInterval(function () {
    if (document.getElementsByTagName("body")[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 1000);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? "" : "none";
}

onReady(function () {
  setVisible(".container--works__work", true);
  setVisible("#loader", false);
});

// class opens
const menubars = [...document.querySelectorAll(".menubars")];
const menubartext = [...document.querySelectorAll(".menubars span")];
for (let i = 0; i < menubars.length; i++) {
  menubars[i].onclick = function () {
    window.location = menubartext[i].getAttribute("data-location");
  };
}

// works : container opens
const mainImgs = [
  ...document.querySelectorAll(".container--works__work--items__thumbnail"),
];
const detailContainers = [
  ...document.querySelectorAll(".container__contents--detail"),
];
const closingbtn = [...document.querySelectorAll(".closedetail .btn")];

for (let i = 0; i < mainImgs.length; i++) {
  mainImgs[i].onclick = function (event) {
    for (let j = 0; j < detailContainers.length; j++) {
      if (i === j) {
        detailContainers[j].getAttribute("data-open") == "false"
          ? detailContainers[j].setAttribute("data-open", "true")
          : detailContainers[j].setAttribute("data-open", "false");
      } else if (i !== j) {
        detailContainers[j].setAttribute("data-open", "false");
      }
    }
  };
}

// WORKS detail closing
for (let c = 0; c < closingbtn.length; c++) {
  closingbtn[c].onclick = function (event) {
    for (let d = 0; d < detailContainers.length; d++) {
      if (c === d) {
        detailContainers[d].setAttribute("data-open", "false");
      }
    }
  };
}

// texts : details opens
const textslisting = [
  ...document.querySelectorAll(".container--texts__items--list"),
];
const textscontents = [
  ...document.querySelectorAll(".container--texts__items--detail"),
];
const textclosebtn = [
  ...document.querySelectorAll(".container--texts__items--detail .closedetail"),
];
const textlistbox = document.querySelector(".listbox");
for (let e = 0; e < textslisting.length; e++) {
  textslisting[e].onclick = function () {
    textlistbox.classList.add("text-clicked");
    for (let l = 0; l < textscontents.length; l++) {
      if (e === l) {
        textscontents[l].getAttribute("data-open") == "false"
          ? textscontents[l].setAttribute("data-open", "true")
          : textscontents[l].setAttribute("data-open", "false");
        textclosebtn[e].onclick = function (event) {
          textscontents[l].setAttribute("data-open", "false");
          textlistbox.classList.remove("text-clicked");
        };
      } else if (e !== l) {
        textscontents[l].setAttribute("data-open", "false");
      }
    }
  };
}

// text : back to top
const textdetailcontainer = [
  ...document.querySelectorAll(".container--texts__items--detail"),
];
const backtopBtn = [...document.querySelectorAll(".backtop")];

for (let p = 0; p < backtopBtn.length; p++) {
  backtopBtn[p].onclick = function (event) {
    for (let d = 0; d < textdetailcontainer.length; d++) {
      if (p === d) {
        textdetailcontainer[d].scroll({
          top: 0,
          behavior: "smooth",
        });
      }
    }
  };
}

// img slider
const insider = [...document.querySelectorAll(".sliderin")];
const nextbtn = [...document.querySelectorAll(".next")];
const prevbtn = [...document.querySelectorAll(".prev")];

function nextscrolling() {
  for (let s = 0; s < insider.length; s++) {
    insider[s].scrollLeft += 200;
  }
}
function prevscrolling() {
  for (let s = 0; s < insider.length; s++) {
    insider[s].scrollLeft -= 200;
  }
}

// menubar
let menuicon = document.getElementById("menu-icon");
let menuinside = document.getElementById("menu-inside");
let menucon = document.getElementById("menu-container");
let con = document.getElementById("container__contents");

menuicon.onclick = function (event) {
  menuinside.classList.toggle("visible");
  menuicon.classList.toggle("toggling");
  menucon.classList.toggle("moving");
  con.classList.toggle("resizing");
};

// timeline div height
let categoryFilter = document.getElementById("work-category-filter");
let morebtn = document.getElementById("extension-btn");
// const wrapper = document.querySelector(".filter");

morebtn.addEventListener("click", (e) => {
  categoryFilter.classList.toggle("more-open");
  categoryFilter.classList.contains("more-open")
    ? (morebtn.innerHTML = "Less")
    : (morebtn.innerHTML = "More");
});
