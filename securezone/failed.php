<? require ("signupconfig.php"); ?>

<html>
<?PHP include('../includes/pagestart1deep.php'); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="4" bgcolor="#DFDFDF" >
	<tr>
		<td valign="top" colspan="2">
<?PHP include('../includes/topmenus.php'); ?>
		</td>
	</tr>
<!--BodyArea-->
	<TR>
		  <TD WIDTH="0" VALIGN="top" ALIGN="center"> 
<?PHP include('../includes/securezone-sidebar2.php'); ?>
			</td>
<!--Content area-->
<td align="left" valign="top" width="75%">
<font class="default">
<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD HEIGHT="29" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png">
			<FONT CLASS="default">StarShatter Dev. Secure Zone</font>
		</TD>
	</TR>
</table>
 

<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD ALIGN="left" VALIGN="middle" BGCOLOR="#E8E984">
			<FONT CLASS="default">Error:</font>
		</TD>
	</TR>
</table>
&nbsp;&nbsp;&nbsp;The username / password you supplied did not match what we have in our database! Please log in <a href="<?PHP echo $httproot ?>securezone.php">Here</a>.
<br><br><br>
</FONT>
		</td>
	</tr>
<?PHP include('../includes/bottomtextmenu.php'); ?>


<?PHP include('../includes/pageend.php'); ?>