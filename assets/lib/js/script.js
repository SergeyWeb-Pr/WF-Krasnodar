//Добавление классов меню

function classesMenu() {
    const submenuLi = document.querySelectorAll('.submenu>li'),
        submenuLiA = document.querySelectorAll('.submenu>li>a'),
        submenuLiUl = document.querySelectorAll('.submenu>li>ul'),
        submenuLiUlLi = document.querySelectorAll('.submenu>li>ul>li'),
        submenuLiUlLiA = document.querySelectorAll('.submenu>li>ul>li>a'),
        submenuLiUlLiUl = document.querySelectorAll('.submenu>li>ul>li>ul'),
        submenuLiUlLiUlLi = document.querySelectorAll('.submenu>li>ul>li>ul>li'),
        submenuLiUlLiUlLiA = document.querySelectorAll('.submenu>li>ul>li>ul>li>a'),
        submenuLiUlLiUlLiUl = document.querySelectorAll('.submenu>li>ul>li>ul>li>ul'),
        submenuLiUlLiUlLiUlLi = document.querySelectorAll('.submenu>li>ul>li>ul>li>ul>li'),
        submenuLiUlLiUlLiUlLiA = document.querySelectorAll('.submenu>li>ul>li>ul>li>ul>li>a');

    submenuLi.forEach(item => {
        item.classList.add('submenu__list');
    });

    submenuLiA.forEach(item => {
        item.classList.add('submenu__link');
        item.classList.add('submenu__link_li_a');
    });

    submenuLiUl.forEach(item => {
        item.classList.add('pod_submenu');
    });

    submenuLiUlLi.forEach(item => {
        item.classList.add('pod_submenu-link');
        item.classList.add('submenu__link-list');
    });

    submenuLiUlLiA.forEach(item => {
        item.classList.add('sabmenu__link');
        item.classList.add('sabmenu__link-color');
        item.classList.add('sabmenu__link_two');
    });

    submenuLiUlLiUl.forEach(item => {
        item.classList.add('pod_submenu-list');
    });

    submenuLiUlLiUlLi.forEach(item => {
        item.classList.add('sabmenu__link');
        item.classList.add('sabmenu__link-2');
        item.classList.add('pod_submenu-list-link');
    });

    submenuLiUlLiUlLiA.forEach(item => {
        item.classList.add('sabmenu__link');
        item.classList.add('sabmenu__link_three');
    });

    submenuLiUlLiUlLiUl.forEach(item => {
        item.classList.add('pod_submenu-list-2');
    });

    submenuLiUlLiUlLiUlLi.forEach(item => {
        item.classList.add('sabmenu__link');
        item.classList.add('sabmenu__link_five');
    });

    submenuLiUlLiUlLiUlLiA.forEach(item => {
        item.classList.add('sabmenu__link');
        item.classList.add('sabmenu__link_four');
    });
}

classesMenu();


