<?php
	$find = array('\\', ' ');
	$replace = array('', '+');
	$url = str_replace($find, $replace, $_GET['url']);

 	$session = curl_init($url);
	curl_setopt($session, CURLOPT_HEADER, false);
	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($session, CURLOPT_FOLLOWLOCATION, true);
	$xml = curl_exec($session);
	header("Content-Type: text/xml");
	echo $xml;
	curl_close($session);
?>