let nav = document.querySelector('nav');
let inp = document.querySelector('.search_field');
let search__box = document.querySelector('.search__box');
let search__form = document.querySelector('.search__form');
let search__btn = document.querySelector('.search__btn');
// let cat_slider = document.querySelector('.category__items');
let oldScrollTopPosition = 0;
window.addEventListener('scroll', () => {
	const scrollTopPosition = document.documentElement.scrollTop;
	if( 0 <scrollTopPosition){
        nav.classList.add('black');
    }else{
        nav.classList.remove('black');
    };
});
search__btn.addEventListener('click',()=>{
    var trimInp = inp.value.replace(/^\s+|\s+$|[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'');
    if(trimInp == ''){
        alert('search field is empty or invalid input');
    }else{
        inp.value=trimInp;
        search__form.setAttribute('action','search_res.php');
    }

});

inp.addEventListener('focusin',()=>{
    search__box.classList.add('focused');
});
inp.addEventListener('focusout',()=>{
    search__box.classList.remove('focused');
});

$(function(){
    $('.category__items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button type="button" class="slick-btn slick-prev"><img src="images/arrow-left.svg" alt="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-btn slick-next"><img src="images/arrow-right.svg" alt="slick-next"></button>',
      });

    // $('.new-product__items').slick({
    //     slidesToShow: 4,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 2000,
    //     prevArrow: '<button type="button" class="slick-btn slick-prev"><img src="images/arrow-left.svg" alt="slick-prev"></button>',
    //     nextArrow: '<button type="button" class="slick-btn slick-next"><img src="images/arrow-right.svg" alt="slick-next"></button>',
    //   });

    

    
});
