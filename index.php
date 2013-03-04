<?php
$mNext = "";


if(isset($_GET["next"]) && !array_key_exists(substr($_GET["next"],1,2), $mURLs)) {
  $mNext = $_GET["next"];
}

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "de":
        //echo "PAGE DE";
        header( 'Location: /de/'.$mNext );
        break;
    case "en":
        //echo "PAGE EN";
        header( 'Location: /en/'.$mNext );
        break;
    default:
        //echo "PAGE EN - Setting Default";
        header( 'Location: /en/'.$mNext );
        break;
}

?>
