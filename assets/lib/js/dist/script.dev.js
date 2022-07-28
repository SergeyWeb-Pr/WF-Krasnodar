"use strict";

// menu_hidden
$(document).ready(function () {
  if ($(window).width() < 780) {
    var used;
    $(".submenu__list, pod_submenu").on("click", function (e) {
      if (used !== this) {
        used = this;
        e.preventDefault();
        $('#out').text("Click задержан");
      } else {
        $('#out').text("Click разрешен и сработал");
      }
    });
  }
});
$(".submenu__list").hover(function () {
  $('.pod_submenu', this).addClass('menu__hidden-active');
  $('.submenu__link', this).addClass('hover_color');
  $('.btn-arrow--img', this).addClass('active-btn'); // $('.pod_submenu', this).classList.addClass('hover_color');
  // $('.submenu__link', this).classList.addClass('hover_color');
}, function () {
  $('.pod_submenu', this).removeClass('menu__hidden-active');
  $('.submenu__link', this).removeClass('hover_color'); // $('.pod_submenu-list', this).removeClass('submenu-height');

  $('.btn-arrow--img', this).removeClass('active-btn');
});
$(".pod_submenu").hover(function () {
  $('.pod_submenu-list', this).addClass('menu__hidden-active');
  $('.submenu-arrow--img', this).addClass('active-btn');
}, function () {
  $('.pod_submenu-list', this).removeClass('menu__hidden-active');
  $('.submenu-arrow--img', this).removeClass('active-btn');
});
$(".submenu__link-list").hover(function () {
  $('.sabmenu__link-color', this).addClass('hover_color-2');
}, function () {
  $('.sabmenu__link-color', this).removeClass('hover_color-2');
});
$(".sabmenu__link-2").hover(function () {
  $('.pod_submenu-list-2', this).addClass('menu__hidden-active');
  $('.link_underline', this).addClass('underline');
  $('.link_underline', this).addClass('bg-link');
}, function () {
  $('.pod_submenu-list-2', this).removeClass('menu__hidden-active');
  $('.link_underline', this).removeClass('underline');
  $('.link_underline', this).removeClass('bg-link');
}); // $(".submenu__list").hover(function(){    
//     $('.pod_submenu', this).removeClass('menu__hidden-none');
//     $('.submenu__link', this).addClass('hover_color');
//     $('.btn-arrow--img', this).addClass('active-btn');
// },function(){
//     $('.pod_submenu', this).addClass('menu__hidden-none');
//     $('.submenu__link', this).removeClass('hover_color');
//     $('.pod_submenu-list', this).removeClass('submenu-height');
//     $('.btn-arrow--img', this).removeClass('active-btn');
// });
// $(".pod_submenu").hover(function(){    
//     $('.pod_submenu-list', this).removeClass('menu__hidden-none');
// },function(){
//     $('.pod_submenu-list', this).addClass('menu__hidden-none');
// });
// $(".submenu__link-list").hover(function(){    
//     $('.sabmenu__link-color', this).addClass('bg-link');
// },function(){
//     $('.sabmenu__link-color', this).removeClass('bg-link');
// });
// $(".sabmenu__link-2").hover(function(){    
//     $('.pod_submenu-list-2', this).removeClass('menu__hidden-none');
//     $('.link_underline', this).addClass('underline');
//     $('.link_underline', this).addClass('bg-link');
// },function(){
//     $('.pod_submenu-list-2', this).addClass('menu__hidden-none');
//     $('.link_underline', this).removeClass('underline');
//     $('.link_underline', this).removeClass('bg-link');
// });

var menuHidden = document.querySelector('.menu__hidden');
var navMenuBtn = document.querySelector('.nav__menu-btn');
var menuHiddenBtn = document.querySelector('.menu__hidden-btn');
var menuHiddenNone = document.querySelector('.menu__hidden-none');
var submenuLink = document.querySelectorAll('.submenu__link');
var wrapperMenu = document.querySelector('.wrapper-menu');
var lineMenu1 = document.querySelector('.line-menu--1');
var lineMenu2 = document.querySelector('.line-menu--2');
var headerText = document.querySelector('.header__title');
var headerBtn = document.querySelector('.header__info');
var navMenuBtnMobile = document.querySelector('.nav__menu-btn--mobile');
var submenu = document.querySelector('.submenu');
var submenuHeight = document.querySelector('.submenu-height');
var subMenuList = document.querySelector('.submenu__link-list');
var podSubmenuList = document.querySelectorAll('.pod_submenu-list');
var submenuList = document.querySelectorAll('.submenu__list');
var podSubmenu = document.querySelectorAll('.pod_submenu');
var sabmenuLink = document.querySelectorAll('.sabmenu__link');
var sabmenuLinkColor = document.querySelectorAll('.sabmenu__link-color');
var podSubmenuList2 = document.querySelectorAll('.pod_submenu-list-2');
var sabmenuLink2 = document.querySelectorAll('.sabmenu__link-2');
var btnArrowImg = document.querySelectorAll('.btn-arrow--img');
var submenuArrowImg = document.querySelectorAll('.submenu-arrow--img');
var mobileBtnUp = document.querySelectorAll('.mobile-btn--up');
var submenuBtnUp = document.querySelectorAll('.submenu-btn--up');
var linkUnderline = document.querySelectorAll('.link_underline');

