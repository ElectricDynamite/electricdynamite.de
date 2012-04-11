<?php
$mNext = "";
$mDeCountries = array('de', 'at', 'ch');
$mURLs = array('de' => '/de/', 'en' => '/en/');

error_log(substr($_GET["next"],1,2));

if(isset($_GET["next"]) && !array_key_exists(substr($_GET["next"],1,2), $mURLs)) {
  $mNext = $_GET["next"];
}
$mLocation = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));

$mLoc = strtolower($mLocation["geoplugin_countryCode"]);

if(in_array( $mLoc, $mDeCountries)) {
  header( 'Location: '.$mURLs['de'].$mNext );
} else {
  header( 'Location: '.$mURLs['en'].$mNext );
}

?>
