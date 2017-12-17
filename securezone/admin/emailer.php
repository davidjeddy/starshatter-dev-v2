
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
	
	$user = new auth();
	
	$connection = mysql_connect($dbhost, $dbusername, $dbpass);
	$SelectedDB = mysql_select_db($dbname);
	$currentprofile = mysql_query("SELECT * FROM emailer WHERE profile='$profile'");
?>
<?
// ADD PROFILE
if ($action == "Add") {
	
	// Error Checking
	if (trim($profile) == "") {
		$message = "Profile field cannot be blank.";
		$action = "";
	}
	elseif (trim($name) == "") {
		$message = "Name field cannot be blank.";
		$action = "";
	}
	elseif (trim($email) == "") {
		$message = "Email field cannot be blank.";
		$action = "";
	}
	elseif (trim($subject) == "") {
		$message = "Subject field cannot be blank.";
		$action = "";
	}
	elseif (trim($emailmessage) == "") {
		$message = "Message field cannot be blank.";
		$action = "";
	}
	elseif (mysql_num_rows($currentprofile)) {
		$message = "Profile already exists in the database. Please enter a new one.";
		$action = "";
	}
	elseif ($situation == 1) {
		$message = "New profile added successfully.";
	}
	
	// Insert the new record to database
	$insertprofile = mysql_query("INSERT INTO emailer VALUES('','$profile','$email','$name','$subject','$emailmessage')");
	if ($insertprofile) {
		$message = "New profile detail has been added successfully.";
		$action = "Add New";
	}
	else{
		$message = "Error in inserting new record!";
	}
}

// DELETE PROFILE
if ($action=="Delete") 
{
	// If Profile is Password Reminder, do not alow delete action
	if ($profile=="Password Reminder")
	{
		$message = "Password Reminder profile cannot be deleted.";
	}
	else
	{
		$deleteprofile = mysql_query("DELETE FROM emailer WHERE profile='$profile'");
	}
	
	if ($deleteprofile) {
		$profile = "";
		$name = "";
		$email = "";
		$subject = "";
		$emailmessage = "";
		$message = "The profile has been deleted.";
	}
}

// MODIFY PROFILE
if ($action == "Modify") {
	// Error Checking
	if (trim($name) == "") {
		$message = "Name field cannot be blank.";
		$action = "";
		$go = false;
	}
	elseif (trim($email) == "") {
		$message = "Email field cannot be blank.";
		$action = "";
		$go = false;
	}
	elseif (trim($subject) == "") {
		$message = "Subject field cannot be blank.";
		$action = "";
		$go = false;
	}
	elseif (trim($emailmessage) == "") {
		$message = "Message field cannot be blank.";
		$action = "";
		$go = false;
	}

	// Update profile	
	$updateprofile = mysql_query("UPDATE emailer SET name='$name', email='$email', subject='$subject', emailmessage='$emailmessage' WHERE profile='$profile'");
	if ($updateprofile) {
		$message = "Profile detail updated successfully.";
		//$action = "Add New";
	}
}

// EDIT USER (accessed from clicking on username links)
if ($action == "Edit") {
	$message = "Modify profile details.";
	$rows = mysql_fetch_array($currentprofile);
	$profile = $rows["profile"];
	$name = $rows["name"];
	$email = $rows["email"];
	$subject = $rows["subject"];
	$emailmessage = $rows["emailmessage"];
}