function toogleMenu() {
  menuHidden.classList.toggle('start_menu-active');
  navMenuBtnMobile.classList.toggle('start_menu-active');
  headerText.classList.toggle('dis-none');
  headerBtn.classList.toggle('dis-none');
  document.querySelector('body').classList.toggle('header-nav--fixed');
}

;
navMenuBtn.addEventListener('click', toogleMenu);
menuHiddenBtn.addEventListener('click', toogleMenu);
menuHiddenBtn.addEventListener('click', function () {
  menuHidden.classList.remove('start_menu-active');
  wrapperMenu.classList.remove('open');
  menuHidden.classList.remove('start_menu-active');
  headerText.classList.remove('dis-none');
  headerBtn.classList.remove('dis-none');
  document.querySelector('body').classList.remove('header-nav--fixed');
}); // mobile menu

wrapperMenu.addEventListener('click', function () {
  wrapperMenu.classList.toggle('open');
  menuHidden.classList.toggle('start_menu-active');
  headerText.classList.toggle('dis-none');
  headerBtn.classList.toggle('dis-none');
  document.querySelector('body').classList.toggle('header-nav--fixed');
}); // for (let i = 0; i < submenuList.length; i++) {
//     submenuList[i].onmouseover = function(){
//         podSubmenu[i].classList.add('menu__hidden-active');
//         submenuLink[i].classList.add('hover_color');
//         btnArrowImg[i].classList.add('active-btn');
//         podSubmenu[i].classList.add('hover_color');
//         submenuLink[i].classList.add('hover_color');
//     }
//     submenuList[i].onmouseout = function(){
//         podSubmenu[i].classList.remove('menu__hidden-active');
//         submenuLink[i].classList.remove('hover_color');
//         btnArrowImg[i].classList.remove('active-btn');
//         podSubmenuList.classList.remove('submenu-height');
//     }
// }
// for (let i = 0; i < podSubmenu.length; i++) {
//     podSubmenu[i].onmouseover = function(){
//         podSubmenuList.classList.add('menu__hidden-active');
//         submenuArrowImg[i].classList.add('active-btn');
//     }
//     podSubmenu[i].onmouseout = function(){
//         podSubmenuList.classList.remove('menu__hidden-active');
//         submenuArrowImg[i].classList.remove('active-btn');
//     }
// }
// for (let i = 0; i < subMenuList.length; i++) {
//     subMenuList[i].onmouseover = function(){
//         sabmenuLinkColor.classList.add('hover_color');
//     }
//     subMenuList[i].onmouseout = function(){
//         sabmenuLinkColor.classList.remove('hover_color');
//     }
// }
// for (let i = 0; i < sabmenuLink2.length; i++) {
//     sabmenuLink2[i].onmouseover = function(){
//         linkUnderline[i].classList.add('underline');
//         linkUnderline[i].classList.add('bg-link');
//         podSubmenuList2[i].classList.add('menu__hidden-active');
//     }
//     sabmenuLink2[i].onmouseout = function(){
//         linkUnderline[i].classList.remove('underline');
//         linkUnderline[i].classList.remove('bg-link');
//         podSubmenuList2[i].classList.remove('menu__hidden-active');
//     }
// }
// ---------------

var _loop = function _loop(i) {
  mobileBtnUp[i].addEventListener('touchstart', function () {
    if (sabmenuLink[i].classList.contains('hover_color')) {
      sabmenuLink[i].classList.remove('hover_color');
    }

    btnArrowImg[i].classList.toggle('active-btn');
    podSubmenu[i].classList.toggle('hover_color');
    podSubmenu[i].classList.toggle('menu__hidden-active');
    submenuLink[i].classList.toggle('hover_color');
  });
};

for (var i = 0; i < mobileBtnUp.length; i++) {
  _loop(i);
}

var _loop2 = function _loop2(_i) {
  sabmenuLink[_i].addEventListener('touchstart', function () {
    console.log('sabmenuLink[i]: ', submenuBtnUp[_i]);

    submenuArrowImg[_i].classList.toggle('active-btn');

    podSubmenu[_i].classList.toggle('hover_color');

    podSubmenuList[_i].classList.toggle('menu__hidden-active');

    sabmenuLink[_i].classList.toggle('hover_color-2');
  });
};

for (var _i = 0; _i < sabmenuLink.length; _i++) {
  _loop2(_i);
}

var _loop3 = function _loop3(_i2) {
  submenuBtnUp[_i2].addEventListener('touchstart', function () {
    submenuArrowImg[_i2].classList.toggle('active-btn');

    podSubmenu[_i2].classList.toggle('hover_color');

    podSubmenuList[_i2].classList.toggle('menu__hidden-active');

    sabmenuLink[_i2].classList.toggle('hover_color-2');
  });
};

