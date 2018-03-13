<footer class="pageFooter">
	<div class="container pageFooter-links clearfix pc">
		<ul class="pageFooter-links-list">
			<li><a href="<?=esc_url(home_url('/'))?>"><i class="fas fa-angle-right"></i> トップページ</a></li>
			<li>
				<a href="<?=esc_url(home_url('/outpatient/'))?>"><i class="fas fa-angle-right"></i> 外来受診</a>
				<ul>
					<li><a href="<?=esc_url(home_url('/outpatient/'))?>"><i class="fas fa-angle-right"></i> 外来のご案内</a></li>
					<li><a href="<?=esc_url(home_url('/outpatient/#course'))?>"><i class="fas fa-angle-right"></i> 診療科目</a></li>
					<li><a href="<?=esc_url(home_url('/outpatient/#flow'))?>"><i class="fas fa-angle-right"></i> 診察・治療の流れ</a></li>
					<li><a href="<?=esc_url(home_url('/second-opinion/'))?>"><i class="fas fa-angle-right"></i> セカンドオピニオンについて</a></li>
				</ul>
			</li>
			<li>
				<a href="<?=esc_url(home_url('/hospitalization/'))?>"><i class="fas fa-angle-right"></i> 入院治療</a>
				<ul>
					<li><a href="<?=esc_url(home_url('/hospitalization/'))?>"><i class="fas fa-angle-right"></i> 入院のご案内</a></li>
					<li><a href="<?=esc_url(home_url('/hospitalization/#treatment'))?>"><i class="fas fa-angle-right"></i> 治療方針・治療内容</a></li>
					<li><a href="<?=esc_url(home_url('/hospitalization/#flow'))?>"><i class="fas fa-angle-right"></i> 入院までの流れ</a></li>
				</ul>
			</li>
		</ul>
		<ul class="pageFooter-links-list">
			<li>
				<a href="<?=esc_url(home_url('/overview/'))?>"><i class="fas fa-angle-right"></i> 病院紹介</a>
				<ul>
					<li><a href="<?=esc_url(home_url('/overview/'))?>"><i class="fas fa-angle-right"></i> 病院概要</a></li>
					<li><a href="<?=esc_url(home_url('/facility/'))?>"><i class="fas fa-angle-right"></i> 施設案内</a></li>
					<li><a href="<?=esc_url(home_url('/doctor/'))?>"><i class="fas fa-angle-right"></i> 医師紹介</a></li>
					<li><a href="<?=esc_url(home_url('/history/'))?>"><i class="fas fa-angle-right"></i> 沿革</a></li>
					<li><a href="<?=esc_url(home_url('/access/'))?>"><i class="fas fa-angle-right"></i> アクセス</a></li>
				</ul>
			</li>
		</ul>
		<ul class="pageFooter-links-list">
			<li>
				<a href="<?=esc_url(home_url('/recruit/'))?>"><i class="fas fa-angle-right"></i> 求人情報</a>
				<ul>
					<li><a href="<?=esc_url(home_url('/recruit/'))?>"><i class="fas fa-angle-right"></i> 求人情報</a></li>
					<li><a href="<?=esc_url(home_url('/working-environment/'))?>"><i class="fas fa-angle-right"></i> 働きやすい労働環境</a></li>
				</ul>
			</li>
			<li><a href="<?=esc_url(home_url('/medical-personnel/'))?>"><i class="fas fa-angle-right"></i> 医療関係者の方へ</a></li>
			<li><a href="<?=esc_url(home_url('/seminar/'))?>"><i class="fas fa-angle-right"></i> 家族セミナー</a></li>
			<li><a href="<?=esc_url(home_url('/info/'))?>"><i class="fas fa-angle-right"></i> 新着情報</a></li>
		</ul>
		<ul class="pageFooter-links-list">
			<li>
				<a href="<?=esc_url(home_url('/clover/'))?>"><i class="fas fa-angle-right"></i> 社会復帰支援</a>
				<ul>
					<li><a href="<?=esc_url(home_url('/clover/'))?>"><i class="fas fa-angle-right"></i> 訪問介護ステーション　クローバー</a></li>
					<li><a href="<?=esc_url(home_url('/daycare/'))?>"><i class="fas fa-angle-right"></i> 精神科デイケア、デイナイトケア、ショートケア</a></li>
					<li><a href="<?=esc_url(home_url('/suzuran/'))?>"><i class="fas fa-angle-right"></i> 重度認知症患者デイケア　すずらん</a></li>
					<li><a href="<?=esc_url(home_url('/lupinus/'))?>"><i class="fas fa-angle-right"></i> グループホーム　ルピナス</a></li>
				</ul>
			</li>
		</ul>
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
