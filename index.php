<?php include('config.php') ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Diego Najar">
	<meta name="description" content="<?php l('head description') ?>">
	<title><?php l('head title') ?></title>

	<!-- CSS files -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="<?php echo DOMAIN ?>/css/bludit.css?version=<?php echo VERSION ?>" rel="stylesheet">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo DOMAIN ?>/img/favicon.png">

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

	<!-- Google hreflang tag -->
	<?php foreach ($_hreflang as $hreflang=>$href): ?>
	<link rel="alternate" hreflang="<?php echo $hreflang ?>" href="<?php echo $href ?>" />
	<?php endforeach ?>

	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-67610404-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-67610404-1');
	</script>
</head>
<html>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="<?php echo $_topbar['website'] ?>">
				<img src="<?php echo DOMAIN ?>/img/bludit-logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
				BLUDIT
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $_topbar['themes'] ?>"><?php l('themes') ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $_topbar['plugins'] ?>"><?php l('plugins') ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $_topbar['documentation'] ?>"><?php l('documentation') ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $_topbar['pro'] ?>">Bludit PRO</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="https://www.bludit.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"></i></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="https://www.bludit.com">English</a>
							<a class="dropdown-item" href="https://www.bludit.com/de/">Deutsch</a>
							<a class="dropdown-item" href="https://www.bludit.com/es/">Español</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header class="masthead">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-lg-10 my-auto mx-auto text-center">
					<h1 class="mt-5 font-weight-bold">BLUDIT</h1>
					<h3><?php l('bludit-little-description-paragraph1') ?></h3>
					<h3 class="mb-4"><?php l('bludit-little-description-paragraph2') ?></h3>
					<div class="m-2">
						<a href="<?php echo $version['stable']['downloadLink'] ?>" class="btn btn-outline btn-xl "><i class="fa fa-download"></i> <?php l('Download') ?> v<?php echo $version['stable']['version'] ?></a>
					</div>
					<div class="m-2">
						<a target="_blank" href="https://demo.bludit.com" class="btn btn-outline btn-xl "><i class="fa fa-desktop"></i> <?php l('Demo') ?></a>
					</div>
				</div>
				<div class="bludit-dashboard mx-auto">
					<img src="img/screenshot.png" alt="Screenshot of Bludit">
				</div>
			</div>
		</div>
	</header>

	<section class="download bg-primary text-center" id="download">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<h2 class="section-heading"><?php l('Flat File CMS') ?></h2>
					<p><?php l('bludit-has-his-own-database-manager') ?></p>
					<h2 class="section-heading"># Markdown</h2>
					<p><?php l('bludit-supports-markdown') ?></p>
					<h2 class="section-heading"><?php l('free-and-open-source') ?></h2>
					<p><?php l('bludit license') ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="features" id="features">
		<div class="container">
			<div class="row">
				<div class="my-auto mx-auto">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4">
								<div class="feature-item">
									<i class="fa fa-book"></i>
									<h3><?php l('Documentation') ?></h3>
									<p class="text-muted"><?php l('documentation-description') ?></p>
									<p><a class="mx-3" href="<?php echo $_topbar['documentation'] ?>"><?php l('Documentation') ?></a></p>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-item">
									<i class="fa fa-plus-square-o"></i>
									<h3><?php l('Contribute') ?></h3>
									<p class="text-muted"><?php l('themes-and-plugins-description') ?></p>
									<p>
										<a class="mx-3" href="<?php echo $_topbar['themes'] ?>"><?php l('Themes') ?></a>
										<a class="mx-3" href="<?php echo $_topbar['plugins'] ?>"><?php l('Plugins') ?></a>
										<a class="mx-3" href="<?php echo $_topbar['pro'] ?>"><?php l('Donate') ?></a>
									</p>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-item">
									<i class="fa fa-life-ring"></i>
									<h3><?php l('Support') ?></h3>
									<p class="text-muted"><?php l('support-description') ?></p>
									<p>
										<a class="mx-3" href="https://forum.bludit.org"><?php l('Forum') ?></a>
										<a class="mx-3" href="https://gitter.im/bludit/support"><?php l('Chat') ?></a>
										<a class="mx-3" href="https://github.com/bludit/bludit/issues">Github issues</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="newsletter bg-dark">
		<div class="container">
			<h2><?php l('Newsletter') ?></h2>
			<h2 id="success" style="display: none"><i class="fa fa-check"></i></h2>
			<div class="form-group">
				<input type="text" id="e10" value="" class="form-control form-control-lg" placeholder="<?php l('Enter email') ?>">
			</div>
			<button id="e09" class="btn btn-primary"><?php l('Subscribe') ?></button>
		</div>
	</section>

	<section class="contact bg-primary" id="contact">
		<div class="container">
			<h2><?php l('we-love-new-friends') ?></h2>
			<ul class="list-inline list-social">
				<li class="list-inline-item social-twitter">
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li class="list-inline-item social-facebook">
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li class="list-inline-item social-google-plus">
					<a href="#">
						<i class="fa fa-google-plus"></i>
					</a>
				</li>
				<li class="list-inline-item social-github">
					<a href="#">
						<i class="fa fa-github"></i>
					</a>
				</li>
			</ul>
		</div>
	</section>

	<footer>
		<div class="container">
			<p>Bludit.com - &copy; 2018. All Rights Reserved.</p>
			<ul class="list-inline">
				<li class="list-inline-item">
					<a href="https://www.bludit.com">English</a>
				</li>
				<li class="list-inline-item">
					<a href="https://www.bludit.com/de/">Deutsch</a>
				</li>
				<li class="list-inline-item">
					<a href="https://www.bludit.com/es/">Español</a>
				</li>
			</ul>
		</div>
	</footer>

	<!-- Javascript stuff -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo DOMAIN ?>/js/bludit.js"></script>

        <script>
        $(document).ready(function(){

		$("#e09").click(function(e) {
			e.preventDefault();
			$.ajax({
				url: "<?php echo NEWSLETTER ?>",
				method: "POST",
				data: "e11=" + $("#e10").attr("value"),
				dataType: 'json',
				success: function(json) {
					console.log(json);
				},
				error: function(json) {
					console.log("Error");
				}
			});
			$("#e10").hide();
			$("#e09").hide();
			$("#success").fadeIn();
		});

        });
        </script>
</body>
</html>