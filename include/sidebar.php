<div class="news-side">
	<h4>カテゴリー</h4>
	<?php
	$all_categories = get_categories();
	foreach($all_categories as $cat){
	?>
	<p><a href="<?=get_category_link($cat->term_id)?>"><?=$cat->name?></a></p>
	<?php } ?>
</div>
<div class="news-side">
	<h4>最新の投稿</h4>
	<?php
	$args = array(
		'posts_per_page'   => 5,
		'post_type'        => 'post',
	);
	$posts = get_posts($args);
	foreach($posts as $post){
		setup_postdata($cat);
	?>
	<p><a href="<?php the_permalink(); ?>"><small><?php the_time('Y年m月d日'); ?></small><?php the_title(); ?></a></p>
	<?php }
	wp_reset_postdata();
	?>
</div>