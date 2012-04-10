<?php
$mLocation = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));

$mDeCountries = new Array('de', 'at', 'ch');
$mURLs = new Array('de' => '/de/', 'en' => '/en/');

if(in_array($mLocation["geoplugin_countryCode"], $mDeCountries)) {
  header( 'Location: '+$mURLs['de'] );
} else {
  header( 'Location: '+$mURLs['en'] );
}

?>