const submenu = document.querySelector('.submenu');
const subMenu = document.querySelectorAll('.sub-menu');
const allHidden = document.querySelector('.all_hidden');
const submenuLi = document.querySelectorAll('.submenuLi');
const headerBtn = document.querySelector('.header__info');
const lineMenu2 = document.querySelector('.line-menu--2');
const lineMenu1 = document.querySelector('.line-menu--1');
const menuCloset = document.querySelector('.menu__closet');
const menuHidden = document.querySelector('.menu__hidden');
const headerText = document.querySelector('.header__title');
const wrapperMenu = document.querySelector('.wrapper-menu');
const navMenuBtn = document.querySelector('.nav__menu-btn');
const podSubmenu = document.querySelectorAll('.pod_submenu');
const submenuLink = document.querySelectorAll('.submenu__link');
const submenuHeight = document.querySelector('.submenu-height');
const sabmenuLink = document.querySelectorAll('.sabmenu__link');
const submenuList = document.querySelectorAll('.submenu__list');
const menuItem23Ul = document.querySelector('#menu-item-23>ul');
const mobileBtnUp = document.querySelectorAll('.mobile-btn--up');
const btnArrowImg = document.querySelectorAll('.btn-arrow--img');
const menuHiddenBtn = document.querySelector('.menu__hidden-btn');
const sabmenuLink2 = document.querySelectorAll('.sabmenu__link-2');
const submenuBtnUp = document.querySelectorAll('.submenu-btn--up');
const linkUnderline = document.querySelectorAll('.link_underline');
const menuHiddenNone = document.querySelector('.menu__hidden-none');
const headerNavFixed = document.querySelector('.header-nav--fixed');
const subMenuList = document.querySelectorAll('.submenu__link-list');
const podSubmenuList = document.querySelectorAll('.pod_submenu-list');
const sabmenuLinkTwo = document.querySelectorAll('.sabmenu__link_two');
const submenuLinkLiA = document.querySelectorAll('.submenu__link_li_a');
const podSubmenuList2 = document.querySelectorAll('.pod_submenu-list-2');
const submenuArrowImg = document.querySelectorAll('.submenu-arrow--img');
const navMenuBtnMobile = document.querySelector('.nav__menu-btn--mobile');
const activeAfterThree = document.querySelectorAll('.active_after_three');
const sabmenuLinkThree = document.querySelectorAll('.sabmenu__link_three');
const sabmenuLinkColor = document.querySelectorAll('.sabmenu__link-color');



function toogleMenu() {
    menuHidden.classList.toggle('start_menu-active');
    navMenuBtnMobile.classList.toggle('start_menu-active');
    headerText.classList.toggle('dis-none');
    headerBtn.classList.toggle('dis-none');
    document.querySelector('body').classList.toggle('header-nav--fixed');
};

menuCloset.addEventListener('click', (e) => {
    subMenu.forEach((el, indOne) => {
        el.classList.remove('show');
        el.classList.remove('flex');
    });
})

navMenuBtn.addEventListener('click', toogleMenu);
menuHiddenBtn.addEventListener('click', toogleMenu);

