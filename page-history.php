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

		<div class="main-contents">
			<div class="container">
				<h2 class="h-2"><span>昭和27年から続く歴史。<br>慈愛の精神で連綿と受け継がれる想い。</span></h2>
				<?=do_shortcode('[table id=1 /]')?>
<!--
				<div class="row">
					<div class="col-md-4 thumblock">
						<div class="row">
							<p class="col-md-12 col-6"><img src="<?=get_template_directory_uri()?>/dest/img/history/sample.png" alt=""></p>
							<p class="col-md-12 col-6"><img src="<?=get_template_directory_uri()?>/dest/img/history/sample.png" alt=""></p>
						</div>
					</div>
					<div class="col-md-8">
						<?=do_shortcode('[table id=1 /]')?>
					</div>
				</div>
-->
			</div>
		</div>
		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>