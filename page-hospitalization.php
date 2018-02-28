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



		<div class="info">
			<div class="container info-main">
				<div class="row">
					<h3 class="col-md-12"><span>開放的な空間で<br>患者様一人一人に合わせた治療を提供します。</span></h3>
				</div>
				<div class="row info-main-article">
					<div class="col-md-6 info-main-thum thum1"><img src="<?=get_template_directory_uri()?>/dest/img/hospitalization/info_accent_1.png"></div>
					<div class="col-md-6 info-main-text mt-4">
						<p>当院では患者様が少しでも気持ちよく入院治療に専念して頂けるように、太陽の光が心地よく院内の空間に差し込み、柔らかな室内照明の下で落ち着いてお過ごしいただけるお部屋の設計になっております。<br><br>
							病室は個々のプライバシーが保たれるよう、大部屋でもカーテンを備え付けており、洋服ダンス、テーブル、椅子などもご用意し、自分の部屋にいるような空間でゆっくりと過ごしていただけます。</p>
					</div>
				</div>
			</div>

			<div class="container info-main">
				<div class="row">
					<h3 class="col-md-12"><span>入院生活を少しでも快適に。<br>気持の良い環境でお過ごしいただけます。</span></h3>
				</div>
				<div class="row info-main-article">
					<div class="col-md-6 info-main-thum thum2-1"><img src="<?=get_template_directory_uri()?>/dest/img/hospitalization/info_accent_1.png"></div>
					<div class="col-md-6 info-main-text">
						<h4>四季を感じる年間行事</h4>
						<p>春にふれあい祭、夏には夏祭り、秋には体育祭、冬には聖ルチア祭やクリスマスの集い、餅つき大会など、 難関を通して季節に合わせた行事を開催しています。<br><br>
							入院生活を送りながらも季節を感じれるよう取り組んでおります。</p>
					</div>
				</div>

				<div class="row row-reverse info-main-article">
					<div class="col-md-6 info-main-thum thum2-2"><img src="<?=get_template_directory_uri()?>/dest/img/hospitalization/info_accent_2.png"></div>
					<div class="col-md-6 info-main-text">
						<h4>開放的な空間で療養</h4>
						<p>どの病棟からでも中庭(パティオ)が見渡せるので、広々とした院内に降り注ぐ太陽の光を存分に感じることができます。<br>
							入院病棟には芝生と青空が広がる屋上を設け、患者様どうしや看護師との語らいの場に。また、多目的ホールは室内競技ができるほど広く、安心して競技ができるよう柔らかい床材が使用されていたり、廊下の柱や壁は丸みを帯びていたりと、所々に安心できる工夫が凝らされています。<br>
							療養病室はプライバシーが尊重され、自分の部屋にいるような空間で、ゆっくりと治療に専念していただけます。</p>
					</div>
				</div>

				<div class="row info-main-article">
					<div class="col-md-6 info-main-thum thum2-3"><img src="<?=get_template_directory_uri()?>/dest/img/hospitalization/info_accent_1.png"></div>
					<div class="col-md-6 info-main-text">
						<h4>美味しい食事で身体から健康に</h4>
						<p> 栄養士による献立を院内調理で提供しています。<br>
							栄養バランスのとれた温かく、美味しい食事を提供するだけでなく、患者様に応じた食事形態を考え、<br>
							年間行事に合わせて季節を感じられる行事食やバイキングを楽しんで頂けます。</p>
					</div>
				</div>
			</div>
		</div>


		<?php get_template_part('include/treatment'); ?>

		<div class="flow">
			<h3><span>入院までの流れ</span></h3>

			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="row row-reverse-sp">
							<div class="col-md-6 flow-textarea">
								<h4 class="flow-textarea-title">外来受診</h4>
								<p class="flow-textarea-text">入院希望の場合はまずご相談ください。医師の診察の中で入院の可否を判断させて頂いております。</p>
							</div>
							<div class="col-md-6 flow-thumarea">
								<p class="flow-thumarea-thum"><img src="<?=get_template_directory_uri()?>/dest/img/hospitalization/flow1.png"></p>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<p class="arrow1"><img src="<?=get_template_directory_uri()?>/dest/img/hospitalization/arrow.png"></p>
					</div>
					<div class="col-md-5">
						<div class="row row-reverse-sp">
							<div class="col-md-6 flow-textarea">
								<h4 class="flow-textarea-title">入院予約</h4>
								<p class="flow-textarea-text">患者様の状態やお部屋の状況によっては、予約とさせていただきます。</p>
							</div>
							<div class="col-md-6 flow-thumarea">
								<p class="flow-thumarea-thum"><img src="<?=get_template_directory_uri()?>/dest/img/hospitalization/flow2.png"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-none d-sm-block">
						<p class="arrow2"><img src="<?=get_template_directory_uri()?>/dest/img/hospitalization/arrow_gray.png"></p>
					</div>
					<div class="col-md-6">
						<p class="arrow3"><img src="<?=get_template_directory_uri()?>/dest/img/hospitalization/arrow.png"></p>
					</div>
				</div>
			</div>

			<div class="container mb-5">
				<div class="row row-reverse">
					<div class="col-md-5">
						<div class="row row-reverse-sp">
							<div class="col-md-6 flow-textarea">
								<h4 class="flow-textarea-title">入院準備</h4>
								<p class="flow-textarea-text">予約の場合は担当者により入院に際して必要になるものについて事前に説明させて頂きます。</p>
							</div>
							<div class="col-md-6 flow-thumarea">
								<p class="flow-thumarea-thum"><img src="<?=get_template_directory_uri()?>/dest/img/hospitalization/flow3.png"></p>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<p class="arrow4"><img src="<?=get_template_directory_uri()?>/dest/img/hospitalization/arrow.png"></p>
					</div>
					<div class="col-md-5">
						<div class="row row-reverse-sp">
							<div class="col-md-6 flow-textarea">
								<h4 class="flow-textarea-title">入院</h4>
								<p class="flow-textarea-text">予約日時に来院 して頂き、医師の診察を受けて頂きます。治療方針の説明や入院告知を経て、病室にご案内いたします。</p>
							</div>
							<div class="col-md-6 flow-thumarea">
								<p class="flow-thumarea-thum"><img src="<?=get_template_directory_uri()?>/dest/img/hospitalization/flow4.png"></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="needitem-contact">
				<h5 class="needitem-contact-title">入院に際してご用意していただくもの</h5>
				<div class="needitem-contact-main clearfix">
					<ul class="needitem-contact-main-list">
						<li>・保険証</li>
						<li>・各種医療証(前期高齢者受給者証、ひとり親医療証、原爆医療証など、お持ちの方) </li>
						<li>・限度額・標準負担減額認定証(利用される方のみ)</li>
						<li>・ご本人およびご家族の認印(シャチハタ以外)</li>
						<li>・預り金 50.000 円</li>
						<li>・衣類</li>
						<li>・寝間着</li>
						<li>・下着</li>
						<li>・タオル</li>
						<li>・バスタオル</li>
						<li>・歯ブラシセット</li>
					</ul>
					<ul class="needitem-contact-main-list">
						<li>・洗面器</li>
						<li>・ボディーソープ又は石鹸・ケース</li>
						<li>・ナイロンタオル(必要な方)</li>
						<li>・ブラシ(必要な方)</li>
						<li>・髭剃り(充電式又は電池式)</li>
						<li>・プラスチック製のコップ(お茶用)</li>
						<li>・ゴミ箱</li>
						<li>・義歯の方は義歯入れ</li>
						<li>・室内履き(歩行しやすいもの)</li>
						<li>・プラスチックハンガー2~3 本</li>
						<li>・洗濯洗剤(コインランドリーで洗濯される方)</li>
					</ul>
					<p class="needitem-contact-main-anno">※貴重品、危険物(刃物、コード類、ライター・陶器・ガラス等の割れ物等)、ノンアルコール飲料、電子タバコの持ち込みはお断りしております。入院後、職員がご一緒 に荷物の確認をさせて頂きますのでご了承ください。</p>
				</div>
			</div>
		</div>


		<div class="meeting">
			<div class="meeting-main">
				<h3><span>ご面会について</span></h3>
				<p class="meeting-main-text"> 面会時間 <span class="t-bld">13:00~19:00</span> となっております。<br>
					患者様の症状によって面会をお断わりすることがあります。<br>
					あらかじめ看護師にご相談ください。<br>
					面会は他の患者様の安静や治療の妨げにならないよう、ご協力お願いします。</p>
			</div>
			<div class="meeting-btnblock">
				<p class="meeting-btn meeting-btn-clr1"><a href="<?=esc_url(home_url('/outpatient/'))?>">>> 外来のご案内</a></p>
				<p class="meeting-btn meeting-btn-clr2"><a href="<?=esc_url(home_url('/facility/'))?>">>> 入院病棟のご紹介</a></p>
			</div>
		</div>
		
		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>