<?php

get_template_part('include/variables');

$args = array(
	'posts_per_page'   => -1,
	'post_type'        => 'job'
);

$jobs = new WP_Query($args);
$i = 0;
$tabs = array();
$job_content = array();

if($jobs->have_posts()) {
	while($jobs->have_posts()){
		$jobs->the_post();

		$tabs[] = array(
			'name' => get_the_title(),
			'num' => CFS()->get('num')
		);

		$job_content[] = array(
			'name' => get_the_title(),
			'content' => get_the_content(),
			'num' => CFS()->get('num'),
			'image' => CFS()->get('image'),
			'process' => CFS()->get('process'),
			'documents' => CFS()->get('documents'),
			'period' => CFS()->get('period'),
			'notification' => CFS()->get('notification'),
			'qualification' => CFS()->get('qualification'),
			'description' => CFS()->get('description'),
			'salary' => CFS()->get('salary'),
			'bonus' => CFS()->get('bonus'),
			'schedule' => CFS()->get('schedule'),
			'welfare' => CFS()->get('welfare'),
			'treatment' => CFS()->get('treatment'),

		);	
	}
}
wp_reset_postdata();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_template_part('include/head_tag'); ?>
</head>

<body>

	<?php get_template_part('include/header'); ?>

	<main class="main">

		<?php get_template_part('include/subpage_fv'); ?>

		<div class="recruit">
			<div class="container">

				<h2 class="h-2"><span>こんな人材を募集します</span></h2>
				<div class="row row-reverse">
					<div class="col-md-6">
						<p class="recruit-thum"><img src="<?=get_template_directory_uri()?>/dest/img/recruit/recruit_thum5.png"></p>
					</div>
					<div class="col-md-6">
						<ul class="recruit-list">
							<li>・探究心、向上心、志がある方。</li>
							<li>・当院の理念に共感できる方。</li>
							<li>・貢献心がある方。</li>
							<li>・人が好き。人柄が良い方。</li>
							<li>・やさしい、思いやりがある。心配りが出来る方。など</li>
						</ul>


						<div class="mt-5 mb-5 text-center">
							<p><a href="#wanted" class="btn btn-green btn-lg"><i class="fas fa-angle-right"></i> 募集状況はこちら</a></p>
						</div>
					</div>
				</div>
				<h2 class="h-2"><span>開放的な院内で、患者様の心のケアをサポート</span></h2>
				<div class="row row-reverse">
					<div class="col-md-6">
						<p class="recruit-thum"><img src="<?=get_template_directory_uri()?>/dest/img/recruit/recruit_thum1.png"></p>
					</div>
					<div class="col-md-6">
						<p class="recruit-text">病棟はすべて全開放となっており、全病棟から中庭や青空が望めます。<br>
							閉鎖感のない開放的な病棟で、気持ち良く働くことができます。<br>
							また、各病棟は機能別に分かれており、患者様の症状に合わせて専門的な医療を提供することが出来るようになっております。</p>
						<p class="recruit-btn"><a href="<?=esc_url(home_url('/working-environment/'))?>">職場環境について</a></p>
					</div>
				</div>
				<!--
				<h2 class="h-2"><span>チーム医療で患者様を社会復帰まで導く、<br>福岡の精神科病院で唯一の社会医療法人です。</span></h2>
				<div class="row">
					<div class="col-md-6">
						<p class="recruit-thum"><img src="<?=get_template_directory_uri()?>/dest/img/recruit/recruit_thum2.png"></p>
					</div>
					<div class="col-md-6">
						<p class="recruit-text">当院は福岡の精神科では唯一の社会医療法人です。<br>
							地域や行政・大学病院などと密に連携しながら、日本一の精神科病院を目指し、従業員一同プライドを持って業務にあたっています。</p>
					</div>
				</div>
				<h2 class="h-2"><span>働きやすい労働環境</span></h2>
				<div class="row row-reverse">
					<div class="col-md-6">
						<p class="recruit-thum"><img src="<?=get_template_directory_uri()?>/dest/img/recruit/recruit_thum3.png"></p>
					</div>
					<div class="col-md-6">
						<p class="recruit-text">スタッフ一人一人のワークバランスがとれるよう、週 35 時間、週休 2 日制、また半日休暇 や時間有給休暇などの勤務体制をとりいれています。<br>
							また、福利厚生として定期健康診断、職員研 修旅行や各種レクリエーション、子育て支援 等、働きやすい環境作りに努めています。</p>
						<p class="recruit-btn"><a href="<?=esc_url(home_url('/working-environment/'))?>">詳細はこちら</a></p>
					</div>
				</div>
				<h2 class="h-2"><span>子育て支援</span></h2>
				<div class="row">
					<div class="col-md-6">
						<p class="recruit-thum"><img src="<?=get_template_directory_uri()?>/dest/img/recruit/recruit_thum4.png"></p>
					</div>
					<div class="col-md-6">
						<p class="recruit-text">当院は福岡の精神科では唯一の社会医療法人です。地域や行政・大学病院などと密に連携しながら、日本一の精神科病院を目指し、従業員一同プライドを持って業務にあたっています。</p>
						<p class="recruit-btn"><a href="<?=esc_url(home_url('/working-environment/'))?>">保育所「たんぽぽ」の詳細はこちら</a></p>
					</div>
				</div>
				-->
			</div>
		</div>

		<div class="job mt-5" id="wanted">
			<h2 class="h-2"><span>募集状況</span></h2>
			<div class="container">
				<p>現在以下の職種を募集しております。</p>
				<ul class="job-tab container">
					<?php
	$i = 1;
													 foreach($tabs as $tab){
					?>
					<li><a href="#job<?=$i?>" class="btn btn-green<?=$i==1?' active':'';?>"><?=$tab['name']?> <?=$tab['num']?></a></li>
					<?php
						$i++;
													 }
					?>
				</ul>
			</div>
			<div class="job-main">
				<?php
				$i = 1;
				if($job_content) {
					foreach($job_content as $job) {
						if(!empty($job['image'])) {
							$imgurl = wp_get_attachment_image_src($job['image'], 'middle');
							$imgurl = $imgurl[0];
						} else {
							$imgurl = get_template_directory_uri().'/dest/img/common/noimage.gif';
						}
					?>
						<div id="job<?=$i?>" class="container job-main-content<?=$i==1?' active':'';?>">
							<div class="row mb-5">
								<div class="col-md-6 job-main-content-thum">
									<img src="<?=$imgurl?>">
								</div>
								<div class="col-md-6 job-main-content-status">
									<h4 class="job-main-content-title"><?=$job['name']?></h4>
<!--									<p class="job-main-content-btn"><a href="<?=esc_url(home_url('/contact/'))?>">求人に応募する</a></p>-->
									<p class="job-main-content-text">
										<?=$job['content']?>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-10 job-main-content-points">
									<h5>募集要項</h5>
									<dl>
										<?php if(!empty($job['num'])) { ?>
										<dt>募集人数</dt>
										<dd><?=$job['num']?></dd>
										<?php } ?>

										<?php if(!empty($job['process'])) { ?>
										<dt>選考方法</dt>
										<dd><?=$job['process']?></dd>
										<?php } ?>

										<?php if(!empty($job['documents'])) { ?>
										<dt>出願提出書類</dt>
										<dd><?=$job['documents']?></dd>
										<?php } ?>

										<?php if(!empty($job['period'])) { ?>
										<dt>選考時期</dt>
										<dd><?=$job['period']?></dd>
										<?php } ?>

										<?php if(!empty($job['notification'])) { ?>
										<dt>選考結果通知</dt>
										<dd><?=$job['notification']?></dd>
										<?php } ?>

										<?php if(!empty($job['qualification'])) { ?>
										<dt>応募資格</dt>
										<dd><?=$job['qualification']?></dd>
										<?php } ?>

										<?php if(!empty($job['description'])) { ?>
										<dt>職務内容</dt>
										<dd><?=$job['description']?></dd>
										<?php } ?>

										<?php if(!empty($job['salary'])) { ?>
										<dt>給与</dt>
										<dd><?=$job['salary']?></dd>
										<?php } ?>

										<?php if(!empty($job['bonus'])) { ?>
										<dt>賞与</dt>
										<dd><?=$job['bonus']?></dd>
										<?php } ?>

										<?php if(!empty($job['schedule'])) { ?>
										<dt>勤務形態</dt>
										<dd><?=$job['schedule']?></dd>
										<?php } ?>

										<?php if(!empty($job['welfare'])) { ?>
										<dt>福利厚生</dt>
										<dd><?=$job['welfare']?></dd>
										<?php } ?>

										<?php if(!empty($job['treatment'])) { ?>
										<dt>待遇</dt>
										<dd><?=$job['treatment']?></dd>
										<?php } ?>
									</dl>
								</div>

								<div class="col-md-10 job-main-content-points">
									<h5>求人応募</h5>
									<?=do_shortcode('[contact-form-7 id="1494" title="recruitform"]')?>
								</div>
							</div>
<!--							<p class="job-main-content-bigbtn"><a href="<?=esc_url(home_url('/contact/'))?>">求人に応募する</a></p>-->
						</div>
					<?php
						$i++;
					}
				} else {
				?>
				<p>現在は募集を行っておりません。</p>
				<?php
				}
				?>
			</div>
		</div>
		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>