<div class="build-link">
	<div class="container">
		<h3><span>施設一覧</span></h3>
		<div class="row">
			<div class="col-md-3">
				<div class="build-link-item">
					<a href="<?=esc_url(home_url('/lupinus/'))?>"<?=$current=='lupinus'?' class="active"':''?>>
						<img src="<?=get_template_directory_uri()?>/dest/img/clover/list_lupinus_thum.png">
						<h4 class="build-link-item-title">グループホーム<br>ルピナス</h4>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="build-link-item">
					<a href="<?=esc_url(home_url('/clover/'))?>"<?=$current=='clover'?' class="active"':''?>>
						<img src="<?=get_template_directory_uri()?>/dest/img/clover/list_clover_thum.png">
						<h4 class="build-link-item-title">訪問介護ステーション<br>クローバー</h4>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="build-link-item">
					<a href="<?=esc_url(home_url('/daycare/'))?>"<?=$current=='daycare'?' class="active"':''?>>
						<img src="<?=get_template_directory_uri()?>/dest/img/clover/list_daycare_thum.png">
						<h4 class="build-link-item-title">精神科デイケア、デイナイトケア、ショートケア</h4>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="build-link-item">
					<a href="<?=esc_url(home_url('/suzuran/'))?>"><?=$current=='suzuran'?' class="active"':''?>
						<img src="<?=get_template_directory_uri()?>/dest/img/clover/list_suzuran_thum.png">
						<h4 class="build-link-item-title">重度認知症患者デイケア<br>すずらん</h4>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>