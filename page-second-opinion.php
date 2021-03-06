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
			<div class="container">
				<h2 class="h-2"><span>セカンドオピニオンとは？</span></h2>
				<div class="row">
					<div class="col-md-9 textblock">
						<p>患者様ご自身又はご家族が適切な医療を選択できるように、<br class="d-none d-md-block">現在の主治医以外の他院の医師の意見を聞く事です。</p>
						<p>セカンドオピニオンにより患者様ご自身が病衣についてより深く理解し、<br class="d-none d-md-block">治療について医師に任せず、<br class="d-none d-md-block">最終的に治療などの方針を決定できるよう複数の医師の意見を聞く事が出来ます。
						</p>
						<p>セカンドオピニオンでは、継続的な治療や検査は行われないことが原則です。</p>
					</div>
				</div>
			</div>
		</div>

		<div class="inner">
			<div class="container">
				<h2 class="h-2"><span>当院に通院・入院中で他医療機関での<br class="d-none d-md-block">セカンドオピニオンを希望される場合</span></h2>
				<div class="row">
					<div class="col-md-9 textblock">
						<p> 当院での診断や治療内容について不明な点がございましたら、<br class="d-none d-md-block">まずは主治医や看護師、ソーシャルワーカー等にご相談ください。
						</p>
						<p>
							ご相談の結果、他の医療機関でのセカンドオピニオンを<br class="d-none d-md-block">希望される場合には遠慮なく主治医にお申し出ください。<br class="d-none d-md-block">
							ご希望の医療機関への紹介状や必要であれば検査資料等もご準備いたします。</p>
					</div>
				</div>
			</div>
		</div>

		<div class="outer">
			<div class="container">
				<h2 class="h-2"><span>他の医療機関の患者様が当院での<br class="d-none d-md-block">セカンドオピニオンを希望される場合</span></h2>
				<div class="row">
					<div class="col-md-9 textblock">
						<div class="outer-cation">
							<p class="outer-cation-icon"><img src="<?=get_template_directory_uri()?>/dest/img/second-opinion/caution.png" alt="" style="width:50px;"></p>
							<p class="outer-cation-text">当院はセカンドオピニオン指定医療機関ではございませんので、セカンドオピニオン外来のある公的医療機関や大学病院などへご相談ください。</p>
						</div>
						<p>ただし、他の精神科・心療内科受診中の方で、セカンドオピニオンではなく、<br class="d-none d-md-block">一度当院の受診をしたいとご希望の場合はその旨を受診相談のお電話時にお伝えください。<br><br>
							転院ではなく、一度のみの受診を希望される場合は、<br class="d-none d-md-block">同じ診療科(精神 科・心療内科)への重複受診は保険対象外となりますので、<br class="d-none d-md-block">10割負担となる事をご了承ください。</p>
					</div>
				</div>
			</div>
		</div>
		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>