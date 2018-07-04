<?php global $settings; ?>
<header class="pageHeader">
	<div class="pageHeader-inner cf">
		<div class="container">
			<div class="row">
				<div class="col-6 col-md-4 col-lg-3">
					<p class="pageHeader-courses d-none d-lg-block">精神科・心療内科・内科</p>
					<?php if(is_home()) { ?>
					<h1 class="pageHeader-logo"><a href="<?=esc_url(home_url('/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/head_logo.png" srcset="<?=get_template_directory_uri()?>/dest/img/common/head_logo.svg" alt="社会医療法人 聖ルチア会 聖ルチア病院"></a></h1>
					<?php } else { ?>
					<p class="pageHeader-logo"><a href="<?=esc_url(home_url('/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/head_logo.png" srcset="<?=get_template_directory_uri()?>/dest/img/common/head_logo.svg" alt="社会医療法人 聖ルチア会 聖ルチア病院"></a></p>
					<?php } ?>
					<p class="pageHeader-courses d-block d-lg-none">精神科・心療内科・内科</p>
				</div>
				<div class="col-md-9 d-none d-lg-block">
					<ul class="s-navi">
						<li>
							<a href="<?=esc_url(home_url('/daycare/'))?>"><i class="fas fa-arrow-circle-right"></i> 在宅支援施設</a>
						</li>
						<li>
							<a href="<?=esc_url(home_url('/training-program/'))?>"><i class="fas fa-arrow-circle-right"></i> 専門医研修プログラム</a>
						</li>
						<li>
							<a href="<?=esc_url(home_url('/seminar/'))?>"><i class="fas fa-arrow-circle-right"></i> 家族セミナー</a>
						</li>
						<li>
							<a href="<?=esc_url(home_url('/medical-personnel/'))?>"><i class="fas fa-arrow-circle-right"></i> 医療関係者の方へ</a>
						</li>
						<li class="pageHeader-tel">
							<i class="fas fa-phone"></i> 0942-33-1581<small>(代表)</small>
						</li>
					</ul>
					<nav class="g-navi">
						<ul class="g-navi-list clearfix">
							<li id="gNavi1">
								<a href="<?=esc_url(home_url('/outpatient/'))?>"<?=$settings['slug']=='outpatient'||$settings['slug']=='second-opinion'?' class="g-navi-active"':"";?>>外来のご案内</a>
								<ul id="navCate1" class="g-nav-sab-list">
									<li><a href="<?=esc_url(home_url('/outpatient/#beginner'))?>">初めての方へ</a></li>
									<li><a href="<?=esc_url(home_url('/outpatient/#illness'))?>">診療対象となる疾患</a></li>
									<li><a href="<?=esc_url(home_url('/outpatient/#time'))?>">診療科目・診療時間</a></li>
									<li><a href="<?=esc_url(home_url('/outpatient/#flow'))?>">診察・治療の流れ</a></li>
									<li><a href="<?=esc_url(home_url('/second-opinion/'))?>">セカンドオピニオンについて</a></li>
								</ul>
							</li>
							<li id="gNavi2">
								<a href="<?=esc_url(home_url('/hospitalization/'))?>"<?=$settings['slug']=='hospitalization'?' class="g-navi-active"':"";?>>入院のご案内</a>
								<ul id="navCate2" class="g-nav-sab-list">
									<li><a href="<?=esc_url(home_url('/hospitalization/#flow'))?>">入院までの流れ</a></li>
									<li><a href="<?=esc_url(home_url('/hospitalization/#treatment'))?>">治療について</a></li>
									<li><a href="<?=esc_url(home_url('/hospitalization/#meeting'))?>">ご面会について</a></li>
								</ul>
							</li>
							<li id="gNavi3">
								<a href="<?=esc_url(home_url('/overview/'))?>"<?=$settings['slug']=='facility'||$settings['slug']=='overview'||$settings['slug']=='doctor'||$settings['slug']=='history'||$settings['slug']=='access'?' class="g-navi-active"':"";?>>病院概要</a>
								<ul id="navCate3" class="g-nav-sab-list">
									<li><a href="<?=esc_url(home_url('/overview/#greeting'))?>">理事長挨拶</a></li>
									<li><a href="<?=esc_url(home_url('/overview/#vision'))?>">病院理念</a></li>
									<li><a href="<?=esc_url(home_url('/facility/'))?>">施設案内</a></li>
									<li><a href="<?=esc_url(home_url('/doctor/'))?>">医師紹介</a></li>
									<li><a href="<?=esc_url(home_url('/overview/#history'))?>">沿革</a></li>
								</ul>
							</li>
							<li id="gNavi4">
								<a href="<?=esc_url(home_url('/recruit/'))?>"<?=$settings['slug']=='recruit'||$settings['slug']=='working-environment'?' class="g-navi-active"':"";?>>求人案内</a>
								<ul id="navCate4" class="g-nav-sab-list">
									<li><a href="<?=esc_url(home_url('/recruit/'))?>">求人情報</a></li>
									<li><a href="<?=esc_url(home_url('/working-environment/'))?>">働きやすい労働環境</a></li>
									<li><a href="<?=esc_url(home_url('/working-environment/#welfare'))?>">福利厚生</a></li>
									<li><a href="<?=esc_url(home_url('/working-environment/#tanpopo'))?>">子育て支援</a></li>
									<li><a href="<?=esc_url(home_url('/working-environment/#program'))?>">教育プログラム</a></li>
								</ul>
							</li>
							<li><a href="<?=esc_url(home_url('/access/'))?>">アクセス</a></li>
