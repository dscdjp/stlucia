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
			
				<h2 class="h-2"><span>精神科領域専門医研修プログラム</span></h2>
				<p>
					医師（専攻医）は当専門研修プログラムへの採用後、研修施設群のいずれかの施設と<br>雇用契約を結ぶこととなります。
				</p>
				<p>
					本専門研修プログラムは、日本精神神経学会による一次審査を通過したものであり、<br>今後日本専門医機構による二次審査を踏まえて修正・変更があることを予めご承知おきください。
				</p>

				<h2 class="h-2"><span>募集要項</span></h2>
				<?=do_shortcode('[table id=7 /]')?>
			</div>
		</div>
		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>