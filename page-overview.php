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
		
		<div class="intro">
			<div id="greeting" class="container">
				<h2 class="h-2 mb-0"><span>理事長挨拶</span></h2>
				<p class="h-2 pt-5">
					地域社会・行政・一般関連病院等と密に連携して<br class="d-none d-md-block">
					これからの時代に沿った地域包括ケアシステムを創造します｡
				</p>

				<div class="intro-text">
					<div class="row">
						<div class="col-md-3">
							<p class="greeting-img"><img src="<?=get_template_directory_uri()?>/dest/img/overview/greeting_img_01.jpg" alt="大治太郎"></p>
						</div>
						<div class="col-md-9">
							<p>
								当院は昭和27年の開設以来、患者様やご家族、そして地域の精神医療に貢献すべく､高い専門性を持って取り組んでまいりました。
							</p>
							<p>
								その取組が認められ、平成29年12月、さらに公共性の高い病院として社会医療法人の認証を受けました。24時間365日、患者様がいつでも安心して精神科医療が受けられるよう、時間外診療体制を強化し、その役割に努めています。
							</p>
							<p>
								統合失調症の治療のみならず、気分感情障害、認知症、児童思春期疾患、発達障害、各種依存症などの様々な疾患に対応し、さらには介護、福祉、行政、学校といった様々な分野との連携を強化し地域包括ケアシステムの構築を進めます。
							</p>
							<p class="text-right text-lg">理事長 院長 大治太郎</p>
						</div>
					</div>
				</div>
				
				
				<h2 id="vision" class="h-2 mb-0"><span>病院理念</span></h2>
				<p class="h-2 pt-5">私達は、患者様一人一人のために、<br class="d-none d-md-block">信頼される、最良の、心温まる医療サービスを提供します</p>
				
				<div class="row">
					<div class="col-md-6 col-12 intro-text">
						<h3 class="h-3">基本方針</h3>
						<ul class="intro-list">
							<li>一、医療に関わる者として、最高の職能が発揮できる様、常に自己研鑽に努めます</li>
							<li>一、患者様の人権を尊重し、高い医療倫理に基づき行動します</li>
							<li>一、徹底された医療安全の中で、安心できる療養環境を提供します</li>
							<li>一、地域の関係機関と連携し、積極的な社会復帰支援を行います</li>
							<li>一、信頼される病院としての社会的責任を全うします</li>
						</ul>
					</div>
					<div class="col-md-4 col-8 intro-text">
						<h3 class="h-3">行動方針</h3>
						<ul class="intro-list">
							<li>一、相手の身になって聴こう</li>
							<li>一、相手の身になって語ろう</li>
							<li>一、相手の身になって行動しよう</li>
						</ul>
					</div>
					<div class="col-md-2 col-4 intro-thum">
						<p class="intro-thum-img"><img src="<?=get_template_directory_uri()?>/dest/img/overview/overview_thum_mini.png" alt=""></p>
					</div>
				</div>
			</div>
		</div>
		
		<p class="overview-thum"></p>
		<div class="overview-main">
			<h2 class="h-2">病院概要</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<?=do_shortcode('[table id=4 /]')?>
					</div>
				</div>
			</div>
		</div>

		<div id="history" class="container">
			<h2 class="h-2"><span>昭和27年から続く歴史。<br>慈愛の精神で連綿と受け継がれる想い。</span></h2>
			<?=do_shortcode('[table id=1 /]')?>
		</div>
		
		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>