<?php get_template_part('include/variables'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_template_part('include/head_tag'); ?>
</head>

<body>

	<?php get_template_part('include/header'); ?>

	<main class="main">

		<?php get_template_part('include/subpage_fv'); ?>
		
		<div class="news">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<?php
						if(have_posts()) {
							while(have_posts()) {
								the_post();
								$categories = get_the_category();
								
								$image_id = get_post_thumbnail_id();
								$image_url = wp_get_attachment_image_src($image_id, true);
						?>
							<div class="news-detail">
								<div class="row">
									<div class="col-md-3">
										<p class="news-detail-thum"><img src="<?php if(has_post_thumbnail()){ echo $image_url[0]; } else {echo get_template_directory_uri().'/dest/img/news/news_thum_20180220.png';} ?>"></p>	
									</div>
									<div class="col-md-9">
										<div class="news-detail-titleblock">
											<h4 class="news-detail-title"><?php the_title(); ?></h4>
											<p class="news-detail-data"><?php the_time('Y年m月d日'); ?></p>
											<?php
											foreach($categories as $cat){
											?>
											<p class="news-detail-cate"><a href="<?=get_category_link($cat->term_id)?>" class="btn btn-xs btn-green"><?=$cat->name?></a></p>
											<?php } ?>
										</div>
										<div class="news-detail-textblock">
											<p class="news-detail-text"><?php the_excerpt();?></p>
											<p class="news-detail-btn"><a href="<?php the_permalink();?>" class="btn btn-green">&gt;&gt; 詳細はこちら</a></p>
										</div>
									</div>
								</div>
						</div>
						<?php
							} //endwhile
						} else { //endif;
							?>
							<p>お探しの投稿が見つかりませんでした。</p>
							<?php
						}
						?>

						<div class="container d-block d-sm-none">
							<?php my_pagenavi(); ?>
						</div>
					</div>
					<div class="col-md-3">
						<?php get_template_part('include/sidebar'); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="container d-none d-sm-block">
			<?php my_pagenavi(); ?>
		</div>

		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>