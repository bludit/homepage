<?php define('BLUDIT', true); define('PATH_ROOT', __DIR__.DIRECTORY_SEPARATOR); include('php/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $currentLanguage ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php l('head description') ?>">
	<meta name="title" content="<?php l('head title') ?>">
	<title><?php l('head title') ?></title>

	<meta name="author" content="Diego Najar">

	<!-- CSS files -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
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
	    "@context": "http://schema.org",
	    "@type": "Organization",
	    "name": "<?php l('head title') ?>",
	    "description": "<?php l('head description') ?>",
	    "url": "<?php echo $_topbar['website'] ?>",
	    "sameAs": [
	      "https://www.facebook.com/bluditcms",
	      "https://www.youtube.com/bluditcms",
	      "https://twitter.com/bludit/",
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

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@bludit" />
	<meta name="twitter:title" content="<?php l('head title') ?>" />
	<meta name="twitter:description" content="<?php l('head description') ?>" />
	<meta name="twitter:image" content="<?php echo DEFAULT_TWITTER_CARD ?>" />

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
	<link rel=”alternate” hreflang=”x-default” href=”https://www.bludit.com” />

</head>
<body>
	<nav>
		<div class="logo"></div>
		<ul class="menu">
			<li><div class="menu__item toggle"><span></span></div></li>
			<li class="menu__item"><a href="<?php echo $_topbar['themes'] ?>" class="link link--dark" target="_blank"><?php l('Themes') ?></a></li>
			<li class="menu__item"><a href="<?php echo $_topbar['plugins'] ?>" class="link link--dark" target="_blank"><?php l('Plugins') ?></a></li>
			<li class="menu__item"><a href="<?php echo $_topbar['documentation'] ?>" class="link link--dark" target="_blank"><?php l('Documentation') ?></a></li>
			<li class="menu__item"><a href="<?php echo $_topbar['pro'] ?>" class="link link--dark" target="_blank">Bludit PRO</a></li>
			<li class="menu__item"><a href="https://www.facebook.com/bluditcms" class="link link--dark" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li class="menu__item"><a href="https://twitter.com/bludit/" class="link link--dark" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li class="menu__item"><a href="https://github.com/bludit/bludit" class="link link--dark" target="_blank"><i class="fa fa-github"></i></a></li>
		</ul>
	</nav>
	<div class="hero">
		<h1 class="hero__title">Bludit</h1>
		<p class="hero__description"><?php l('bludit-slogan1') ?></p>
		<p class="hero__description"><?php l('bludit-slogan2') ?></p>
	</div>
	<div class="hero__terminal">
		<img src="<?php echo $_topbar['slider1'] ?>?version=<?php echo VERSION ?>" alt="Bludit image slider" />
	</div>
	<div class="wrapper">

		<div class="callout">
			<a href="<?php echo $version['stable']['downloadLink'] ?>" class="button--primary button--download"><i class="fa fa-download"></i> <?php l('Download') ?> v<?php echo $version['stable']['version'] ?></a>
			<a href="https://demo.bludit.com" target="_blank" class="button--primary button--download"><i class="fa fa-desktop"></i> <?php l('Demo') ?></a>
			<!-- <div style="margin-top: 10px; font-size: 0.9em;"><a href="https://github.com/bludit/bludit/archive/v3.0.0-rc-3.zip"><?php l('Download') ?> v3.0.0-rc3</a></div> -->
		</div>

		<div class="feature">
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
		</div>

		<div class="callout">
			<p><?php l('bludit-documentation') ?></p>
			<a href="https://docs.bludit.com" class="button--secondary"><i class="fa fa-book"></i> <?php l('Documentation') ?></a>
		</div>

		<div class="callout">
			<p><?php l('bludit-support') ?></p>
			<a href="https://forum.bludit.org" class="button--secondary"><i class="fa fa-support"></i> <?php l('Forum') ?></a>
			<a href="https://gitter.im/bludit/support" class="button--secondary"><i class="fa fa-commenting-o"></i> <?php l('Chat') ?></a>
			<a href="https://github.com/bludit/bludit/issues" class="button--secondary"><i class="fa fa-github"></i> Github Issues</a>
		</div>

	</div>
	<div class="changelog">
		<div class="wrapper wrapper-tweets">
			<a data-height="500" class="twitter-timeline" href="https://twitter.com/bludit?ref_src=twsrc%5Etfw">Tweets by bludit</a>
			<script async src="https://platform.twitter.com/widgets.js"></script>
		</div>
	</div>
	<footer class="footer">
		<div>
			<a href="https://www.bludit.com">English</a>
			<a href="https://www.bludit.com/de/">Deutsch</a>
			<a href="https://www.bludit.com/es/">Español</a>
			<a href="https://www.bludit.com/ru/">Русский</a>
			<a href="https://www.bludit.com/ja/">日本語</a>
		</div>
		<div>Bludit © 2015-<?php echo date('y') ?>. All Rights Reserved.</div>
	</footer>
	<?php
		js('scribbler.js');
	?>

	<!--
		Yandex.Metrika counter
		Masking IP addresses enabled for GDPR
	-->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(51941300, "init", {
		id:51941300,
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/51941300" style="position:absolute; left:-9999px;" alt="Yandex Metrika" /></div></noscript>

</body>
</html>
