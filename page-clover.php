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

		<?php get_template_part_with_var_array('include/build',array('current'=>'clover')); ?>

		<div class="content-title">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>住み慣れたご自宅で快適な生活が送れるように、<br>おひとりおひとりの状態に合わせ「看護」を提供していきます。</span></h3>
				</div>
			</div>
		</div>

		<div class="user">
			<div class="container info-main">
				<div class="row">
					<div class="col-md-8">
						<h4 class="user-title">利用できる方</h4>
						<p class="user-text">自宅療養を希望され、医師の指示がある方、医療保険、介護保険のどちらも利用できます。</p>
					</div>
				</div>
			</div>
		</div>


		<div class="detail">
			<div class="container detail-contents">
				<div class="row">
					<h3 class="col-md-12"><span>ケア＆サービスの内容</span></h3>
					<div class="col-md-4">
						<p class="detail-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/clover/clover_thum1.png"></p>
						<div class="detail-contents-textarea">
							<h4 class="detail-contents-title">健康状態の観察</h4>
							<p class="detail-contents-text">・症状のコントロール</p>
							<p class="detail-contents-text">・服薬継続への支援</p>
						</div>
					</div>
					<div class="col-md-4">
						<p class="detail-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/clover/clover_thum2.png"></p>
						<div class="detail-contents-textarea">
							<h4 class="detail-contents-title">心理的な支援</h4>
							<p class="detail-contents-text">・悩み不安などの相談</p>
							<p class="detail-contents-text">・認知症のケアの相談</p>
						</div>
					</div>
					<div class="col-md-4">
						<p class="detail-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/clover/clover_thum3.png"></p>
						<div class="detail-contents-textarea">
							<h4 class="detail-contents-title">日常生活の援助</h4>
							<p class="detail-contents-text">・食事、排泄、移動、 保清の相談</p>
							<p class="detail-contents-text">・生活リズムの維持</p>
						</div>
					</div>
					<p class="col-md-12 detail-contents-anno"><span>その他、在宅でのリハビリテーション、福祉サービスなどの利用のお手伝いなどを行っております。</span></p>
				</div>
			</div>
		</div>

		<div class="status">
			<div class="container">
				<div class="row">

					<div class="col-md-6">
						<div class="status-content">
							<h4 class="status-content-title">利用料金</h4>
							<div class="status-content-list">
								<dl>
									<dt>老人医療対象者</dt>
									<dd>１割負担（一定以上の所得がある方は３割負担）</dd>
								</dl>
								<dl>
									<dt>医療保険対象者</dt>
									<dd>３割負担</dd>
								</dl>
								<dl>
									<dt>介護保険対象者</dt>
									<dd>１割負担</dd>
								</dl>
								<dl>
									<dt>自立支援医療制度利用者</dt>
									<dd>１割負担（月の限度額内での負担となります）</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="status-content">
							<h4 class="status-content-title">営業時間</h4>
							<div class="status-content-list">
								<dl>
									<dt>訪問日・訪問日時</dt>
									<dd>１割負担（一定以上の所得がある方は３割負担）</dd>
									<dd>１回の訪問時間は３０分～１時間程度</dd>
									<dd><span>※1ヶ月に約770件の訪問看護を行っています。(平成29年10月現在)</span></dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="status-content">
							<h4 class="status-content-title">訪問地域</h4>
							<div class="status-content-list">
								<p>平成 29年 11月から、大木町にサテライトを開所いたしましたので、大牟田市、佐賀市までご依頼に応じることが出来ます</p>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="application">
							<h3><span>お申込み・お問い合わせ</span></h3>
							<p class="application-text">かかりつけの医師、または直接当ステーションへご相談ください。</p>
							<div class="row">
								<div class="col-md-6">
									<p class="application-btn"><a href="<?=esc_url(home_url('/cntact/'))?>">お問い合わせフォーム</a></p>
								</div>
								<div class="col-md-6">
									<p class="application-tel"><img src="<?=get_template_directory_uri()?>/dest/img/index/icon_tel_green.png">0942-33-1581</p>
								</div>
							</div>
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