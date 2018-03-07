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

		<div class="recruit">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>託児所 たんぽぽ</span></h3>
				</div>
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
				<div class="row">
					<h3 class="col-md-12"><span>産休・育休後の職場復帰支援プログラム</span></h3>
					<div class="col-md-10">
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
			</div>
		</div>

		<div class="education">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>教育プログラム</span></h3>
					<div class="col-md-8">
						<div class="education-list">
							<table>
								<tbody>
									<tr>
										<th>研修・勉強会内容</th>
										<th>対象</th>
									</tr>
									<tr>
										<th>キャリア開発 PG <br>(プロフェッショナルグレード)</th>
										<td>・看護師・准看護師・事務部<br>・栄養課・作業療法課<br>・地域連携室・薬剤</td>
									</tr>
									<tr>
										<th>院内研修会</th>
										<td>・全職員</td>
									</tr>
									<tr>
										<th>木曜セミナー</th>
										<td>・全職員</td>
									</tr>
									<tr>
										<th>e-ラーニング <br>(学研ナーシングサポート)</th>
										<td>・全職員</td>
									</tr>
									<tr>
										<th>宿泊研修会</th>
										<td>・新入職員<br>・管理職者<br>・各種委員会・チーム</td>
									</tr>
									<tr>
										<th>プリセプター制度</th>
										<td>・新入職員<br>・中途採用職員</td>
									</tr>
									<tr>
										<th>ローテーション研修</th>
										<td>・新入職員<br>・中途採用職員</td>
									</tr>
									<tr>
										<th>キャリアアップ研修</th>
										<td>・新入職員・中途採用職員</td>
									</tr>
									<tr>
										<th>各部署勉強会</th>
										<td>・該当部署スタッフ</td>
									</tr>
									<tr>
										<th>看護技術研修</th>
										<td>・看護師(新入職員中心)</td>
									</tr>
									<tr>
										<th>聖ルチア病院研究発表</th>
										<td>・該当部署のスタッフ</td>
									</tr>
									<tr>
										<th>各種学会発表</th>
										<td>・聖ルチア病院研究発表により選ばれたスタッフ</td>
									</tr>
									<tr>
										<th>外部研修</th>
										<td>・指名されたスタッフ・自己研鑽に努めるスタッフ</td>
									</tr>
									<tr>
										<th>ステークホルダー提供勉強会</th>
										<td></td>
									</tr>
								</tbody>
							</table>
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