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

		<div class="return">
			<div class="container" id="welfare">
				<h2 class="h-2"><span>充実した福利厚生</span></h2>
				<div class="row">
					<div class="col-md-6">
						<p>スタッフ一人一人のワークライフバランスがとれるよう、週35時間、週休2日制、また半日休暇や時間有給休暇などの勤務体制をとりいれています。</p>
						<p>また、福利厚生として定期健康診断、職員研修旅行や各種レクリエーション、子育て支援 等、働きやすい環境作りに努めています。</p>
					</div>
					<div class="col-md-6">
						<p class="recruit-thum"><img src="<?=get_template_directory_uri()?>/dest/img/recruit/recruit_thum3.png"></p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="recruit" id="tanpopo">
			<div class="container">
				<h2 class="h-2"><span>保育所 たんぽぽ</span></h2>
				<div class="row recruit-block">
					<div class="col-md-6">
						<p class="recruit-thum"><img src="<?=get_template_directory_uri()?>/dest/img/working-environment/child_thum1.png"></p>
					</div>
					<div class="col-md-6">
						<p class="recruit-text">育児休暇をとった職員が、復帰する時の託児の悩みを少しでも軽減できるようにと平成19年に開設しました。すぐに様子を見ることもでき、安心して仕事が出来ます。</p>
					</div>
				</div>
				<div class="row row-reverse recruit-block">
					<div class="col-md-6">
						<p class="recruit-thum"><img src="<?=get_template_directory_uri()?>/dest/img/working-environment/child_thum2.png"></p>
					</div>
					<div class="col-md-6">
						<div class="recruit-list">
							<dl>
								<dt>保育料</dt>
								<dd>１ヶ月（月極）16,200円　<span>※二人目から10,800円(税込)</span></dd>
								<dd>１日（一時預かり）1,080円</dd>
							</dl>
							<dl>
								<dt>給食費</dt>
								<dd>1食　108円（発育に合わせた食事の提供をしています）</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="return">
			<div class="container">
				<h2 class="h-2"><span>産休・育休後の職場復帰支援プログラム</span></h2>
				<p class="return-intro">職員が仕事と生活の調和を図り、働きやすい雇用環境の整備を行うための取り組みとして、<br>
					産休・育休後の職場復帰支援プログラムを実施しております。</p>
				<div class="return-list">
					<dl>
						<dt>計画期間</dt>
						<dd>平成28年4月1日～平成30年3月31日までの2年間</dd>
					</dl>
					<dl>
						<dt>内容</dt>
						<dd>&lt;目標1&gt;<br>
							産休・育休後、個々に合わせた職場復帰支援を充実させる。<br><br>
							&lt;対策&gt;<br>
							平成28年4月～復帰時期、個々の業務内容等に合わせた職場復帰支援プログラムを取り入れる。<br><br>
							&lt;目標2&gt;<br>
							年次有給休暇の取得率を1人当り平均80%以上とする。<br><br>
							&lt;対策&gt;<br>
							平成28年4月～ 年次有給休暇の取得状況を把握する。<br>
							平成28年4月～ 計画的な取得に向けて管理職研修を計画期間中に4回行なう。<br>
							平成28年4月～ 各部署において年次有給休暇の取得計画を策定する。</dd>
					</dl>
				</div>
			</div>
		</div>

		<div class="education" id="program">
			<div class="container">
				<h2 class="h-2"><span>教育プログラム</span></h2>
				<div class="education-list">
					<?=do_shortcode('[table id=5 /]')?>
				</div>
			</div>
		</div>
		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>