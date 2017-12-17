
<?
	if (!class_exists(auth))
	{
		include ("auth.php");
	} 
		include ("authconfig.php");
		include ("check.php");
	
	if ($check["level"] != 1 && $check["level"] != 999)
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
		<!--side menu area's-->
<br><br><br>
		</td>
<!--Content area-->
<td align="left" valign="top" width="75%">
<font class="default">
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

<TR><TD>
<TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2" BORDERCOLOR="#ffff88">

	<tr> 
		<Td BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center" colspan="2"><font class="default">FILE UPLOAD FORM</font></td>
	</tr>

<?PHP include('uploadform/uploadform.php'); ?>

</table>
</td></tr>
</table>

</FONT>
		</td>
	</tr>


<?PHP include('../includes/bottomtextmenu.php'); ?>


<?PHP include('../includes/pageend.php'); ?>