<!--

							<li>
								<a href="<?=esc_url(home_url('/info/'))?>"<?=$settings['slug']=='info'||is_single()||is_archive()?' class="g-navi-active"':"";?>>お知らせ</a>
								<ul id="navCate5" class="g-nav-sab-list">
									<li><a href="<?=esc_url(home_url('/seminar/'))?>">家族セミナー</a></li>
								</ul>
							</li>
-->
							<li><a href="<?=esc_url(home_url('/contact/'))?>"<?=$settings['slug']=='contact'?' class="g-navi-active"':"";?>>お問い合わせ</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-6 col-md-8 d-block d-lg-none">
					<ul class="spBtn">
						<li>
							<a href="tel:0942331581">
								<i class="fas fa-phone"></i>
								<span class="spBtn-text">お電話</span>
							</a>
						</li>
						<li>
							<a href="<?=esc_url(home_url('/contact/'))?>">
								<i class="fas fa-envelope"></i>
								<span class="spBtn-text">問合わせ</span>
							</a>
						</li>
						<li>
							<a class="spBtnTrigger" href="#">
								<div class="spBtnTrigger-icon">
									<span class="spBtnTrigger-line spBtnTrigger-line_top"></span>
									<span class="spBtnTrigger-line spBtnTrigger-line_middle"></span>
									<span class="spBtnTrigger-line spBtnTrigger-line_bottom"></span>
								</div>
								<span class="spBtn-text">メニュー</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="sp-navi">
		<nav class="sp-navi-inner">
			<ul class="sp-navi-list">
				<li><a href="<?=esc_url(home_url('/'))?>"><i class="fas fa-angle-right"></i> トップページ</a></li>
				<li>
					<a href="<?=esc_url(home_url('/outpatient/'))?>"><i class="fas fa-angle-right"></i> 外来について</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/outpatient/#beginner'))?>"><i class="fas fa-angle-right"></i> 初めての方へ</a></li>
						<li><a href="<?=esc_url(home_url('/outpatient/#illness'))?>"><i class="fas fa-angle-right"></i> 診療対象となる疾患</a></li>
						<li><a href="<?=esc_url(home_url('/outpatient/#time'))?>"><i class="fas fa-angle-right"></i> 診療科目・診療時間</a></li>
						<li><a href="<?=esc_url(home_url('/outpatient/#flow'))?>"><i class="fas fa-angle-right"></i> 診察・治療の流れ</a></li>
						<li><a href="<?=esc_url(home_url('/second-opinion/'))?>"><i class="fas fa-angle-right"></i> セカンドオピニオンについて</a></li>
					</ul>
				</li>
				<li>
					<a href="<?=esc_url(home_url('/hospitalization/'))?>"><i class="fas fa-angle-right"></i> 入院について</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/hospitalization/#flow'))?>"><i class="fas fa-angle-right"></i> 入院までの流れ</a></li>
						<li><a href="<?=esc_url(home_url('/hospitalization/#treatment'))?>"><i class="fas fa-angle-right"></i> 治療について</a></li>
						<li><a href="<?=esc_url(home_url('/hospitalization/#meeting'))?>"><i class="fas fa-angle-right"></i> ご面会について</a></li>
					</ul>
				</li>
				<li>
                  <a href="<?=esc_url(home_url('/overview/'))?>"><i class="fas fa-angle-right"></i> 病院概要</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/overview/#greeting'))?>"><i class="fas fa-angle-right"></i> 理事長挨拶</a></li>
						<li><a href="<?=esc_url(home_url('/overview/#vision'))?>"><i class="fas fa-angle-right"></i> 病院理念</a></li>
						<li><a href="<?=esc_url(home_url('/facility/'))?>"><i class="fas fa-angle-right"></i> 施設案内</a></li>
						<li><a href="<?=esc_url(home_url('/doctor/'))?>"><i class="fas fa-angle-right"></i> 医師紹介</a></li>
						<li><a href="<?=esc_url(home_url('/overview/#history'))?>"><i class="fas fa-angle-right"></i> 沿革</a></li>
					</ul>
				</li>
				<li>
                  <a href="<?=esc_url(home_url('/recruit/'))?>"><i class="fas fa-angle-right"></i> 求人情報</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/recruit/'))?>"><i class="fas fa-angle-right"></i> 求人情報</a></li>
						<li><a href="<?=esc_url(home_url('/working-environment/'))?>"><i class="fas fa-angle-right"></i> 働きやすい労働環境</a></li>
						<li><a href="<?=esc_url(home_url('/working-environment/#welfare'))?>"><i class="fas fa-angle-right"></i> 福利厚生</a></li>
						<li><a href="<?=esc_url(home_url('/working-environment/#tanpopo'))?>"><i class="fas fa-angle-right"></i> 子育て支援</a></li>
						<li><a href="<?=esc_url(home_url('/working-environment/#program'))?>"><i class="fas fa-angle-right"></i> 教育プログラム</a></li>
					</ul>
				</li>

				<li>
					<a href="<?=esc_url(home_url('/access/'))?>"><i class="fas fa-angle-right"></i> アクセス</a>
				</li>

