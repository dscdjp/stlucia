
<?php
get_template_part('include/variables');



// カテゴリー取得
$i = 0;
$cat_tab = array();
$news_cat_result = "";
$all_categories = get_categories();


foreach($all_categories as $cat){
	$args = array(
		'posts_per_page'   => 8,
		'post_type'        => 'post',
		'cat' => $cat->term_id
	);
	$news_cat_query = new WP_Query($args);

	$cat_tab[] = $cat->name;

	$news_cat_result .= '<div id="newsCat'.$i.'" class="container news-links"><div class="row">';
	if($news_cat_query->have_posts()) {
		while($news_cat_query->have_posts()){
			$news_cat_query->the_post();
			if(has_post_thumbnail()) {
				$image_id = get_post_thumbnail_id();
				$image_url = wp_get_attachment_image_src($image_id, 'midium');
				$thum_img = '<img src="'.$image_url[0].'" alt="'.get_the_title().'">';
			} else {
				$thum_img = '<img src="'.get_template_directory_uri().'/dest/img/news/news_thum_20180220.png" alt="'.get_the_title().'">';
			}
			$news_cat_result .= '
				<div class="col-6 col-md-3">
					<div class="news-links-card">
						<a href="'.get_permalink().'">
							<p class="news-links-card-date">'.get_the_time('Y/m/d').'</p>
							<p class="news-links-card-thum">'.$thum_img.'</p>
							<p class="news-links-card-text">'.get_the_title().'</p>
						</a>
					</div>
				</div>
			';
		}
	}
	$news_cat_result .= '</div><p class="news-btn"><a href="'.esc_url(get_category_link($cat->term_id)).'">'.$cat->name.'一覧はこちら</a></p></div>';
	$i++;
}
wp_reset_postdata();


// 新着情報全件取得
$args = array(
	'posts_per_page'   => 8,
	'post_type'        => 'post'
);

$news_all_query = new WP_Query($args);
$news_all_result = "";
$i = 0;

$news_all_result .= '<div class="row">';
if($news_all_query->have_posts()) {
	while($news_all_query->have_posts()){
		$news_all_query->the_post();
		
		if(has_post_thumbnail()) {
			$image_id = get_post_thumbnail_id();
			$image_url = wp_get_attachment_image_src($image_id, 'midium');
			$thum_img = '<img src="'.$image_url[0].'" alt="'.get_the_title().'">';
		} else {
			$thum_img = '<img src="'.get_template_directory_uri().'/dest/img/news/news_thum_20180220.png" alt="'.get_the_title().'">';
		}
		
		$news_all_result .= '
			<div class="col-6 col-md-3">
				<div class="news-links-card">
					<a href="'.get_permalink().'">
						<p class="news-links-card-date">'.get_the_time('Y/m/d').'</p>
						<p class="news-links-card-thum">'.$thum_img.'</p>
						<p class="news-links-card-text">'.get_the_title().'</p>
					</a>
				</div>
			</div>
		';
	}
}

$news_all_result .= '</div>';
wp_reset_postdata();


// 新着情報１件取得
$args = array(
	'posts_per_page'   => 1,
	'post_type'        => 'post'
);
$news_one_query = new WP_Query($args);

if($news_one_query->have_posts()) {
	while($news_one_query->have_posts()){
		$news_one_query->the_post();
		$new_info_date = get_the_time('Y/m/d');
		$new_info_title = get_the_title();
		$new_info_link = get_permalink();
		$category = get_the_category();
		if(!empty($category)) {
			if(!is_wp_error( $category )){
				foreach($category as $cat){
					$new_info_cat .= '<span class="topInfo-cat">'.$cat->name.'</span>'; 
				}
			}
		}
	}
}
wp_reset_postdata();

?>
<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_template_part('include/head_tag'); ?>
</head>

