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

		<div class="intro">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>開放的な院内で、患者様の心のケアをサポート</span></h3>
				</div>
				<div class="intro-main">
					<div class="row">
						<div class="col-md-6">
							<p class="intro-main-text">「精神科の病気のことを知りたい」<br>「家族はどう対応すればいいのだろう？」<br>「他の人はどうしているの？」<br>
								当院では、ご家族の要望や不安な気持ちにお応えするために、精神科における各種疾患についての理解を深めるよう、「家族セミナー」を開催しております。<br><br>
								５つの疾患（気分障害、統合失調症、認知症、アルコール依存症、アディクション）ごとに年3～4回いたしております。<br><br>
								当院の家族セミナーは、前半は病院スタッフの講話（医師、看護師、精神保健福祉士、心理士、薬剤師など）、後半は御家族同士でのブループ懇談会形式となっております。</p>
						</div>
						<div class="col-md-6">
							<p class="intro-main-thum"><img src="<?=get_template_directory_uri()?>/dest/img/seminar/graph.png"></p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="held">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>家族セミナーの開催について</span></h3>
				</div>

				<div class="held-main">
					<div class="row">
						<div class="col-md-6">
							<p class="held-main-text">「患者様、ご家族、病院スタッフが互いに学び合い、支え合い、これからについて一緒に考えていきませんか。今年度は５つの疾患別に開催を予定しています。皆様のご参加をお待ちしています。</p>
							<ul class="held-main-list">
								<li>開催日程と内容の詳細は下記の家族セミナー年間予定表をご覧ください。</li>
								<li>ご家族はご本人が退院された後でもご参加いただけます。</li>
								<li>参加ご希望の方は、病棟・外来スタッフステーションまでお知らせ下さい。</li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="held-main-description">
								<dl>
									<dt>連絡先</dt>
									<dd>聖ルチア病院</dd>
								</dl>
								<dl>
									<dt>ＴＥＬ</dt>
									<dd>（０９４２）３３－１５８１（代表）</dd>
								</dl>
								<dl>
									<dt>担当</dt>
									<dd>看護師　槇・関根、ソーシャルワーカー　菖蒲・宝満</dd>
								</dl>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="prace">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>家族セミナーの開催について</span></h3>
				</div>

				<div class="row">
					<div class="col-md-8">
						<div class="prace-status">
							<dl>
								<dt>受付</dt>
								<dd>１３：３０</dd>
							</dl>
							<dl>
								<dt>セミナー </dt>
								<dd>１４：００開始～１６：００終了予定</dd>
							</dl>
							<dl>
								<dt>場所</dt>
								<dd>聖ルチア病院（北館）４Ｆラウンジ</dd>
							</dl>
						</div>

						<div class="prace-table">
							<table>
								<tbody>
									<tr>
										<th>統合失調症</th>
										<td>
											5月28日	（土）<br>
											①医師（佐保Dr.）の話（治療と症状について）　②家族懇談会<br><br>

											7月23日	（土）<br>
											①看護師の話（ご家族に知ってほしい事）　②家族懇談会<br><br>

											10月22日（土）<br>
											①ソーシャルワーカーの話（社会資源について）　②家族懇談会<br><br>

											1月28日	（土）<br>
											①当事者の話　②家族懇談会
										</td>
									</tr>
									<tr>
										<th>認知症</th>
										<td>
											5月21日	（土）<br>
											①医師の話　②家族懇談会<br><br>

											7月23日	（土）<br>
											①看護師の講話　②家族懇談会<br><br>

											10月15日（土）<br>
											ソーシャルワーカー・作業療法士の話　②家族懇談会<br><br>

											1月21日	（土）<br>
											①当事者家族の講話 ②家族懇談会
										</td>
									</tr>
									<tr>
										<th>アルコール関連問題</th>
										<td>
											6月18日	（土）<br>
											①看護師の話（治療・ARPについて）　②家族懇談会<br><br>

											9月17日	（土）<br>
											①心理士の話　②家族懇談会<br><br>

											12月17日（土）<br>
											①医師（櫻井DR.）の話　②家族懇談会<br><br>

											2月18日	（土）<br>
											①看護師の話（Iメッセージについて）　②家族懇談会
										</td>
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