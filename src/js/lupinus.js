///////////////////////////////////////////////////////////
//
//   ルピナス用JS
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
		$('.apart .thumblock-build-btn').on('click', (e) => {
			e.preventDefault();
			let btnElm = $(e.currentTarget);
			let id_name = btnElm.attr("id");
			let num = id_name.slice(3);
			$('.apart .thumblock-build-main li').removeClass('active').hide();
			$('.apart #item' + num).fadeIn(500).addClass('active');
		});
		$('.share .thumblock-build-btn').on('click', (e) => {
			e.preventDefault();
			let btnElm = $(e.currentTarget);
			let id_name = btnElm.attr("id");
			let num = id_name.slice(3);
			$('.share .thumblock-build-main li').removeClass('active').hide();
			$('.share #item' + num).fadeIn(500).addClass('active');
		});
	});
});