const menu = () => {

    const menuPC = () => {

        if (document.documentElement.clientHeight <= 870) {
            subMenu.forEach(item => {
                item.style.height = '90vh';
                item.style.overflow = 'scroll';
            })
            menuHidden.style.paddingTop = '40px';
            menuItem23Ul.style.marginTop = '-60px'
        }
        sabmenuLinkTwo.forEach(item => {
            let div = document.createElement('span');
            div.className = 'active_after';
            if (item.nextSibling) {
                item.after(div);
            }
            // наведения на 1 уровень и открытие 2 уровня
            submenuLink.forEach((elem, ind) => {
                elem.addEventListener('mouseover', (e) => {
                    submenuLink.forEach(el => {
                        el.classList.remove('hover_color');
                        el.style.color = '#000';
                    });
                    subMenu.forEach((el, indOne) => {
                        el.classList.remove('show');
                        el.classList.remove('flex');
                    });

                    sabmenuLinkTwo.forEach(el => {
                        el.style.color = '#000';
                        item.classList.remove('oke')
                    });
                    sabmenuLinkThree.forEach(el => {
                        el.style.borderBottom = '0px solid #000'
                        el.classList.remove('oke');
                    });
                    div.classList.remove('active');
                    div.classList.remove('active_two');
                    div.classList.remove('okei');
                    div.classList.remove('oke');
                    e.target.classList.add('hover_color');
                    e.target.style.color = '#B796F5';
                    e.target.nextSibling.nextSibling.classList.add('show');
                    if (ind == 7) {
                        e.target.nextSibling.nextSibling.classList.add('flex');
                    }

                });
            });

            // наведения на 2 уровень
            item.addEventListener('mouseover', (e) => {
                if (!div.classList.contains('active')) {
                    e.target.style.color = '#B796F5';
                    div.classList.add('active_two');
                }
            });
            item.addEventListener('mouseout', (e) => {
                if (!div.classList.contains('active')) {
                    e.target.style.color = '#000';
                    div.classList.remove('active_two');
                }
            });

            //открытие 3 уровня
            item.addEventListener('click', (e) => {
                if (!e.target.classList.contains('oke')) {
                    const activeAfter = document.querySelectorAll('.active_after ');

                    activeAfter.forEach(item => {
                        item.classList.remove('active');
                        item.classList.remove('active_two');
                    });
                    sabmenuLinkThree.forEach(el => {
                        el.style.borderBottom = '0px solid #000'
                        el.classList.remove('oke');
                    });
                    podSubmenuList.forEach(elem => {
                        elem.classList.remove('show');
                    });
                    podSubmenuList2.forEach(elem => {
                        elem.classList.remove('show');
                    });
                    sabmenuLinkTwo.forEach(el => {
                        el.style.color = '#000';
                        el.classList.remove('oke');
                    });

                    e.target.style.color = '#B796F5';
                    e.target.classList.add('oke')
                    div.classList.add('active');
                    div.nextSibling.nextSibling.classList.add('show');
                } else {
                    e.target.classList.remove('oke');
                }
                if (e.target.classList.contains('oke')) {
                    e.preventDefault();
                }
            });

            //Закрытие 3 уровня
            div.addEventListener('click', (e) => {
                const activeAfter = document.querySelectorAll('.active_after ');
                activeAfter.forEach(item => {
                    item.classList.remove('active');
                    item.classList.remove('active_two');
                });
                podSubmenuList.forEach(elem => {
                    elem.classList.remove('show');
                });
                sabmenuLinkThree.forEach(el => {
                    el.style.borderBottom = '0px solid #000'
                    el.classList.remove('oke');
                });
                podSubmenuList2.forEach(elem => {
                    elem.classList.remove('show');
                });
                sabmenuLinkTwo.forEach(el => {
                    el.style.color = '#000';
                    el.classList.remove('oke');
                });
            });
        });

        //открытие 4 уровня
        sabmenuLinkThree.forEach(itemOne => {
            let divOne = document.createElement('span');
            divOne.className = 'active_after_two';
            if (itemOne.nextSibling) {
                itemOne.after(divOne);
            }

            itemOne.addEventListener('click', (e) => {
                if (!e.target.classList.contains('oke')) {
                    podSubmenuList2.forEach(elem => {
                        elem.classList.remove('show');
                    });
                    sabmenuLinkThree.forEach(el => {
                        el.classList.remove('oke');
                        el.style.borderBottom = '0px solid #000'
                    });
                    e.target.style.borderBottom = '1px solid #000'
                    e.target.classList.add('oke')
                    divOne.classList.add('active');
                    divOne.nextSibling.nextSibling.classList.add('show');
                } else {
                    e.target.classList.remove('oke');
                }
                if (e.target.classList.contains('oke')) {
                    e.preventDefault();
                }
            });

            //Закрытие 4 уровня
            divOne.addEventListener('click', (e) => {
                podSubmenuList2.forEach(elem => {
                    elem.classList.remove('show');
                });
                sabmenuLinkThree.forEach(el => {
                    el.style.borderBottom = '0px solid #000'
                    el.classList.remove('oke');
                });
            });

        });
    }
    if (document.documentElement.clientWidth >= 931) {
        menuPC();
    }

    const menuMob = () => {

        menuCloset.addEventListener('click', (e) => {
            submenuList.forEach(item => {
                item.style.display = 'block';
            });
            submenuLinkLiA.forEach(item => {
                item.classList.remove('active');
            });
            headerNavFixed.style.overflow = 'initial';
        });

        submenuLinkLiA.forEach((itemOne, ind) => {
            if (ind === 7) return;

            let div = document.createElement('span');
            div.className = 'active_after_three';
            itemOne.after(div);
            const activeAfterThree = document.querySelectorAll('.active_after_three');

            menuCloset.addEventListener('click', (e) => {
                div.classList.remove('active');
                div.classList.remove('okei');
                div.classList.remove('oke');
            });

            wrapperMenu.addEventListener('click', () => {
                allHidden.classList.add('hidden');
                menuHidden.classList.toggle('start_menu-active');
                menuHidden.classList.add('hidden_prov');
                headerText.classList.toggle('dis-none');
                headerBtn.classList.toggle('dis-none');
                html.style.overflow = 'initial';

                document.querySelector('body').classList.toggle('header-nav--fixed');
                if (menuHidden.classList.contains('hidden_prov')) {
                    submenuList.forEach(item => {
                        item.style.display = 'block';
                    });
                    submenuLinkLiA.forEach(item => {
                        item.classList.remove('active');
                    });
                    podSubmenu.forEach(item => {
                        item.classList.remove('show');
                    });
                    div.classList.remove('active');
                    div.classList.remove('okei');
                    div.classList.remove('oke');

                }
            });

            menuCloset.addEventListener('click', (e) => {
                allHidden.classList.remove('hidden');
            });

            div.addEventListener('click', (e) => {
                e.target.classList.add('oke');
                submenuList.forEach(item => {
                    item.style.display = 'none';
                });
                if (e.target.classList.contains('okei')) {
                    e.target.classList.remove('oke');
                    e.target.classList.remove('active');
                }

                if (e.target.classList.contains('okei')) {
                    e.target.nextSibling.nextSibling.classList.remove('show');
                    e.target.classList.remove('okei');
                    e.target.previousSibling.classList.remove('active');
                    submenuList.forEach(item => {
                        item.style.display = 'block';
                    });
                    podSubmenuList.forEach(item => {
                        item.classList.remove('show');
                    });
                    sabmenuLinkTwo.forEach(item => {
                        item.nextSibling.classList.remove('okei');
                        item.nextSibling.classList.remove('oke');
                        item.nextSibling.classList.remove('active');
                    });
                }

                if (e.target.classList.contains('oke')) {
                    e.target.nextSibling.nextSibling.classList.add('show');
                    e.target.classList.add('okei');
                    e.target.classList.add('active');
                    e.target.style.display = 'block';
                    e.target.previousSibling.classList.add('active');
                    e.target.parentNode.style.display = 'block';

                }
            });
        });

        sabmenuLinkTwo.forEach(item => {
            let div = document.createElement('span');
            div.className = 'active_after_two';
            if (item.nextSibling) {
                item.after(div);
            }
            div.addEventListener('click', (e) => {
                e.target.classList.add('oke');

                if (e.target.classList.contains('okei')) {
                    e.target.classList.remove('oke');
                    e.target.classList.remove('active');
                }

                if (e.target.classList.contains('okei')) {
                    e.target.nextSibling.nextSibling.classList.remove('show');
                    e.target.classList.remove('okei');
                    e.target.previousSibling.classList.remove('active');
                    podSubmenuList2.forEach(item => {
                        item.classList.remove('show');
                    });
                    sabmenuLinkThree.forEach(item => {
                        item.nextSibling.classList.remove('okei');
                        item.nextSibling.classList.remove('oke');
                        item.nextSibling.classList.remove('active');
                    });
                }

                if (e.target.classList.contains('oke')) {
                    e.target.nextSibling.nextSibling.classList.add('show');
                    e.target.classList.add('okei');
                    e.target.classList.add('active');
                    e.target.previousSibling.classList.add('active');
                    e.target.parentNode.style.display = 'block';

                }
            });
        });

        sabmenuLinkThree.forEach(item => {
            let div = document.createElement('span');
            div.className = 'active_after_four';
            if (item.nextSibling) {
                item.after(div);
            }
            div.addEventListener('click', (e) => {
                e.target.classList.add('oke');
                if (e.target.classList.contains('okei')) {
                    e.target.classList.remove('oke');
                    e.target.classList.remove('active');
                }

                if (e.target.classList.contains('okei')) {
                    e.target.nextSibling.nextSibling.classList.remove('show');
                    e.target.classList.remove('okei');
                    e.target.previousSibling.classList.remove('active');
                }

                if (e.target.classList.contains('oke')) {
                    e.target.nextSibling.nextSibling.classList.add('show');
                    e.target.classList.add('okei');
                    e.target.classList.add('active');
                    e.target.previousSibling.classList.add('active');
                    e.target.parentNode.style.display = 'block';

                }
            });
        });

    }

    if (document.documentElement.clientWidth <= 930) {
        menuMob();
    }
}

