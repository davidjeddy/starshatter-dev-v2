
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
	
	// List existing groups
	// OLD CODE - DO NOT REMOVE
	// $listteams = mysql_db_query($dbname, "SELECT * from authteam");
	
	// REVISED CODE
	$SelectedDB = mysql_select_db($dbname);
	$listteams = mysql_query("SELECT * from authteam");
	
?>

<?
// ADD USER
if ($action == "Add") {
	$situation = $user->add_user($username, $password, $team, $level, $status);
	
	if ($situation == "blank username") {
		$message = "Username field cannot be blank.";
		$action = "";
	}
	elseif ($situation == "username exists") {
		$message = "Username already exists in the database. Please enter a new one.";
		$action = "";
	}
	elseif ($situation == "blank level") {
		$message = "Level field cannot be blank.";
		$action = "";
	}
	elseif ($situation == 1) {
		$message = "New user added successfully.";
	}
	else {
		$message = "";
	}
}

// DELETE USER
if ($action=="Delete") {
	// Delete record in authuser table
	$delete = $user->delete_user($username);
	
	// Delete record in signup table
	$deletesignup =  mysql_query("DELETE FROM signup WHERE uname='$username'");

	if ($delete && $deletesignup) {
		$message = $delete;
	}
	else {
		$username = "";
		$password = "";
		$team = "Ungrouped";
		$level = "";
		$status = "active";
		$message = "The user has been deleted.";
	}
}

// MODIFY USER
if ($action == "Modify") {
	$update = $user->modify_user($username, $password, $team, $level, $status);

	if ($update) {
		$message = "User detail updated successfully.";
	}
	elseif ($update == "blank level") {
		$message = "Level field cannot be blank.";
		$action = "";
	}
	else {
		$message = "";
	}
}

// EDIT USER (accessed from clicking on username links)
if ($action == "Edit") {
	$listusers = mysql_query("SELECT * from authuser where uname='$username'");
	$rows = mysql_fetch_array($listusers);
	$username = $rows["uname"];
	$password = $rows["passwd"];
	$team = $rows["team"];
	$level = $rows["level"];
	$status = $rows["status"];
	$message = "Modify user details.";
}

