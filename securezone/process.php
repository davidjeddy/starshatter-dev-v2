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
		</TD>
<!--Content area-->
<td align="left" valign="top" width="75%">
<font class="default">

<?
	include ("auth.php");
	$connection = mysql_connect($dbhost, $dbusername, $dbpassword);
	$db = mysql_select_db($dbname);
	
	// PASSWORD REMINDER
	if ($remind)
		{
			$qReminder = mysql_query("SELECT * FROM 'signup' WHERE uname='$username'");
			$RemindRow = mysql_fetch_array($qReminder);//
			$numrows = mysql_num_rows($qReminder);//
			$qEmailer = mysql_query("SELECT * FROM 'emailer' WHERE profile='Password Reminder'");
			$EmailerRow = mysql_fetch_array($qEmailer);//
			$qPassword = mysql_query("SELECT * FROM 'authuser' WHERE uname='$username'");
			$PasswordRow = mysql_fetch_array($qPassword);//
			if (mysql_num_rows($qReminder) == 0)//
				{
?>
<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD HEIGHT="29" BACKGROUND="<?PHP ;echo $httproot;?>interfaces/default/SideMenuTitle.png">
			<FONT CLASS="default">StarShatter Dev. Secure Zone</font>
		</TD>
	</TR>
</table>

<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD ALIGN="left" VALIGN="middle" BGCOLOR="#E8E984">
			<FONT CLASS="default">Error</font>
		</TD>
	</TR>
</table>
That user does not appear to have a record in the SSD database.<br>Please Try again.
<br><br><br>
</FONT>
		</td>
	</tr>

<?PHP
				include('../includes/bottomtextmenu.php');
				include('../includes/pageend.php');
				exit;
			}
		else
			{
				// Get values for emailer
				$name = $EmailerRow["name"];
				$email = $EmailerRow["email"];
				$subject = $EmailerRow["subject"];
				// Insert HTML line breaks for newlines in $ReminderMessage
				// FIND A BETTER WAY FOR THIS. WE SHOULD AVOID USING HTML TAGS FOR EMAIL
				// BECAUSE NOT ALL CLIENTS SUPPORT HTML IN EMAIL MESSAGES
				$ReminderMessage = $EmailerRow["emailmessage"];
				// Replace occurances of [[--]] in template
				$ReminderMessage = str_replace ("[[--]]", $PasswordRow["passwd"], $ReminderMessage);
				$sent = @mail($RemindRow["email"], $subject, $ReminderMessage,  "From:$name<$email>\nReply-to:$email"); 
				if ($sent)
					{
?>
<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD HEIGHT="29" BACKGROUND="<?PHP ;echo $httproot;?>interfaces/default/SideMenuTitle.png">
			<FONT CLASS="default">StarShatter Dev. Secure Zone</font>
		</TD>
	</TR>
</table>

<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD ALIGN="left" VALIGN="middle" BGCOLOR="#E8E984">
			<FONT CLASS="default">Complete</font>
		</TD>
	</TR>
</table>
An eMail has been sent to the eMail provided by you during the sign-up processed.
<br><br><br>
</FONT>
		</td>
	</tr>
<?PHP
include('../includes/bottomtextmenu.php');
include('../includes/pageend.php');				
					}
				exit;
			}
	}
// END - PASSWORD REMINDER


// SIGNUP SETTINGS
	$qSetup = mysql_query("SELECT * FROM signupsetup");
	$SetupRow = mysql_fetch_array($qSetup);
	$ValidEmailDomains = $SetupRow["validemail"];
	$profile = $SetupRow["profile"];
	$AutoApprove = $SetupRow["autoapprove"];
	$AutoSend = $SetupRow["autosend"];
	$AutoSendAdmin = $SetupRow["autosendadmin"];
	
	// EMAILER SETTINGS
	$qEmailer = mysql_query("SELECT * FROM emailer WHERE profile='$profile'");
	$EmailerRow = mysql_fetch_array($qEmailer);
	$EmailerName = $EmailerRow["name"];
	$EmailerFrom = $EmailerRow["email"];
	$EmailerSubject = $EmailerRow["subject"];
	$EmailerMessage = $EmailerRow["emailmessage"];

	// SIGNUP FORM PROCESSING
	$EmailQuery = mysql_query("SELECT * FROM signup WHERE email='$email'");
	$email = strtolower($email);
	$EmailExist = mysql_num_rows($EmailQuery);	// Returns 0 if not yet existing
	$username = strtolower($username);
	$UsernameQuery = mysql_query ("SELECT * FROM signup WHERE uname='$username'");
	$UsernameExist = mysql_num_rows($UsernameQuery);
	
	if (trim($ValidEmailDomains)=="")
	{
		$EmailArray = "";
	}
	else
	{
		$EmailArray = split (" ", $ValidEmailDomains);
	}
	
	$confirmkey =  md5(uniqid(rand())); 

	// CHECK FOR RESERVED USERNAMES
