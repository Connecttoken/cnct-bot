<?php


$bottoken = "769534759:AAE6YSxZshQnMq2aOI-Q_Lur2MUl-HpS3Ko";
$website = "https://api.telegram.org/bot".$bottoken;

$update = file_get_contents($website."/getupdates");

print_r($update);

?>