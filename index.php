<!DOCTYPE HTML>
<?php
include('config.php');

define('BLUDIT', true);
define('DS', DIRECTORY_SEPARATOR);
define('PATH_ROOT', __DIR__.DS);
date_default_timezone_set('UTC');

if (isset($_GET['l'])) {
	if (in_array($_GET['l'], $acceptedLanguages)) {
		$defaultLanguage = $_GET['l'];
	}
}

$jsonData = file_get_contents(PATH_ROOT.'languages'.DS.$defaultLanguage.'.json');
$languageArray = json_decode($jsonData, true);

function l($key) {
	global $languageArray;
	$key = mb_strtolower($key, 'UTF-8');
	$key = str_replace(' ','-',$key);
	if (isset($languageArray[$key])) {
		echo $languageArray[$key];
	}
}
?>
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
</head>
<body class="no-sidebar">
<div id="page-wrapper">

	<!-- NAVBAR -->
	<header id="header">
		<h1 id="logo"><a href="https://www.bludit.com">BLUDIT</a></h1>
		<nav id="nav">
		<ul>
			<li><a href="#download"><?php l('Download') ?></a></li>
			<li><a href="#demo"><?php l('Demo') ?></a></li>
			<li><a href="https://docs.bludit.com"><?php l('Documentation') ?></a></li>
			<li><a href="https://themes.bludit.com"><?php l('Themes') ?></a></li>
			<li><a href="https://plugins.bludit.com"><?php l('Plugins') ?></a></li>
			<!-- <li><a href="https://pro.bludit.com">Bludit PRO</a></li> -->
		</ul>
		</nav>
	</header>

	<!-- MAIN -->
	<article id="main">

		<header class="special container">
			<h2>BLUDIT</h2>
			<p class="description1"><?php l('bludit-description1') ?></p>
			<p class="description2"><?php l('bludit-description2') ?></p>
		</header>

		<section id="download" class="wrapper style4 container what-box">
		<div class="row 50%">

			<div class="6u 12u(narrower)">
				<h1 class="title"><?php l('Download') ?></h1>
				<p><?php l('download-box-description') ?></p>
				<a class="button1" href="<?php echo $downloadLink ?>"><i class="icon fa-download"></i> BLUDIT <?php echo $bluditVersion ?></a>
				<a class="button1" href="https://paypal.me/bludit/10"><i class="icon fa-heart"></i> Donate</a>
			</div>

			<div class="6u 12u(narrower) important(narrower)">
				<h1 class="title"><?php l('What is Bludit') ?></h1>
				<p><?php l('bludit-what-is-description') ?></p>
			</div>

		</div>
		</section>

		<section id="demo" class="wrapper style3 container demo-box">
		<div class="content">
			<h1 class="title"><?php l('Demo') ?></h1>
			<p><?php l('demo-description') ?></p>
			<a class="button1 small-button" target="_blank" href="http://demo-bludit.rhcloud.com"><i class="icon fa-clone"></i> Home</a>
			<a class="button1 small-button" target="_blank" href="http://demo-bludit.rhcloud.com/admin"><i class="icon fa-pencil"></i> Admin panel</a>

			<!--
			<p><?php l('demo-description') ?></p>
			<a class="button1 small-button" target="_blank" href="http://demo-bludit.rhcloud.com/admin"><i class="icon fa-clone"></i> Website</a>
			<a class="button1 small-button" target="_blank" href="http://demo-bludit.rhcloud.com/"><i class="icon fa-pencil"></i> Blog</a>
			<a class="button1 small-button" target="_blank" href="http://demo-bludit.rhcloud.com/"><i class="icon fa-columns"></i> Website + Blog</a>
			-->
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
						<li><a target="_blank" href="https://gitter.im/dignajar/bludit"><?php l('Chat') ?></a></li>
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
					<div class="links-description">Directory of sites maded with Bludit.</div>
				</div>
				<div class="links">
					<div class="links-title"><a href="https://blog.bludit.com"><i class="icon fa-commenting-o"></i> Blog</a></div>
					<div class="links-description">Follow the latest news on our blog.</div>
				</div>
				<div class="links">
					<div class="links-title"><a href="https://www.youtube.com/channel/UCuLu0Z_CHBsTiYTDz129x9Q"><i class="icon fa-youtube"></i> Youtube Channel</a></div>
					<div class="links-description">Watch video tutorials on our channel.</div>
				</div>
				<div class="links">
					<div class="links-title"><a href="https://hub.docker.com/r/dignajar/bludit/"><i class="icon fa-th-large"></i> Docker</a></div>
					<div class="links-description">Run Bludit as a container.</div>
				</div>
				<div class="links">
					<div class="links-title"><a href="https://paypal.me/bludit/10"><i class="icon fa-money"></i> Donate</a></div>
					<div class="links-description">If you really enjoy Bludit you can make a donation.</div>
				</div>
			</div>

			<div class="6u 12u(narrower) important(narrower)">
				<h1>Sponsors</h1>
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

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67610404-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
