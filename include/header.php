<?php global $settings; ?>
<header class="pageHeader">
	<div class="pageHeader-inner cf">
		<div class="container">
			<div class="row">
				<div class="col-9 col-md-3">
					<?php if(is_home()) { ?>
					<h1 class="pageHeader-logo"><a href="<?=esc_url(home_url('/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/head_logo.png" srcset="<?=get_template_directory_uri()?>/dest/img/common/head_logo.svg" alt="社会医療法人 聖ルチア会 聖ルチア病院"></a></h1>
					<?php } else { ?>
					<p class="pageHeader-logo"><a href="<?=esc_url(home_url('/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/head_logo.png" srcset="<?=get_template_directory_uri()?>/dest/img/common/head_logo.svg" alt="社会医療法人 聖ルチア会 聖ルチア病院"></a></p>
					<?php } ?>
				</div>
				<div class="col-md-9 d-none d-md-block">
					<ul class="s-navi">
						<li>
							<a href="<?=esc_url(home_url('/seminar/'))?>"><i class="fas fa-arrow-circle-right"></i> 家族セミナー</a>
						</li>
						<li>
							<a href="<?=esc_url(home_url('/clover/'))?>"><i class="fas fa-arrow-circle-right"></i> 社会復帰支援施設</a>
						</li>
						<li>
							<a href="<?=esc_url(home_url('/medical-personnel/'))?>"><i class="fas fa-arrow-circle-right"></i> 医療関係者の方へ</a>
						</li>
					</ul>
					<nav class="g-navi">
						<ul class="g-navi-list clearfix">
							<li id="gNavi1">
								<a href="<?=esc_url(home_url('/outpatient/'))?>"<?=$settings['slug']=='outpatient'||$settings['slug']=='second-opinion'?' class="g-navi-active"':"";?>>外来受診</a>
								<ul id="navCate1" class="g-nav-sab-list">
									<li><a href="<?=esc_url(home_url('/outpatient/'))?>">外来のご案内</a></li>
									<li><a href="<?=esc_url(home_url('/outpatient/#course'))?>">診療科目</a></li>
									<li><a href="<?=esc_url(home_url('/outpatient/#flow'))?>">診察・治療の流れ</a></li>
									<li><a href="<?=esc_url(home_url('/second-opinion/'))?>">セカンドオピニオンについて</a></li>
								</ul>
							</li>
							<li id="gNavi2">
								<a href="<?=esc_url(home_url('/hospitalization/'))?>"<?=$settings['slug']=='hospitalization'?' class="g-navi-active"':"";?>>入院治療</a>
								<ul id="navCate2" class="g-nav-sab-list">
									<li><a href="<?=esc_url(home_url('/hospitalization/'))?>">入院のご案内</a></li>
									<li><a href="<?=esc_url(home_url('/hospitalization/#treatment'))?>">治療方針・治療内容</a></li>
									<li><a href="<?=esc_url(home_url('/hospitalization/#flow'))?>">入院までの流れ</a></li>
								</ul>
							</li>
							<li id="gNavi3">
								<a href="<?=esc_url(home_url('/overview/'))?>"<?=$settings['slug']=='facility'||$settings['slug']=='overview'||$settings['slug']=='doctor'||$settings['slug']=='history'||$settings['slug']=='access'?' class="g-navi-active"':"";?>>病院紹介</a>
								<ul id="navCate3" class="g-nav-sab-list">
									<li><a href="<?=esc_url(home_url('/overview/'))?>">病院概要</a></li>
									<li><a href="<?=esc_url(home_url('/facility/'))?>">施設案内</a></li>
									<li><a href="<?=esc_url(home_url('/doctor/'))?>">医師紹介</a></li>
									<li><a href="<?=esc_url(home_url('/history/'))?>">沿革</a></li>
									<li><a href="<?=esc_url(home_url('/access/'))?>">アクセス</a></li>
								</ul>
							</li>
							<li id="gNavi4">
								<a href="<?=esc_url(home_url('/recruit/'))?>"<?=$settings['slug']=='recruit'||$settings['slug']=='working-environment'?' class="g-navi-active"':"";?>>求人案内</a>
								<ul id="navCate4" class="g-nav-sab-list">
									<li><a href="<?=esc_url(home_url('/recruit/'))?>">求人情報</a></li>
									<li><a href="<?=esc_url(home_url('/working-environment/'))?>">働きやすい労働環境</a></li>
								</ul>
							</li>
							<li><a href="<?=esc_url(home_url('/contact/'))?>"<?=$settings['slug']=='contact'?' class="g-navi-active"':"";?>>お問い合わせ</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-3 col-md-8 d-block d-md-none">
					<p class="sp-btn">
						<a class="sp-btn-trigger" href="#">
							<span class="sp-btn-trigger-top"></span>
							<span class="sp-btn-trigger-middle"></span>
							<span class="sp-btn-trigger-bottom"></span>
						</a>
						<span class="sp-btn-text">メニュー</span>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="sp-navi">
		<nav class="sp-navi-inner">
			<ul class="sp-navi-list">
				<li><a href="<?=esc_url(home_url('/'))?>"><i class="fas fa-angle-right"></i> トップページ</a></li>
				<li>
					<a href="<?=esc_url(home_url('/outpatient/'))?>"><i class="fas fa-angle-right"></i> 外来受診</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/outpatient/'))?>"><i class="fas fa-angle-right"></i> 外来のご案内</a></li>
						<li><a href="<?=esc_url(home_url('/outpatient/#course'))?>"><i class="fas fa-angle-right"></i> 診療科目</a></li>
						<li><a href="<?=esc_url(home_url('/outpatient/#flow'))?>"><i class="fas fa-angle-right"></i> 診察・治療の流れ</a></li>
						<li><a href="<?=esc_url(home_url('/second-opinion/'))?>"><i class="fas fa-angle-right"></i> セカンドオピニオンについて</a></li>
					</ul>
				</li>
				<li>
					<a href="<?=esc_url(home_url('/hospitalization/'))?>"><i class="fas fa-angle-right"></i> 入院治療</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/hospitalization/'))?>"><i class="fas fa-angle-right"></i> 入院のご案内</a></li>
						<li><a href="<?=esc_url(home_url('/hospitalization/#treatment'))?>"><i class="fas fa-angle-right"></i> 治療方針・治療内容</a></li>
						<li><a href="<?=esc_url(home_url('/hospitalization/#flow'))?>"><i class="fas fa-angle-right"></i> 入院までの流れ</a></li>
					</ul>
				</li>
				<li>
					<a href="<?=esc_url(home_url('/overview/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_l.png" alt=""> 病院紹介</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/overview/'))?>"><i class="fas fa-angle-right"></i> 病院概要</a></li>
						<li><a href="<?=esc_url(home_url('/facility/'))?>"><i class="fas fa-angle-right"></i> 施設案内</a></li>
						<li><a href="<?=esc_url(home_url('/doctor/'))?>"><i class="fas fa-angle-right"></i> 医師紹介</a></li>
						<li><a href="<?=esc_url(home_url('/history/'))?>"><i class="fas fa-angle-right"></i> 沿革</a></li>
						<li><a href="<?=esc_url(home_url('/access/'))?>"><i class="fas fa-angle-right"></i> アクセス</a></li>
					</ul>
				</li>
				<li>
					<a href="<?=esc_url(home_url('/recruit/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_l.png" alt=""> 求人情報</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/recruit/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 求人情報</a></li>
						<li><a href="<?=esc_url(home_url('/working-environment/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 働きやすい労働環境</a></li>
					</ul>
				</li>
				<li><a href="<?=esc_url(home_url('/medical-personnel/'))?>"><i class="fas fa-angle-right"></i> 医療関係者の方へ</a></li>
				<li><a href="<?=esc_url(home_url('/seminar/'))?>"><i class="fas fa-angle-right"></i> 家族セミナー</a></li>
				<li><a href="<?=esc_url(home_url('/info/'))?>"><i class="fas fa-angle-right"></i> 新着情報</a></li>
				<li>
					<a href="<?=esc_url(home_url('/clover/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_l.png" alt=""> 社会復帰支援</a>
					<ul>
						<li><a href="<?=esc_url(home_url('/clover/'))?>"><i class="fas fa-angle-right"></i> 訪問介護ステーション　クローバー</a></li>
						<li><a href="<?=esc_url(home_url('/daycare/'))?>"><i class="fas fa-angle-right"></i> 精神科デイケア、デイナイトケア、ショートケア</a></li>
						<li><a href="<?=esc_url(home_url('/suzuran/'))?>"><i class="fas fa-angle-right"></i> 重度認知症患者デイケア　すずらん</a></li>
						<li><a href="<?=esc_url(home_url('/lupinus/'))?>"><i class="fas fa-angle-right"></i> グループホーム　ルピナス</a></li>
					</ul>
				</li>
			</ul>
			<p class="sp-navi-address">〒830-0047　福岡県久留米市津福本町1012</p>
			<p class="sp-navi-tel"><i class="fas fa-phone"></i><span class="sp-navi-tel-num">0942-33-1581</span> (代表)</p>
			<p class="sp-navi-fax">FAX 0942-33-1586</p>
			<p class="sp-navi-btn"><a href="tel:0942331586">電話をかける</a></p>
			<p class="sp-navi-btn"><a href="<?=esc_url(home_url('/contact/'))?>">お問合わせフォーム</a></p>
		</nav>
	</div>
	
</header>