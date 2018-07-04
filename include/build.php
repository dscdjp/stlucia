<div class="build-link">
	<div class="container">
		<h2 class="h-2"><span>施設一覧</span></h2>
		<div class="row">
			<div class="col-6 col-md-3">
				<div class="build-link-item">
					<a href="<?=esc_url(home_url('/daycare/'))?>"<?=$current=='daycare'?' class="active"':''?>>
						<img src="<?=get_template_directory_uri()?>/dest/img/common/list_daycare_thum.png">
						<h3 class="build-link-item-title">精神科デイケア、デイナイトケア、ショートケア</h3>
					</a>
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="build-link-item">
					<a href="<?=esc_url(home_url('/suzuran/'))?>"<?=$current=='suzuran'?' class="active"':''?>>
						<img src="<?=get_template_directory_uri()?>/dest/img/common/list_suzuran_thum.png">
						<h3 class="build-link-item-title">重度認知症患者デイケア<br class="d-none d-md-block">すずらん</h3>
					</a>
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="build-link-item">
					<a href="<?=esc_url(home_url('/clover/'))?>"<?=$current=='clover'?' class="active"':''?>>
						<img src="<?=get_template_directory_uri()?>/dest/img/common/list_clover_thum.png">
						<h3 class="build-link-item-title">訪問介護ステーション<br class="d-none d-md-block">クローバー</h3>
					</a>
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="build-link-item">
					<a href="<?=esc_url(home_url('/lupinus/'))?>"<?=$current=='lupinus'?' class="active"':''?>>
						<img src="<?=get_template_directory_uri()?>/dest/img/common/list_lupinus_thum.png">
						<h3 class="build-link-item-title">グループホーム<br class="d-none d-md-block">ルピナス</h3>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>