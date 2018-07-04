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

		<div class="access">
			<div class="container">
				<h2 class="h-2"><span>福岡市内からもご来院しやすい久留米市。<br class="d-none d-md-block">各種交通機関・お車でアクセス可能です。</span></h2>
				<div class="access-contents">
					<div class="row">
						<div class="col-md-6">
							<div class="greenBarBox">
								<h5 class="greenBarBox-title">九州新幹線・JR鹿児島本線</h5>
								<div class="greenBarBox-content">
									<ul class="access-content-list">
										<li>・博多駅よりJR久留米駅まで約18分</li>
										<li>・JR久留米駅バス停発 行き先番号[15]→本町七丁目で降車</li>
										<li>・JR久留米駅より車・タクシーで約10分</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="greenBarBox">
								<h5 class="greenBarBox-title">西鉄電車</h5>
								<div class="greenBarBox-content">
									<ul class="access-content-list">
										<li>・西鉄久留米駅より車で7分</li>
										<li>・西鉄久留米駅バス停発 行き先番号[1][2][7][10][22][40][41][50]<br>→六ツ門バス停にて行き先番号[15]大川橋行きに乗り換え<br>→平島バス停で降車</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="d-none d-md-block mb-3"></div>
					<div class="row">
						<div class="col-md-6">
							<div class="greenBarBox">
								<h5 class="greenBarBox-title">飛行機（福岡空港）</h5>
								<div class="greenBarBox-content">
									<ul class="access-content-list">
										<li>① 高速バス乗り場より西鉄久留米駅行へ乗車、西鉄久留米駅より車で約７分</li>
										<li>② 地下鉄経由にて西鉄天神駅から乗車、西鉄久留米駅（特急で約３０分）下車</li>
										<li>③ 地下鉄経由にてＪＲ博多駅より乗車、ＪＲ久留米駅下車</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="greenBarBox">
								<h5 class="greenBarBox-title">お車（九州自動車道）</h5>
								<div class="greenBarBox-content">
									<ul class="access-content-list">
										<li>久留米インターから久留米市内方面へ約15分</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container map">
				<div id="map" class="map-wrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3334.4861358197327!2d130.50336231519552!3d33.30610408081549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541a50460a106d5%3A0x876d65e4f0f1a3e9!2z44CSODMwLTAwNDcg56aP5bKh55yM5LmF55WZ57Gz5biC5rSl56aP5pys55S677yR77yQ77yR77yS!5e0!3m2!1sja!2sjp!4v1519555994013" width="100%" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p class="access-text">住所 福岡県久留米市津福本町1012</p>
						<p class="access-text">電話 <i class="fa fa-phone"></i> TEL.0942-33-1581 / <i class="fa fa-fax"></i> FAX.0942-33-1586</p>
					</div>
					<div class="col-md-6">
						<p class="access-btn"><a href="http://maps.google.com/maps?q=福岡県久留米市津福本町1012" target="_blank">GoogleMapで見る</a></p>
					</div>
				</div>
			</div>
		</div>


		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>