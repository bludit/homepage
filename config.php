<?php
define('BLUDIT', true);
define('DS', DIRECTORY_SEPARATOR);
define('PATH_ROOT', __DIR__.DS);
define('CHARSET', 'UTF-8');
define('DOMAIN', 'https://www.bludit.com');
#define('DOMAIN', 'http://localhost:8000');

define('DEFAULT_TWITTER_CARD', 'https://df6m0u2ovo2fu.cloudfront.net/images/bludit-twitter-cards.png');
define('DEFAULT_FACEBOOK_CARD', 'https://df6m0u2ovo2fu.cloudfront.net/images/bludit-facebook-cards.png');
define('NEWSLETTER', 'https://www.bludit.com/newsletter.php');

include('functions.php');

// Language passed via $_GET['l']
$currentLanguage = 'en';
$acceptedLanguages = array('en', 'de', 'es');
if (isset($_GET['l'])) {
	if (in_array($_GET['l'], $acceptedLanguages)) {
		$currentLanguage = $_GET['l'];
	}
}

$json = file_get_contents(PATH_ROOT.'languages'.DS.$currentLanguage.'.json');
$languageArray = json_decode($json, true);

// Top bar links
$_topbar = array();
if ($currentLanguage !== "en") {
	$_topbar = array(
		'documentation'=>'https://docs.bludit.com/'.$currentLanguage.'/',
		'themes'=>'https://themes.bludit.com/'.$currentLanguage.'/',
		'plugins'=>'https://plugins.bludit.com/'.$currentLanguage.'/',
		'pro'=>'https://pro.bludit.com/'.$currentLanguage.'/',
		'website'=>DOMAIN.'/'.$currentLanguage.'/'
	);
} else {
	$_topbar = array(
		'documentation'=>'https://docs.bludit.com',
		'themes'=>'https://themes.bludit.com',
		'plugins'=>'https://plugins.bludit.com',
		'pro'=>'https://pro.bludit.com',
		'website'=>DOMAIN
	);
}

// hreflang
$_hreflang = array('en'=>rtrim(DOMAIN,'/'));
$tmpLanguages = $acceptedLanguages;
unset($tmpLanguages[0]);
foreach ($tmpLanguages as $lang) {
	$_hreflang[$lang] = rtrim(DOMAIN,'/');
}

// Version
if (file_exists('/www/version.bludit.com/index.php')) {
        include('/www/version.bludit.com/index.php');
} else {
        $version['stable']['version'] = "1.6.2";
        $version['stable']['downloadLink'] = "https://s3.amazonaws.com/bludit-s3/bludit-builds/bludit-v1.6.2.zip";
	$version['beta']['changelogLink'] = 's';
	$version['beta']['version'] = '2.0 Beta 1';
}