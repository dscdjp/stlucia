<?php
global $settings;

if(!empty($settings['hierarchy_2nd_title'])&&!empty($settings['hierarchy_2nd_url'])) {
	$h_2nd = ' | <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="'.$settings['hierarchy_2nd_url'].'"><span itemprop="name">'.$settings['hierarchy_2nd_title'].'</span></a><meta itemprop="position" content="2" /></span>';
}
if(!empty($settings['hierarchy_3rd_title'])&&!empty($settings['hierarchy_3rd_url'])) {
	$h_3rd = ' | <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="'.$settings['hierarchy_3rd_url'].'"><span itemprop="name">'.$settings['hierarchy_3rd_title'].'</span></a><meta itemprop="position" content="3" /></span>';
}

?>
<div class="fv">
	<div class="container">
		<div class="row">
			<div class="col-md-6 fv-textarea">
				<p class="fv-textarea-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
					<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="<?=esc_url(home_url('/'))?>">
							<span itemprop="name">聖ルチア病院</span>
						</a>
						<meta itemprop="position" content="1" />
					</span>
					<?=isset($h_2nd)?$h_2nd:''?><?=isset($h_3rd)?$h_3rd:''?> | <?='<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.$settings['pagename'].'</span></span>'?>
				</p>
				<?php
				if(!is_single()) {
				?>
				<h1 class="fv-textarea-title"><?=$settings['pagename']?></h1>
				<?php } else { ?>
				<h1 class="fv-textarea-title">お知らせ</h1>
				<?php } ?>
			</div>

			<?php
			if(is_single()) {
                if(have_posts()) : while(have_posts()) : the_post();
				$image_id = get_post_thumbnail_id();
				$image_url = wp_get_attachment_image_src($image_id, true);
              endwhile;endif;
			?>
			<div class="col-md-6 fv-thumarea" style="background: url(<?php if(has_post_thumbnail()){ echo $image_url[0]; } else {echo get_template_directory_uri().'/dest/img/common/noimage.gif';} ?>) center top / cover no-repeat;"></div>
			<?php
			} else {
			?>
				<div class="col-md-6 fv-thumarea"></div>
			<?php
			}
			?>
		</div>
	</div>
</div>