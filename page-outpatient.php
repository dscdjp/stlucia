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

		<div class="info">
			<div class="container info-main">
				<div class="row">
					<h3 class="col-md-12"><span>精神科受診が初めての方・ご家族の皆様へ</span></h3>
					<div class="col-md-6 info-main-thum"></div>
					<div class="col-md-6">
						<p class="info-main-text">心の病は知らぬ間に大きくなるもの。小さな内に対処することが肝心です。<br>
							しかし、精神科と聞くと<br>
							「なんだか行きづらいな・・」<br>
							「通っている事を周りに知られたくないな・・」<br>
							とマイナスイメージを持たれる方も多く、<br>
							病院へは行かずに不安な毎日を送られる方がいらっしゃいます。<br>
							<br>
							当院ではそんな方でもお気軽に受診して頂けるように<br>
							専門家のスタッフが、まずはお電話やメールで症状や気になることなどを伺い、<br>
							診察や病気のお悩みを解消するところから始めます。<br>
							安心して受診して頂きたいから、患者様一人ひとりに合わせて、<br>
							心を込めてご対応いたします。</p>
					</div>
				</div>
			</div>
			<div class="container info-contents">
				<div class="row">
					<div class="col-xl-6">
						<h4 class="info-contents-title">受診に際してご用意いただくもの</h4>
						<p class="info-contents-anno">保険証、各種医療証、自立支援医療受給者証、紹介状等</p>
						<div class="info-contents-contact">
							<h5 class="info-contents-contact-title">ご相談はこちらから</h5>
							<div class="info-contents-contact-main clearfix">
								<div class="info-contents-contact-main-pm">
									<h6>お電話でのご相談</h6>
									<p class="info-contents-contact-phone">0942-33-1581</p>
								</div>
								<div class="info-contents-contact-main-pm">
									<h6>メールでのご相談</h6>
									<p class="info-contents-contact-btn"><a href="<?=esc_url(home_url('/contact/'))?>">ご相談フォームはこちら</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<h4 class="info-contents-title">診療時間</h4>
						<table class="info-contents-table">
							<tbody>
								<tr>
									<th></th>
									<th>月</th>
									<th>火</th>
									<th>水</th>
									<th>木</th>
									<th>金</th>
									<th>土</th>
									<th>日・祝</th>
								</tr>
								<tr>
									<th>9:00〜12:30</th>
									<td>○</td>
									<td>○</td>
									<td>○</td>
									<td>○</td>
									<td>○</td>
									<td>○</td>
									<td class="font-weight-bold">×</td>
								</tr>
								<tr>
									<th>14:00〜17:00</th>
									<td>○</td>
									<td>○</td>
									<td>○</td>
									<td class="font-weight-bold">×</td>
									<td>○</td>
									<td class="font-weight-bold">×</td>
									<td class="font-weight-bold">×</td>
								</tr>
							</tbody>
						</table>
						<p>初めて受診される方は、事前にご連絡をいただけると、スムーズに診療を行なうことができます。</p>
					</div>
				</div>
			</div>
		</div>

		<div class="subject" id="course">

			<div class="container subject-contents">
				<div class="row">
					<h3 class="col-md-12"><span>診療科目</span></h3>
					<div class="col-md-4">
						<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_1.png"></p>
						<div class="subject-contents-textarea">
							<h4 class="subject-contents-title">うつ病</h4>
							<p class="subject-contents-text">気分障害の一種であり、抗うつ気分、意欲・興味・精神活動の低下、焦燥、食欲低下、不眠、悲しみ・不安感など様々な症状を引き起こします。</p>
