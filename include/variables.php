<?php

global $settings;

// 基本設定
$http = is_ssl() ? 'https' . '://' : 'http' . '://';
$settings['url'] = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

$settings['site_title'] = '聖ルチア病院｜福岡県久留米市の精神科・心療内科・内科';
$settings['description'] = "社会医療法人聖ルチア会 聖ルチア病院は開放的な空間と高い精神医療技術で患者様一人ひとりに合わせた最良の治療をご提供します。まずはお電話またはメールでお気軽に診察や病気で不安な事、気になることをご相談ください。";
$settings['keywords'] = "聖ルチア病院,社会医療法人,聖ルチア会,久留米 病院,精神科,心療内科,内科";

if(is_home()) {
	$settings['slug'] = 'index';
} elseif(is_post_type_archive('post')) {
	$settings['slug'] = 'news';
	$settings['pagename'] = 'お知らせ';
} elseif(is_archive()) {
	$settings['hierarchy_2nd_title'] = "お知らせ";
	$settings['hierarchy_2nd_url'] = esc_url(home_url('/info/'));
	$settings['slug'] = 'news';
	$settings['pagename'] = get_the_archive_title();
} elseif(is_single()) {
	$settings['hierarchy_2nd_title'] = "お知らせ";
	$settings['hierarchy_2nd_url'] = esc_url(home_url('/info/'));
	if(have_posts()){
		while(have_posts()) {
			the_post();
			$category = get_the_category();
		}
	}
	$settings['hierarchy_3rd_title'] = $category[0]->cat_name;
	$settings['hierarchy_3rd_url'] = esc_url(get_category_link($category[0]->term_id));
	
	$settings['slug'] = 'news-detail';
	$settings['pagename'] = get_the_title();
} elseif(is_page()) {
	$settings['slug'] = $post->post_name;
	$settings['pagename'] = get_the_title();
} elseif(is_404()) {
	$settings['slug'] = '404';
	$settings['pagename'] = 'ページが見つかりません';
} else {
	$settings['slug'] = 'index';
	$settings['pagename'] = get_the_title();
}

?>