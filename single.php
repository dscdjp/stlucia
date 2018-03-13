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
				<?php
				if(have_posts()) {
					while(have_posts()) {
						the_post();
						$categories = get_the_category();
				?>
						<div class="row">
							<div class="col-md-9">
								<div class="news-titleblock">
									<h4 class="news-title"><?php the_title(); ?></h4>
									<p class="news-data"><?php the_time('Y年m月d日'); ?></p>
									<?php
									foreach($categories as $cat){
									?>
									<p class="news-cate"><a href="<?=get_category_link($cat->term_id)?>" class="btn btn-green btn-xs"><?=$cat->name?></a></p>
									<?php } ?>
<!--									<p class="news-thum">-->
										<?php

										$image_id = get_post_thumbnail_id();
										$image_url = wp_get_attachment_image_src($image_id, true);
										if(has_post_thumbnail()){
//											the_post_thumbnail('medium');
										} else {
//											echo '<img src="'.get_template_directory_uri().'/dest/img/news/news_thum_20180221.png">';
										} ?>
<!--									</p>-->
								</div>
								<div class="news-textblock">
									<div class="news-text">
										<?php the_content(); ?>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<?php get_template_part('include/sidebar'); ?>
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
			</div>
		</div>

		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>