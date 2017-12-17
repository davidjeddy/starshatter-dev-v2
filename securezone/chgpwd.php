<?
	if (!class_exists(auth))
	{
		include ("auth.php");
	} 
		include ("authconfig.php");
		include ("check.php");
?>




<html>

<?PHP include('../includes/pagestart1deep.php'); ?>
<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="4" BGCOLOR="#DFDFDF" >
	<tr>
		<TD VALIGN="top" COLSPAN="2">
		
		
<?PHP include('../includes/topmenus.php'); ?>


		</TD>
	</TR>

<!--BodyArea-->
	<TR>
		<TD WIDTH="0" VALIGN="top" ALIGN="center"> 
<br><br><br>
		</td>
<!--Content area-->
<td align="left" valign="top" width="75%">


<TABLE WIDTH="100%" BORDER="2" CELLPADDING="2" CELLSPACING="0" BORDERCOLOR="#ffff88">
<tr><td colspan="2">
<?PHP
	if ($check["level"] == 1)
		{
			include('admin/adminmenu.php');
		}
	if ($check["level"] == 999)
		{
			include('members/usermenu.php');
		}
?>
</td></tr>

  <form method="POST" action="chgpwd.php">
    <tr>
	<td>
<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD HEIGHT="20" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png">
			<font class="default">eMail Settings</font>
		</TD>
	</TR>
</table>
	<TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2">
<tr>
      <td bgcolor="#E8E984"><font class="default">Old Password:</font></td>
      <td bgcolor="#E8E984"><font class="default"><input type="password" name="oldpasswd" size="25" class="input"></font></td>
    </tr>
    <tr>
      <td bgcolor="#E8E984"><font class="default">New Password:</font></td>
      <td bgcolor="#E8E984"><font class="default"><input type="password" name="newpasswd" size="25" class="input"></font></td>
    </tr>
    <tr>
      <td bgcolor="#E8E984"><font class="default">Confirm:</font></td>
      <td bgcolor="#E8E984"><font class="default"><input type="password" name="confirmpasswd" size="25" class="input"></font></td>
    </tr>

    <tr>
      <td colspan="2" align="center" bgcolor="#E8E984"><input type="submit" value="Save Changes" name="submit" class="input"><input type="reset" value="Reset Fields" name="reset" class="input"></font>
	</td></tr></table>  
	  </td>
    </tr>

     
  </form>

   <tr>
   <td>
   
   <TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2">
<tr>
      <td BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="left" colspan="6"><font class="default">Messages</font></td></tr>
	  <tr><td bgcolor="#E8E984"><font class="default">&nbsp;&nbsp;&nbsp;
<? 
	$user = new auth();
	$connection = mysql_connect($dbhost, $dbusername, $dbpass);
	
	// REVISED CODE
	$SelectedDB = mysql_select_db($dbname);
	$userdata = mysql_query("SELECT * FROM authuserWHERE uname='$USERNAME' and passwd='$PASSWORD'");
	
	if ($submit)
	{
		// Check if Old password is the correct
		if ($oldpasswd != $PASSWORD)
		{
			print "<p align=\"center\">";
			print "	<font class=\"default\">";
			print "		<b>Old password is wrong!</b>";
			print "	</font>";
			print "</p>";
			exit;
		}
		
		// Check if New password if blank
		if (trim($newpasswd) == "")
		{
			print "<p align=\"center\">";
			print "	<font class=\"default\">";
			print "		<b>New password cannot be blank!</b>";
			print "	</font>";
			print "</p>";
			exit;
		}
				
		// Check if New password is confirmed
		if ($newpasswd != $confirmpasswd)
		{
			print "<p align=\"center\">";
			print "	<font class=\"default\">";
			print "		<b>New password was not confirmed!</b>";
			print "	</font>";
			print "</p>";
			exit;
		}
		
		// If everything is ok, use auth class to modify the record
		$update = $user->modify_user($USERNAME, $newpasswd, $check["team"], $check["level"], $check["status"]);
		if ($update) {
			echo "<font class=\"default\"> You will be required to re-login to proceed. <A href=\"../securezone.php\" class=\"minilinks\">Login Here</a></font>.";

		}
		
	}	// end - new password field is not empty
?>

</td></tr></table></td></tr>



</FONT>
		</td>
	</tr>
</table>

<?PHP include('../includes/bottomtextmenu.php'); ?>


<?PHP include('../includes/pageend.php'); ?>