<!--							<p class="subject-contents-link"><a href="">>> 簡易うつ病診断</a></p>-->
						</div>
					</div>
					<div class="col-md-4">
						<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_2.png"></p>
						<div class="subject-contents-textarea">
							<h4 class="subject-contents-title">認知症・高齢者医療</h4>
							<p class="subject-contents-text">認知症などの高齢者医療をデイケアや訪問介護を通じてサポートしております。認知症治療病棟では作業療法、音楽療法、回想法などのリハビリプログラムが充実しています。</p>
							<p class="subject-contents-link"><a href="<?=esc_url(home_url('/suzuran/'))?>">>> 重度認知症デイケア すずらん</a></p>
							<p class="subject-contents-link"><a href="<?=esc_url(home_url('/lupinus/'))?>">>> グループホーム ルピナス</a></p>
						</div>
					</div>
					<div class="col-md-4">
						<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_3.png"></p>
						<div class="subject-contents-textarea">
							<h4 class="subject-contents-title">児童思春期医療・発達障害</h4>
							<p class="subject-contents-text">子どもの発達障害（自閉症、アスペルガー症候群、ADHD等）や精神障害、暴力・ひきこもりなどの治療を行います。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container subject-contents">
				<div class="row">
					<div class="col-md-3">
						<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_4.png"></p>
						<div class="subject-contents-textarea">
							<h4 class="subject-contents-title">周産期医療</h4>
							<p class="subject-contents-text">周産期のうつ病、不安、中絶・流産による悲哀、分娩に対する重度の反応(PTSD、控訴反応)、強迫性障害などの症状を治療します。</p>
						</div>
					</div>
					<div class="col-md-3">
						<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_5.png"></p>
						<div class="subject-contents-textarea">
							<h4 class="subject-contents-title">アルコール依存</h4>
							<p class="subject-contents-text">アルコール等を止めたいのに止められない、社会生活に悪影響を及ぼしている、といった症状(依存症)を治療します。</p>
						</div>
					</div>
					<div class="col-md-3">
						<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_6.png"></p>
						<div class="subject-contents-textarea">
							<h4 class="subject-contents-title">てんかん医療</h4>
							<p class="subject-contents-text">てんかんによる発作の症状（けいれん、手足の突っ張り、短時間の意識消失、全身や手足がビクッとするなど）を治療します。</p>
						</div>
					</div>
					<div class="col-md-3">
						<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_7.png"></p>
						<div class="subject-contents-textarea">
							<h4 class="subject-contents-title">摂食障害</h4>
							<p class="subject-contents-text">拒食や過食に等によってダメージを受けた体の治療を行いながら疾患と向き合う心理教育、思考の偏り歪みに気付き修正する認知行動療法などを行います。</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php get_template_part('include/treatment'); ?>

		<div id="flow" class="flow">
			<h3><span>診察・治療の流れ</span></h3>
			<div class="container">
				<div class="row flow-card">
					<div class="col-md-8">
						<div class="row">
							<h4 class="col-2 flow-title">1</h4>
							<div class="col-10 flow-main">
								<p class="flow-main-title">お電話・メールでのご相談</p>
								<p class="flow-main-phone">0942-33-1581</p>
								<p class="flow-main-btn"><a href="<?=esc_url(home_url('/contact/'))?>">ご相談フォームはこちら</a></p>
								<p class="flow-main-phoneanno">(時間帯によってはお返事に時間を要する場合があります。)</p>
								<p class="flow-main-text">お電話の場合まず事務職員が出ますので「受診の相談」とお伝えください。精神保健福祉士(ソーシャルワーカー)に代わり、今のお困りごとを簡単に伺い、初診の予約をお取りします。精神科の受診が初めてで、入院を検討されている場合は、病棟見学をお願いする場合があります。</p>
							</div>
						</div>
					</div>
					<p class="col-md-4 flow-thum thum1"></p>
				</div>
				<p class="arrow"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/arrow.png"></p>
			</div>

			<div class="container">
				<div class="row flow-card">
					<div class="col-md-8">
						<div class="row">
							<h4 class="col-2 flow-title">2</h4>
							<div class="col-10 flow-main">
								<p class="flow-main-title">初診(来院)</p>
								<p class="flow-main-text">事務窓口へ保険証を提出して頂き、初診の受付けを行ないます。その後精神保健福祉士(ソーシャルワーカー)がお困りの症状や受診に至った経緯とその背景、治療歴、生活歴、家族歴などを個室で詳しくお話を伺います。症状に応じて、医師の指示で待ち時間の間に必要な検査を行います。</p>
							</div>
						</div>
					</div>
					<p class="col-md-4 flow-thum thum2"></p>
				</div>
				<p class="arrow"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/arrow.png"></p>
			</div>

			<div class="container">
				<div class="row flow-card">
					<div class="col-md-8">
						<div class="row">
							<h4 class="col-2 flow-title">3</h4>
							<div class="col-10 flow-main">
								<p class="flow-main-title">医師の診察</p>
								<p class="flow-main-text">精神保健福祉士（ソーシャルワーカー）が聞き取った内容や検査結果をもとに、患者様と診察を行います。患者様の希望を聞きながら、今後の治療について見立て、薬物療法や心理カウンセリング、その他必要な検査などについて提案していきます。</p>
							</div>
						</div>
					</div>
					<p class="col-md-4 flow-thum thum3"></p>
				</div>
				<div class="row">
					<div class="col-md-6 d-none d-md-block">
						<p class="arrow"><span>入院が必要な場合</span> <img src="<?=get_template_directory_uri()?>/dest/img/outpatient/arrow.png"></p>
					</div>
					<div class="col-md-6 d-none d-md-block">
						<p class="arrow"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/arrow.png"> <span>通院治療の場合</span></p>
					</div>
				</div>
				<div class="sp-arrow d-block d-md-none">
					<p>通院治療の場合は「4」へ。<br>入院が必要な場合は「5」へ。</p>
					<img src="<?=get_template_directory_uri()?>/dest/img/outpatient/arrow.png">
				</div>

			</div>

			<div class="container mb-5">
				<div class="row">
					<div class="col-md-5">
						<div class="flow-card2">
							<p class="bd-radius-img flow-thum thum4"></p>
							<div class="container">
								<div class="row">
									<div class="col-3">
										<h4 class="flow-card2-title">4</h4>
									</div>
									<div class="col-9">
										<p class="flow-card2-text">休息やお薬の調整だけでなく、疾患別治療プログラムや作業療法などにも参加して頂き、リハビリを行います。退院後の生活を見据え、多職種でアプローチします。</p>
										<p class="flow-card2-main-link"><a href="<?=esc_url(home_url('/hospitalization/'))?>">>> 詳しくはこちら</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p class="arrow2 col-md-2 d-none d-md-block"><span>退院</span><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/arrow.png"></p>
					<div class="sp-arrow d-block d-md-none">
						<img src="<?=get_template_directory_uri()?>/dest/img/outpatient/arrow.png">
					</div>
					<div class="col-md-5">
						<div class="flow-card2">
							<p class="bd-radius-img flow-thum thum5"></p>
							<div class="container">
								<div class="row">
									<div class="col-3">
										<h4 class="flow-card2-title">5</h4>
									</div>
									<div class="col-9">
										<p class="flow-card2-text">主治医による一般診療の中で精神療法を行います。定期的な通院を継続しながらお薬の調整や再発防止に努めます。患者様の症状や今後の生活の目標によって、外来作業療法やデイケア、デイナイトケア、重度認知症患者デイケア、訪問看護、介護・福祉サービスの利用を進めることがあります。また、当法人外の介護・福祉サービスをご紹介することもあります。</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="needitem">
				<h3><span>当院の受診が初めての方・ご家族の皆様へ</span></h3>
				<p class="needitem-text">当院では初診時、患者様やご家族がどのような症状でお困りになっているか、これまでどのような治療を受けてこられているか等、個人情報に配慮した上で詳しくお話を聞かせて頂いています。<br>
					初診時のみ予約制となりますので、事前にご連絡を頂くとスムーズに診察を行うことが出来ます。受診に迷われている場合や他の病院へ通院されている場合は、相談だけでも結構ですので、気軽にご相談ください。<br>
					2度目以降の診察は予約制ではありませんので、お薬が切れる前に主治医の外来日にお越し下さい。</p>
				<p class="needitem-text-anno">※緊急時はこの限りではありませんので、電話でご相談ください。</p>
				<div class="needitem-contact">
					<h5 class="needitem-contact-title">受診に際してご用意して頂くもの</h5>
					<div class="needitem-contact-main">
						<p class="needitem-contact-main-text">・保険証　　　・各種手帳（前期高齢者受給者証、ひとり親医療証、原爆医療証など）<br>
							・自立支援医療受給者証（利用されている方のみ）　　　・紹介状（かかりつけ医がある場合）　　　<br>
							・お薬手帳</p>
					</div>
				</div>
			</div>

			<div class="flow-btnblock">
				<p class="flow-btn flow-btn-clr1"><a href="<?=esc_url(home_url('/hospitalization/'))?>">>> 入院のご案内</a></p>
				<p class="flow-btn flow-btn-clr2"><a href="<?=esc_url(home_url('/facility/'))?>">>> 施設案内</a></p>
			</div>
		</div>
		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>