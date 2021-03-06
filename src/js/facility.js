///////////////////////////////////////////////////////////
//
//   施設案内用JS
//   作成者：Comdesign
//   作成日：2018/1/15
//
///////////////////////////////////////////////////////////



//---------------------------------------------------------
// 必要ファイルインポート
//---------------------------------------------------------

//import './_jquery-global.js';
import cmn from './_common.js';


//---------------------------------------------------------
// Document ready
//---------------------------------------------------------

$(() => {
	// 施設切り替えタブ
	$(window).on('load', () => {
		$('.facility-map-tab li a').on('click', (e) => {
			e.preventDefault();
			let btnElm = $(e.currentTarget);
			if(btnElm.hasClass('active')){
				return false;
			}else{
				let tgtID = btnElm.attr('href');
				$('.facility-main > div.active').fadeOut(500, () => {
					$('.facility-main > div.active').removeClass('active');
					$(tgtID).fadeIn(500).addClass('active');
				});
				$('.facility-map-tab li a').removeClass('active');
				btnElm.addClass('active');
			}
		});
	});
});