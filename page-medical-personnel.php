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
				<h2 class="h-2"><span>地域医療連携室のご案内</span></h2>
				<div class="row">
					<div class="col-md-5">
						<p class="intro-thum"><img src="<?=get_template_directory_uri()?>/dest/img/medical-personnel/organ_thum.png" alt=""></p>
					</div>

					<div class="col-md-7">
						<div class="intro-text">
							<p class="intro-text-supple">当院の地域医療連携室は、精神保健福祉士(ソーシャルワーカー)を配置しております。</p>
							<dl>
								<dt><i class="fa fa-clock-o"></i> 開設時間</dt>
								<dd>月曜~土曜日 9:00~17:00</dd>
							</dl>
							<dl>
								<dt><i class="fa fa-calendar"></i> 休診日</dt>
								<dd>上記以外の時間、日・祝祭日、12/31~1/3 <br><span>※夜間や休診日は看護責任者が対応致しますので、緊急時はご連絡ください。</span></dd>
							</dl>
							<dl>
								<dt><i class="fa fa-phone"></i> TEL</dt>
								<dd>0942-33-1581(代)</dd>
							</dl>
							<dl>
								<dt><i class="fa fa-fax"></i> FAX</dt>
								<dd>0942-33-1586(代)</dd>
							</dl>
							<dl>
								<dt><i class="fa fa-envelope"></i> Mail</dt>
								<dd>chiikirenkei@st-lucia.or.jp</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="role">
			<div class="container">
				<h2 class="h-2"><span>地域医療連携室の役割</span></h2>
				<p class="role-text mb-5">患者様が安心して医療や介護、福祉サービスが受けられるよう、<br>医療機関や地域の事業所と連携を取り、コーディネートを行なっています。</p>
				<p><img src="<?=get_template_directory_uri()?>/dest/img/medical-personnel/content_thum1.png" alt="地域医療連携室の図"></p>
			</div>
		</div>


		<div class="introduce">
			<div class="container">
				<h2 class="h-2"><span>患者様のご紹介について</span></h2>
				<div class="introduce-flow">
					<h3 class="introduce-flow-title">1. 地域医療連携室 精神保健福祉士(ソーシャルワーカー)宛てにお電話下さい。</h3>
					<div class="introduce-flow-main">
						<div class="row">
							<div class="col-md-8">
								<p class="introduce-flow-main-text">以下の項目についてお伺いいたします。</p>
								<ul class="introduce-flow-main-list">
									<li>・患者さまの氏名、生年月日、保険の種類、精神科既往歴</li>
									<li>・患者さまの状態</li>
									<li>・家族構成、当院受診時の同伴者</li>
									<li>・ 現在ご利用中の福祉サービスの内容（生活保護・各種年金受給状況、介護保険・障害者自立支援医療サービス利用状況等）</li>
									<li>・ 受診もしくは入院ご希望の日時 等</li>
								</ul>
							</div>
							<div class="col-md-4">
								<p class="introduce-flow-main-text">お電話番号はこちら</p>
								<p class="introduce-flow-main-tel"><i class="fa fa-phone"></i> 0942-33-1581</p>
							</div>
						</div>
					</div>
				</div>

				<div class="arrow"><img src="<?=get_template_directory_uri()?>/dest/img/medical-personnel/arrow.png" alt=""></div>

				<div class="introduce-flow">
					<h3 class="introduce-flow-title">2. ご相談内容を医師へ報告し、折り返しご連絡いたします。</h3>
					<div class="introduce-flow-main">
						<p class="introduce-flow-main-text"><span>≪受診に際して、患者様ご本人、ご家族様へお伝え下さい≫</span></p>
						<ul class="introduce-flow-main-list">
							<li>・受診時はできるだけ 11:00 までにご来院をお願いします。</li>
							<li>・紹介状をご持参ください。(事前に FAX をお願いする事もございます)</li>
						</ul>
						<p class="introduce-flow-main-fax">FAX：0942-33-1586(代表)</p>
						<p>※ 入院については、できる限りご要望にお応えするよう努めておりますが、患者様の状態やベットの空状況によっては即日のお受入れが難しい場合もございますのでご了承ください。</p>
					</div>
				</div>
			</div>
		</div>
		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>