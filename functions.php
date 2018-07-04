<?php
// wp_pagenavi カスタマイズ
function my_pagenavi($args=array()){
	if( !function_exists('wp_pagenavi') ) return;
	$defaults = array(
		'before' => '<nav class="pager">',
		'after' => '</nav>',
		'wrapper_tag' => 'ul',
		'wrapper_class' => 'pagination'
	);
	$args = is_array($args) ? array_merge($defaults, $args) : $args;
	add_filter('wp_pagenavi', 'my_filter_wp_pagenavi', 10, 1);
	wp_pagenavi($args);
	remove_filter('wp_pagenavi', 'my_filter_wp_pagenavi', 10);
}

function my_filter_wp_pagenavi($html) {
	// <a>タグの不要なclassの削除＋<li>で囲む
	$pattern     = "/<a[\s\S]+?href=.([^\'\"]+)[\'\"][^>]*?>([^<]*?)<\/a>/u";
	$replacement = '<li class="page-item"><a href=${1} class="page-link">${2}</a></li>';
	$html        = preg_replace($pattern, $replacement, $html);
	// class="pages"付きの<span>を置換
	$pages_ptn = "/<span class=[\'\"]pages[\'\"]>([\s\S]*?)<\/span>/u";
	$pages_rep = '<li class="page-item"><span class="page-link">${1}</span></li>';
	$html      = preg_replace($pages_ptn, $pages_rep, $html);
	// class="current"付きの<span>を置換
	$current_href = esc_attr( get_pagenum_link( get_query_var('paged', 1) ) );
	$current_ptn  = "/<span class=[\'\"]current[\'\"]>([\s\S]*?)<\/span>/u";
	$current_rep  = '<li class="page-item active"><span class="page-link">${1}</span></li>';
	$html         = preg_replace($current_ptn, $current_rep, $html);
	return $html;
}
/*
 * 投稿にアーカイブ(投稿一覧)を持たせるようにします。
 * ※ 記載後にパーマリンク設定で「変更を保存」してください。
 */
function post_has_archive( $args, $post_type ) {
	global $wp_rewrite;
	if ( 'post' === $post_type ) {
		$archive_slug = 'info';
		// Setting 'has_archive' ensures get_post_type_archive_template() returns an archive.php template.
		$args['has_archive'] = $archive_slug;
		// We have to register rewrite rules, because WordPress won't do it for us unless $args['rewrite'] is true.
		$archive_slug = $wp_rewrite->root . $archive_slug;
		add_rewrite_rule( "{$archive_slug}/?$", "index.php?post_type=$post_type", 'top' );
		$feeds = '(' . trim( implode( '|', $wp_rewrite->feeds ) ) . ')';
		add_rewrite_rule( "{$archive_slug}/feed/$feeds/?$", "index.php?post_type=$post_type" . '&feed=$matches[1]', 'top' );
		add_rewrite_rule( "{$archive_slug}/$feeds/?$", "index.php?post_type=$post_type" . '&feed=$matches[1]', 'top' );
		add_rewrite_rule( "{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type=$post_type" . '&paged=$matches[1]', 'top' );
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'お知らせ';
	$submenu['edit.php'][5][0] = 'お知らせ一覧';
	$submenu['edit.php'][10][0] = '新しいお知らせ';
	$submenu['edit.php'][16][0] = 'タグ';
	//echo ";
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'お知らせ';
	$labels->singular_name = 'お知らせ';
	$labels->add_new = _x('追加', 'お知らせ');
	$labels->add_new_item = 'お知らせの新規追加';
	$labels->edit_item = 'お知らせの編集';
	$labels->new_item = '新規お知らせ';
	$labels->view_item = 'お知らせを表示';
	$labels->search_items = 'お知らせを検索';
	$labels->not_found = '記事が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

// アーカイブタイトルの　アーカイブ：、カテゴリー：、投稿：を消す
add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
		/* translators: Category archive title. 1: Category name */
		$title = sprintf( __( '%s' ), single_cat_title( '', false ) );
	} elseif ( is_tag() ) {
		/* translators: Tag archive title. 1: Tag name */
		$title = sprintf( __( '%s' ), single_tag_title( '', false ) );
	} elseif ( is_author() ) {
		/* translators: Author archive title. 1: Author name */
		$title = sprintf( __( '%s' ), '<span class="vcard">' . get_the_author() . '</span>' );
	} elseif ( is_year() ) {
		/* translators: Yearly archive title. 1: Year */
		$title = sprintf( __( '%s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
	} elseif ( is_month() ) {
		/* translators: Monthly archive title. 1: Month name and year */
		$title = sprintf( __( '%s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
	} elseif ( is_day() ) {
		/* translators: Daily archive title. 1: Date */
		$title = sprintf( __( '%s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
	} elseif ( is_tax( 'post_format' ) ) {
		if ( is_tax( 'post_format', 'post-format-aside' ) ) {
			$title = _x( 'Asides', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
			$title = _x( 'Galleries', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
			$title = _x( 'Images', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
			$title = _x( 'Videos', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
			$title = _x( 'Quotes', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
			$title = _x( 'Links', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
			$title = _x( 'Statuses', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
			$title = _x( 'Audio', 'post format archive title' );
		} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
			$title = _x( 'Chats', 'post format archive title' );
		}
	} elseif ( is_post_type_archive() ) {
		/* translators: Post type archive title. 1: Post type name */
		$title = sprintf( __( '%s' ), post_type_archive_title( '', false ) );
	} elseif ( is_tax() ) {
		$tax = get_taxonomy( get_queried_object()->taxonomy );
		/* translators: Taxonomy term archive title. 1: Taxonomy singular name, 2: Current taxonomy term */
		$title = sprintf( __( '%2$s' ), $tax->labels->singular_name, single_term_title( '', false ) );
	} else {
		$title = __( 'Archives' );
	}

	return $title;

});


// 【管理画面】本文の見出し選択のカスタマイズ
function _tinyMCESettings($arr){
	$arr['block_formats'] = "見出しh2=h2;見出しh3=h3;見出しh4=h4;段落=p;";
	return $arr;
}
add_filter('tiny_mce_before_init','_tinyMCESettings',1000);


// テンプレートパーツに変数を渡す
function get_template_part_with_var_array($template_name, $var_array=null){
	if (isset($var_array)) {
		while (list($key, $val) = each($var_array)) {
			set_query_var($key, $val);
		}
	}
	get_template_part($template_name);
}

// AdminBar非表示
add_filter( 'show_admin_bar', '__return_false' );


// get引数設定
function add_query_vars_filter( $vars ){
	$vars[] = "tab";
	return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );