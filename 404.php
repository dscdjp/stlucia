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
			<div class="container mt-5">
				<h2>404 NOT FOUND</h2>
				<p>アクセスしたページは見つかりませんでした。以下のような原因が考えられます。</p>
				<p>
					指定されたURLが間違っているか、お探しのページが移動または削除された可能性がございます。
					恐れ入りますが、トップページより再度ページをお探しください。
				</p>
				<p><a href="<?=esc_url(home_url('/'))?>">トップページへ戻る</a></p>
			</div>
		</div>
		
		<?php get_template_part('include/footer_contact'); ?>
    </main>


	<?php get_template_part('include/footer'); ?>
</body>

</html>