<?php include('config.php') ?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php l('head title') ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php l('head description') ?>">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--[if lte IE 8]><script src="<?php echo DOMAIN ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="<?php echo DOMAIN ?>/assets/css/main.css">
	<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo DOMAIN ?>/assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo DOMAIN ?>/assets/css/ie9.css" /><![endif]-->
	<link rel="stylesheet" href="<?php echo DOMAIN ?>/assets/css/bludit.css">

	<link rel="icon" type="image/png" href="<?php echo DOMAIN ?>/assets/favicon.png">

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@bludit" />
	<meta name="twitter:title" content="<?php l('head title') ?>" />
	<meta name="twitter:description" content="<?php l('head description') ?>" />
	<meta name="twitter:image" content="<?php echo CDN.'/images/bludit-twitter-cards.png' ?>" />

	<!-- Open Graph -->
	<meta property="og:locale" content="<?php echo $defaultLocale ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php l('head title') ?>" />
	<meta property="og:description" content="<?php l('head description') ?>" />
	<meta property="og:url" content="<?php echo $topbar['website'] ?>" />
	<meta property="og:image" content="<?php echo CDN.'/images/bludit-facebook-cards.png' ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Bludit Logo" />

	<!-- Google hreflang tag -->
	<link rel="alternate" hreflang="en" href="<?php echo DOMAIN ?>" />
	<?php
		$tmpLanguages = $acceptedLanguages;
		unset($tmpLanguages[0]);
		foreach ($tmpLanguages as $lang) {
			echo '<link rel="alternate" hreflang="'.$lang.'" href="'.DOMAIN . '/' . $lang.'/"/>'.PHP_EOL;
		}
	?>

	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-67610404-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-67610404-1');
	</script>
