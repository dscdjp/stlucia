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

		<div class="contact-form">
			<div class="container">
				<div class="row">
					<h3 class="col-md-12"><span>お問合せフォーム</span></h3>
					<div class="col-md-8">
						<div class="contact-form-main">
							<?=do_shortcode('[contact-form-7 id="1440" title="contactform"]')?>
						</div>
					</div>
					<p class="contact-form-text col-md-8">※<span>*</span>は必須項目です。</p>
					<p class="contact-form-text col-md-8">※弊社にお問い合わせの際は、<a href="<?=esc_url(home_url('/privacy/'))?>">プライバシーポリシー</a>をお読みになり、同意頂ける方のみ「内容を送信」してください。</p>
				</div>
			</div>
		</div>
		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>