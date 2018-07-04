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

		<div id="beginner" class="info">
			<div class="container info-main">
				<h2 class="h-2"><span>精神科受診が初めての方・ご家族の皆様へ</span></h2>
				<div class="row">
					<div class="col-md-6 info-main-thum"></div>
					<div class="col-md-6">
						<p class="info-main-text">
							心の病は知らぬ間に大きくなるもの。小さな内に対処することが肝心です。<br>
							しかし、精神科と聞くと<br>
							<strong>「なんだか行きづらいな・・」<br>
								「通っている事を周りに知られたくないな・・」<br></strong>
							とマイナスイメージを持たれる方も多く、<br>
							病院へは行かずに不安な毎日を送られる方がいらっしゃいます。<br>
						</p>
						<p class="info-main-text">
							当院ではそんな方でもお気軽に受診して頂けるように<br>
							<strong>診察や病気のお悩みを解消するところから始めます。</strong><br>
							その後初診時に、患者様やご家族がどのような症状でお困りになっているか、<br>
							これまでどのような治療を受けてこられているか等、<br>
							個人情報に配慮した上で詳しくお話を聞かせて頂いています。
						</p>
						<p class="info-main-text">
							安心して受診して頂きたいから、患者様一人ひとりに合わせて、<br>
							心を込めてご対応いたします。
						</p>
					</div>
				</div>
			</div>


			<div class="subject" id="course">

				<div id="illness" class="container subject-contents">
					<h2 class="h-2"><span>診療対象となる疾患</span></h2>
					<div class="row">
						<div class="col-6 col-md-3">
							<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_8.png"></p>
							<div class="subject-contents-textarea">
								<h4 class="subject-contents-title">統合失調症</h4>
								<p class="subject-contents-text">幻覚・妄想・興奮といった陽性症状、感情の起伏が乏しくなり無気力で何もしなくなる、判断力や集中力が低下するなどの陰性症状があります。精神療法や薬物療法のほか、作業療法、心理療法、社会技能訓練などの治療を行います。</p>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_1.png"></p>
							<div class="subject-contents-textarea">
								<h4 class="subject-contents-title">気分障害(うつ病)</h4>
								<p class="subject-contents-text">気分障害の一種であり、抗うつ気分、意欲・興味・精神活動の低下、焦燥、食欲低下、不眠、悲しみ・不安感など様々な症状を引き起こします。</p>
								<p class="subject-contents-link"><a href="http://kokoro.mhlw.go.jp/check_simple/" target="_blank"><i class="fas fa-angle-right"></i> 簡易うつ病診断</a></p>
								<p><small>※外部サイト(厚生労働省 こころの耳)へ移動します</small></p>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_2.png"></p>
							<div class="subject-contents-textarea">
								<h4 class="subject-contents-title">認知症関連疾患</h4>
								<p class="subject-contents-text">認知症などの高齢者医療をデイケアや訪問介護を通じてサポートしております。認知症治療病棟では作業療法、音楽療法、回想法などのリハビリプログラムが充実しています。</p>
								<p class="subject-contents-link"><a href="<?=esc_url(home_url('/suzuran/'))?>"><i class="fas fa-angle-right"></i> 重度認知症患者デイケア すずらん</a></p>
								<p class="subject-contents-link"><a href="javascript:void(0);" data-toggle="modal" data-target="#ninchisho"><i class="fas fa-angle-right"></i> 初期認知症兆候観察リスト</a></p>
							</div>
						</div>
						<div id="ninchisho" class="modal fade" tabindex="9999" role="dialog" aria-labelledby="ninchishoLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">初期認知症兆候観察リスト</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>◯が４個以上あると認知症の疑いがあります</p>
										<p>記憶、忘れっぽさ</p>
										<table class="table table-striped">
											<tbody>
												<tr>
													<th><input type="checkbox" name="ninchi_check" id="ninchi_check_1"></th>
													<td><label for="ninchi_check_1">１．いつも日にちを忘れている。(今日の日付が分からないなど)</label></td>
												</tr>
												<tr>
													<th><input type="checkbox" name="ninchi_check" id="ninchi_check_2"></th>
													<td><label for="ninchi_check_2">２．少し前の事をしばしば忘れる。</label></td>
												</tr>
												<tr>
													<th><input type="checkbox" name="ninchi_check" id="ninchi_check_3"></th>
													<td><label for="ninchi_check_3">３．最近聞いた話を繰り返すことが出来ない。</label></td>
												</tr>
											</tbody>
										</table>
										<p>○語彙、会話内容の繰り返し</p>
										<table class="table table-striped">
											<tbody>
												<tr>
													<th><input type="checkbox" name="ninchi_check" id="ninchi_check_4"></th>
													<td><label for="ninchi_check_4">４．同じことを言う時がしばしばある。</label></td>
												</tr>
												<tr>
													<th><input type="checkbox" name="ninchi_check" id="ninchi_check_5"></th>
													<td><label for="ninchi_check_5">5．いつも同じ話を繰り返す。</label></td>
												</tr>
											</tbody>
										</table>
										<p>○会話の組み立て能力、文脈理解</p>
										<table class="table table-striped">
											<tbody>
												<tr>
													<th><input type="checkbox" name="ninchi_check" id="ninchi_check_6"></th>
													<td><label for="ninchi_check_6">6．特定の単語や言葉が出てこない。</label></td>
												</tr>
												<tr>
													<th><input type="checkbox" name="ninchi_check" id="ninchi_check_7"></th>
													<td><label for="ninchi_check_7">7．話の脈略をすぐに失う。(話があちこちに飛ぶなど)</label></td>
												</tr>
												<tr>
													<th><input type="checkbox" name="ninchi_check" id="ninchi_check_8"></th>
													<td><label for="ninchi_check_8">8．質問を理解していないことが答えからわかる。
														(質問に対する答えが的外れで、かみ合わないなど)
														</label></td>
												</tr>
												<tr>
													<th><input type="checkbox" name="ninchi_check" id="ninchi_check_9"></th>
													<td><label for="ninchi_check_9">9．会話を理解することがかなり困難</label></td>
												</tr>
											</tbody>
										</table>
										<p>○見当識障害、作話、依存</p>
										<table class="table table-striped">
											<tbody>
												<tr>
													<th><input type="checkbox" name="ninchi_check" id="ninchi_check_10"></th>
													<td><label for="ninchi_check_10">10．時間の観念がない。</label></td>
												</tr>
												<tr>
													<th><input type="checkbox" name="ninchi_check" id="ninchi_check_11"></th>
													<td><label for="ninchi_check_11">11．話のつじつまを合わせようとする。</label></td>
												</tr>
												<tr>
													<th><input type="checkbox" name="ninchi_check" id="ninchi_check_12"></th>
													<td><label for="ninchi_check_12">12．家族に依存する様子がある。(本人に質問すると家族の方を向くなど)。</label></td>
												</tr>
											</tbody>
										</table>
										<p class="text-center result">結果：12項目中、4項目以上が該当した場合、認知症の疑いあり</p>
										<p><small>Hopman-rock M,:Int J Geriatr Psychiatry.:2001Apr;16(4):406-14.より加筆</small></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_3.png"></p>
							<div class="subject-contents-textarea">
								<h4 class="subject-contents-title">児童思春期疾患・発達障害</h4>
								<p class="subject-contents-text">子どもの発達障害（自閉症、アスペルガー症候群、ADHD等）や精神障害、暴力・ひきこもりなどの治療を行います。</p>
							</div>
						</div>
					</div>
				</div>
				<div class="container subject-contents">
					<div class="row">
						<div class="col-6 col-md-3">
							<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_4.png"></p>
							<div class="subject-contents-textarea">
								<h4 class="subject-contents-title">周産期のメンタルヘルス</h4>
								<p class="subject-contents-text">周産期のうつ病、不安、中絶・流産による悲哀、分娩に対する重度の反応(PTSD、控訴反応)、強迫性障害などの症状を治療します。</p>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_5.png"></p>
							<div class="subject-contents-textarea">
								<h4 class="subject-contents-title">依存症(アルコール依存・薬物依存症等）</h4>
								<p class="subject-contents-text">アルコール等を止めたいのに止められない、社会生活に悪影響を及ぼしている、といった症状(依存症)を治療します。</p>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_6.png"></p>
							<div class="subject-contents-textarea">
								<h4 class="subject-contents-title">てんかん</h4>
								<p class="subject-contents-text">てんかんによる発作の症状（けいれん、手足の突っ張り、短時間の意識消失、全身や手足がビクッとするなど）を治療します。</p>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<p class="subject-contents-thum"><img src="<?=get_template_directory_uri()?>/dest/img/outpatient/subject_thum_7.png"></p>
							<div class="subject-contents-textarea">
								<h4 class="subject-contents-title">摂食障害</h4>
								<p class="subject-contents-text">拒食や過食に等によってダメージを受けた体の治療を行いながら疾患と向き合う心理教育、思考の偏り歪みに気付き修正する認知行動療法などを行います。</p>
							</div>
						</div>
					</div>
					<p class="text-center mt-3 pb-5">
						その他にも様々な精神医療に対応しております。お気軽にお問い合わせ下さい。
					</p>
				</div>
			</div>
			
			
			<div id="time" class="container info-contents">
			
				<h2 class="h-2"><span>診療科目・診療時間</span></h2>
				<div class="row">
					<div class="col-lg-6">
						<h3 class="h-3">受診に際してご用意いただくもの</h3>
						<p class="info-contents-anno">保険証、各種医療証、自立支援医療受給者証、紹介状等</p>
					</div>
					<div class="col-lg-6">
						<div class="info-contents-contact">
							<h5 class="greenBarBox-title">ご相談はこちらから</h5>
							<div class="info-contents-contact-main clearfix greenBarBox-content">
								<div class="info-contents-contact-main-pm">
									<h6>お電話でのご相談</h6>
									<p class="info-contents-contact-phone">0942-33-1581</p>
								</div>
								<div class="info-contents-contact-main-pm">
									<h6>メールでのご相談</h6>
									<p><a href="<?=esc_url(home_url('/contact/'))?>" class="greenBarBox-btn">ご相談フォームはこちら</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<h3 class="h-3 mt-5">診療科目・診療時間</h3>
				<p class="course">精神科・心療内科・内科</p>
				<p>受診に迷われている場合や他の病院へ通院されている場合は、相談だけでも結構ですので、気軽にご相談ください。</p>
				<div class="scroll-x">
					<?=do_shortcode('[table id=3 /]')?>
				</div>
<!--
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
							<th><small>受付時間 8:30〜12:00</small><br>9:00〜12:30</th>
							<td>櫻井 斉司<br>山田 茂人<br>梶原 眞理</td>
							<td>大治 太郎<br>山田 茂人<br>乘本 共香<br>溝口 義人<br>【非常勤】<br>1･3･5週<br>寺嶋 康</td>
							<td>櫻井 斉司<br>横山 裕子<br>坂本 奈緒<br>平木 文代</td>
							<td>大治 太郎<br>乘本 共香<br>大江 美佐里<br>【非常勤】<br>宗岡 誠<br>1･3週<br>坂本 奈緒</td>
							<td>大治 太郎<br>櫻井 斉司<br>新田 真紀子</td>
							<td>平木 文代<br>【非常勤】<br>1･3･5週<br>櫻井 斉司<br>横山 裕子<br>2･4週<br>山田 茂人<br>坂本 奈緒</td>
							<td class="font-weight-bold">×</td>
						</tr>
						<tr>
							<th><small>受付時間 13:00〜16:00</small><br>14:00〜17:00</th>
							<td>宗岡 誠<br>乘本 共香</td>
							<td>宗岡 誠<br>【非常勤】<br>1･3･5週<br>寺嶋 康</td>
							<td>平木 文代<br>乘本 共香</td>
							<td class="font-weight-bold">×</td>
							<td>梶原 眞理<br>新田 真紀子</td>
							<td class="font-weight-bold">×</td>
							<td class="font-weight-bold">×</td>
						</tr>
					</tbody>
				</table>
-->

				<p class="mt-3">
					※初診時のみ予約制となりますので、事前にご連絡を頂くとスムーズに診察を行うことが出来ます。<br>
					※2度目以降の診察は予約制ではありませんので、お薬が切れる前に主治医の外来日にお越し下さい。<br>
					※緊急時はこの限りではありませんので、電話でご相談ください。
				</p>
			</div>
		</div>

		<div id="flow" class="flow">
			<h2 class="h-2"><span>診察・治療の流れ</span></h2>
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
										<p class="flow-main-title">入院治療</p>
										<p class="flow-card2-text">休息やお薬の調整だけでなく、疾患別治療プログラムや作業療法などにも参加して頂き、リハビリを行います。退院後の生活を見据え、多職種でアプローチします。</p>
										<p class="flow-card2-main-link"><a href="<?=esc_url(home_url('/hospitalization/'))?>"><i class="fas fa-angle-right"></i> 詳しくはこちら</a></p>
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
										<p class="flow-main-title">外来治療</p>
										<p class="flow-card2-text">主治医による一般診療の中で精神療法を行います。定期的な通院を継続しながらお薬の調整や再発防止に努めます。患者様の症状や今後の生活の目標によって、外来作業療法やデイケア、デイナイトケア、重度認知症患者デイケア、訪問看護、介護・福祉サービスの利用を進めることがあります。また、当法人外の介護・福祉サービスをご紹介することもあります。</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<?php get_template_part('include/treatment'); ?>
<!--

			<div class="needitem">
				<h2 class="h-2"><span>当院の受診が初めての方・ご家族の皆様へ</span></h2>
				<p class="needitem-text"><br>
					</p>
				<div class="needitem-contact">
					<h5 class="needitem-contact-title">受診に際してご用意して頂くもの</h5>
					<div class="needitem-contact-main">
						<p class="needitem-contact-main-text">・保険証　　　・各種手帳（前期高齢者受給者証、ひとり親医療証、原爆医療証など）<br>
							・自立支援医療受給者証（利用されている方のみ）　　　・紹介状（かかりつけ医がある場合）　　　<br>
							・お薬手帳</p>
					</div>
				</div>
			</div>
-->

			<div class="flow-btnblock">
				<p class="flow-btn flow-btn-clr1"><a href="<?=esc_url(home_url('/hospitalization/'))?>"><i class="fas fa-angle-right"></i> 入院のご案内</a></p>
				<p class="flow-btn flow-btn-clr2"><a href="<?=esc_url(home_url('/facility/'))?>"><i class="fas fa-angle-right"></i> 施設案内</a></p>
			</div>
		</div>
		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>