<?php
// Openning txt file
	
	$myfile = fopen("check_13.txt", "r") or die("Unable to open file!");
	$r=file_get_contents("check_13.txt");
	fclose($myfile);
		
	///splitting by spaces
	///$p = explode("\n", $r);
	//var_dump($r);

	// Openning far txt file	
	function getfile($new_path)
	{
		$t=$new_path;
		$myfile = fopen("../../../../../../ocartdata/storage/vendor/cardinity/cardinity-sdk-php/spec/Method/Refund/$t.txt", "r") or die("Unable to open file!");
		
		//debugging	echo '<pre>';
		
		$r=file_get_contents("../../../../../../ocartdata/storage/vendor/cardinity/cardinity-sdk-php/spec/Method/Refund/$t.txt");
		
		fclose($myfile);
				
		//splitting by spaces
		$p = explode("\n", $r);
		
		return $p;

		//debugging	
/*		var_dump($r);
		var_dump($p[0]);
		var_dump($p[1]);
		var_dump($p[2]);
		var_dump($p[3]);
*/
		//debugging echo '</pre>';
	}
	
	$p=getfile($r);
	
	// data
    $host = $p[0];
	$username = $p[1];
	$password = $p[2];
	$db = $p[3];
	$r=22;
	
	//debugging	
/*
	echo '<pre>';
	var_dump($host);
	var_dump($username);
	var_dump($password);
	var_dump($db);
	echo '</pre>';
*/
	
?>