for (var _i2 = 0; _i2 < submenuBtnUp.length; _i2++) {
  _loop3(_i2);
} // -------------
// открытие под меню 3 уровня


sabmenuLink2.onmouseover = function () {
  podSubmenuList2.classList.add('menu__hidden-active');
};

sabmenuLink2.onmouseout = function () {
  podSubmenuList2.classList.remove('menu__hidden-active');
}; // картинки по ховеру


var productImg = document.querySelector('.product-img');
var itemNum1 = document.querySelector('.item-num-1');
var itemNum2 = document.querySelector('.item-num-2');
var itemNum3 = document.querySelector('.item-num-3');
var itemNum4 = document.querySelector('.item-num-4');
var itemNum5 = document.querySelector('.item-num-5');

itemNum1.onmouseover = function () {
  productImg.src = './img/jpg/img-hover1.jpg';
};

itemNum2.onmouseover = function () {
  productImg.src = './img/jpg/img-hover2.jpg';
};

itemNum3.onmouseover = function () {
  productImg.src = './img/jpg/img-hover3.jpg';
};

itemNum4.onmouseover = function () {
  productImg.src = './img/jpg/img-hover4.jpg';
};

itemNum5.onmouseover = function () {
  productImg.src = './img/jpg/img-hover5.jpg';
}; //  progress


var progress = document.querySelectorAll('.progress');
var counter = 0;

function changeProgress() {
  var bar = progress[counter];

  if (bar) {
    var percent = bar.querySelector('.percent');
    if (!bar.value) bar.value = +bar.getAttribute("value");
    if (!bar.max) bar.max = +bar.getAttribute("max");

    if (bar.value == bar.max) {
      counter++;
    }

    bar.value++;
    percent.innerHTML = Math.floor(bar.value / bar.max * 100);
    setTimeout(changeProgress, .2);
  }
}

$(".item-num-1").viewportChecker({
  callbackFunction: function callbackFunction() {
    changeProgress();
  }
});
var progressMin = document.querySelectorAll('.progress-min');
var counter2 = 0;

function changeProgress2() {
  var bar = progressMin[counter2];

  if (bar) {
    var percentMin = bar.querySelector('.percent-min');
    if (!bar.value) bar.value = +bar.getAttribute("value");
    if (!bar.max) bar.max = +bar.getAttribute("max");

    if (bar.value == bar.max) {
      counter2++;
    }

    bar.value++;
    percentMin.innerHTML = Math.floor(bar.value / bar.max * 100);
    setTimeout(changeProgress2, .01);
  }
}

$(".intro__wrapper").viewportChecker({
  callbackFunction: function callbackFunction() {
    changeProgress2();
  }
}); // swiper

var swiper = new Swiper('.swiper-container', {
  // Optional parameters
  slidesPerView: 2.6,
  spaceBetween: 20,
  loop: true,
  // autoplay: {
  //     delay: 4000
  // }, 
  speed: 2000,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    type: "fraction",
    formatFractionCurrent: addZero,
    formatFractionTotal: addZero,
    renderFraction: function renderFraction(currentClass, totalClass) {
      return '<span class="' + currentClass + '"></span>' + ' <span>-</span> ' + '<span class="' + totalClass + '"></span>';
    }
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar'
  },
  breakpoints: {
    320: {
      slidesPerView: 1
    },
    780: {
      slidesPerView: 1.6,
      spaceBetween: 40
    },
    950: {
      slidesPerView: 1.7,
      spaceBetween: 20
    },
    1360: {
      slidesPerView: 2.2,
      spaceBetween: 50
    },
    1520: {
      slidesPerView: 2.3,
      spaceBetween: 20
    },
    1620: {
      slidesPerView: 2.6,
      spaceBetween: 20
    }
  }
});

function addZero(num) {
  return num > 9 ? num : '0' + num;
} // анимация блоков с статусбарами


var animItems = document.querySelectorAll('._anim-items');

if (animItems.length > 0) {
  var animOnScroll = function animOnScroll() {
    for (var _i3 = 0; _i3 < animItems.length; _i3++) {
      var animItem = animItems[_i3];
      var animItemHeight = animItem.offsetHeight;
      var animItemOffset = offset(animItem).top;
      var animStart = 4;
      var animItemPoint = window.innerHeight - animItemHeight / animStart;

      if (animItemHeight > window.innerHeight) {
        animItemPoint = window.innerHeight - window.innerHeight / animStart;
      }

      if (pageYOffset > animItemOffset - animItemPoint && pageYOffset < animItemOffset + animItemHeight) {
        animItem.classList.add('_active');
      }
    }
  };

  var offset = function offset(el) {
    var rect = el.getBoundingClientRect(),
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return {
      top: rect.top + scrollTop
    };
  };

  window.addEventListener('scroll', animOnScroll);
  setTimeout(function () {
    animOnScroll();
  }, 300);
}

;