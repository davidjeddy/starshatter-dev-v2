

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
<?PHP include('../includes/securezone-sidebar2.php'); ?>
		</td>
<!--Content area-->
<td align="left" valign="top" width="75%">
<font class="default">
<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD HEIGHT="29" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png">
			<FONT CLASS="default">Password Retreival</font>
		</TD>
	</TR>
</table>
<FONT CLASS="default">
&nbsp;&nbsp;&nbsp;Enter the eMail address you provided when youu signed up. your password will be sent to that address only.
<br>
<form name="Sample" method="post" action="process.php">
		<b>Username: </b>
		<input type="text" name="username" size="16" maxlength="128" class="input">
		<input type="submit" name="remind" value="Send" class="input">
</form>
</FONT>
		
		

		</td>
	</tr>
<?PHP include('../includes/bottomtextmenu.php'); ?>
<?PHP include('../includes/pageend.php'); ?>