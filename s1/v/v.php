<?php
session_start();

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');

// SSL
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

// Functions
		
// Vars
	$_SESSION['message_1']='';
			
// Connection
	include 'bus.php';	

// Data

if (isset($_GET['e']) && !empty($_GET['e']) AND isset($_GET['h']) && !empty($_GET['h']))
{
	// Sanitizing
	$e_ = $con->real_escape_string($_GET['e']);
	$P_h_ = $con->real_escape_string($_GET['h']);
	$z = 0;
	$z_1 = 1;
		
	//retrieving
	$sql = "SELECT * FROM U WHERE U_M = '$e_' AND U_IO = '$P_h_' AND U_AP = '$z'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);	
	
	$_SESSION['u_n'] = $row['U_N'];
	
	if(mysqli_num_rows($query) == 0)
	{
		$_SESSION['message_1']="החשבון הופעל כבר<br><h4 id='d' style='margin:2px auto;'>אתה מועבר לדף התחברות</h4>";
		echo '<script>setTimeout(function(){$("#d").click();}, 4000);</script>';
		//header ("location: ../s8_f/s8.php");
	}
	else
	{
		//$_SESSION['message_1']="החשבון הופעל בהצלחה<br><h4 id='c' style='margin:2px auto;'></h4>";	
		//$_SESSION['message_1']="<h4 id='c' style='margin:2px auto;'></h4>";	
		
		//updating
		$sql = "UPDATE U SET U_AP = '$z_1' WHERE U_M = '$e_'";
		$query = mysqli_query($con,$sql);
		$_SESSION['active'] = 1;
		$_SESSION['wl'] = 1;
		
		//echo '<script>setTimeout(function(){$("#c").click();}, 1000);</script>';
		header ("location: ../content/wl.php");
	}
}
else
{
	if(isset($_SESSION['v_wait']))
	{
		if ($_SESSION['v_wait'] == 1)
		{
			$_SESSION['message_1']="לחץ על האישור שנשלח במייל<br><h4 id='c' style='margin:2px auto;'>כדי להפעיל את החשבון</h4>";	
		}
		else
		{
			if($_SESSION['m']== 1)
			{
				$_SESSION['message_1']="לחץ על הלינק שנשלח במייל<br><h4 id='c' style='margin:2px auto;'>כדי להשלים את החלפת הסיסמה</h4>";
			}
			else
			{
				header ("location: error.php");
			}
		}
	}
	else
	{
		header ("location: ../content/s10.php");
	}
}

?>
<head>
<!-- Encoding -->
	<meta charset="utf-8">
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<!-- General stuff -->
		<link rel="stylesheet" href="2.css" media="screen" /> 
		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

<body>
<div style="text-align:center;width:100%;">
	<h1 style="margin-bottom:0px;"><?=$_SESSION['message_1'] ?></h1>
</div>
<script>
$("#c").click(function(){
	window.location.replace("../content/wl.php");
	});
$("#d").click(function(){
	window.location.replace("../content/example_cleveland_l.php");
	});
</script>
</body>