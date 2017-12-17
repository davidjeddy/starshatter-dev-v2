
<html>
<? include ("securezone/authconfig.php"); ?>
<?PHP include('includes/pagestart.php'); ?>
<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="4" BGCOLOR="#DFDFDF" >
	<tr>
		<TD VALIGN="top" COLSPAN="2">
<?PHP include('includes/topmenus.php'); ?>
		</font></td>
	</TR>
<!--BodyArea-->
	<TR>
		<TD WIDTH="0" VALIGN="top" ALIGN="center"> 


<?PHP include('includes/securezone-sidebar1.php'); ?>


		</font></td>
<!--Content area-->
<td align="left" valign="top" width="75%">
<font class="default">



<!--script for DIV visibility switching-->
<SCRIPT TYPE="text/javascript" SRC="<?PHP echo $httproot ?>jscripts/signin_signup_switch.js"></SCRIPT>



<table width="100%">
	<tr>
		<td align="center" valign="middle" HEIGHT="29" background="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png">
			<font class="title1">StarShatter Dev. V2 Secure Zone</font></td>
	</tr>
</table>
<br><br><br>
<!--Show Sign in be default. when Sign up is click sign in got invisible.-->



<DIV ID="SignIn" STYLE="visibility: visible; position: absolute; left: 40%; top: 200;">


<TABLE WIDTH="50%" BORDER="2" CELLPADDING="2" CELLSPACING="0" BORDERCOLOR="#ffff88"><TR><TD>
<TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2" BORDERCOLOR="#ffff88">


<FORM NAME="Sample" METHOD="post" ACTION="securezone/<? print $resultpage ?>">
<TR><TD COLSPAN="2" VALIGN="middle" ALIGN="center" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png"><FONT CLASS="title1">SSD-SZ Sign In</font></td></TR>

<TR><TD WIDTH="32%" BGCOLOR="#E8E984" VALIGN="middle">Username</font></td>
<TD WIDTH="68%" BGCOLOR="#E8E984" VALIGN="middle"><INPUT TYPE="text" NAME="username" SIZE="20" MAXLENGTH="20" class="input"></font></td></TR>

<TR><TD WIDTH="32%" BGCOLOR="#E8E984" VALIGN="middle">Password</font></td>
<TD WIDTH="68%" BGCOLOR="#E8E984" VALIGN="middle"><INPUT TYPE="password" NAME="password" SIZE="20" MAXLENGTH="20" class="input"></font></td></TR>

<!--<TR><TD WIDTH="68%" BGCOLOR="#E8E984" VALIGN="middle" ALIGN="center" COLSPAN="2"><A HREF="securezone/pwdremind.php" CLASS="minilinks">Forgot your password?</A></font></td></TR>-->

<TR VALIGN="middle" ALIGN="center" BGCOLOR="#E8E984"><TD COLSPAN="2">
          <INPUT TYPE="submit" NAME="Login" VALUE="Login" CLASS="input">&nbsp;|&nbsp;
          <INPUT TYPE="reset" NAME="Clear" VALUE="Clear" CLASS="input">
		  </FORM>
</font></td></tr></TABLE>
</font></td></tr></TABLE>

</DIV>



<DIV ID="SignUp" STYLE="visibility: hidden; position: absolute; left: 40%; top: 200;">

<TABLE WIDTH="50%" BORDER="2" CELLPADDING="2" CELLSPACING="0" BORDERCOLOR="#ffff88"><TR><TD>
<TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2" BORDERCOLOR="#ffff88">

<form name="vSignup" method="POST" action="securezone/process.php">
	<tr valign="middle">
		<td align="center" colspan="2" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png"><font CLASS="title1">SSD-SZ Sign Up</font></td>
	</tr>

	<tr valign="middle">
		<td BGCOLOR="#E8E984" VALIGN="middle" colspan="2"><font class="minilinks">* Fields are required.</font></td>
	</tr>
	
	<tr valign="middle"> 
		<td width="17%" BGCOLOR="#E8E984">*Username</font></td>
		<td width="83%" BGCOLOR="#E8E984"><input type="text" name="username" size="20" maxlength="32" class="input"></font></td>
	</tr>
	  
	<tr valign="middle"> 
		<td width="17%" BGCOLOR="#E8E984">*Password</font></td>
		<td width="83%" BGCOLOR="#E8E984"><input type="password" name="password" size="20" maxlength="32" class="input"></font></td>
	</tr>
 	<tr valign="middle"> 
		<td width="17%" BGCOLOR="#E8E984">*First Name</font></td>
		<td width="83%" BGCOLOR="#E8E984"><input type="text" name="fname" size="20" maxlength="32" class="input"></font></td>
	</tr>
    <tr valign="middle"> 
      <td width="17%" BGCOLOR="#E8E984">*Last Name</font></td>
      <td width="83%" BGCOLOR="#E8E984"><input type="text" name="lname" size="20" maxlength="32" class="input"></font></td>
	</tr>
	<tr valign="middle"> 
		<td width="17%" BGCOLOR="#E8E984">*Email Address</font></td>
		<td width="83%" BGCOLOR="#E8E984"><input type="text" name="email" size="20" maxlength="128" class="input"></font></td>
	</tr>
	   <tr valign="middle"> 
      <td width="17%" BGCOLOR="#E8E984" colspan="2"><br></font></td>
  </tr>
	<tr valign="middle"> 
		<td width="17%" BGCOLOR="#E8E984">Location</font></td>
		<td width="83%" BGCOLOR="#E8E984"><input type="text" name="country" size="20" maxlength="32" class="input"></font></td>
	</tr>
	<!--<tr valign="middle"> 
		<td width="17%" BGCOLOR="#E8E984">Zip Code (will be URL)</font></td>
		<td width="83%" BGCOLOR="#E8E984"><input type="text" name="zipcode" size="20" maxlength="32" class="input"></font></td>
	</tr>-->
    <tr valign="middle"> 
      <td align="center" colspan="2" BGCOLOR="#E8E984">
          <input type="submit" name="Submit" value="Submit" class="input">&nbsp;|&nbsp;
          <input type="reset" name="Reset" value="Reset" class="input">
          </font></b></div></form>
      </font></td>
  </tr>
</table>
</font></td></tr></table>

</DIV>




<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
</font></td>
	</tr>


<?PHP include('includes/bottomtextmenu.php'); ?>


<?PHP include('includes/pageend.php'); ?>