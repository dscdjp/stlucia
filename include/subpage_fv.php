<?php
global $settings;

if(!empty($settings['hierarchy_2nd_title'])&&!empty($settings['hierarchy_2nd_url'])) {
	$h_2nd = ' | <a href="'.$settings['hierarchy_2nd_url'].'">'.$settings['hierarchy_2nd_title'].'</a>';
}
if(!empty($settings['hierarchy_3rd_title'])&&!empty($settings['hierarchy_3rd_url'])) {
	$h_3rd = ' | <a href="'.$settings['hierarchy_3rd_url'].'">'.$settings['hierarchy_3rd_title'].'</a>';
}

?>
<div class="fv">
	<div class="container">
		<div class="row">
			<div class="col-md-6 fv-textarea">
				<p class="fv-breadcrumb"><a href="<?=esc_url(home_url('/'))?>">聖ルチア病院</a><?=isset($h_2nd)?$h_2nd:''?><?=isset($h_3rd)?$h_3rd:''?> | <?=$settings['pagename']?></p>
				<h1 class="fv-title"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/logo_closs.png" alt=""><?=$settings['pagename']?></h1>
			</div>
			<?php
			if(is_single()) {
				$image_id = get_post_thumbnail_id();
				$image_url = wp_get_attachment_image_src($image_id, true);
			?>
				<div class="col-md-6 fv-thumarea" style="background: url(<?php if(has_post_thumbnail()){ echo $image_url[0]; } else {echo get_template_directory_uri().'/dest/img/news/news_thum_20180220.png';} ?>) center top / cover no-repeat;"></div>
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