/*	if (trim($username)=='Admin' || trim($username)=='admin')
	{
		$UsernameExist = 1;
	}*/
	
	// CHECK FOR REQUIRED FIELDS
	if (!trim($username))
	{
		print "<p><font size=\"3\" face=\"Verdana, Arial\" color=\"#FF0000\"><b>Username field cannot be left blank!</b></font></p>";
		exit;
	}
	if (!trim($password))
	{
		print "<p><font size=\"3\" face=\"Verdana, Arial\" color=\"#FF0000\"><b>Password field cannot be left blank!</b></font></p>";
		exit;
	}
	if (!trim($fname))
	{
		print "<p><font size=\"3\" face=\"Verdana, Arial\" color=\"#FF0000\"><b>First Name field cannot be left blank!</b></font></p>";
		exit;
	}
	if (!trim($lname))
	{
		print "<p><font size=\"3\" face=\"Verdana, Arial\" color=\"#FF0000\"><b>Last Name field cannot be left blank!</b></font></p>";
		exit;
	}
	if (!trim($email))
	{
		print "<p><font size=\"3\" face=\"Verdana, Arial\" color=\"#FF0000\"><b>Email field cannot be left blank!</b></font></p>";
		exit;
	}
	
	// Validate Email Address String
  	$good = ereg('^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+'.
               '@'.
               '[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.'.
               '[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$',
               $email);	
	if (!$good)
	{
		print "<p><font size=\"3\" face=\"Verdana, Arial\" color=\"#FF0000\"><b>Email field has invalid characters!</b></font></p>";
		exit;
	}
	
	// Validate Email Address String - FOR VALID EMAIL DOMAINS
	$found=false;
	if ($EmailArray!="")
	{
		for ($ct=0;$ct<=sizeof($EmailArray)-1;$ct++)
		{
			if (eregi($EmailArray[$ct], $email))
			{
				$ct=sizeof($EmailArray);
				$found=true;
			}
			else
			{
				$found=false;
			}
		}
	}
	else
	{
		$found = true;
	}
	if (!$found)
	{
		print "<p><font size=\"3\" face=\"Verdana, Arial\" color=\"#FF0000\"><b>Email address does not belong to the list of allowable email domains!</b></font></p>";
		exit;
	}

	// Make sure username does not yet exist in the db
	if ($UsernameExist>0)
	{
		print "<p><font size=\"3\" face=\"Verdana, Arial\" color=\"#FF0000\"><b>Username already exists in the database!</b></font></p>";
		exit;
	}
	
	// Make sure email address does not yet exist in the db
	if ($EmailExist>0)
	{
		print "<p><font size=\"3\" face=\"Verdana, Arial\" color=\"#FF0000\"><b>Email address already exists in the database!</b></font></p>";
		exit;
	}
	
	// CHANGE THIS IF YOU WANT TO ADD FIELDS TO YOUR SIGNUP FORM
	// Add new member to table signup
	$addmember = mysql_query("INSERT INTO signup VALUES ('','$username','$fname','$lname','$email','$country','$zipcode',NOW(),'$confirmkey')");
	
	// If SUCCESSFUL, add to vAuthenticate tables too
	if ($addmember)
	{
		// Is the member auto-approved or not?
		if ($AutoApprove==1)
		{
			$MemberStatus = "active";
		}
		else
		{
			$MemberStatus = "inactive";
		}
		
		$AddToAuth = new auth();
		$add = $AddToAuth->add_user($username,$password,"default","999",$MemberStatus,'', 0);
	}
	
	// Do we automatically send email notification to member or not?
	if ($AutoSend == 1)
	{
		// if successful in adding to vAuthenticate, send confirmation email
		if ($add==1)
		{
			// Get position of "[[<-" in $EmailMessage and replace it with the HTML anchor tag
			$FrtTemplatePos = strpos($EmailerMessage, "[[<-");
			$FrtLink = "<a href=\"" . $confirm . "?confirmkey=" . $confirmkey . "\">";
			
			// Get actual length of $EmailMessage
			$EmailerMessageLen = strlen($EmailerMessage);
			
			// Replace "[[<-" with HTML anchor
			$EmailerMessage = substr_replace($EmailerMessage, $FrtLink, $FrtTemplatePos, 4);
			
			// Get position of "->]]" in $EmailMessage and replace it with the closing HTML anchor tag
			$RrTemplatePos = strpos($EmailerMessage, "->]]");
			$RrLink = "</a>";
			
			// Replace "->]]" with HTML closing anchor tag
			$EmailerMessage = substr_replace($EmailerMessage, $RrLink, $RrTemplatePos, 4);

			// Replace occurances of [[--]] in template
			$EmailerMessage = str_replace ("[[--]]", $confirm . "?confirmkey=" . $confirmkey, $EmailerMessage);

			$sent = @mail($email, $EmailerSubject, $EmailerMessage, "From:$EmailerName<$EmailerFrom>\nReply-to:$EmailerFrom"); 
		}
	}
	
	// Do we automatically send notification message to the admin's email address (see signupconfig.php)?
	if ($AutoSendAdmin == 1)
	{
		if ($add==1)
		{
			$AdminSubject = "New Membership Application!";
			$AdminMessage = "This is to inform you that " . $username . " has applied for membership to our site.";			
			$sent = @mail($adminemail, $AdminSubject, $AdminMessage, "From:$EmailerName<$EmailerFrom>\nReply-to:$EmailerFrom"); 
		}
	}
?>

Thank you for signing up!

<?
	if ($AutoSend == 1) 
	{
		print "<!--<p><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">";
		print "A confirmation email was sent to the email address you specified. <br>";
		print "Please confirm your membership as soon as you receive the email.";
  		print "</font></p>-->";
	}
	else
	{
		print "<p><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\">";
		print "You will now be forwarded to the login area. <br>";
		print "If your browser does not automatically load the login area, please click <a href=\"$RelLogin\">here</a>";
  		print "</font></p>";

	?>
		<SCRIPT language="JavaScript1.1">
		<!--
			location.replace("<?PHP echo $httproot ?>securezone.php");
		//-->
		</SCRIPT>
	<?
	}
?>


</FONT>
		</td>
	</tr>
<?PHP include('../includes/bottomtextmenu.php'); ?>


<?PHP include('../includes/pageend.php'); ?>