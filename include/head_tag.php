<?php global $settings; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$settings['site_title']?></title>
<meta name="format-detection" content="telephone=no">
<meta property="og:title" content="<?=is_home()?$settings['site_title']:get_the_title()?>">
<meta property="og:description" content="<?=$settings['description']?>">
<meta property="og:image" content="<?=$settings['og_image_url']?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?=$settings['url']?>">
<meta property="og:site_name" content="<?=$settings['site_title']?>">
<meta property="fb:app_id" content="2036578099890846" />
<meta name="twitter:card" content="summarylargeimage" />
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="canonical" href="<?=$settings['url']?>">
<link href="<?=get_template_directory_uri()?>/dest/css/<?=$settings['slug']?>.min.css?<?=current_time('YmdHis')?>" rel="stylesheet">
<script src="<?=get_template_directory_uri()?>/dest/js/<?=$settings['slug']?>.min.js?<?=current_time('YmdHis')?>" type="text/javascript"></script>

<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>