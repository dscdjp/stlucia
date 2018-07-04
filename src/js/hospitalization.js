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

import './_jquery-global.js';
import 'bootstrap/dist/js/bootstrap.bundle.js';
import cmn from './_common.js';
import slick from 'slick-carousel';


//---------------------------------------------------------
// Document ready
//---------------------------------------------------------

$(() => {
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
				breakpoint: 767,
				settings: {
//					speed: 18000,
					slidesToShow: 2,
					swipe: true,
					swipeToSlide: true
				}
			}
		],
		speed: 8000,
		slidesToShow: 4,
		slidesToScroll: 1
	});
	
});