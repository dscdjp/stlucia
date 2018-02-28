<footer class="pageFooter">
	<div class="container pageFooter-links clearfix pc">
		<ul class="pageFooter-links-list">
			<li><a href="<?=esc_url(home_url('/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_green.png" alt=""> トップページ</a></li>
			<li>
				<a href="<?=esc_url(home_url('/outpatient/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_green.png" alt=""> 外来受診</a>
				<ul>
					<li><a href="<?=esc_url(home_url('/outpatient/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> 外来のご案内</a></li>
					<li><a href="<?=esc_url(home_url('/second-opinion/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> セカンドオピニオンについて</a></li>
				</ul>
			</li>
			<li>
				<a href="<?=esc_url(home_url('/hospitalization/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_green.png" alt=""> 入院治療</a>
				<ul>
					<li><a href="<?=esc_url(home_url('/hospitalization/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> 入院のご案内</a></li>
					<li><a href="<?=esc_url(home_url('/hospitalization/#treatment'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> 治療方針・治療内容</a></li>
				</ul>
			</li>
		</ul>
		<ul class="pageFooter-links-list">
			<li>
				<a href="<?=esc_url(home_url('/overview/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_green.png" alt=""> 病院紹介</a>
				<ul>
					<li><a href="<?=esc_url(home_url('/overview/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> 病院概要</a></li>
					<li><a href="<?=esc_url(home_url('/facility/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> 施設案内</a></li>
					<li><a href="<?=esc_url(home_url('/doctor/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> 医師紹介</a></li>
					<li><a href="<?=esc_url(home_url('/history/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> 沿革</a></li>
					<li><a href="<?=esc_url(home_url('/access/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> アクセス</a></li>
				</ul>
			</li>
		</ul>
		<ul class="pageFooter-links-list">
			<li>
				<a href="<?=esc_url(home_url('/recruit/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_green.png" alt=""> 求人情報</a>
				<ul>
					<li><a href="<?=esc_url(home_url('/recruit/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> 求人情報</a></li>
					<li><a href="<?=esc_url(home_url('/child-raising/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> 子育て支援</a></li>
				</ul>
			</li>
			<li><a href="<?=esc_url(home_url('/medical-personnel/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_green.png" alt=""> 医療関係者の方へ</a></li>
			<li><a href="<?=esc_url(home_url('/seminar/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_green.png" alt=""> 家族セミナー</a></li>
			<li><a href="<?=esc_url(home_url('/info/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_green.png" alt=""> 新着情報</a></li>
		</ul>
		<ul class="pageFooter-links-list">
			<li>
				<a href="<?=esc_url(home_url('/clover/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_green.png" alt=""> 社会復帰支援</a>
				<ul>
					<li><a href="<?=esc_url(home_url('/clover/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> 訪問介護ステーション　クローバー</a></li>
					<li><a href="<?=esc_url(home_url('/daycare/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> 精神科デイケア、デイナイトケア、ショートケア</a></li>
					<li><a href="<?=esc_url(home_url('/suzuran/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> 重度認知症患者デイケア　すずらん</a></li>
					<li><a href="<?=esc_url(home_url('/lupinus/'))?>"><img src="<?=get_template_directory_uri()?>/dest/img/index/arrow_footer_black.png" alt=""> グループホーム　ルピナス</a></li>
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
