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
				<div class="row">
					<h3 class="col-md-12"><span>～ 病院理念 ～<br>私達は、患者様一人一人のために、<br>信頼される、最良の、心温まる医療サービスを提供します</span></h3>
				</div>
				<div class="row">
					<div class="col-md-6 col-12 intro-text">
						<h4>基本方針</h4>
						<ul class="intro-list">
							<li>一、医療に関わる者として、最高の職能が発揮できる様、常に自己研鑽に努めます</li>
							<li>一、患者様の人権を尊重し、高い医療倫理に基づき行動します</li>
							<li>一、徹底された医療安全の中で、安心できる療養環境を提供します</li>
							<li>一、地域の関係機関と連携し、積極的な社会復帰支援を行います</li>
							<li>一、信頼される病院としての社会的責任を全うします</li>
						</ul>
					</div>
					<div class="col-md-4 col-8 intro-text">
						<h4>行動方針</h4>
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
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="overview-main-list">
							<dl>
								<dt>病院名</dt>
								<dd>社会医療法人　聖ルチア会　聖ルチア病院</dd>
							</dl>
							<dl>
								<dt>代表者</dt>
								<dd>理事長 院長／大治 太郎</dd>
							</dl>
							<dl>
								<dt>所在地</dt>
								<dd>福岡県久留米市津福本町1012</dd>
							</dl>
							<dl>
								<dt>電話番号</dt>
								<dd>0942-33-1581</dd>
							</dl>
							<dl>
								<dt>FAX番号</dt>
								<dd>0942-33-1586</dd>
							</dl>
							<dl>
								<dt>ホームページ</dt>
								<dd>http://st-lucia.or.jp</dd>
							</dl>
							<dl>
								<dt>メール</dt>
								<dd>メールフォームより受付ます</dd>
							</dl>
							<dl>
								<dt>看護体制</dt>
								<dd>１５：１（患者様15人に看護師1人配置)</dd>
								<dd>１０：１（患者様10人に看護助手1人配置）</dd>
							</dl>
							<dl>
								<dt>病床数</dt>
								<dd>263床</dd>
								<dd>
									<ul>
										<li>・1病棟　～精神科急性期治療病棟(54床)～</li>
										<li>・2病棟　～精神療養病棟(52床)～</li>
										<li>・3病棟　～認知症治療病棟(50床)～</li>
										<li>・5病棟　～精神一般病棟(53床)～</li>
										<li>・6病棟　～精神一般病棟(54床)～</li>
									</ul>
								</dd>
							</dl>
							<dl>
								<dt>職員数</dt>
								<dd>総数 226名 医師</dd>
								<dd>常勤医師 　12名（内：精神保健指定医 10名）</dd>
								<dd>非常勤医師 16名（内：精神保健指定医　3名）</dd>
								<dd>薬剤師　　 3名</dd>
								<dd>看護職員　 110名</dd>
								<dd>ナースエイド 35名</dd>
								<dd>作業療法士 　12名</dd>
								<dd>精神保健福祉士・ソーシャルワーカー 12名</dd>
								<dd>臨床心理士 4名</dd>
								<dd>管理栄養士 2名</dd>
								<dd>栄養士 4名</dd>
								<dd>調理員 10名</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>