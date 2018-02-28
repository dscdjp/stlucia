<?php get_template_part('include/variables'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_template_part('include/head_tag'); ?>
</head>

<body>

	<?php get_template_part('include/header'); ?>
	
	<div class="sp-navi">
		<div class="sp-navi-inner">
			<ul class="sp-navi-list">
				<li><a href="<?=esc_url(home_url('/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_l.png" alt=""> トップページ</a></li>
				<li>
					<a href="<?=esc_url(home_url('/outpatient/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_l.png" alt=""> 外来受診</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/outpatient/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 外来のご案内</a></li>
						<li><a href="<?=esc_url(home_url('/second-opinion/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> セカンドオピニオンについて</a></li>
					</ul>
				</li>
				<li>
					<a href="<?=esc_url(home_url('/hospitalization/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_l.png" alt="<?=esc_url(home_url('/hospitalization/'))?>"> 入院治療</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/hospitalization/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 入院のご案内</a></li>
						<li><a href="<?=esc_url(home_url('/hospitalization/#treatment'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 治療方針・治療内容</a></li>
					</ul>
				</li>
				<li>
					<a href="<?=esc_url(home_url('/overview/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_l.png" alt=""> 病院紹介</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/overview/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 病院概要</a></li>
						<li><a href="<?=esc_url(home_url('/facility/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 施設案内</a></li>
						<li><a href="<?=esc_url(home_url('/doctor/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 医師紹介</a></li>
						<li><a href="<?=esc_url(home_url('/history/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 沿革</a></li>
						<li><a href="<?=esc_url(home_url('/access/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> アクセス</a></li>
					</ul>
				</li>
				<li>
					<a href="<?=esc_url(home_url('/recruit/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_l.png" alt=""> 求人情報</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/recruit/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 求人情報</a></li>
						<li><a href="<?=esc_url(home_url('/child-raising/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 子育て支援</a></li>
					</ul>
				</li>
				<li><a href="<?=esc_url(home_url('/medical-personnel/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_l.png" alt=""> 医療関係者の方へ</a></li>
				<li><a href="<?=esc_url(home_url('/seminar/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_l.png" alt=""> 家族セミナー</a></li>
				<li><a href="<?=esc_url(home_url('/info/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_l.png" alt=""> 新着情報</a></li>
				<li>
					<a href="<?=esc_url(home_url('/clover/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_l.png" alt=""> 社会復帰支援</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/clover/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 訪問介護ステーション　クローバー</a></li>
						<li><a href="<?=esc_url(home_url('/daycare/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 精神科デイケア、デイナイトケア、ショートケア</a></li>
						<li><a href="<?=esc_url(home_url('/suzuran/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 重度認知症患者デイケア　すずらん</a></li>
						<li><a href="<?=esc_url(home_url('/lupinus/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> グループホーム　ルピナス</a></li>
					</ul>
				</li>
			</ul>
			<p class="sp-navi-address">〒830-0047　福岡県久留米市津福本町1012</p>
			<p class="sp-navi-tel"><img src="<?=get_template_directory_uri()?>/dest/img/common/icon_tel_white.png" alt=""><span class="sp-navi-tel-num">0942-33-1581</span> (代表)</p>
			<p class="sp-navi-fax">FAX 0942-33-1586</p>
			<p class="sp-navi-btn"><a href="tel:0942331586">電話をかける</a></p>
			<p class="sp-navi-btn"><a href="<?=esc_url(home_url('/contact/'))?>">お問合わせフォーム</a></p>
		</div>
	</div>

    <main class="main">
        <div class="fv">
            <ul class="fv-slider">
                <li class="fv-slider-thum fv-slider-1">
					<span class="fv-slider-1-chach">あなたの心の<br>道しるべで<br>ありたい。</span>
					<span class="fv-slider-accent"><img src="dest/img/index/fv_accent.png" alt=""></span>
				</li>
				<li class="fv-slider-thum fv-slider-2">
					<span class="fv-slider-1-chach">あなたの心の<br>道しるべで<br>ありたい。</span>
					<span class="fv-slider-accent"><img src="dest/img/index/fv_accent.png" alt=""></span>
				</li>
				<li class="fv-slider-thum fv-slider-3">
					<span class="fv-slider-1-chach">あなたの心の<br>道しるべで<br>ありたい。</span>
					<span class="fv-slider-accent"><img src="dest/img/index/fv_accent.png" alt=""></span>
				</li>
            </ul>
        </div>
		<div class="info">
			<h2>診療案内</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-6 info-l info-link-1">
						<a href="<?=esc_url(home_url('/outpatient/'))?>">
							<h3>外来受診</h3>
							<p class="info-l-text">まずはお電話またはメールでお気軽に診察や病気で不安な事、気になることをご相談ください。専門スタッフがご相談をお伺いし、患者様に合わせた対応をご検討します。</p>
							<p class="info-l-btn">外来受診はこちら</p>
							<p class="info-l-accent"><img src="<?=get_template_directory_uri()?>/dest/img/index/info_accent_1.png" alt=""></p>
						</a>
					</div>
					<div class="col-md-6 info-l info-link-2">
						<a href="<?=esc_url(home_url('/hospitalization/'))?>">
							<h3>入院治療</h3>
							<p class="info-l-text">開放的な空間と高い精神医療技術で患者様一人ひとりに合わせた最良の治療をご提供します。退院後のケアまで含めたカリキュラムに則って専門医が適切な処置を行います。</p>
							<p class="info-l-btn">入院治療はこちら</p>
							<p class="info-l-accent"><img src="<?=get_template_directory_uri()?>/dest/img/index/info_accent_2.png" alt=""></p>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 info-s info-link-3">
						<a href="<?=esc_url(home_url('/facility/'))?>">
							<img src="<?=get_template_directory_uri()?>/dest/img/index/info_thum_03.png" alt="">
							<div class="info-s-block">
								<div class="info-s-block-inner">
									<p class="info-s-text">
										<span class="info-s-text-l">院内の雰囲気</span>
										<span class="info-s-text-s">を感じる</span>
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 info-s info-link-4">
						<a href="<?=esc_url(home_url('/access/'))?>">
							<img src="<?=get_template_directory_uri()?>/dest/img/index/info_thum_04.png" alt="">
							<div class="info-s-block">
								<div class="info-s-block-inner">
									<p class="info-s-text">
										<span class="info-s-text-l">当院への行き方</span>
										<span class="info-s-text-s">を調べる</span>
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 info-s info-link-5">
						<a href="<?=esc_url(home_url('/recruit/'))?>">
							<img src="<?=get_template_directory_uri()?>/dest/img/index/info_thum_05.png" alt="">
							<div class="info-s-block">
								<div class="info-s-block-inner">
									<p class="info-s-text">
										<span class="info-s-text-l">求人情報</span>
										<span class="info-s-text-s">を調べる</span>
									</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="news">
			<h2>新着情報</h2>
			<ul class="news-tab container clearfix">
				<li><a href="#newsAll" class="active">全カテゴリー</a></li>
				<li><a href="#newsHosp">病院について</a></li>
				<li><a href="#newsConsulte">診察・診療について</a></li>
				<li><a href="#newsEvent">イベント情報</a></li>
			</ul>
			<div class="news-main">
				<div id="newsAll" class="container news-links active">
					<div class="row">
						<div class="col-6 col-md-3">
							<div class="news-links-card">
								<a href="">
									<p class="news-links-card-date">2017/12/12</p>
									<p class="news-links-card-thum"><img src="<?=get_template_directory_uri()?>/dest/img/index/news_thum_01.png" alt=""></p>
									<p class="news-links-card-text">2017年度 聖ルチア祭を行いました</p>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div id="newsHosp" class="container news-links">
					<div class="row">
						<div class="col-6 col-md-3">
							<div class="news-links-card">
								<a href="">
									<p class="news-links-card-date">2017/12/12</p>
									<p class="news-links-card-thum"><img src="<?=get_template_directory_uri()?>/dest/img/index/news_thum_01.png" alt=""></p>
									<p class="news-links-card-text">2017年度 聖ルチア祭を行いました</p>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div id="newsConsulte" class="container news-links">
					<div class="row">
						<div class="col-6 col-md-3">
							<div class="news-links-card">
								<a href="">
									<p class="news-links-card-date">2017/6/11</p>
									<p class="news-links-card-thum"><img src="<?=get_template_directory_uri()?>/dest/img/index/news_thum_02.png" alt=""></p>
									<p class="news-links-card-text">ルピナスⅢをオープンしました</p>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div id="newsEvent" class="container news-links">
					<div class="row">
						<div class="col-6 col-md-3">
							<div class="news-links-card">
								<a href="">
									<p class="news-links-card-date">2017/12/12</p>
									<p class="news-links-card-thum"><img src="<?=get_template_directory_uri()?>/dest/img/index/news_thum_01.png" alt=""></p>
									<p class="news-links-card-text">2017年度 聖ルチア祭を行いました</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<p class="news-btn"><a href="<?=esc_url(home_url('/info/'))?>">新着情報一覧はこちら</a></p>
		</div>

		<ul class="main-contents-slider">
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_01.png" alt="福岡精神科のロビー"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_02.png" alt="福岡心療内科のエレベーターホール"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_03.png" alt="福岡内科の外廊下"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_04.png" alt="久留米精神科のデイルーム"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_01.png" alt="久留米心療内科のロビー"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_02.png" alt="久留米内科のエレベーターホール"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_03.png" alt="福岡県精神病院の外廊下"></li>
			<li><img src="<?=get_template_directory_uri()?>/dest/img/index/slider_04.png" alt="久留米市精神病院のデイルーム"></li>
		</ul>

		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>