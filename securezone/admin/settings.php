
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
<?
// MODIFY SETTINGS
if ($action == "Save")
{
	$connection = mysql_connect($dbhost, $dbusername, $dbpass);
	$SelectedDB = mysql_select_db($dbname);
	$updatesettings = mysql_query("UPDATE signupsetup SET validemail='$ValidEmailDomains', profile='$profile', autoapprove='$autoapprove', autosend='$autosend', autosendadmin='$autosendadmin'");
	if ($updatesettings) 
	{
		$message = "vSignup settings has been updated successfully.";
	}
}
?>
<?		
	$connection = mysql_connect($dbhost, $dbusername, $dbpass);
	$SelectedDB = mysql_select_db($dbname);
	$ProfileList = mysql_query("SELECT profile FROM emailer WHERE profile <> 'Password Reminder'");
	
	$currentsettings = mysql_query("SELECT * FROM signupsetup");
	$row = mysql_fetch_array($currentsettings);
	
	$ValidEmailDomains = $row["validemail"];
	$profile = $row["profile"];
	$autoapprove = $row["autoapprove"];
	$autosend = $row["autosend"];
	$autosendadmin = $row["autosendadmin"];
?>
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


<!--admin interface-->
<table width="100%" border="2" cellpadding="2" cellspacing="0" bordercolor="#ffff88">
<tr><td colspan="2">
<?PHP include('adminmenu.php'); ?>
</td></tr>

<TR><TD>
<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD HEIGHT="20" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png">
			eMail Settings
		</TD>
	</TR>
</table>
<TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2" BORDERCOLOR="#ffff88">
<tr><td bgcolor="#E8E984">
      <form name="FormSettings" method="POST" action="settings.php">

				<?
					if ($autoapprove==1)
					{
						print "<input type=\"radio\" name=\"autoapprove\" value=\"1\" checked> Yes<br>";
				  		print "<input type=\"radio\" name=\"autoapprove\" value=\"0\"> No";
					}
					else
					{
						print "<input type=\"radio\" name=\"autoapprove\" value=\"1\"> Yes<br>";
				  		print "<input type=\"radio\" name=\"autoapprove\" value=\"0\" checked> No";
					}
			  	?>
	</td>
	<td  bgcolor="#E8E984" width="75%">Automatically activate membership upon signup</td>
</tr>

<tr> 
	<td  bgcolor="#E8E984" width="35%">
				<?
					if ($autosend==1)
					{
						print "<input type=\"radio\" name=\"autosend\" value=\"1\" checked> Yes<br>";
				  		print "<input type=\"radio\" name=\"autosend\" value=\"0\"> No";
					}
					else
					{
						print "<input type=\"radio\" name=\"autosend\" value=\"1\"> Yes<br>";
				  		print "<input type=\"radio\" name=\"autosend\" value=\"0\" checked> No";
					}
			  	?>
	</td>
	<td  bgcolor="#E8E984" width="75%">Send email notification upon signing up</td>
</tr>

<tr> 
	<td  bgcolor="#E8E984" width="35%">
				<?
					if ($autosendadmin==1)
					{
						print "<input type=\"radio\" name=\"autosendadmin\" value=\"1\" checked> Yes<br>";
				  		print "<input type=\"radio\" name=\"autosendadmin\" value=\"0\"> No";
					}
					else
					{
						print "<input type=\"radio\" name=\"autosendadmin\" value=\"1\"> Yes<br>";
				  		print "<input type=\"radio\" name=\"autosendadmin\" value=\"0\" checked> No";
					}
			  	?>
	</td>
	<td  bgcolor="#E8E984" width="75%">Automatically email the admin for every new signup </td>
</tr>

<tr>
	<td  bgcolor="#E8E984" width="35%"> 
              <select mmTranslatedValueHiliteColor="HILITECOLOR=%22No Color%22" mmTranslatedValueHiliteColor="HILITECOLOR=%22No Color%22" name="profile" class="input">
				<? 
					while ($ProfileRow = mysql_fetch_array($ProfileList))
					{
						$ListFromProfile = $ProfileRow["profile"];
						
						if ($profile == $ListFromProfile)
						{
							print "<option value=\"$ListFromProfile\" SELECTED>$ListFromProfile</option>";
						}
						else
						{											
							print "<option value=\"$ListFromProfile\">$ListFromProfile</option>";
						}
					}	// End while
			  	?>
              </select>
	</td>
	<td  bgcolor="#E8E984" width="75%">Choose default profile if sending email notification</td>
</tr>

<tr>
	<td  bgcolor="#E8E984" colspan="2">
Enter a list of email domains that you want to allow signup to.<br>
&nbsp; Leave it blank to allow anyone to sign up.<br>
&nbsp; Include the @ in front of the email domain to ensure proper processing.<br>
&nbsp; Separate email domains with a space.<br>
                <?
					print "<textarea name=\"ValidEmailDomains\" cols=\"53\" rows=\"7\" wrap=\"virtual\" class=\"input\">";
					print $ValidEmailDomains;
					print "</textarea>";
                ?>
	</td>
</tr>

<tr> 
	<td  bgcolor="#E8E984" colspan="2" align="center"> 
		<input type="submit" name="action" value="Save" class="input">
		<input type="reset" name="Reset" value="Reset" class="input">
	</td>
</tr>

</td></tr>
</form>


</td></tr></table>
</td></tr></table>
</font>
		</td>
	</tr>


<?PHP include('../../includes/bottomtextmenu.php'); ?>


<?PHP include('../../includes/pageend.php'); ?>