menu();

// // картинки по ховеру

const imgHover = () => {
    const productImg = document.querySelectorAll('.product-img');
    const productImg1 = document.querySelector('.product-img_1');
    const productImg2 = document.querySelector('.product-img_2');
    const productImg3 = document.querySelector('.product-img_3');
    const productImg4 = document.querySelector('.product-img_4');
    const productImg5 = document.querySelector('.product-img_5');
    const itemNum = document.querySelectorAll('.product__list_item');
    const productListItemTextProgressGrad = document.querySelectorAll('.product__list_item_text_progress_grad');
    const productListItemTextProgressGradOne = document.querySelector('.product__list_item_text_progress_grad_one');
    const productListItemTextProgressGradTwo = document.querySelector('.product__list_item_text_progress_grad_two');
    const productListItemTextProgressGradThree = document.querySelector('.product__list_item_text_progress_grad_three');
    const productListItemTextProgressGradFour = document.querySelector('.product__list_item_text_progress_grad_four');
    const productListItemTextProgressGradFive = document.querySelector('.product__list_item_text_progress_grad_five');
    const itemNum1 = document.querySelector('.item-num-1');
    const itemNum2 = document.querySelector('.item-num-2');
    const itemNum3 = document.querySelector('.item-num-3');
    const itemNum4 = document.querySelector('.item-num-4');
    const itemNum5 = document.querySelector('.item-num-5');

    function prov(one, two, three, four) {
        productListItemTextProgressGrad.forEach(item => {
            item.style.animation = 'none';
        });
        itemNum.forEach(item => {
            item.classList.remove('active')
        });
        productImg.forEach(item => {
            item.classList.remove('active')
        });
        four.style.animation = "product_progress_one ease-out 5s forwards";
        itemNum.forEach(item => {
            item.classList.remove('active');
        })
        productImg.forEach(el => {
            el.classList.remove('active');
        })
        two.classList.add('active');
        three.classList.add('active');
    }



    const framesImg = () => {
        timerOne = setTimeout(() => {
            productListItemTextProgressGradOne.style.animation = 'product_progress linear 25s infinite'
            itemNum5.classList.remove('active');
            itemNum1.classList.add('active');
            productImg5.classList.remove('active');
            productImg1.classList.add('active');
            itemNum1.classList.add('one');
            intervalOne = setInterval(() => {
                productListItemTextProgressGradOne.style.animation = 'product_progress linear 25s infinite'
                itemNum5.classList.remove('active');
                itemNum1.classList.add('active');
                productImg5.classList.remove('active');
                productImg1.classList.add('active');
            }, 25000);
        }, 0);
        timerTwo = setTimeout(() => {
            productListItemTextProgressGradTwo.style.animation = 'product_progress linear 25s infinite'
            itemNum1.classList.remove('active');
            itemNum2.classList.add('active');
            productImg1.classList.remove('active');
            productImg2.classList.add('active');
            itemNum2.classList.add('two');
            intervalTwo = setInterval(() => {
                productListItemTextProgressGradTwo.style.animation = 'product_progress linear 25s infinite'
                itemNum1.classList.remove('active');
                itemNum2.classList.add('active');
                productImg1.classList.remove('active');
                productImg2.classList.add('active');
            }, 25000);
        }, 5000);
        timerThree = setTimeout(() => {
            productListItemTextProgressGradThree.style.animation = 'product_progress linear 25s infinite'
            itemNum2.classList.remove('active');
            itemNum3.classList.add('active');
            productImg2.classList.remove('active');
            productImg3.classList.add('active');
            itemNum3.classList.add('three');
            intervalThree = setInterval(() => {
                itemNum3.classList.add('three');
                productListItemTextProgressGradThree.style.animation = 'product_progress linear 25s infinite'
                itemNum2.classList.remove('active');
                itemNum3.classList.add('active');
                productImg2.classList.remove('active');
                productImg3.classList.add('active');
            }, 25000);
        }, 10000);
        timerFour = setTimeout(() => {
            productListItemTextProgressGradFour.style.animation = 'product_progress linear 25s infinite'
            itemNum3.classList.remove('active');
            itemNum4.classList.add('active');
            productImg3.classList.remove('active');
            productImg4.classList.add('active');
            itemNum4.classList.add('four');
            intervalFour = setInterval(() => {
                itemNum4.classList.add('four');
                productListItemTextProgressGradFour.style.animation = 'product_progress linear 25s infinite'
                itemNum3.classList.remove('active');
                itemNum4.classList.add('active');
                productImg3.classList.remove('active');
                productImg4.classList.add('active');
            }, 25000);
        }, 15000);
        timerFive = setTimeout(() => {
            productListItemTextProgressGradFive.style.animation = 'product_progress linear 25s infinite'
            itemNum4.classList.remove('active');
            itemNum5.classList.add('active');
            productImg4.classList.remove('active');
            productImg5.classList.add('active');
            itemNum5.classList.add('five');
            intervalFive = setInterval(() => {
                itemNum5.classList.add('five');
                productListItemTextProgressGradFive.style.animation = 'product_progress linear 25s infinite'
                itemNum4.classList.remove('active');
                itemNum5.classList.add('active');
                productImg4.classList.remove('active');
                productImg5.classList.add('active');
            }, 25000);
        }, 20000);
    }

    framesImg();


    itemNum.forEach(elem => {
        elem.addEventListener('mouseover', (e) => {
            if (itemNum1.classList.contains('one')) {
                clearInterval(intervalOne);
            }
            if (itemNum2.classList.contains('two')) {
                clearInterval(intervalTwo);
            }
            if (itemNum3.classList.contains('three')) {
                clearInterval(intervalThree);
            }
            if (itemNum4.classList.contains('four')) {
                clearInterval(intervalFour);
            }
            if (itemNum5.classList.contains('five')) {
                clearInterval(intervalFive);
            }
            clearTimeout(timerOne);
            clearTimeout(timerTwo);
            clearTimeout(timerThree);
            clearTimeout(timerFour);
            clearTimeout(timerFive);
            if (e.target.classList.contains('product__list_item_one')) {
                prov(0, productImg1, itemNum1, productListItemTextProgressGradOne);
            } else if (e.target.classList.contains('product__list_item_two')) {
                prov(1, productImg2, itemNum2, productListItemTextProgressGradTwo);
            } else if (e.target.classList.contains('product__list_item_three')) {
                prov(2, productImg3, itemNum3, productListItemTextProgressGradThree);
            } else if (e.target.classList.contains('product__list_item_four')) {
                prov(3, productImg4, itemNum4, productListItemTextProgressGradFour);
            } else if (e.target.classList.contains('product__list_item_five')) {
                prov(4, productImg5, itemNum5, productListItemTextProgressGradFive);
            }
        });
        elem.addEventListener('mouseout', (e) => {
            productListItemTextProgressGrad.forEach(item => {
                item.style.animation = 'none';
            });
            itemNum.forEach(item => {
                item.classList.remove('active')
            });
            productImg.forEach(item => {
                item.classList.remove('active')
            });
            framesImg();
        });
    });
}