// CLEAR FIELDS
if ($action == "Add New") {
	$profile = "";
	$name = "";
	$email = "";
	$subject = "";
	$emailmessage = "";
	$message = "";
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


<table>
<table width="100%" border="2" cellpadding="2" cellspacing="0" bordercolor="#ffff88">
<tr><td colspan="2">
<?PHP include('adminmenu.php'); ?>
</td></tr>


<!--<TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2" BORDERCOLOR="#ffff88">

<tr>
<Td colspan="6" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center">-->




	<tr> 
		<td width="50%" valign="top"> 
      
<form name="AddProfile" method="Post" action="emailer.php">
<TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2" BORDERCOLOR="#ffff88">
	<tr> 
		<Td BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center" colspan="2">PROFILE DETAILS</td>
	</tr>
	<tr>
		<td width="25%" bgcolor="#E8E984">Profile Name</td>
		<td width="75%" bgcolor="#E8E984">
              <?   
			  	if (($action == "Modify") || ($action=="Add") || ($action=="Edit")) {
					print "<input type=\"hidden\" name=\"profile\" value=\"$profile\" class=\"input\">"; 
					print "<font face=\"Verdana, Arial, Helvetica, sans-serif\" color=\"#006666\" size=\"2\">$profile</font>";
				}
				else {	
					print "<input type=\"text\" name=\"profile\" size=\"20\" maxlength=\"20\" value=\"$profile\" class=\"input\">"; 
				}
				
			  ?>
             
			  </font></td>
          </tr>
          <tr> 
            <td width="25%" bgcolor="#E8E984">Name</font></b></td>
            <td width="75%" bgcolor="#E8E984"><? print "<input type=\"text\" name=\"name\" size=\"20\" maxlength=\"50\" value=\"$name\" class=\"input\">"; ?></td>
          </tr>
          <tr> 
            <td width="25%" bgcolor="#E8E984">Email</font></b></td>
            <td width="75%" bgcolor="#E8E984"><? print "<input type=\"text\" name=\"email\" size=\"20\" maxlength=\"40\" value=\"$email\" class=\"input\">"; ?></td>
          </tr>
          <tr> 
            <td width="25%" bgcolor="#E8E984">Subject</td>
            <td width="75%" bgcolor="#E8E984"><? print "<input type=\"text\" name=\"subject\" size=\"20\" maxlength=\"100\" value=\"$subject\" class=\"input\">"; ?></td>
          </tr>
          <tr> 
            <td width="25%" bgcolor="#E8E984">Message</td>
            <td width="75%" bgcolor="#E8E984"><? 
			  	print "<textarea name=\"emailmessage\" cols=\"20\" rows=\"5\" wrap=\"virtual\" class=\"input\">";
			    print stripslashes($emailmessage);
				print "</textarea>";
			  ?></td>
          </tr>
          <tr> 
          <td width="100%" bgcolor="#E8E984" colspan="2">NOTES:<br>
                </b>1. </font><font face="Verdana" size="1">The Password Reminder 
                profile cannot be deleted because it is used for sending the password 
                reminder to members who requested it.<br>
                2. [[<-XXX->]] - In the <b>confirmation email</b>, this symbol 
                will be replaced with a hyperlink. The clickable link will be 
                the value you have set for XXX. Do not use this in the <b>Password 
                Reminder</b> profile because this will not work. Use [[--]] instead.<br>
                3. [[--]] - In the <b>confirmation email</b>, this symbol will 
                be replaced with a non-clickable URL for the confirmation page. 
                For the <b>Password Reminder</b> profile, this will display the 
                member's password in the specified area of the email.</font></p>
              </td>
          </tr>
          <tr > 
            <td width="100%" bgcolor="#E8E984" colspan="2" align="Center">
                <?
					
				if (($action=="Add") || ($action == "Modify") || ($action=="Edit")) {
					print "<input type=\"submit\" name=\"action\" value=\"Add New\" class=\"input\"> ";
					print "<input type=\"submit\" name=\"action\" value=\"Modify\" class=\"input\"> ";
					print "<input type=\"submit\" name=\"action\" value=\"Delete\" class=\"input\"> ";
				}
				else {
					print "<input type=\"submit\" name=\"action\" value=\"Add\" class=\"input\"> ";
                }
				
				?>
                <input type="reset" name="Reset" value="Clear" class="input">
            </td>
          </tr>
        </table>
	  </form>
	</td>

<td colspan="2" valign="top">
<TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2" BORDERCOLOR="#ffff88">
	<tr>
		<Td BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center" colspan="2">PROFILE LIST</td>
	</tr>
	<tr>
		<td width="50%" bgcolor="#E8E984">Profile</td>
		<td width="50%" bgcolor="#E8E984">Name</td>
	</tr>
	<tr>
		<td width="100%" bgcolor="#E8E984" colspan="2">Email</td>
	</tr>

<?
	// Fetch rows from AuthUser table and display ALL users
	$listprofiles = mysql_query("SELECT * from emailer ORDER BY id");
	
	$row = mysql_fetch_array($listprofiles);
	while ($row) {  		
		print "<tr>"; 
        print "<td width=\"50%\" bgcolor=\"#E8E984\"><a href=\"emailer.php?action=Edit&profile=".$row["profile"]."\" class=\"minilinks\">";
		print 		$row["profile"];
		print "		</a>";
		print "	   </font></div>";
        print "  </td>";
        print "<td width=\"50%\" bgcolor=\"#E8E984\">";
        print "    <div align=\"center\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"1\">".$row["name"]."</font></div>";
        print "  </td></tr>";
        print "  <tr><td width=\"50%\" bgcolor=\"#E8E984\" colspan=\"2\">".($row["email"])."</font></div>";
        print "  </td>";
        print "</tr>";
		
		$row = mysql_fetch_array($listprofiles);
	}
?>
     
	  </table>      
    </td>
  </tr>
  
  
  <tr><td colspan="2">
<TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2" BORDERCOLOR="#ffff88">
	<tr>
		<Td BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center" colspan="2">Message:</td>
        </tr>
        <tr> 
          <td width="100%" bgcolor="#E8E984">
		  <?
		  	if ($message) {
			 	print $message;
		  	}
			else {
				print "<BR>&nbsp;";
			}
		  ?>
		  </font></td>
        </tr>
      </table>

</td></tr>
</table>



</font>
		</td>
	</tr>


<?PHP include('../../includes/bottomtextmenu.php'); ?>


<?PHP include('../../includes/pageend.php'); ?>