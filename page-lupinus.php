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


		<?php get_template_part_with_var_array('include/build',array('current'=>'lupinus')); ?>


		<div class="content-title">
			<div class="container">
				<h2 class="h-2"><span>共同生活を通して、<br>自立した生活の実現を目指します。</span></h2>
				<div class="row">
					<p class="col-md-12 content-title-text">共同生活を通して、地域社会の中で自立した生活を実現していくことを目的とした住居施設です。<br>ご家族との同居やひとり暮らしを目指す方に、社会復帰のサポート施設としてご利用いただいております。</p>
				</div>
			</div>
		</div>

		<div class="user">
			<div class="container info-main">
				<div class="row">
					<div class="col-md-8">
						<h3 class="user-title">ご利用について</h3>
						<p class="user-text">同じ悩みを持った仲間と協力し合いながら新しい生活に向けてステップアップしていただけます。施設はアパートタイプとシェアタイプの２種類あり、個々のニーズに合わせてご利用できます。入居費用、手続き等につきましては、お気軽に当院までお問い合わせ下さい。</p>
					</div>
				</div>
			</div>
		</div>


		<div class="thumblock">
			<div class="container">
				<h2 class="h-2"><span>居室の様子</span></h2>
				<div class="row">
					<div class="col-md-6">
						<h4>アパートタイプ</h4>
						<div class="thumblock-build apart">
							<ul class="thumblock-build-main">
								<li id="item1" class="active">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_apart_thum1.png"></p>
									<p class="thumblock-build-main-text">キッチン</p>
								</li>
								<li id="item2">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_apart_thum2.png"></p>
									<p class="thumblock-build-main-text">ベッド</p>
								</li>
								<li id="item3">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_apart_thum3.png"></p>
									<p class="thumblock-build-main-text">室内</p>
								</li>
								<li id="item4">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_apart_thum4.png"></p>
									<p class="thumblock-build-main-text">室内2</p>
								</li>
								<li id="item5">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_apart_thum5.png"></p>
									<p class="thumblock-build-main-text">ユニットバス</p>
								</li>
							</ul>

							<div class="row">
								<div class="col-md-3 col-4">
									<p id="btn1" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_apart_thum1.png"></p>
								</div>
								<div class="col-md-3 col-4">
									<p id="btn2" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_apart_thum2.png"></p>
								</div>
								<div class="col-md-3 col-4">
									<p id="btn3" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_apart_thum3.png"></p>
								</div>
								<div class="col-md-3 col-4">
									<p id="btn4" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_apart_thum4.png"></p>
								</div>
								<div class="col-md-3 col-4">
									<p id="btn5" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_apart_thum5.png"></p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<h4>シェアタイプ</h4>
						<div class="thumblock-build share">
							<ul class="thumblock-build-main">
								<li id="item6" class="active">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum1.png"></p>
									<p class="thumblock-build-main-text">玄関</p>
								</li>
								<li id="item7">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum2.png"></p>
									<p class="thumblock-build-main-text">室内1</p>
								</li>
								<li id="item8">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum3.png"></p>
									<p class="thumblock-build-main-text">室内2</p>
								</li>
								<li id="item9">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum4.png"></p>
									<p class="thumblock-build-main-text">水回り／クローゼット</p>
								</li>
								<li id="item10">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum5.png"></p>
									<p class="thumblock-build-main-text">談話コーナー</p>
								</li>
								<li id="item11">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum6.png"></p>
									<p class="thumblock-build-main-text">部屋番号</p>
								</li>
								<li id="item12">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum7.png"></p>
									<p class="thumblock-build-main-text">風呂</p>
								</li>
								<li id="item13">
									<p class="thumblock-build-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum8.png"></p>
									<p class="thumblock-build-main-text">廊下</p>
								</li>
							</ul>

							<div class="row">
								<div class="col-md-3 col-4">
									<p id="btn6" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum1.png"></p>
								</div>
								<div class="col-md-3 col-4">
									<p id="btn7" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum2.png"></p>
								</div>
								<div class="col-md-3 col-4">
									<p id="btn8" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum3.png"></p>
								</div>
								<div class="col-md-3 col-4">
									<p id="btn9" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum4.png"></p>
								</div>
								<div class="col-md-3 col-4">
									<p id="btn10" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum5.png"></p>
								</div>
								<div class="col-md-3 col-4">
									<p id="btn11" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum6.png"></p>
								</div>
								<div class="col-md-3 col-4">
									<p id="btn12" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum7.png"></p>
								</div>
								<div class="col-md-3 col-4">
									<p id="btn13" class="thumblock-build-btn"><img src="<?=get_template_directory_uri()?>/dest/img/lupinus/lupinus_share_thum8.png"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="status">
			<div class="container">
				<div class="application">
					<h2 class="h-2 pt-5 mb-3"><span>お申込み・お問い合わせ</span></h2>
					<div class="row">
						<div class="col-md-6">
							<p class="application-btn"><a href="<?=esc_url(home_url('/contact/'))?>">お問い合わせフォーム</a></p>
						</div>
						<div class="col-md-6">
							<p class="application-tel"><img src="<?=get_template_directory_uri()?>/dest/img/index/icon_tel_green.png">0942-33-1581</p>
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