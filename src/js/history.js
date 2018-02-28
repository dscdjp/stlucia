///////////////////////////////////////////////////////////
//
//   トップページ用JS
//   作成者：Comdesign
//   作成日：2018/1/15
//
///////////////////////////////////////////////////////////



//---------------------------------------------------------
// 必要ファイルインポート
//---------------------------------------------------------

//import './_jquery-global.js';
import cmn from './_common.js';
import slick from 'slick-carousel';


//---------------------------------------------------------
// Document ready
//---------------------------------------------------------

$(() => {
	
	// slick
    $('.fv-slider').slick({
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		dotsClass: 'slide-dots',
		fade: true,
		pauseOnHover: false,
		speed: 3000
	});
	
	$('.main-contents-slider').slick({
		arrows: false,
		autoplay: true,
		autoplaySpeed: 0,
		cssEase: 'linear',
		dots: false,
		pauseOnFocus: false,
		pauseOnHover: false,
		respondTo: 'window',
		responsive: [
			{
				breakpoint: 580,
				settings: {
					speed: 18000,
					slidesToShow: 1,
					swipe: true,
					swipeToSlide: true
				}
			}
		],
		speed: 8000,
		slidesToShow: 5,
		slidesToScroll: 1
	});
	
	// 新着情報タブ
	$(window).on('load', () => {
		$('.news-tab li a').on('click', (e) => {
			e.preventDefault();
			let btnElm = $(e.currentTarget);
			if(btnElm.hasClass('active')){
				return false;
			}else{
				let tgtID = btnElm.attr('href');
				$('.news-main > div.active').fadeOut(500, () => {
					$('.news-main > div.active').removeClass('active');
					$(tgtID).fadeIn(500).addClass('active');
				});
				$('.news-tab li a').removeClass('active');
				btnElm.addClass('active');
			}
		});
	});
});