const productList = document.querySelector('.product__list');
let box = productList.getBoundingClientRect();
let isRun = false;
window.addEventListener('scroll', () => {

    if (window.pageYOffset >= box.top - document.documentElement.clientHeight + 250 && !isRun) {
        imgHover()
        isRun = true;
    }
});






//  progress

let progress = document.querySelectorAll('.progress');
let counter = 0

function changeProgress() {
    let bar = progress[counter]
    if (bar) {
        let percent = bar.querySelector('.percent');
        if (!bar.value) bar.value = +bar.getAttribute("value");
        if (!bar.max) bar.max = +bar.getAttribute("max");

        if (bar.value == bar.max) {
            counter++
        }

        bar.value++
        percent.innerHTML = Math.floor(bar.value / bar.max * 100);

        setTimeout(changeProgress, .2);

    }
}

$(".item-num-1").viewportChecker({
    callbackFunction: function () {
        changeProgress();
    }
});

let progressMin = document.querySelectorAll('.progress-min');
let counter2 = 0

function changeProgress2() {
    let bar = progressMin[counter2]
    if (bar) {
        let percentMin = bar.querySelector('.percent-min');
        if (!bar.value) bar.value = +bar.getAttribute("value");
        if (!bar.max) bar.max = +bar.getAttribute("max");

        if (bar.value == bar.max) {
            counter2++
        }

        bar.value++
        percentMin.innerHTML = Math.floor(bar.value / bar.max * 100);

        setTimeout(changeProgress2, .01);

    }
}

