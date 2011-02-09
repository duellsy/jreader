<?php
	$find = array('\\', ' ');
	$replace = array('', '+');
	$url = str_replace($find, $replace, $_GET['url']);
	

	function get_rss($url, $try_count, $max_tries){
	
		$session = null;
		try{
		
		 	$session = curl_init($url);
			curl_setopt($session, CURLOPT_HEADER, false);
			curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($session, CURLOPT_FOLLOWLOCATION, true);
			$xml = curl_exec($session);
			header("Content-Type: text/xml");
			echo $xml;
			curl_close($session);
		
		} catch(Exception $e) {
		
			curl_close($session);
		
			if($try_count < $max_tries){
				get_rss($url, $tries+1, $max_tries);
			} else {
				echo "Connection issue";
				return false;
			}
			
		}
		
	}
	
	
	
	
	get_rss($url, 0, 5);
?>