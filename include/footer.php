<footer class="pageFooter">
	<div class=" d-none d-md-block pageFooter-links">
		<div class="container">
			<div class="row">
				<ul class="pageFooter-links-list col-sm-3">
					<li><a href="<?=esc_url(home_url('/'))?>"><i class="fas fa-angle-right"></i> トップページ</a></li>
					<li>
						<a href="<?=esc_url(home_url('/outpatient/'))?>"><i class="fas fa-angle-right"></i> 外来受診</a>
						<ul>
							<li><a href="<?=esc_url(home_url('/outpatient/'))?>"><i class="fas fa-angle-right"></i> 初めての方へ</a></li>
							<li><a href="<?=esc_url(home_url('/outpatient/#course'))?>"><i class="fas fa-angle-right"></i> 診療時間・診療科目</a></li>
							<li><a href="<?=esc_url(home_url('/outpatient/#flow'))?>"><i class="fas fa-angle-right"></i> 診察・治療の流れ</a></li>
							<li><a href="<?=esc_url(home_url('/second-opinion/'))?>"><i class="fas fa-angle-right"></i> セカンドオピニオンについて</a></li>
						</ul>
					</li>
					<li>
						<a href="<?=esc_url(home_url('/hospitalization/'))?>"><i class="fas fa-angle-right"></i> 入院治療</a>
						<ul>
							<li><a href="<?=esc_url(home_url('/hospitalization/#flow'))?>"><i class="fas fa-angle-right"></i> 入院までの流れ</a></li>
							<li><a href="<?=esc_url(home_url('/hospitalization/#treatment'))?>"><i class="fas fa-angle-right"></i> 治療について</a></li>
							<li><a href="<?=esc_url(home_url('/hospitalization/#meeting'))?>"><i class="fas fa-angle-right"></i> ご面会について</a></li>
						</ul>
					</li>
				</ul>
				<ul class="pageFooter-links-list col-sm-2">
					<li>
						<a href="<?=esc_url(home_url('/overview/'))?>"><i class="fas fa-angle-right"></i> 病院紹介</a>
						<ul>
							<li><a href="<?=esc_url(home_url('/overview/#greeting'))?>"><i class="fas fa-angle-right"></i> 理事長挨拶</a></li>
							<li><a href="<?=esc_url(home_url('/overview/#vision'))?>"><i class="fas fa-angle-right"></i> 病院理念</a></li>
							<li><a href="<?=esc_url(home_url('/facility/'))?>"><i class="fas fa-angle-right"></i> 施設案内</a></li>
							<li><a href="<?=esc_url(home_url('/doctor/'))?>"><i class="fas fa-angle-right"></i> 医師紹介</a></li>
							<li><a href="<?=esc_url(home_url('/overview/#history'))?>"><i class="fas fa-angle-right"></i> 沿革</a></li>
						</ul>
					</li>
				</ul>
				<ul class="pageFooter-links-list col-sm-3">
					<li>
						<a href="<?=esc_url(home_url('/recruit/'))?>"><i class="fas fa-angle-right"></i> 求人情報</a>
						<ul>
							<li><a href="<?=esc_url(home_url('/recruit/'))?>"><i class="fas fa-angle-right"></i> 求人情報</a></li>
							<li><a href="<?=esc_url(home_url('/working-environment/'))?>"><i class="fas fa-angle-right"></i> 働きやすい労働環境</a></li>
							<li><a href="<?=esc_url(home_url('/working-environment/#welfare'))?>"><i class="fas fa-angle-right"></i> 福利厚生</a></li>
							<li><a href="<?=esc_url(home_url('/working-environment/#tanpopo'))?>"><i class="fas fa-angle-right"></i> 子育て支援</a></li>
							<li><a href="<?=esc_url(home_url('/working-environment/#program'))?>"><i class="fas fa-angle-right"></i> 教育プログラム</a></li>
						</ul>
						
					</li>
					<li><a href="<?=esc_url(home_url('/access/'))?>"><i class="fas fa-angle-right"></i> アクセス</a></li>
					<li><a href="<?=esc_url(home_url('/training-program/'))?>"><i class="fas fa-angle-right"></i> 専門医研修プログラム</a></li>
					<li><a href="<?=esc_url(home_url('/medical-personnel/'))?>"><i class="fas fa-angle-right"></i> 医療関係者の方へ</a></li>
					<li><a href="<?=esc_url(home_url('/seminar/'))?>"><i class="fas fa-angle-right"></i> 家族セミナー</a></li>
					<li><a href="<?=esc_url(home_url('/info/'))?>"><i class="fas fa-angle-right"></i> お知らせ</a></li>
				</ul>
				<ul class="pageFooter-links-list col-sm-4">
					<li>
						<a href="<?=esc_url(home_url('/daycare/'))?>"><i class="fas fa-angle-right"></i> 在宅支援施設</a>
						<ul>
							<li><a href="<?=esc_url(home_url('/daycare/'))?>"><i class="fas fa-angle-right"></i> 精神科デイケア、デイナイトケア、ショートケア</a></li>
							<li><a href="<?=esc_url(home_url('/suzuran/'))?>"><i class="fas fa-angle-right"></i> 重度認知症患者デイケア　すずらん</a></li>
							<li><a href="<?=esc_url(home_url('/clover/'))?>"><i class="fas fa-angle-right"></i> 訪問介護ステーション　クローバー</a></li>
							<li><a href="<?=esc_url(home_url('/lupinus/'))?>"><i class="fas fa-angle-right"></i> グループホーム　ルピナス</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<p class="copyright">&copy; 2018 St.Lucia’s Hospital.</p>
</footer>
<div class="j-top">
	<a href="#" class="scrollBtn">
		<p class="j-top-arrow"><img src="<?=get_template_directory_uri()?>/dest/img/common/arrow_top.png" alt="ページ上部"></p>
		<p class="j-top-text">ページ<br>上部へ</p>
	</a>
</div>

<?php get_template_part('include/footer_script'); ?>
<?php wp_footer(); ?>
