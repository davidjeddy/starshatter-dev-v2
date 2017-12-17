<?
/*
# File: vAuthenticate.php
# Script Name: vSignup 2.1
# Author: Vincent Ryan Ong
# Email: support@beanbug.net
#
# Description:
# vSignup is a member registration script which utilizes vAuthenticate
# for its security handling. This handy script features email verification,
# sending confirmation email message, restricting email domains that are 
# allowed for membership, and much more.
#
# This script is a freeware but if you want to give donations,
# please send your checks (coz cash will probably be stolen in the
# post office) them to:
#
# Vincent Ryan Ong
# Rm. 440 Wellington Bldg.
# 655 Condesa St. Binondo, Manila
# Philippines, 1006
*/

// Start Code

	// Use Sessions
	// NOTE: This will store the username and password entered by the user to the cookie
	// variables USERNAME and PASSWORD respectively even if the combination is correct or
	// not. Be sure to authenticate every page that you want to be secured and pass as 
	// parameters the variables USERNAME and PASSWORD.
	setcookie ("USERNAME", $username);
	setcookie ("PASSWORD", $password);
	
  	include ("auth.php"); 
	include ("authconfig.php");

	$Auth = new auth();
	$detail = $Auth->authenticate($username, $password);

	if ($detail==0)
	{
	?><HEAD>
		<SCRIPT language="JavaScript1.1">
		<!--
			location.replace("<? echo $failure; ?>");
		//-->
		</SCRIPT>
	  </HEAD>
	<?
	}
	elseif ($detail == 1) {
	?><HEAD>
		<SCRIPT language="JavaScript1.1">
		<!--
			location.replace("<? echo $admin; ?>");
		//-->
		</SCRIPT>
	  </HEAD>
	<?
	}
	else 
	{
	?><HEAD>
		<SCRIPT language="JavaScript1.1">
		<!--
			location.replace("<? echo $success; ?>");
		//-->
		</SCRIPT>
	  </HEAD>
	<?
	  }
?>
