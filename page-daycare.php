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

		<?php get_template_part_with_var_array('include/build',array('current'=>'daycare')); ?>


		<div class="intro">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>病気の再発防止、健康維持・管理<br>社会生活の質の向上を目的とした外来治療のひとつです。</span></h3>
				</div>
				<div class="intro-read">
					<div class="row">
						<div class="col-md-4">
							<div class="intro-read-thum"><img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_read_thum.png"></div>
						</div>
						<div class="col-md-8">
							<p class="intro-read-text">デイケアとは地域・社会で生活を送りながら、病気の再発防止、健康維持・管理、社会生活の質の向上を主な目的とした通所型の外来治療のひとつです。<br><br>
								デイケアでの集団生活や各種プログラムを通して、社会生活を送る上で必要な技術や知識を身につけ、生活のリズムを整えながら自立生活の自信を回復し、より健康的な社会生活が送れることを目指します。<br><br>
								他にもそれぞれの専門医療スタッフの立場から、個別の相談窓口やご家族の支援も行なっており、ご本人を取り巻く生活の環境調整などにも支援しております。<br><br>
								就労を考えている、食事の準備が苦手で栄養が偏りがちな方、１人暮らしで寂しい、家にいても何もすることが無い、仲間が欲しい、家族と適度な距離をとりたい・・・などの利用目的もメンバーよってさまざまです。</p>
						</div>
					</div>
				</div>
				<div class="intro-supple">
					<div class="row">
						<div class="col-md-4">
							<p class="intro-supple-thum"><img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_read_thum1.png"><img class="accent" src="<?=get_template_directory_uri()?>/dest/img/daycare/intro_accent.png"></p>
							<p class="intro-supple-text">就労支援プログラムや、農園芸・料理などの活動、カラオケ等のレクリエーションを通じて、社交能力の向上等を目指しています。</p>
						</div>
						<div class="col-md-4">
							<p class="intro-supple-thum"><img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_read_thum2.png"><img class="accent" src="<?=get_template_directory_uri()?>/dest/img/daycare/intro_accent.png"></p>
							<p class="intro-supple-text">体育館においては、バレーボール・バトミントンなどのスポーツを含めた様々な活動を、行っております。</p>
						</div>
						<div class="col-md-4">
							<p class="intro-supple-thum"><img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_read_thum3.png"><img class="accent" src="<?=get_template_directory_uri()?>/dest/img/daycare/intro_accent.png"></p>
							<p class="intro-supple-text">個人的な相談やご家族の方々への支援も行っており、給食や送りサービスも用意しております。</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="detail">
			<div class="container detail-contents">
				<div class="row">
					<h3 class="col-md-12"><span>デイケアプログラムの考え方</span></h3>
					<div class="col-md-4">
						<p class="detail-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_program_thum1.png"></p>
						<div class="detail-contents-textarea">
							<h4 class="detail-contents-title">生活支援型</h4>
							<p class="detail-contents-text">・居場所、仲間作り</p>
							<p class="detail-contents-text">・余暇活動の援助</p>
							<p class="detail-contents-text">・食事、料理教室</p>
							<p class="detail-contents-text">・レクリエーション</p>
							<p class="detail-contents-text">・生活教室</p>
							<p class="detail-contents-text">・趣味活動</p>
						</div>
					</div>
					<div class="col-md-4">
						<p class="detail-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_program_thum2.png"></p>
						<div class="detail-contents-textarea">
							<h4 class="detail-contents-title">就労支援型</h4>
							<p class="detail-contents-text">・就労支援</p>
							<p class="detail-contents-text">・リワーク</p>
							<p class="detail-contents-text">・内職作業</p>
							<p class="detail-contents-text">・パソコン教室</p>
							<p class="detail-contents-text">・喫茶活動</p>
							<p class="detail-contents-text">・OA</p>
						</div>
					</div>
					<div class="col-md-4">
						<p class="detail-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_program_thum3.png"></p>
						<div class="detail-contents-textarea">
							<h4 class="detail-contents-title">健康支援型</h4>
							<p class="detail-contents-text">・スポーツ</p>
							<p class="detail-contents-text">・栄養指導</p>
							<p class="detail-contents-text">・健康倶楽部</p>
							<p class="detail-contents-text">・健康教室</p>
							<p class="detail-contents-text">・服薬管理</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="schedule">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>活動プログラム</span></h3>
				</div>

				<div class="schedule-curriculum">
					<div class="row">
						<div class="col-md-8">
							<table>
								<tbody>
									<tr>
										<th></th>
										<td class="col-head">午前</td>
										<td class="col-head">午後</td>
									</tr>
									<tr>
										<th>月曜</th>
										<td>・健康ウォーク<br>
											・園芸<br>
											・お仕事相談<br>
											・卓球<br>
											・注意サインチェック<br>
											・フリースペース</td>
										<td>・ギタークラブ<br>
											・テーマミーティング<br>
											・スポーツ<br>
											・制作<br>
											・ステップワーク<br>
											・フリースペース</td>
									</tr>
									<tr>
										<th>火曜</th>
										<td>・コミュニティミーティング<br>
											・生活教室<br>
											・スポーツ<br>
											・個別就労支援<br>
											・健康相談<br>
											・栄養相談<br>
											・リワーク<br>
											・フリースペース</td>
										<td>・クッキング(栄養指導)<br>
											・ミュージックサロン<br>
											・制作<br>
											・卓球<br>
											・ステップワーク<br>
											・フリースペース</td>
									</tr>
									<tr>
										<th>水曜</th>
										<td>自由選択<br>
											・制作<br>
											・DVD</td>
										<td>・やまぼうし<br>
											・パソコン教室<br>
											・軽スポーツ<br>
											・SST<br>
											・陶芸<br>
											・ステップワーク<br>
											・フリースペース</td>
									</tr>
									<tr>
										<th>木曜</th>
										<td>・脳トレ<br>
											・クリーンパートナー<br>
											・フリーアート<br>
											・卓球<br>
											・園芸<br>
											・ステップワーク<br>
											・フリースペース</td>
										<td>・やまぼうし<br>
											・マッスルン<br>
											・アウトドア（最終週<br>
											・ステップワーク<br>
											・フリースペース</td>
									</tr>
									<tr>
										<th>金曜</th>
										<td>・バレー部<br>
											・フットケア<br>
											・しゃべり場<br>
											・注意サインチェック<br>
											・ステップワーク<br>
											・フリースペース</td>
										<td>・バレー部<br>
											・健康倶楽部<br>
											・リワーク<br>
											・制作<br>
											・ステップワーク<br>
											・フリースペース</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="schedule-time">
					<div class="row">
						<div class="col-md-6">
							<h4>デイケア</h4>
							<table>
								<tbody>
									<tr>
										<th>8時</th>
										<td>受付健康チェック</td>
									</tr>
									<tr>
										<th></th>
										<td>朝食準備</td>
									</tr>
									<tr>
										<th>9時</th>
										<td>朝食</td>
									</tr>
									<tr>
										<th></th>
										<td>余暇時間</td>
									</tr>
									<tr>
										<th>10時</th>
										<td>開始ミーティング</td>
									</tr>
									<tr>
										<th>11時</th>
										<td>午前の活動</td>
									</tr>
									<tr>
										<th>12時</th>
										<td>昼食準備</td>
									</tr>
									<tr>
										<th></th>
										<td>昼食</td>
									</tr>
									<tr>
										<th>13時</th>
										<td>昼休み</td>
									</tr>
									<tr>
										<th>14時</th>
										<td>午後の活動</td>
									</tr>
									<tr>
										<th>15時</th>
										<td>掃除</td>
									</tr>
									<tr>
										<th>16時</th>
										<td>終了ミーディング</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-6">
							<h4>デイナイトケア</h4>
							<table>
								<tbody>
									<tr>
										<th>16時</th>
										<td>余暇時間</td>
									</tr>
									<tr>
										<th>17時</th>
										<td>夕食準備</td>
									</tr>
									<tr>
										<th></th>
										<td>夕食</td>
									</tr>
									<tr>
										<th>18時</th>
										<td>帰宅</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="activity">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>活動風景</span></h3>
				</div>
				<div class="activity-main clearfix">
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_activity_thum1.png">
							<figcaption>開始ミーティングの様子</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_activity_thum2.png">
							<figcaption>精神保健福祉士による就労支援</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_activity_thum3.png">
							<figcaption>管理栄養士の指導による料理教室</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_activity_thum4.png">
							<figcaption>看護師の指導による生活教室</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_activity_thum5.png">
							<figcaption>制作活動</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_activity_thum6.png">
							<figcaption>パソコン教室</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_activity_thum7.png">
							<figcaption>バレーボール練習風景</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_activity_thum8.png">
							<figcaption>クリスマス会</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_activity_thum9.png">
							<figcaption>そうめん流し</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_activity_thum10.png">
							<figcaption>もちつき</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>

		<div class="daynight">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>デイナイトケア</span></h3>
				</div>
				<div class="daynight-read">
					<div class="row">
						<div class="col-md-6">
							<div class="daynight-read-thum"><img src="<?=get_template_directory_uri()?>/dest/img/daycare/daycare_daynight_thum.png"></div>
						</div>
						<div class="col-md-6">
							<p class="daynight-read-text">より地域生活の充実を図るために、日中だけになく朝から夕方までのサービスとして、デイナイトケアを行っています。</p>
							<div class="daynight-read-user">
								<h4>こんな方々が利用しています</h4>
								<ul class="daynight-read-user-list">
									<li>・食事の準備が苦手</li>
									<li>・一人暮らしで寂しい</li>
									<li>・毎日の栄養管理を上手にしたい</li>
									<li>・気分転換をしたい</li>
									<li>・家にいると何もすることがないので、デイナイトケアを利用して生活のリズムを整えたい</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="status">
			<div class="container">
				<div class="row">

					<div class="col-lg-6">
						<div class="status-content">
							<h4 class="status-content-title">利用料金</h4>
							<div class="status-content-list">
								<p>精神科デイケア・デイナイトケアは外来治療の一部です。<br>
									支払いは、国民健康保険や社会保険の保険証を提示することで一部の自己負担になります。<br>
									又、自立支援医療を申請されると費用が減額になることがあります。</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="status-content">
							<h4 class="status-content-title">営業時間</h4>
							<div class="status-content-list">
								<dl>
									<dt>開所日</dt>
									<dd>月・火・水・木・金曜日　（日・祝祭日はお休みです）※ 土曜日は不定期</dd>
								</dl>
								<dl>
									<dt>活動時間</dt>
									<dd>デイケア　10:00～16:00</dd>
									<dd>デイナイトケア　8:00～18:00</dd>
									<dd>ショートケア 10:00~13:00/13:00~16:00</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="application">
							<h3><span>お申込み・お問い合わせ</span></h3>
							<p class="application-text">かかりつけの医師、または直接当ステーションへご相談ください。</p>
							<div class="row">
								<div class="col-lg-6">
									<p class="application-btn"><a href="<?=esc_url(home_url('/contact/'))?>">お問い合わせフォーム</a></p>
								</div>
								<div class="col-lg-6">
									<p class="application-tel"><img src="<?=get_template_directory_uri()?>/dest/img/index/icon_tel_green.png">0942-33-1581</p>
								</div>
							</div>
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