$(".intro__wrapper").viewportChecker({
    callbackFunction: function () {
        changeProgress2();
    }
});


// swiper

const swiper = new Swiper('.swiper-container', {
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

        renderFraction: function (currentClass, totalClass) {
            return '<span class="' + currentClass + '"></span>' + ' <div class="slider_revies_numer_dash_two"></div> ' + '<span class="' + totalClass + '"></span>';
        }
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        780: {
            slidesPerView: 1.6,
            spaceBetween: 40,
        },
        950: {
            slidesPerView: 1.7,
            spaceBetween: 20,
        },
        1360: {
            slidesPerView: 2.2,
            spaceBetween: 50,
        },
        1520: {
            slidesPerView: 2.3,
            spaceBetween: 20,
        },
        1620: {
            slidesPerView: 2.6,
            spaceBetween: 20,
        },
    }
});

if (document.documentElement.clientWidth > 930) {
    const swiperOne = new Swiper('.swiper', {
        effect: 'cards',
        grabCursor: true,


        pagination: {
            el: '.swiper-pagination-two',
            type: "fraction",
            formatFractionCurrent: addZero,
            formatFractionTotal: addZero,

            renderFraction: function (currentClass, totalClass) {
                return '<span class="' + currentClass + '"></span>' + ' <div class="slider_revies_numer_dash"></div> ' + '<span class="' + totalClass + '"></span>';
            }
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
} else {
    const swiperOne = new Swiper('.swiper', {
        effect: 'cards',
        grabCursor: true,

        pagination: {
            el: '.swiper-pagination-two_two',
            type: "fraction",
            formatFractionCurrent: addZero,
            formatFractionTotal: addZero,

            renderFraction: function (currentClass, totalClass) {
                return '<span class="' + currentClass + '"></span>' + ' <div class="slider_revies_numer_dash"></div> ' + '<span class="' + totalClass + '"></span>';
            }
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}

// if (document.documentElement.clientWidth > 930) {
//     const swiperTwo = new Swiper('.slider_reviews_left_bottom', {
//         effect: 'cards',
//         grabCursor: true,


//         pagination: {
//             el: '.swiper-pagination-two',
//             type: "fraction",
//             formatFractionCurrent: addZero,
//             formatFractionTotal: addZero,

//             renderFraction: function (currentClass, totalClass) {
//                 return '<span class="' + currentClass + '"></span>' + ' <div class="slider_revies_numer_dash"></div> ' + '<span class="' + totalClass + '"></span>';
//             }
//         },

//         // Navigation arrows
//         navigation: {
//             nextEl: '.swiper-button-next',
//             prevEl: '.swiper-button-prev',
//         },
//     });
// } else {
//     const swiperTwo = new Swiper('.slider_reviews_left_bottom', {
//         effect: 'cards',
//         grabCursor: true,

//         pagination: {
//             el: '.swiper-pagination-two_two',
//             type: "fraction",
//             formatFractionCurrent: addZero,
//             formatFractionTotal: addZero,

//             renderFraction: function (currentClass, totalClass) {
//                 return '<span class="' + currentClass + '"></span>' + ' <div class="slider_revies_numer_dash"></div> ' + '<span class="' + totalClass + '"></span>';
//             }
//         },

//         // Navigation arrows
//         navigation: {
//             nextEl: '.swiper-button-next',
//             prevEl: '.swiper-button-prev',
//         },
//     });
// }

function addZero(num) {
    return (num > 9) ? num : '0' + num;
}

// анимация блоков с статусбарами

let animItems = document.querySelectorAll('._anim-items');

if (animItems.length > 0) {
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll() {
        for (let i = 0; i < animItems.length; i++) {
            const animItem = animItems[i];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 4;

            let animItemPoint = window.innerHeight - animItemHeight / animStart;

            if (animItemHeight > window.innerHeight) {
                animItemPoint = window.innerHeight - window.innerHeight / animStart;
            }

            if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
                animItem.classList.add('_active');
            }
        }
    }

    function offset(el) {
        const rect = el.getBoundingClientRect(),
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return { top: rect.top + scrollTop }
    }

    setTimeout(() => {
        animOnScroll();
    }, 300);
};

const form = () => {
    const formButton = document.querySelector('.form-button'),
        formName = document.querySelector('.form_name '),
        formPhone = document.querySelector('.form-phone'),
        formMail = document.querySelector('.form-mail'),
        formtext = document.querySelector('.form_text'),
        errorName = document.querySelector('.error_name'),
        errorPhone = document.querySelector('.error_phone'),
        errorEmail = document.querySelector('.error_email'),
        errorPhoneTwo = document.querySelector('.error_phone_two'),
        errorText = document.querySelector('.error_text');

    formPhone.addEventListener('click', (e) => {
        if (e.target.value.length <= 1) {
            e.target.value = "+";
        }
    });
    document.addEventListener('click', (e) => {
        if (!e.target.classList.contains('form-phone')) {
            if (formPhone.value.length <= 1) {
                formPhone.value = '';
            }
        }
    });



    formButton.addEventListener('click', (e) => {

        if (formName.value.length == 0) {
            errorName.style.display = 'block';
            e.preventDefault();
        } else {
            errorName.style.display = 'none';
        }

        if (formPhone.value.length == 0) {
            errorPhone.style.display = 'block';
            e.preventDefault();
        } else {
            errorPhone.style.display = 'none';
        }

        if (formMail.value.length == 0) {
            errorEmail.style.display = 'block';
            e.preventDefault();
        } else {
            errorEmail.style.display = 'none';
        }

        if (formtext.value.length == 0) {
            errorText.style.display = 'block';
            e.preventDefault();
        } else {
            errorText.style.display = 'none';
        }



        function ValidMail() {
            let re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
            const myMail = document.querySelector('.form-mail').value;
            let valid = re.test(myMail);
            if (!valid && formMail.value.length >= 1) {
                errorPhoneTwo.style.display = 'block';
            } else {
                errorPhoneTwo.style.display = 'none';
            }
            return valid;
        }
        ValidMail();



    });
}

form()