<!--
				<li>
					<a href="<?=esc_url(home_url('/recruit/'))?>"><i class="fas fa-angle-right"></i> お知らせ</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/seminar/'))?>"><i class="fas fa-angle-right"></i> 家族セミナー</a></li>
					</ul>
				</li>
-->
				<li><a href="<?=esc_url(home_url('/training-program/'))?>"><i class="fas fa-angle-right"></i> 専門医研修プログラム</a></li>
				<li><a href="<?=esc_url(home_url('/medical-personnel/'))?>"><i class="fas fa-angle-right"></i> 医療関係者の方へ</a></li>
				<li><a href="<?=esc_url(home_url('/seminar/'))?>"><i class="fas fa-angle-right"></i> 家族セミナー</a></li>
				<li>
				<li><a href="<?=esc_url(home_url('/info/'))?>"><i class="fas fa-angle-right"></i> お知らせ</a></li>
				<li><a href="<?=esc_url(home_url('/daycare/'))?>"><i class="fas fa-angle-right"></i> 在宅支援施設</a>
					<ul>

						<li><a href="<?=esc_url(home_url('/daycare/'))?>"><i class="fas fa-angle-right"></i> 精神科デイケア、デイナイトケア、ショートケア</a></li>
						<li><a href="<?=esc_url(home_url('/suzuran/'))?>"><i class="fas fa-angle-right"></i> 重度認知症患者デイケア　すずらん</a></li>
						<li><a href="<?=esc_url(home_url('/clover/'))?>"><i class="fas fa-angle-right"></i> 訪問介護ステーション　クローバー</a></li>
						<li><a href="<?=esc_url(home_url('/lupinus/'))?>"><i class="fas fa-angle-right"></i> グループホーム　ルピナス</a></li>
					</ul>
				</li>
			</ul>
<!--
			<p class="sp-navi-address">〒830-0047　福岡県久留米市津福本町1012</p>
			<p class="sp-navi-tel"><i class="fas fa-phone"></i><span class="sp-navi-tel-num">0942-33-1581</span> (代表)</p>
			<p class="sp-navi-fax">FAX 0942-33-1586</p>
			<p class="sp-navi-btn"><a href="tel:0942331581">電話をかける</a></p>
			<p class="sp-navi-btn"><a href="<?=esc_url(home_url('/contact/'))?>">お問合わせフォーム</a></p>
-->
		</nav>
	</div>
	
</header>