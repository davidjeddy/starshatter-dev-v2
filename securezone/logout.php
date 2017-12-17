<?
	// Destroy Sessions
	setcookie ("USERNAME", "");
	setcookie ("PASSWORD", "");	
	include ("authconfig.php");
?>

		<SCRIPT language="JavaScript1.1">
		<!--
			location.replace("<?PHP echo $httproot?>securezone.php");
		//-->
		</SCRIPT>