</head>
<body class="no-sidebar">
<div id="page-wrapper">

	<!-- NAVBAR -->
	<header id="header">
		<h1 id="logo"><a href="https://www.bludit.com">BLUDIT</a></h1>
		<nav id="nav">
		<ul>
			<li><a href="<?php echo $topbar['download'] ?>"><?php l('Download') ?></a></li>
			<li><a href="<?php echo $topbar['demo'] ?>"><?php l('Demo') ?></a></li>
			<li><a href="<?php echo $topbar['docs'] ?>"><?php l('Documentation') ?></a></li>
			<li><a href="<?php echo $topbar['themes'] ?>"><?php l('Themes') ?></a></li>
			<li><a href="<?php echo $topbar['plugins'] ?>"><?php l('Plugins') ?></a></li>
			<li><a href="<?php echo $topbar['donations'] ?>"><?php l('Donations') ?></a></li>
			<li><a href="<?php echo $topbar['pro'] ?>">Bludit PRO</a></li>
		</ul>
		</nav>
	</header>

	<!-- MAIN -->
	<article id="main">

		<header class="special container">
			<h2>BLUDIT</h2>
			<p class="little-description"><?php l('bludit-little-description-paragraph1') ?></p>
			<p class="little-description"><?php l('bludit-little-description-paragraph2') ?></p>
		</header>

		<section id="download" class="wrapper style4 container">
		<div class="row 50%">
			<div class="6u 12u(narrower)">
				<h1 class="title"><?php l('Download') ?></h1>
				<p><?php l('download-paragraph1') ?></p>
				<a class="button1" href="<?php echo $version['stable']['downloadLink'] ?>"><i class="icon fa-download"></i> BLUDIT <?php echo $version['stable']['version'] ?></a>
				<?php
					if( !empty($version['beta']['version']) ) {
						echo '<a target="_blank" class="beta" href="'.$version['beta']['changelogLink'].'">'.l("download-beta-paragraph1", false).' '.$version['beta']['version'].'</a>';
					}
				?>
			</div>
			<div class="6u 12u(narrower) important(narrower)">
				<h1 class="title"><?php l('What is Bludit') ?></h1>
				<p><?php l('what-is-paragraph1') ?></p>
			</div>
		</div>
		</section>

		<section id="demo" class="wrapper style3 container">
		<div class="content">
			<h1 class="title"><?php l('Demo') ?></h1>
			<p><?php l('demo-paragraph1') ?></p>
			<a class="button1 small-button" target="_blank" href="https://demo.bludit.com"><i class="icon fa-clone"></i> <?php l('Demo') ?></a>
		</div>
		</section>

		<section class="wrapper style1 container special">
		<div class="row">

			<div class="4u 12u(narrower)">
			<section>
				<header><h3><?php l('Documentation') ?></h3></header>
				<p><?php l('documentation-description') ?></p>
				<footer>
					<ul class="buttons">
						<li><a target="_blank" href="https://docs.bludit.com"><?php l('Documentation') ?></a></li>
					</ul>
				</footer>
			</section>
			</div>

			<div class="4u 12u(narrower)">
			<section>
				<header>
					<h3><?php l('Themes and Plugins') ?></h3>
				</header>
				<p><?php l('themes-and-plugins-description') ?></p>
				<footer>
					<ul class="buttons">
						<li><a target="_blank" href="https://themes.bludit.com"><?php l('Themes') ?></a></li>
						<li><a target="_blank" href="https://plugins.bludit.com"><?php l('Plugins') ?></a></li>
						<li><a target="_blank" href="https://forum.bludit.org/viewforum.php?f=14"><?php l('Forum') ?></a></li>
					</ul>
				</footer>
			</section>
			</div>

			<div class="4u 12u(narrower)">
			<section>
				<header>
					<h3><?php l('Support') ?></h3>
				</header>
				<p><?php l('support-description') ?></p>
				<footer>
					<ul class="buttons">
						<li><a target="_blank" href="https://gitter.im/bludit/support"><?php l('Chat') ?></a></li>
						<li><a target="_blank" href="https://forum.bludit.org"><?php l('Forum') ?></a></li>
					</ul>
				</footer>
			</section>
			</div>

		</div>
		</section>

		<section id="sponsors" class="wrapper style4">
		<div class="row 50%">

			<div class="6u 12u(narrower)">
				<h1><?php l('Links') ?></h1>
				<div class="links">
					<div class="links-title"><a href="https://bludit-directory.com"><i class="icon fa-list"></i> Showcase</a></div>
					<div class="links-description"><?php l('bludit-directory') ?></div>
				</div>
				<div class="links">
					<div class="links-title"><a href="https://blog.bludit.com"><i class="icon fa-commenting-o"></i> Blog</a></div>
					<div class="links-description"><?php l('bludit-blog-new') ?></div>
				</div>
				<div class="links">
					<div class="links-title"><a href="https://www.youtube.com/channel/UCuLu0Z_CHBsTiYTDz129x9Q"><i class="icon fa-youtube"></i> Youtube Channel</a></div>
					<div class="links-description"><?php l('bludit-youtube-channel') ?></div>
				</div>
				<div class="links">
					<div class="links-title"><a href="https://hub.docker.com/r/dignajar/bludit/"><i class="icon fa-th-large"></i> Docker</a></div>
					<div class="links-description"><?php l('bludit-docker') ?></div>
				</div>
			</div>

			<div class="6u 12u(narrower) important(narrower)">
				<h1><?php l('Sponsors') ?></h1>
				<p style="text-align:center">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
				style="display:inline-block;width:336px;height:280px"
				data-ad-client="ca-pub-4474538491771308"
				data-ad-slot="2891341514"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				</p>
			</div>

		</div>
		</section>

	</article>

	<!-- Footer -->
	<footer id="footer">

		<ul class="icons">
			<li><a href="https://twitter.com/bludit" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="https://www.facebook.com/bluditcms" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="https://plus.google.com/+bluditcms" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
			<li><a href="https://github.com/dignajar/bludit" class="icon circle fa-github"><span class="label">Github</span></a></li>
		</ul>

		<ul class="copyright">
			<li>Bludit CMS &copy; <?php echo date('Y') ?></li><li><?php l('bludit-license') ?></li>
		</ul>

		<ul class="copyright">
			<li><a href="https://www.bludit.com">English</a></li>
			<li><a href="https://www.bludit.com/de/">Deutsch</a></li>
			<li><a href="https://www.bludit.com/es/">Español</a></li>
		</ul>

	</footer>

</div>

</body>
</html>