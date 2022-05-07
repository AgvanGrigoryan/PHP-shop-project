let nav = document.querySelector('nav');
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

$(function(){
    $('.category__items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button type="button" class="slick-btn slick-prev"><img src="images/arrow-left.svg" alt="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-btn slick-next"><img src="images/arrow-right.svg" alt="slick-next"></button>',
      });


});
