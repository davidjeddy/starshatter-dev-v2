
<?PHP
	if (!class_exists(auth))
	{
		include ("../auth.php");
	} 
		include ("../authconfig.php");
		include ("../check.php");
		
?>

<html>
<?PHP include('../../includes/pagestart2deep.php'); ?>
<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="4" BGCOLOR="#DFDFDF" >
	<tr>
		<TD VALIGN="top" COLSPAN="2">
		
		
<?PHP include('../../includes/topmenus.php'); ?>


		</font></td>
	</TR>

<!--BodyArea-->
	<TR>
		<TD WIDTH="0" VALIGN="top" ALIGN="center"> 		
<BR><BR><BR>
		</font></td>
<!--Content area-->
<td align="left" valign="top" width="75%">
<font class="default">
<TABLE WIDTH="100%" BORDER="2" CELLPADDING="2" CELLSPACING="0" BORDERCOLOR="#ffff88">
<tr><td colspan="2">
<?PHP include('usermenu.php'); ?>

<TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2" BORDERCOLOR="#ffff88">
  <tr><td width="16%" colspan="2" bgcolor="#E8E984"><font class="default">SSD-SZ ID#</font></td>
  <td bgcolor="#E8E984" colspan="4"><font class="default"><font class="default"><? echo $check["id"] ?></font></td>
  </tr>
  <tr><td width="16%" colspan="2" bgcolor="#E8E984"><font class="default">Username</font></td>
  <td bgcolor="#E8E984" colspan="4"><font class="default"><font class="default"><? echo $check["uname"] ?></font></td>
  </tr>
  <tr><td width="16%" colspan="2" bgcolor="#E8E984"><font class="default">Password</font></td>
  <td bgcolor="#E8E984" colspan="4"><font class="default"><? echo $check["passwd"] ?>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<? echo $changepassword; ?>" class="minilinks">Change</a></font></td>
  </tr>
  <tr><td width="16%" colspan="2" bgcolor="#E8E984"><font class="default">Team</font></td>
  <td bgcolor="#E8E984" colspan="4"><font class="default"><font class="default"><? echo $check["team"] ?></font></td>
  </tr>
  <tr><td width="16%" colspan="2" bgcolor="#E8E984"><font class="default">Access Level</font></td>
  <td bgcolor="#E8E984" colspan="4"><font class="default"><font class="default"><? echo $check["level"] ?></font></td>
  </tr>
  <tr><td width="16%" colspan="2" bgcolor="#E8E984"><font class="default">Status</font></td>
  <td bgcolor="#E8E984" colspan="4"><font class="default"><font class="default"><? echo $check["status"] ?></font></td>
  </tr>
</table>
</font></td></tr>


<tr><Td>
<table width="100%" border="0" cellpadding="2" cellspacing="2" bordercolor="#ffff88">
  <tr> 
    <td colspan="2" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center"><font class="default">Field Description</font></font></td>
  </tr>
  <tr> 
    <td bgcolor="#E8E984"><font class="default">SSD-SZ ID#</font></td>
    <td bgcolor="#E8E984"><font class="default">Unique identifier. This is not editable even by the administrator
  </tr>
  <tr> 
    <td bgcolor="#E8E984"><font class="default">Username</font></td>
	    <td bgcolor="#E8E984"><font class="default">A 
      unique identifier chosen by the user during signup process OR a unique identifier 
      given by the administrator to the user. The administrator has the power 
      to change this when needed.
  </tr>
  <tr> 
    <td bgcolor="#E8E984"><font class="default">Password</font></td>
	    <td bgcolor="#E8E984"><font class="default">A 
      security requirement whose value depends on either the user OR the administrator. 
      The administrator has the power to change this when needed.
  </tr>
  <tr> 
    <td bgcolor="#E8E984"><font class="default">Team</font></td>
	    <td bgcolor="#E8E984"><font class="default">A 
      group to which the specified user is a part of. This is used to simplify 
      mass status modification. A user cannot be a member of 2 or more teams.
  </tr>
  <tr> 
    <td bgcolor="#E8E984"><font class="default">Level</font></td>
	    <td bgcolor="#E8E984"><font class="default">This 
      is the level of power that a user posses. The administrator has the option 
      to set the number of levels available. 1 is the highest, which usually pertains 
      to system administrators and sometimes, web masters.
  </tr>
  <tr> 
    <td bgcolor="#E8E984"><font class="default">Status</font></td>
	    <td bgcolor="#E8E984"><font class="default">This 
      can either be ACTIVE or INACTIVE. Inactive accounts cannot log into the 
      system. An inactive account can be activated by the administrator or someone 
      with administrative privileges.</font></td>
  </tr>
</table>



</font></td></tr></table>


</td>
	</tr>


<?PHP include('../../includes/bottomtextmenu.php'); ?>


<?PHP include('../../includes/pageend.php'); ?>