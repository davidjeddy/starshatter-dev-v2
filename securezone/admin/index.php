
<?
	if (!class_exists(auth))
	{
		include ("../auth.php");
	} 
		include ("../authconfig.php");
		include ("../check.php");
	
	if ($check["level"] != 1)
	{
		// Feel free to change the error message below. Just make sure you put a "\" before
		// any double quote.
		print "<font face=\"Arial, Helvetica, sans-serif\" size=\"5\" color=\"#FF0000\">";
		print "<b>Illegal Access</b>";
		print "</font><br>";
  		print "<font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"2\" color=\"#000000\">";
		print "<b>You do not have permission to view this page.</b></font>";
		
		exit; // End program execution. This will disable continuation of processing the rest of the page.
	}	
?>
<html>

<?PHP include('../../includes/pagestart2deep.php'); ?>
<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="4" BGCOLOR="#DFDFDF" >
	<tr>
		<TD VALIGN="top" COLSPAN="2">
		
		
<?PHP include('../../includes/topmenus.php'); ?>


		</TD>
	</TR>

<!--BodyArea-->
	<TR>
		<TD WIDTH="0" VALIGN="top" ALIGN="center"> 
		<!--side menu area's-->
<br><br><br>
		</td>
<!--Content area-->
<td align="left" valign="top" width="75%">
<font class="default">
<TABLE WIDTH="100%" BORDER="2" CELLPADDING="2" CELLSPACING="0" BORDERCOLOR="#ffff88">
<tr><td colspan="2">
<?PHP include('adminmenu.php'); ?>
</td></tr>



<TR><TD>
<TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2" BORDERCOLOR="#ffff88">
<tr><td bgcolor="#E8E984">
Welcome<br>
      to the administration panel of vAuthenticate! Please click on any of the 
      five (5) administrative functions above. Below is a description of each 
      function:
<br>
<br>
<b>Settings</b> - Control site-wide signup and security settings.<br>

<br>
<b>Users</b> - Add, modify, activate/inactivate, delete, and group users.<br>

<br>
<b>Groups</b> - Create, modify, activate/inactivate, and delete groups.<br>
      
<br>
<b>Emailer</b> - Customize profiles for the types of email to be sent for notification.<br>

<br>
<b>Upload</b> - Upload your MODs for other to use.<br>


<br>
<b>Logout</b> - End the current session.<br>
</td></tr></table>

</td></tr></table>

</FONT>
		</td>
	</tr>


<?PHP include('../../includes/bottomtextmenu.php'); ?>


<?PHP include('../../includes/pageend.php'); ?>