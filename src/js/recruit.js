///////////////////////////////////////////////////////////
//
//   求人案内用JS
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
	
	// 新着情報タブ
	$(window).on('load', () => {
		$('.job-tab li a').on('click', (e) => {
			e.preventDefault();
			let btnElm = $(e.currentTarget);
			if(btnElm.hasClass('active')){
				return false;
			}else{
				let tgtID = btnElm.attr('href');
				$('.job-main > div.active').fadeOut(500, () => {
					$('.job-main > div.active').removeClass('active');
					$(tgtID).fadeIn(500).addClass('active');
				});
				$('.job-tab li a').removeClass('active');
				btnElm.addClass('active');
			}
		});
	});
});