<body>

	<?php get_template_part('include/header'); ?>

    <main class="main">
		<div class="fv">
            <ul class="fv-slider">
                <li class="fv-slider-thum fv-slider-1 bd-radius-img-l">
					<span class="fv-slider-1-chach">あなたの心の<br>道しるべで<br>ありたい。</span>
				</li>
				<li class="fv-slider-thum fv-slider-2 bd-radius-img-l">
					<span class="fv-slider-1-chach">あなたの心の<br>道しるべで<br>ありたい。</span>
				</li>
				<li class="fv-slider-thum fv-slider-3 bd-radius-img-l">
					<span class="fv-slider-1-chach">あなたの心の<br>道しるべで<br>ありたい。</span>
				</li>
            </ul>
        </div>
        
        <div class="topInfo">
        	<div class="container">
				<dl>
					<dt><span class="topInfo-date"><?=$new_info_date?></span></dt>
					<dd>
						<a href="<?=$new_info_link?>">
							<?=$new_info_cat?>
							<span class="topInfo-title"><?=$new_info_title?></span>
						</a>
					</dd>
				</dl>
        	</div>
        </div>
        
		<div class="info">
			<h2>診療案内</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-6 info-l info-link-1">
						<a href="<?=esc_url(home_url('/outpatient/'))?>">
							<h3>外来受診</h3>
							<p class="info-l-text">まずはお電話またはメールでお気軽に診察や病気で不安な事、気になることをご相談ください。専門スタッフがご相談をお伺いし、患者様に合わせた対応をご検討します。</p>
							<p class="info-l-btn">外来受診はこちら</p>
							<p class="info-l-accent"><img src="<?=get_template_directory_uri()?>/dest/img/index/info_accent_1.png" alt=""></p>
						</a>
					</div>
					<div class="col-md-6 info-l info-link-2">
						<a href="<?=esc_url(home_url('/hospitalization/'))?>">
							<h3>入院治療</h3>
							<p class="info-l-text">開放的な空間と高い精神医療技術で患者様一人ひとりに合わせた最良の治療をご提供します。退院後のケアまで含めたカリキュラムに則って専門医が適切な処置を行います。</p>
							<p class="info-l-btn">入院治療はこちら</p>
							<p class="info-l-accent"><img src="<?=get_template_directory_uri()?>/dest/img/index/info_accent_2.png" alt=""></p>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 info-s info-link-3">
						<a href="<?=esc_url(home_url('/facility/'))?>">
							<img src="<?=get_template_directory_uri()?>/dest/img/index/info_thum_03.png" alt="">
							<div class="info-s-block">
								<div class="info-s-block-inner">
									<p class="info-s-text">
										<span class="info-s-text-l">院内の雰囲気</span>
										<span class="info-s-text-s">を感じる</span>
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 info-s info-link-4">
						<a href="<?=esc_url(home_url('/access/'))?>">
							<img src="<?=get_template_directory_uri()?>/dest/img/index/info_thum_04.png" alt="">
							<div class="info-s-block">
								<div class="info-s-block-inner">
									<p class="info-s-text">
										<span class="info-s-text-l">当院への行き方</span>
										<span class="info-s-text-s">を調べる</span>
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 info-s info-link-5">
						<a href="<?=esc_url(home_url('/recruit/'))?>">
							<img src="<?=get_template_directory_uri()?>/dest/img/index/info_thum_05.png" alt="">
							<div class="info-s-block">
								<div class="info-s-block-inner">
									<p class="info-s-text">
										<span class="info-s-text-l">求人情報</span>
										<span class="info-s-text-s">を調べる</span>
									</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="news">
			<h2>お知らせ</h2>
			<ul class="news-tab container clearfix">
				<li><a href="#newsAll" class="btn btn-green active">全カテゴリー</a></li>
				<?php
				$i = 0;
				foreach($cat_tab as $tab){
				?>
					<li><a href="#newsCat<?=$i?>" class="btn btn-green"><?=$tab?></a></li>
				<?php
					$i++;
				}
				?>
			</ul>
			<div class="news-main">
				<div id="newsAll" class="container news-links active">
					<?=$news_all_result?>
					<p class="news-btn"><a href="<?=esc_url(home_url('/info/'))?>">お知らせ一覧はこちら</a></p>
				</div>
				<?=$news_cat_result?>
			</div>
		</div>

		<ul class="main-contents-slider">
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_01.png" alt="福岡精神科のロビー"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_02.png" alt="福岡心療内科のエレベーターホール"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_03.png" alt="福岡内科の外廊下"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_04.png" alt="久留米精神科のデイルーム"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_01.png" alt="久留米心療内科のロビー"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_02.png" alt="久留米内科のエレベーターホール"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_03.png" alt="福岡県精神科病院の外廊下"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_04.png" alt="久留米市精神科病院のデイルーム"></li>
		</ul>

		<?php get_template_part('include/footer_banner'); ?>
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>