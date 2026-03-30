<?php defined('BLUDIT') or die('BLUDIT');
define('DS', DIRECTORY_SEPARATOR);
define('CHARSET', 'UTF-8');
define('DOMAIN', 'https://www.bludit.com');
define('VERSION', '3.9.1');

define('DEFAULT_FACEBOOK_CARD', 'https://df6m0u2ovo2fu.cloudfront.net/images/bludit-facebook-cards.png');
define('SCREENSHOT', 'https://df6m0u2ovo2fu.cloudfront.net/images/screenshotv2.png');
define('NEWSLETTER', 'https://www.bludit.com/newsletter.php');

include('functions.php');

// Language passed via $_GET['l']
$currentLanguage = 'en';
$acceptedLanguages = array('en', 'es', 'ar', 'zh', 'fr', 'de', 'hi', 'ja', 'pt', 'ru');
if (isset($_GET['l'])) {
	if (in_array($_GET['l'], $acceptedLanguages)) {
		$currentLanguage = $_GET['l'];
	}
}

$json = file_get_contents(PATH_ROOT.'languages'.DS.$currentLanguage.'.json');
$languageArray = json_decode($json, true);

$languageDirection = ($currentLanguage === 'ar') ? 'rtl' : 'ltr';

// Top bar links
$_topbar = array();
$sliderLanguage = in_array($currentLanguage, array('de', 'es', 'ru', 'ja', 'en')) ? $currentLanguage : 'en';

if ($currentLanguage !== "en") {
	$_topbar = array(
		'documentation'=>'https://docs.bludit.com',
		'themes'=>'https://themes.bludit.com/'.$currentLanguage.'/',
		'plugins'=>'https://plugins.bludit.com/'.$currentLanguage.'/',
		'pro'=>'https://pro.bludit.com/'.$currentLanguage.'/',
		'website'=>DOMAIN.'/'.$currentLanguage.'/',
		'slider1'=>'https://www.bludit.com/img/bludit_1_'.$sliderLanguage.'.png'
	);
} else {
	$_topbar = array(
		'documentation'=>'https://docs.bludit.com',
		'themes'=>'https://themes.bludit.com',
		'plugins'=>'https://plugins.bludit.com',
		'pro'=>'https://pro.bludit.com',
		'website'=>DOMAIN,
		'slider1'=>'https://www.bludit.com/img/bludit_1_en.png'
	);
}

// hreflang
$_hreflang = array('en'=>rtrim(DOMAIN,'/'));
$tmpLanguages = $acceptedLanguages;
unset($tmpLanguages[0]);
foreach ($tmpLanguages as $lang) {
	$_hreflang[$lang] = rtrim(DOMAIN,'/').'/'.$lang.'/';
}

// Version from GitHub releases (cached for 24 hours)
$version = array('stable' => array());
$cacheFile = PATH_ROOT.'php'.DS.'github-version-cache.json';
$cacheTTL = 86400; // 24 hours

if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTTL) {
	$cached = json_decode(file_get_contents($cacheFile), true);
	if (isset($cached['version'])) {
		$version['stable']['version'] = $cached['version'];
		$version['stable']['downloadLink'] = $cached['downloadLink'];
	}
}

if (empty($version['stable']['version'])) {
	$githubRelease = @file_get_contents(
		'https://api.github.com/repos/bludit/bludit/releases/latest',
		false,
		stream_context_create(array('http' => array(
			'header' => "User-Agent: Bludit-Homepage\r\n",
			'timeout' => 5
		)))
	);
	if ($githubRelease) {
		$release = json_decode($githubRelease, true);
		if (isset($release['tag_name'])) {
			$version['stable']['version'] = $release['tag_name'];
			$version['stable']['downloadLink'] = "https://github.com/bludit/bludit/archive/refs/tags/".$release['tag_name'].".zip";
			@file_put_contents($cacheFile, json_encode(array(
				'version' => $version['stable']['version'],
				'downloadLink' => $version['stable']['downloadLink']
			)));
		}
	}
}

// Fallback if GitHub API is unreachable and no cache
if (empty($version['stable']['version'])) {
	$version['stable']['version'] = VERSION;
	$version['stable']['downloadLink'] = "https://github.com/bludit/bludit/archive/refs/tags/".VERSION.".zip";
}
