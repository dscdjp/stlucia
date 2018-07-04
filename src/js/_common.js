"use strict";
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



//---------------------------------------------------------
// Document ready
//---------------------------------------------------------


$(window).on('load resize scroll', (e) => {
	let windowWidth = $(window).width();
	let pageHeaderHeight = $('.pageHeader').height();
	$('.main').css('padding-top', pageHeaderHeight);
	if( windowWidth < 992 ) {
		$('.sp-navi').css('margin-top',pageHeaderHeight);
	}
});


$(window).on('load', () => {
//	$(window).on('load resize', (e) => {
//		let windowWidth = $(window).width();
//		let pageHeaderHeight = $('.pageHeader').height();
//		$('.main').css('padding-top', pageHeaderHeight);
//	});
	
	// スムーススクロール
	$('.scrollBtn').on('click', (e) => {
		const speed = 400;
		let href= $(e.currentTarget).attr("href");
		let el = $(href == "#" || href == "" ? 'html' : href);
		let position = el.offset().top;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
	
	// スマホボタン
	$('.spBtnTrigger').on('click', (e) => {
		e.preventDefault();
		$(e.currentTarget).toggleClass("active");
		$('.sp-navi').fadeToggle(300);
	});
});


// トップへ戻るボタン
$(window).on('scroll', () => {
	let scrlT = $(document).scrollTop();
	if(scrlT > 100) {
		$('.pageHeader').addClass('sm');
	} else {
		$('.pageHeader').removeClass('sm');
	}
	if(scrlT > 800){
		$('.j-top').addClass('j-top-show');
	}else{
		$('.j-top').removeClass('j-top-show');
	}
});