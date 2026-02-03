<?php define('BLUDIT', true); define('PATH_ROOT', __DIR__.DIRECTORY_SEPARATOR); include('php/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $currentLanguage ?>" dir="<?php echo $languageDirection ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">
	<meta name="description" content="<?php l('head description') ?>">
	<meta name="title" content="<?php l('head title') ?>">
	<title><?php l('head title') ?></title>

	<meta name="author" content="Diego Najar">

	<!-- CSS files -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<?php
		css('scribbler-global.css');
		css('scribbler-landing.css');
		css('bludit.css');
	?>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo DOMAIN ?>/img/favicon.png">

	<!-- Schema.org -->
	<script type="application/ld+json">
	  {
	    "@context": "https://schema.org",
	    "@type": "Organization",
	    "name": "<?php l('head title') ?>",
	    "description": "<?php l('head description') ?>",
	    "url": "<?php echo $_topbar['website'] ?>",
	    "sameAs": [
	      "https://github.com/bludit/"
	    ],
	    "image": {
		"@type": "ImageObject",
		"url": "https://www.bludit.com/img/bludit-facebook-cards.png",
		"width": 803,
		"height": 424
	    }
	  }
	</script>

	<!-- Open Graph -->
	<meta property="og:locale" content="<?php echo $currentLanguage ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php l('head title') ?>" />
	<meta property="og:description" content="<?php l('head description') ?>" />
	<meta property="og:url" content="<?php echo $_topbar['website'] ?>" />
	<meta property="og:image" content="<?php echo DEFAULT_FACEBOOK_CARD ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Bludit" />

	<!-- Canonical -->
	<link rel="canonical" href="<?php echo $_topbar['website'] ?>" />

	<!-- Google hreflang tag -->
	<?php foreach ($_hreflang as $hreflang=>$href): ?>
	<link rel="alternate" hreflang="<?php echo $hreflang ?>" href="<?php echo $href ?>" />
	<?php endforeach ?>
	<link rel="alternate" hreflang="x-default" href="https://www.bludit.com" />

</head>
<body>
	<header class="site-header">
		<nav>
			<ul class="menu">
				<li><div class="menu__item toggle"><span></span></div></li>
				<li class="menu__item"><a href="<?php echo $_topbar['themes'] ?>" class="link link--dark" target="_blank"><?php l('Themes') ?></a></li>
				<li class="menu__item"><a href="<?php echo $_topbar['plugins'] ?>" class="link link--dark" target="_blank"><?php l('Plugins') ?></a></li>
				<li class="menu__item"><a href="<?php echo $_topbar['documentation'] ?>" class="link link--dark" target="_blank"><?php l('Documentation') ?></a></li>
				<li class="menu__item"><a href="<?php echo $_topbar['pro'] ?>" class="link link--dark" target="_blank"><?php l('bludit-pro') ?></a></li>
				<li class="menu__item"><a href="https://github.com/bludit/bludit" class="link link--dark" target="_blank" aria-label="GitHub"><i class="fa fa-github"></i></a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="hero" aria-label="Bludit introduction">
			<h1 class="hero__title hero__title--brand">
				<img class="hero__logo" src="<?php echo DOMAIN ?>/img/logo.svg" alt="Bludit" />
				<span>Bludit</span>
			</h1>
			<p class="hero__description"><?php l('bludit-slogan1') ?></p>
			<p class="hero__description"><?php l('bludit-slogan2') ?></p>
		</section>
		<div class="hero__terminal">
			<div class="hero__slides" aria-label="Bludit screenshots" aria-live="polite">
				<img class="hero__slide is-active" src="/img/screenshot1.png" alt="Bludit screenshot 1" />
				<img class="hero__slide" src="/img/screenshot2.png" alt="Bludit screenshot 2" />
				<img class="hero__slide" src="/img/screenshot3.png" alt="Bludit screenshot 3" />
			</div>
		</div>
		<div class="wrapper">

		<div class="callout">
			<a href="<?php echo $version['stable']['downloadLink'] ?>" class="button--primary button--download"><i class="fa fa-download"></i> <?php l('Download') ?> v<?php echo $version['stable']['version'] ?></a>
			<a href="https://demo.bludit.com" target="_blank" class="button--primary button--download"><i class="fa fa-desktop"></i> <?php l('Demo') ?></a>
		</div>

		<section class="feature" aria-label="Bludit features">
			<div class="feature__item">
				<h2 class="section__title"><?php l('Flat File') ?></h2>
				<p><?php l('bludit-feature1') ?></p>
			</div>
			<div class="feature__item">
				<h2 class="section__title"><?php l('Themes') ?></h2>
				<p><?php l('bludit-feature2') ?></p>
			</div>
			<div class="feature__item">
				<h2 class="section__title"><?php l('Plugins') ?></h2>
				<p><?php l('bludit-feature3') ?></p>
			</div>
			<div class="feature__item">
				<h2 class="section__title"><?php l('SEO friendly') ?></h2>
				<p><?php l('bludit-feature4') ?></p>
			</div>
			<div class="feature__item">
				<h2 class="section__title"><?php l('Markdown support') ?></h2>
				<p><?php l('bludit-feature5') ?></p>
			</div>
			<div class="feature__item">
				<h2 class="section__title"><?php l('GDPR Compliant') ?></h2>
				<p><?php l('bludit-feature6') ?></p>
			</div>
		</section>

		<div class="callout">
			<p><?php l('bludit-documentation') ?></p>
			<a href="https://docs.bludit.com" class="button--secondary"><i class="fa fa-book"></i> <?php l('Documentation') ?></a>
		</div>

		<div class="callout">
			<p><?php l('bludit-support') ?></p>
			<a href="https://forum.bludit.org" class="button--secondary"><i class="fa fa-support"></i> <?php l('Forum') ?></a>
			<a href="https://github.com/bludit/bludit/issues" class="button--secondary"><i class="fa fa-github"></i> <?php l('github-issues') ?></a>
		</div>

		</div>
	</main>
	<footer class="footer">
		<div>
			<a href="https://www.bludit.com">English</a>
			<a href="https://www.bludit.com/es/">Español</a>
			<a href="https://www.bludit.com/ar/">العربية</a>
			<a href="https://www.bludit.com/zh/">中文</a>
			<a href="https://www.bludit.com/fr/">Français</a>
			<a href="https://www.bludit.com/de/">Deutsch</a>
			<a href="https://www.bludit.com/hi/">हिंदी</a>
			<a href="https://www.bludit.com/ja/">日本語</a>
			<a href="https://www.bludit.com/pt/">Português</a>
			<a href="https://www.bludit.com/ru/">Русский</a>
		</div>
		<div>Bludit © 2015-<?php echo date('Y') ?>. All Rights Reserved.</div>
	</footer>
	<?php
		js('scribbler.js');
	?>
</body>
</html>
