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


		<div class="facility-map"><img src="<?=get_template_directory_uri()?>/dest/img/facility/facility_illust_bg.png"></div>

		<ul class="facility-map-tab">
			<li><a href="#gairai" class="btn btn-green btn-lg active">外来棟</a></li>
			<li><a href="#nyuin" class="btn btn-green btn-lg">入院棟</a></li>
			<li><a href="#zaitaku" class="btn btn-green btn-lg">在宅支援施設</a></li>
			<li><a href="#nakaniwa" class="btn btn-green btn-lg">中庭</a></li>
		</ul>

		<div class="facility-main">
			<div id="gairai" class="container facility-contents active">
				<div class="row">
					<div class="col-md-12">
						<h4>外来棟</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="facility-detail">
							<p class="facility-detail-title">ロビー</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/gr_thum1.png" alt=""></p>
							<p class="facility-detail-text">中庭が見渡せる広々とした空間でゆったりと落ち着いてお待ちいただけます。季節の花を飾り、水槽を設置し、心安らぐ空間作りに努めております。</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="facility-detail">
							<p class="facility-detail-title">個人待合室</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/gr_thum2.png" alt=""></p>
							<p class="facility-detail-text">ロビーでお待ちいただくことが苦手であったり、落ち着かない方は、個人待合室（個室）でお待ち頂けます。</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="facility-detail">
							<p class="facility-detail-title">診察室</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/gr_thum3.png" alt=""></p>
							<p class="facility-detail-text">広めの個室で、周りを気にせずリラックスして医師との診察を受けていただけます。</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="facility-detail">
							<p class="facility-detail-title">救急外来診察室</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/gr_thum4.png" alt=""></p>
							<p class="facility-detail-text">時間外および緊急的な対応をするための診察室です。また、駐車場からすぐに診察室に入ることができ、入院となった場合も、そのまま病室へとアクセスできることが特徴のひとつです。</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="facility-detail">
							<p class="facility-detail-title">CTスキャン室</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/gr_thum5.png" alt=""></p>
							<p class="facility-detail-text">４列のマルチスライスCTを採用しており、全身検査が可能です。また、X線機器と透視機器があり、X線機器では、胸部、腹部、骨などのレントゲン撮影の他、骨密度測定ができます。透視機器では、主に胃透視検査を行っています。</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="facility-detail">
							<p class="facility-detail-title">各種検査機器</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/gr_thum6.png" alt=""></p>
							<p class="facility-detail-text">超音波、心電図、脳波の他、生化学自動分析装置（血液検査・尿検査）の設備を有し、緊急な場合にも迅速な対応が出来ます。</p>
						</div>
					</div>
				</div>
			</div>


			<div id="nyuin" class="container facility-contents">
				<div class="row">
					<div class="col-md-12">
						<h4>入院棟</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="facility-detail">
							<p class="facility-detail-title">差額ベッド（有料個室）</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/ni_thum1.png" alt=""></p>
							<p class="facility-detail-text">個室と同等、もしくはそれ以上の付帯設備(テレビ、シャワー、電動リクライニングベッド、冷蔵庫等）があります。落ち着いた環境の中にある高品質な設備によって、よりリラックスできます。※差額料金によって付帯設備が異なります</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="facility-detail">
							<p class="facility-detail-title">個室</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/ni_thum2.png" alt=""></p>
							<p class="facility-detail-text">ひとりでの空間での療養が必要な場合にご利用いただくことができます。病室の中に個別の洗面所やトイレなどがございます。※病棟によって付帯設備が異なります。</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="facility-detail">
							<p class="facility-detail-title">大部屋</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/ni_thum3.png" alt=""></p>
							<p class="facility-detail-text">2人部屋4人部屋がございます。落ち着いた色調の設備でゆっくりと療養できる環境になっております。隣のベッドとはカーテンで仕切られており、プライバシーが保たれています。</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="facility-detail">
							<p class="facility-detail-title">デイルーム</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/ni_thum4.png" alt=""></p>
							<p class="facility-detail-text">大きな窓から優しい陽の光が差し込みます。温度、湿度も適正に保たれ、快適な空間になっています。住み慣れた家にいるようなくつろぎの空間になるよう努めています。</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="facility-detail">
							<p class="facility-detail-title">受付・談話コーナー</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/ni_thum5.png" alt=""></p>
							<p class="facility-detail-text">オープンな受付カウンターは職員の笑顔がよく見えます。ゆっくりお話ができる談話コーナーは、優しい光が差し込む心落ち着く場所です。病室やデイルームから独立した空間になっております。</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="facility-detail">
							<p class="facility-detail-title">多目的ホール</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/ni_thum6.png" alt=""></p>
							<p class="facility-detail-text">屋上庭園が見え、室内で競技もできるほどの大きなホールです。患者様の作業療法の他、地域の方をお招きしてさまざまなイベントが催されています。また、他医療機関や学校関連の研究発表にホールを利用することもあります｡</p>
						</div>
					</div>
				</div>
			</div>


			<div id="zaitaku" class="container facility-contents">
				<div class="row">
					<div class="col-md-12">
						<h4>在宅支援施設</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="facility-detail">
							<p class="facility-detail-title title-l">精神科デイケア デイナイトケア・ショートケア</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/zt_thum1.png" alt=""></p>
							<p class="facility-detail-text">多種多様なプログラムを通して、社会生活を送る上で必要な知識や技術を身に付け、自身を回復し、より健康的な生活が送れることを目指します。</p>
						</div>
					</div>

					<div class="col-md-6">
						<div class="facility-detail">
							<p class="facility-detail-title title-l">重度認知症患者デイケア すずらん</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/zt_thum2.png" alt=""></p>
							<p class="facility-detail-text">認知症の進行を予防し、認知症の行動・心理症状（不穏、興奮、介護拒否など）の緩和と精神的な安定を図る通所施設です。利用者様に合った「治療・リハビリ・介護」を提供します。</p>
						</div>
					</div>

					<div class="col-md-6">
						<div class="facility-detail">
							<p class="facility-detail-title title-l">訪問看護ステーションクローバー クローバーおおき</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/zt_thum3.png" alt=""></p>
							<p class="facility-detail-text">ご自宅等で安心して生活が送れるよう、医療スタッフがご自宅に伺い「看護」や｢リハビリ｣を提供します。</p>
						</div>
					</div>

					<div class="col-md-6">
						<div class="facility-detail">
							<p class="facility-detail-title title-l">グループホームルピナスⅠⅡⅢ（共同生活援助）</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/zt_thum4.png" alt=""></p>
							<p class="facility-detail-text">共同生活を通じて、地域社会の中で自立した生活を実現していくことを目的とした住居施設です。</p>
						</div>
					</div>
				</div>
			</div>


			<div id="nakaniwa" class="container facility-contents">
				<div class="row">
					<div class="col-md-12">
						<h4>中庭</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 facility-center">
						<div class="facility-detail">
							<p class="facility-detail-title">パティオ</p>
							<p class="facility-detail-thum"><img src="<?=get_template_directory_uri()?>/dest/img/facility/nn_thum1.png" alt=""></p>
							<p class="facility-detail-text">中央のシンボルツリーの周りを囲むようにベンチが備えられ、気候の良い時期は入院患者様やご家族の憩いの場となっています。また、ウォーキングや散歩に利用していただけます。</p>
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