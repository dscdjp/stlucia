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
							<a href="<?=esc_url(home_url('/seminar/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/arrow_sublink.png" alt=""> 家族セミナー</a>
						</li>
						<li>
							<a href="<?=esc_url(home_url('/clover/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/arrow_sublink.png" alt=""> 社会復帰支援施設</a>
						</li>
						<li>
							<a href="<?=esc_url(home_url('/medical-personnel/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/arrow_sublink.png" alt=""> 医療関係者の方へ</a>
						</li>
					</ul>
					<nav class="g-navi">
						<ul class="g-navi-list clearfix">
							<li><a href="<?=esc_url(home_url('/outpatient/'))?>"<?=$settings['slug']=='outpatient'?' class="g-navi-active"':"";?>>外来受診</a></li>
							<li><a href="<?=esc_url(home_url('/hospitalization/'))?>"<?=$settings['slug']=='hospitalization'?' class="g-navi-active"':"";?>>入院治療</a></li>
							<li><a href="<?=esc_url(home_url('/overview/'))?>"<?=$settings['slug']=='facility'?' class="g-navi-active"':"";?>>病院紹介</a></li>
							<li><a href="<?=esc_url(home_url('/recruit/'))?>"<?=$settings['slug']=='recruit'?' class="g-navi-active"':"";?>>求人案内</a></li>
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
						<li><a href="<?=esc_url(home_url('/working-environment/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/common/sp_arrow_s.png" alt=""> 働きやすい労働環境</a></li>
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
		</nav>
	</div>
	
</header>