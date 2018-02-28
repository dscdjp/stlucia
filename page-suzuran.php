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

		<?php get_template_part_with_var_array('include/build',array('current'=>'clover')); ?>

		<div class="intro">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>認知症の進行を予防し、<br>周辺症状(不安、興奮、介護拒否など)の緩和と<br>精神的な安定を目指します。</span></h3>
				</div>
				<div class="intro-read">
					<div class="row">
						<div class="col-md-12">
							<p class="intro-read-text">すずらんは認知症の進行を予防し、周辺症状（不穏、興奮、介護拒否など）の緩和と精神的な安定を目標に、精神科医師をはじめとした医療専門スタッフが利用者様に合った「治療・リハビリ・介護」を提供します。<br>
								ご本人、ご家族のより良い生活のために、医療機関と連携し、積極的な在宅ケアサポートに努めてまいります。</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="rehabili">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>リハビリテーション</span></h3>
				</div>
				<div class="rehabili-read">
					<div class="row">
						<div class="col-md-12">
							<p class="rehabili-read-text">専従の作業療法士が 2 名、音楽療法士が 1 名在籍しており、身体的なプログラムだけでなく、回想法を取り入れた音楽療法、脳トレなどの認知面へのアプローチや、ゲーム、園芸など楽しみを目的とした活動まで様々なプログラムを行なっています。</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="schedule">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>活動プログラムの一例</span></h3>
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
										<td>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_thum1.png">
											<span>音楽療法</span>
										</td>
										<td>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_thum2.png">
											<span>足リハビリ</span>
										</td>
									</tr>
									<tr>
										<th>火曜</th>
										<td>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_thum3.png">
											<span>音楽療法</span>
										</td>
										<td>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_thum4.png">
											<span>園芸/脳活</span>
										</td>
									</tr>
									<tr>
										<th>水曜</th>
										<td>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_thum5.png">
											<span>制作 カレンダー作り</span>
										</td>
										<td>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_thum6.png">
											<span>運動療法 棒サッカー</span>
										</td>
									</tr>
									<tr>
										<th>木曜</th>
										<td>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_thum7.png">
											<span>音楽療法</span>
										</td>
										<td>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_thum8.png">
											<span>足リハビリ</span>
										</td>
									</tr>
									<tr>
										<th>金曜</th>
										<td>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_thum9.png">
											<span>制作 季節の飾り</span>
										</td>
										<td>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_thum10.png">
											<span>運動療法テーブルテニス</span>
										</td>
									</tr>
									<tr>
										<th>土曜</th>
										<td>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_thum11.png">
											<span>脳活</span>
										</td>
										<td>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_thum12.png">
											<span>足リハビリ</span>
										</td>
									</tr>
								</tbody>
							</table>

							<div class="schedule-etc">
								<div class="row">
									<h4 class="col-md-12"><span>~ その他活動プログラム ~</span></h4>
								</div>
								<div class="schedule-etc-main clearfix">
									<div class="schedule-etc-card">
										<figure>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_etc_thum1.png">
											<figcaption>園芸</figcaption>
										</figure>
									</div>
									<div class="schedule-etc-card">
										<figure>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_etc_thum2.png">
											<figcaption>足浴</figcaption>
										</figure>
									</div>
									<div class="schedule-etc-card">
										<figure>
											<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_proguram_etc_thum3.png">
											<figcaption>音楽レク</figcaption>
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="activity">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>季節の行事</span></h3>
				</div>
				<div class="row">
					<p class="col-md-12 activity-text">誕生日や季節ごとの催しを月1回実施しております。<br>外出もあるため、いい気分転換となります。</p>
				</div>
				<div class="activity-main clearfix">
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_season_thum1.png">
							<figcaption><span>１月</span><br>餅つき大会</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_season_thum2.png">
							<figcaption><span>３月</span><br>外出・花見</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_season_thum3.png">
							<figcaption><span>７月</span><br>七夕祭り</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_season_thum4.png">
							<figcaption><span>９月</span><br>敬老会</figcaption>
						</figure>
					</div>
					<div class="activity-main-card">
						<figure>
							<img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_season_thum5.png">
							<figcaption><span>１２月</span><br>クリスマス会</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>

		<div class="schedule">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>すずらん１日の流れ</span></h3>
				</div>

				<div class="schedule-time">
					<div class="row">
						<div class="col-md-6">
							<table>
								<tbody>
									<tr>
										<th></th>
										<td>送迎</td>
									</tr>
									<tr>
										<th>10時頃</th>
										<td>健康チェック</td>
									</tr>
									<tr>
										<th></th>
										<td>朝の会</td>
									</tr>
									<tr>
										<th></th>
										<td>朝の活動</td>
									</tr>
									<tr>
										<th>12時</th>
										<td>昼食</td>
									</tr>
									<tr>
										<th></th>
										<td>リラックスタイム</td>
									</tr>
									<tr>
										<th></th>
										<td>お昼の体操</td>
									</tr>
									<tr>
										<th></th>
										<td>昼の活動</td>
									</tr>
									<tr>
										<th></th>
										<td>お茶タイム</td>
									</tr>
									<tr>
										<th></th>
										<td>帰りの会</td>
									</tr>
									<tr>
										<th>16時頃</th>
										<td>送迎</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="status">
			<div class="container">
				<div class="row">

					<div class="col-md-6">
						<div class="status-content">
							<h4 class="status-content-title">送迎サービス</h4>
							<div class="status-content-list">
								<p class="status-content-thum"><img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_pickup_thum.png"></p>
								<p class="status-content-text">すずらんの送迎範囲内（片道20分程度）にお住まいの方はスタッフがご自宅まで送迎します。</p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="status-content">
							<h4 class="status-content-title">スタッフ紹介</h4>
							<div class="status-content-list">
								<p class="status-content-thum"><img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_staff_thum.png"></p>
								<p class="status-content-text">すずらんでは、看護師、作業療法士、精神保健福祉士、介護福祉士、音楽療法士が常勤しております。各職種の特性を生かしたリハビリプログラムを実施いたします。</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="flow">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>ご利用までの流れ</span></h3>
				</div>
				<div class="row">

					<div class="col-md-2">
						<section class="flow-section">
							<h4>見学</h4>
							<p class="flow-section-arrow"><img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_flow_arrow.png"></p>
						</section>
					</div>
					<div class="col-md-2">
						<section class="flow-section">
							<h4>相談</h4>
							<p class="flow-section-arrow"><img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_flow_arrow.png"></p>
						</section>
					</div>
					<div class="col-md-2">
						<section class="flow-section">
							<h4>体験<span>（ご希望の方）</span></h4>
							<p class="flow-section-arrow"><img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_flow_arrow.png"></p>
						</section>
					</div>
					<div class="col-md-2">
						<section class="flow-section">
							<h4>決定<span>ご本人・ご家族の<br>以降確認後</span></h4>
							<p class="flow-section-arrow"><img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_flow_arrow.png"></p>
						</section>
					</div>
					<div class="col-md-2">
						<section class="flow-section">
							<h4>申込み<span>ご利用申込書の記入自立支援医療の申請（ご希望の方のみ）</span></h4>
							<p class="flow-section-arrow"><img src="<?=get_template_directory_uri()?>/dest/img/suzuran/suzuran_flow_arrow.png"></p>
						</section>
					</div>
					<div class="col-md-2">
						<section class="flow-section">
							<h4>通所開始</h4>
						</section>
					</div>
				</div>
			</div>
		</div>

		<div class="status">
			<div class="container">
				<div class="row">

					<div class="col-md-6">
						<div class="status-content">
							<h4 class="status-content-title">利用料金</h4>
							<div class="status-content-list">
								<ul>
									<li>○ 医療保険が利用できます。（自立支援医療も利用できます）<br>
										例） １割負担の場合　・・・ １１５９円／１日<br>
										３割負担の場合　・・・ ３４７７円／１日</li>
									<li>○ 別途1回のご利用につき200円（食事代・お茶菓子代含む）ご負担いただきます。</li>
									<li>○ 介護保険対象のサービスと当院のすずらんとの併用もできます。</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="status-content">
							<h4 class="status-content-title">営業時間</h4>
							<div class="status-content-list">
								<dl>
									<dt>開所日</dt>
									<dd>月・火・水・木・金・土曜日　※祝日はお休みですが、今後、開所も検討していきます。</dd>
								</dl>
								<dl>
									<dt>活動時間</dt>
									<dd>10：00～16：00</dd>
									<dd>ご家族が送迎される場合は、9：30から来所できます。</dd>
									<dd>お迎えは16：00までにお願いします。</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="application">
							<h3><span>お申込み・お問い合わせ</span></h3>
							<p class="application-text">かかりつけの医師、または直接当ステーションへご相談ください。</p>
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
			</div>
		</div>
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>