// CLEAR FIELDS
if ($action == "Add New") {
	$username = "";
	$password = "";
	$team = "Ungrouped";
	$level = "";
	$status = "active";
	$message = "New user detail entry.";
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






<tr><td>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left">
  <tr valign="top"> 
    <td width="25%"> 
      
<form name="AddUser" method="Post" action="authuser.php">  	 
	    <table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" bordercolor="#ffff88">
         
<tr> 
	<td colspan="2" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center">USER DETAILS</td>
</tr>
		  
          <tr valign="middle"> 
            <td BGCOLOR="#E8E984">Username</td>
            <td BGCOLOR="#E8E984"> 
              <?   
			  	if (($action == "Modify") || ($action=="Add") || ($action=="Edit")) {
					print "<input type=\"hidden\" name=\"username\" value=\"$username\" class=\"input\">"; 
					print "<font face=\"Verdana, Arial, Helvetica, sans-serif\" color=\"#006666\" size=\"2\">$username</font>";
				}
				else {	
					print "<input type=\"text\" name=\"username\" size=\"15\" maxlength=\"15\" value=\"$username\" class=\"input\">"; 
				}
			  ?>
</td>
          </tr>
          <tr> 
            <td BGCOLOR="#E8E984">Password</td>
            <td BGCOLOR="#E8E984"><? print "<input type=\"password\" name=\"password\" size=\"15\" maxlength=\"15\" value=\"$password\" class=\"input\">"; ?></td>
          </tr>
          <tr> 
            <td BGCOLOR="#E8E984">Team</td>
            <td BGCOLOR="#E8E984">
              <select mmTranslatedValueHiliteColor="HILITECOLOR=%22No Color%22" mmTranslatedValueHiliteColor="HILITECOLOR=%22No Color%22" name="team">
                <?
			  	// DISPLAY TEAMS
			  	$row = mysql_fetch_array($listteams);
			  	while ($row) {
					$teamlist = $row["teamname"];
					
					if ($team == $teamlist) {
						print "<option value=\"$teamlist\" SELECTED class=\"input\">" . $row["teamname"] . "</option>";
					}
					else {
						print "<option value=\"$teamlist\" class=\"input\">" . $row["teamname"] . "</option>";
					}
					$row = mysql_fetch_array($listteams);
				}
			  ?>
              </select>
              <a href="authgroup.php" class="minilinks">Add</a></td>
          </tr>
           <tr> 
            <td BGCOLOR="#E8E984">Level</td>
            <td BGCOLOR="#E8E984">
            <? print "<input type=\"text\" name=\"level\" size=\"4\" maxlength=\"4\" value=\"$level\" class=\"input\">"; ?>
             </td>
          </tr>
           <tr> 
            <td BGCOLOR="#E8E984">Status</td></td>
            <td BGCOLOR="#E8E984">
              <select mmTranslatedValueHiliteColor="HILITECOLOR=%22No Color%22" mmTranslatedValueHiliteColor="HILITECOLOR=%22No Color%22" name="status">
			  
			  <?
			  	// ACTIVE / INACTIVE
				if ($status == "inactive") {
					print "<option value=\"active\" class=\"input\">Active</option>";
                	print "<option value=\"inactive\" selected  class=\"input\">Inactive</option>";
				}
				else {
					print "<option value=\"active\" selected  class=\"input\">Active</option>";
                	print "<option value=\"inactive\"  class=\"input\">Inactive</option>";
				}
              
			  ?>
			  </select>
              </td>
          </tr>
           <tr> 
            <td BGCOLOR="#E8E984" colspan="2" align="center">
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
	  

	  
</td><td width="75%">
  
	  
<table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" bordercolor="#ffff88">
<tr> 
	<td colspan="5" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center">USER LIST</td>
</tr>
<tr> 
	<td width="20%" BGCOLOR="#E8E984">Username</td>
	<td width="15%" BGCOLOR="#E8E984">Group</td>
	<td width="15%" BGCOLOR="#E8E984">Status</td>
	<td width="30%" BGCOLOR="#E8E984">Last Login</td>
	<td width="20%" BGCOLOR="#E8E984">Login Count</td>
</tr>

<?
	// Fetch rows from AuthUser table and display ALL users
	// OLD CODE - DO NOT REMOVE
	// $result = mysql_db_query($dbname, "SELECT * FROM authuser ORDER BY id");
	
	// REVISED CODE
	$result = mysql_query("SELECT * FROM authuser ORDER BY id");
	
	$row = mysql_fetch_array($result);
	while ($row) {  		
		print "<tr>"; 
        print "  <td BGCOLOR=\"#E8E984\">";
		print "		<a href=\"authuser.php?action=Edit&username=".$row["uname"]."\"  class=\"minilinks\">";
		print 		$row["uname"];
		print "		</a>";
        print "  </td>";
        print "  <td BGCOLOR=\"#E8E984\">";
        print " ".$row["team"]."";
        print "  </td>";
        print "  <td BGCOLOR=\"#E8E984\">";
        print "  ".($row["status"])."";
        print "  </td>";
        print "  <td BGCOLOR=\"#E8E984\">";
        print " ".$row["lastlogin"]."";
        print "  </td>";
        print "  <td BGCOLOR=\"#E8E984\">";
        print "  ".($row["logincount"])."";
        print "  </td>";
        print "</tr>";
		
		$row = mysql_fetch_array($result);
	}
?>
     </td></tr>
	  </table>
	  
	  
</td></tr>
<tr><td colspan="2">
<!--Message-->
<table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" bordercolor="#000000">
        <tr> 
          <td colspan="5" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center">MESSAGE</td>
        </tr>
        <tr> 
          <td BGCOLOR="#E8E984">
		  <?
		  	if ($message) {
			 	print $message;
		  	}
			else {
				print "<BR>&nbsp;";
			}
		  ?>
		  </td>
        </tr>
      </table>
	  
	  
</td></tr>	  
</table>



</td></tr></table>






</FONT>
		</td>
	</tr>


<?PHP include('../../includes/bottomtextmenu.php'); ?>


<?PHP include('../../includes/pageend.php'); ?>