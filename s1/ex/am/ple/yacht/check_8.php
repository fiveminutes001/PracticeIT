<?php

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');

// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
	
// Declaring Variables
	$Order_By = json_decode($_POST['Y_n'],true);

	//JANUARY
	$jan_01_1 = $Order_By["jan_01_1"];
	$jan_01_2 = $Order_By["jan_01_2"];
	$jan_01_3 = $Order_By["jan_01_3"];
	$jan_01_4 = $Order_By["jan_01_4"];
	$jan_01_5 = $Order_By["jan_01_5"];
	$jan_01_6 = $Order_By["jan_01_6"];
	$jan_01_7 = $Order_By["jan_01_7"];
	
	$jan_02_1 = $Order_By["jan_02_1"];
	$jan_02_2 = $Order_By["jan_02_2"];
	$jan_02_3 = $Order_By["jan_02_3"];
	$jan_02_4 = $Order_By["jan_02_4"];
	$jan_02_5 = $Order_By["jan_02_5"];
	$jan_02_6 = $Order_By["jan_02_6"];
	$jan_02_7 = $Order_By["jan_02_7"];
	
	$jan_03_1 = $Order_By["jan_03_1"];
	$jan_03_2 = $Order_By["jan_03_2"];
	$jan_03_3 = $Order_By["jan_03_3"];
	$jan_03_4 = $Order_By["jan_03_4"];
	$jan_03_5 = $Order_By["jan_03_5"];
	$jan_03_6 = $Order_By["jan_03_6"];
	$jan_03_7 = $Order_By["jan_03_7"];
	
	$jan_04_1 = $Order_By["jan_04_1"];
	$jan_04_2 = $Order_By["jan_04_2"];
	$jan_04_3 = $Order_By["jan_04_3"];
	$jan_04_4 = $Order_By["jan_04_4"];
	$jan_04_5 = $Order_By["jan_04_5"];
	$jan_04_6 = $Order_By["jan_04_6"];
	$jan_04_7 = $Order_By["jan_04_7"];
	
	$jan_05_7 = $Order_By["jan_05_1"];
	$jan_05_7 = $Order_By["jan_05_2"];
	$jan_05_7 = $Order_By["jan_05_3"];
	
	
	//FEBRUARY
	$feb_01_1 = $Order_By["feb_01_1"];
	$feb_01_2 = $Order_By["feb_01_2"];
	$feb_01_3 = $Order_By["feb_01_3"];
	$feb_01_4 = $Order_By["feb_01_4"];
	$feb_01_5 = $Order_By["feb_01_5"];
	$feb_01_6 = $Order_By["feb_01_6"];
	$feb_01_7 = $Order_By["feb_01_7"];
	
	$feb_02_1 = $Order_By["feb_02_1"];
	$feb_02_2 = $Order_By["feb_02_2"];
	$feb_02_3 = $Order_By["feb_02_3"];
	$feb_02_4 = $Order_By["feb_02_4"];
	$feb_02_5 = $Order_By["feb_02_5"];
	$feb_02_6 = $Order_By["feb_02_6"];
	$feb_02_7 = $Order_By["feb_02_7"];
	
	$feb_03_1 = $Order_By["feb_03_1"];
	$feb_03_2 = $Order_By["feb_03_2"];
	$feb_03_3 = $Order_By["feb_03_3"];
	$feb_03_4 = $Order_By["feb_03_4"];
	$feb_03_5 = $Order_By["feb_03_5"];
	$feb_03_6 = $Order_By["feb_03_6"];
	$feb_03_7 = $Order_By["feb_03_7"];
	
	$feb_04_1 = $Order_By["feb_04_1"];
	$feb_04_2 = $Order_By["feb_04_2"];
	$feb_04_3 = $Order_By["feb_04_3"];
	$feb_04_4 = $Order_By["feb_04_4"];
	$feb_04_5 = $Order_By["feb_04_5"];
	$feb_04_6 = $Order_By["feb_04_6"];
	$feb_04_7 = $Order_By["feb_04_7"];
		
	//mar
	$mar_01_1 = $Order_By["mar_01_1"];
	$mar_01_2 = $Order_By["mar_01_2"];
	$mar_01_3 = $Order_By["mar_01_3"];
	$mar_01_4 = $Order_By["mar_01_4"];
	$mar_01_5 = $Order_By["mar_01_5"];
	$mar_01_6 = $Order_By["mar_01_6"];
	$mar_01_7 = $Order_By["mar_01_7"];
	
	$mar_02_1 = $Order_By["mar_02_1"];
	$mar_02_2 = $Order_By["mar_02_2"];
	$mar_02_3 = $Order_By["mar_02_3"];
	$mar_02_4 = $Order_By["mar_02_4"];
	$mar_02_5 = $Order_By["mar_02_5"];
	$mar_02_6 = $Order_By["mar_02_6"];
	$mar_02_7 = $Order_By["mar_02_7"];
	
	$mar_03_1 = $Order_By["mar_03_1"];
	$mar_03_2 = $Order_By["mar_03_2"];
	$mar_03_3 = $Order_By["mar_03_3"];
	$mar_03_4 = $Order_By["mar_03_4"];
	$mar_03_5 = $Order_By["mar_03_5"];
	$mar_03_6 = $Order_By["mar_03_6"];
	$mar_03_7 = $Order_By["mar_03_7"];
	
	$mar_04_1 = $Order_By["mar_04_1"];
	$mar_04_2 = $Order_By["mar_04_2"];
	$mar_04_3 = $Order_By["mar_04_3"];
	$mar_04_4 = $Order_By["mar_04_4"];
	$mar_04_5 = $Order_By["mar_04_5"];
	$mar_04_6 = $Order_By["mar_04_6"];
	$mar_04_7 = $Order_By["mar_04_7"];
	
	$mar_05_1 = $Order_By["mar_05_1"];
	$mar_05_2 = $Order_By["mar_05_2"];
	$mar_05_3 = $Order_By["mar_05_3"];
	
	//apr
	$apr_01_1 = $Order_By["apr_01_1"];
	$apr_01_2 = $Order_By["apr_01_2"];
	$apr_01_3 = $Order_By["apr_01_3"];
	$apr_01_4 = $Order_By["apr_01_4"];
	$apr_01_5 = $Order_By["apr_01_5"];
	$apr_01_6 = $Order_By["apr_01_6"];
	$apr_01_7 = $Order_By["apr_01_7"];
	
	$apr_02_1 = $Order_By["apr_02_1"];
	$apr_02_2 = $Order_By["apr_02_2"];
	$apr_02_3 = $Order_By["apr_02_3"];
	$apr_02_4 = $Order_By["apr_02_4"];
	$apr_02_5 = $Order_By["apr_02_5"];
	$apr_02_6 = $Order_By["apr_02_6"];
	$apr_02_7 = $Order_By["apr_02_7"];
	
	$apr_03_1 = $Order_By["apr_03_1"];
	$apr_03_2 = $Order_By["apr_03_2"];
	$apr_03_3 = $Order_By["apr_03_3"];
	$apr_03_4 = $Order_By["apr_03_4"];
	$apr_03_5 = $Order_By["apr_03_5"];
	$apr_03_6 = $Order_By["apr_03_6"];
	$apr_03_7 = $Order_By["apr_03_7"];
	
	$apr_04_1 = $Order_By["apr_04_1"];
	$apr_04_2 = $Order_By["apr_04_2"];
	$apr_04_3 = $Order_By["apr_04_3"];
	$apr_04_4 = $Order_By["apr_04_4"];
	$apr_04_5 = $Order_By["apr_04_5"];
	$apr_04_6 = $Order_By["apr_04_6"];
	$apr_04_7 = $Order_By["apr_04_7"];
	
	$apr_05_1 = $Order_By["apr_05_1"];
	$apr_05_2 = $Order_By["apr_05_2"];
	
	//may
	$may_01_1 = $Order_By["may_01_1"];
	$may_01_2 = $Order_By["may_01_2"];
	$may_01_3 = $Order_By["may_01_3"];
	$may_01_4 = $Order_By["may_01_4"];
	$may_01_5 = $Order_By["may_01_5"];
	$may_01_6 = $Order_By["may_01_6"];
	$may_01_7 = $Order_By["may_01_7"];
	
	$may_02_1 = $Order_By["may_02_1"];
	$may_02_2 = $Order_By["may_02_2"];
	$may_02_3 = $Order_By["may_02_3"];
	$may_02_4 = $Order_By["may_02_4"];
	$may_02_5 = $Order_By["may_02_5"];
	$may_02_6 = $Order_By["may_02_6"];
	$may_02_7 = $Order_By["may_02_7"];
	
	$may_03_1 = $Order_By["may_03_1"];
	$may_03_2 = $Order_By["may_03_2"];
	$may_03_3 = $Order_By["may_03_3"];
	$may_03_4 = $Order_By["may_03_4"];
	$may_03_5 = $Order_By["may_03_5"];
	$may_03_6 = $Order_By["may_03_6"];
	$may_03_7 = $Order_By["may_03_7"];
	
	$may_04_1 = $Order_By["may_04_1"];
	$may_04_2 = $Order_By["may_04_2"];
	$may_04_3 = $Order_By["may_04_3"];
	$may_04_4 = $Order_By["may_04_4"];
	$may_04_5 = $Order_By["may_04_5"];
	$may_04_6 = $Order_By["may_04_6"];
	$may_04_7 = $Order_By["may_04_7"];
	
	$may_05_1 = $Order_By["may_05_1"];
	$may_05_2 = $Order_By["may_05_2"];
	$may_05_3 = $Order_By["may_05_3"];
	
	//june
	$jun_01_1 = $Order_By["jun_01_1"];
	$jun_01_2 = $Order_By["jun_01_2"];
	$jun_01_3 = $Order_By["jun_01_3"];
	$jun_01_4 = $Order_By["jun_01_4"];
	$jun_01_5 = $Order_By["jun_01_5"];
	$jun_01_6 = $Order_By["jun_01_6"];
	$jun_01_7 = $Order_By["jun_01_7"];
	
	$jun_02_1 = $Order_By["jun_02_1"];
	$jun_02_2 = $Order_By["jun_02_2"];
	$jun_02_3 = $Order_By["jun_02_3"];
	$jun_02_4 = $Order_By["jun_02_4"];
	$jun_02_5 = $Order_By["jun_02_5"];
	$jun_02_6 = $Order_By["jun_02_6"];
	$jun_02_7 = $Order_By["jun_02_7"];
	
	$jun_03_1 = $Order_By["jun_03_1"];
	$jun_03_2 = $Order_By["jun_03_2"];
	$jun_03_3 = $Order_By["jun_03_3"];
	$jun_03_4 = $Order_By["jun_03_4"];
	$jun_03_5 = $Order_By["jun_03_5"];
	$jun_03_6 = $Order_By["jun_03_6"];
	$jun_03_7 = $Order_By["jun_03_7"];
	
	$jun_04_1 = $Order_By["jun_04_1"];
	$jun_04_2 = $Order_By["jun_04_2"];
	$jun_04_3 = $Order_By["jun_04_3"];
	$jun_04_4 = $Order_By["jun_04_4"];
	$jun_04_5 = $Order_By["jun_04_5"];
	$jun_04_6 = $Order_By["jun_04_6"];
	$jun_04_7 = $Order_By["jun_04_7"];
	
	$jun_05_1 = $Order_By["jun_05_1"];
	$jun_05_2 = $Order_By["jun_05_1"];
	
	
	//july
	$jul_01_1 = $Order_By["jul_01_1"];
	$jul_01_2 = $Order_By["jul_01_2"];
	$jul_01_3 = $Order_By["jul_01_3"];
	$jul_01_4 = $Order_By["jul_01_4"];
	$jul_01_5 = $Order_By["jul_01_5"];
	$jul_01_6 = $Order_By["jul_01_6"];
	$jul_01_7 = $Order_By["jul_01_7"];
	
	$jul_02_1 = $Order_By["jul_02_1"];
	$jul_02_2 = $Order_By["jul_02_2"];
	$jul_02_3 = $Order_By["jul_02_3"];
	$jul_02_4 = $Order_By["jul_02_4"];
	$jul_02_5 = $Order_By["jul_02_5"];
	$jul_02_6 = $Order_By["jul_02_6"];
	$jul_02_7 = $Order_By["jul_02_7"];
	
	$jul_03_1 = $Order_By["jul_03_1"];
	$jul_03_2 = $Order_By["jul_03_2"];
	$jul_03_3 = $Order_By["jul_03_3"];
	$jul_03_4 = $Order_By["jul_03_4"];
	$jul_03_5 = $Order_By["jul_03_5"];
	$jul_03_6 = $Order_By["jul_03_6"];
	$jul_03_7 = $Order_By["jul_03_7"];
	
	$jul_04_1 = $Order_By["jul_04_1"];
	$jul_04_2 = $Order_By["jul_04_2"];
	$jul_04_3 = $Order_By["jul_04_3"];
	$jul_04_4 = $Order_By["jul_04_4"];
	$jul_04_5 = $Order_By["jul_04_5"];
	$jul_04_6 = $Order_By["jul_04_6"];
	$jul_04_7 = $Order_By["jul_04_7"];
	
	$jul_05_1 = $Order_By["jul_05_1"];
	$jul_05_2 = $Order_By["jul_05_2"];
	$jul_05_3 = $Order_By["jul_05_3"];
	
	//aug
	$aug_01_1 = $Order_By["aug_01_1"];
	$aug_01_2 = $Order_By["aug_01_2"];
	$aug_01_3 = $Order_By["aug_01_3"];
	$aug_01_4 = $Order_By["aug_01_4"];
	$aug_01_5 = $Order_By["aug_01_5"];
	$aug_01_6 = $Order_By["aug_01_6"];
	$aug_01_7 = $Order_By["aug_01_7"];
	
	$aug_02_1 = $Order_By["aug_02_1"];
	$aug_02_2 = $Order_By["aug_02_2"];
	$aug_02_3 = $Order_By["aug_02_3"];
	$aug_02_4 = $Order_By["aug_02_4"];
	$aug_02_5 = $Order_By["aug_02_5"];
	$aug_02_6 = $Order_By["aug_02_6"];
	$aug_02_7 = $Order_By["aug_02_7"];
	
	$aug_03_1 = $Order_By["aug_03_1"];
	$aug_03_2 = $Order_By["aug_03_2"];
	$aug_03_3 = $Order_By["aug_03_3"];
	$aug_03_4 = $Order_By["aug_03_4"];
	$aug_03_5 = $Order_By["aug_03_5"];
	$aug_03_6 = $Order_By["aug_03_6"];
	$aug_03_7 = $Order_By["aug_03_7"];
	
	$aug_04_1 = $Order_By["aug_04_1"];
	$aug_04_2 = $Order_By["aug_04_2"];
	$aug_04_3 = $Order_By["aug_04_3"];
	$aug_04_4 = $Order_By["aug_04_4"];
	$aug_04_5 = $Order_By["aug_04_5"];
	$aug_04_6 = $Order_By["aug_04_6"];
	$aug_04_7 = $Order_By["aug_04_7"];
	
	$aug_05_1 = $Order_By["aug_05_1"];
	$aug_05_2 = $Order_By["aug_05_2"];
	$aug_05_3 = $Order_By["aug_05_3"];
	
	
	//sep
	$sep_01_1 = $Order_By["sep_01_1"];
	$sep_01_2 = $Order_By["sep_01_2"];
	$sep_01_3 = $Order_By["sep_01_3"];
	$sep_01_4 = $Order_By["sep_01_4"];
	$sep_01_5 = $Order_By["sep_01_5"];
	$sep_01_6 = $Order_By["sep_01_6"];
	$sep_01_7 = $Order_By["sep_01_7"];
	
	$sep_02_1 = $Order_By["sep_02_1"];
	$sep_02_2 = $Order_By["sep_02_2"];
	$sep_02_3 = $Order_By["sep_02_3"];
	$sep_02_4 = $Order_By["sep_02_4"];
	$sep_02_5 = $Order_By["sep_02_5"];
	$sep_02_6 = $Order_By["sep_02_6"];
	$sep_02_7 = $Order_By["sep_02_7"];
	
	$sep_03_1 = $Order_By["sep_03_1"];
	$sep_03_2 = $Order_By["sep_03_2"];
	$sep_03_3 = $Order_By["sep_03_3"];
	$sep_03_4 = $Order_By["sep_03_4"];
	$sep_03_5 = $Order_By["sep_03_5"];
	$sep_03_6 = $Order_By["sep_03_6"];
	$sep_03_7 = $Order_By["sep_03_7"];
	
	$sep_04_1 = $Order_By["sep_04_1"];
	$sep_04_2 = $Order_By["sep_04_2"];
	$sep_04_3 = $Order_By["sep_04_3"];
	$sep_04_4 = $Order_By["sep_04_4"];
	$sep_04_5 = $Order_By["sep_04_5"];
	$sep_04_6 = $Order_By["sep_04_6"];
	$sep_04_7 = $Order_By["sep_04_7"];
	
	$sep_05_1 = $Order_By["sep_05_1"];
	$sep_05_2 = $Order_By["sep_05_2"];
	
	//oct
	$oct_01_1 = $Order_By["oct_01_1"];
	$oct_01_2 = $Order_By["oct_01_2"];
	$oct_01_3 = $Order_By["oct_01_3"];
	$oct_01_4 = $Order_By["oct_01_4"];
	$oct_01_5 = $Order_By["oct_01_5"];
	$oct_01_6 = $Order_By["oct_01_6"];
	$oct_01_7 = $Order_By["oct_01_7"];
	
	$oct_02_1 = $Order_By["oct_02_1"];
	$oct_02_2 = $Order_By["oct_02_2"];
	$oct_02_3 = $Order_By["oct_02_3"];
	$oct_02_4 = $Order_By["oct_02_4"];
	$oct_02_5 = $Order_By["oct_02_5"];
	$oct_02_6 = $Order_By["oct_02_6"];
	$oct_02_7 = $Order_By["oct_02_7"];
	
	$oct_03_1 = $Order_By["oct_03_1"];
	$oct_03_2 = $Order_By["oct_03_2"];
	$oct_03_3 = $Order_By["oct_03_3"];
	$oct_03_4 = $Order_By["oct_03_4"];
	$oct_03_5 = $Order_By["oct_03_5"];
	$oct_03_6 = $Order_By["oct_03_6"];
	$oct_03_7 = $Order_By["oct_03_7"];
	
	$oct_04_1 = $Order_By["oct_04_1"];
	$oct_04_2 = $Order_By["oct_04_2"];
	$oct_04_3 = $Order_By["oct_04_3"];
	$oct_04_4 = $Order_By["oct_04_4"];
	$oct_04_5 = $Order_By["oct_04_5"];
	$oct_04_6 = $Order_By["oct_04_6"];
	$oct_04_7 = $Order_By["oct_04_7"];
	
	$oct_05_1 = $Order_By["oct_05_1"];
	$oct_05_2 = $Order_By["oct_05_2"];
	$oct_05_3 = $Order_By["oct_05_3"];
	
	//nov
	$nov_01_1 = $Order_By["nov_01_1"];
	$nov_01_2 = $Order_By["nov_01_2"];
	$nov_01_3 = $Order_By["nov_01_3"];
	$nov_01_4 = $Order_By["nov_01_4"];
	$nov_01_5 = $Order_By["nov_01_5"];
	$nov_01_6 = $Order_By["nov_01_6"];
	$nov_01_7 = $Order_By["nov_01_7"];
	
	$nov_02_1 = $Order_By["nov_02_1"];
	$nov_02_2 = $Order_By["nov_02_2"];
	$nov_02_3 = $Order_By["nov_02_3"];
	$nov_02_4 = $Order_By["nov_02_4"];
	$nov_02_5 = $Order_By["nov_02_5"];
	$nov_02_6 = $Order_By["nov_02_6"];
	$nov_02_7 = $Order_By["nov_02_7"];
	
	$nov_03_1 = $Order_By["nov_03_1"];
	$nov_03_2 = $Order_By["nov_03_2"];
	$nov_03_3 = $Order_By["nov_03_3"];
	$nov_03_4 = $Order_By["nov_03_4"];
	$nov_03_5 = $Order_By["nov_03_5"];
	$nov_03_6 = $Order_By["nov_03_6"];
	$nov_03_7 = $Order_By["nov_03_7"];
	
	$nov_04_1 = $Order_By["nov_04_1"];
	$nov_04_2 = $Order_By["nov_04_2"];
	$nov_04_3 = $Order_By["nov_04_3"];
	$nov_04_4 = $Order_By["nov_04_4"];
	$nov_04_5 = $Order_By["nov_04_5"];
	$nov_04_6 = $Order_By["nov_04_6"];
	$nov_04_7 = $Order_By["nov_04_7"];
	
	$nov_05_1 = $Order_By["nov_05_1"];
	$nov_05_2 = $Order_By["nov_05_2"];
	
	//dec
	$dec_01_1 = $Order_By["dec_01_1"];
	$dec_01_2 = $Order_By["dec_01_2"];
	$dec_01_3 = $Order_By["dec_01_3"];
	$dec_01_4 = $Order_By["dec_01_4"];
	$dec_01_5 = $Order_By["dec_01_5"];
	$dec_01_6 = $Order_By["dec_01_6"];
	$dec_01_7 = $Order_By["dec_01_7"];
	
	$dec_02_1 = $Order_By["dec_02_1"];
	$dec_02_2 = $Order_By["dec_02_2"];
	$dec_02_3 = $Order_By["dec_02_3"];
	$dec_02_4 = $Order_By["dec_02_4"];
	$dec_02_5 = $Order_By["dec_02_5"];
	$dec_02_6 = $Order_By["dec_02_6"];
	$dec_02_7 = $Order_By["dec_02_7"];
	
	$dec_03_1 = $Order_By["dec_03_1"];
	$dec_03_2 = $Order_By["dec_03_2"];
	$dec_03_3 = $Order_By["dec_03_3"];
	$dec_03_4 = $Order_By["dec_03_4"];
	$dec_03_5 = $Order_By["dec_03_5"];
	$dec_03_6 = $Order_By["dec_03_6"];
	$dec_03_7 = $Order_By["dec_03_7"];
	
	$dec_04_1 = $Order_By["dec_04_1"];
	$dec_04_2 = $Order_By["dec_04_2"];
	$dec_04_3 = $Order_By["dec_04_3"];
	$dec_04_4 = $Order_By["dec_04_4"];
	$dec_04_5 = $Order_By["dec_04_5"];
	$dec_04_6 = $Order_By["dec_04_6"];
	$dec_04_7 = $Order_By["dec_04_7"];
	
	$dec_05_1 = $Order_By["dec_05_1"];
	$dec_05_2 = $Order_By["dec_05_2"];
	$dec_05_3 = $Order_By["dec_05_3"];
	
	$tot = $Order_By["tot"];

?>