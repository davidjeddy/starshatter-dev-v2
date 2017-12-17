
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
	$group = new auth();

	$connection = mysql_connect($dbhost, $dbusername, $dbpass);
	// List existing users
	// OLD CODE - DO NOT REMOVE
	// $listusers = mysql_db_query($dbname, "SELECT * from authuser");
	
	// REVISED CODE
	$SelectedDB = mysql_select_db($dbname);
	$listusers = mysql_query("SELECT * from authuser");

?>

<?
// ADD GROUP
if ($action == "Add") {
	$situation = $group->add_team($teamname, $teamlead, $status);
	
	if ($situation == "blank team name") {
		$message = "Team Name field cannot be blank.";
		$action = "";
	}
	elseif ($situation == "group exists") {
		$message = "Team Name already exists in the database. Please enter a new one.";
		$action = "";
	}
	elseif ($situation == 1) {
		$message = "New team added successfully.";
	}
	else {
		$message = "";
	}
}

// DELETE GROUP
if ($action=="Delete") {
	$delete = $group->delete_team($teamname);
	
	if ($delete) {
		$message = $delete;
		$action = "";
	}
	else {
		$teamname = "";
		$teamlead = "sa";
		$status = "active";
		$message = "The group has been deleted.<br>All users associated with the group are moved to the Ungrouped team";
	}
}

// MODIFY TEAM
if ($action == "Modify") {
	$update = $group->modify_team($teamname, $teamlead, $status);

	if ($update==1) {
		$message = "Team detail updated successfully.";
	}
	elseif ($update == "Admin team cannot be inactivated.") {
		$message = $update;
		$action = "";
	}
	elseif ($update == "Ungrouped team cannot be inactivated.") {
		$message = $update;
		$action = "";
	}
	elseif ($update == "Team Lead field cannot be blank.") {
		$message = $update;
		$action = "";
	}
	else {
		$message = "";
	}
}

// EDIT TEAM (accessed from clicking on username links)
if ($action == "Edit") {
	$message = "Modify team details.";
}

// CLEAR FIELDS
if ($action == "Add New") {
	$teamname = "";
	$teamlead = "sa";
	$status = "active";
	$message = "New team detail entry.";
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
    <td width="50%">
      
	  <form name="AddTeam" method="Post" action="authgroup.php">
	    <table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" bordercolor="#ffff88">
			<tr> 
				<td colspan="2" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center">TEAM DETAILS</td>
			</tr>
		<tr valign="middle"> 
			<td BGCOLOR="#E8E984">Team Name</td>
            <td BGCOLOR="#E8E984" width="75%">
              <?   
			  	if (($action == "Modify") || ($action=="Add") || ($action=="Edit")) {
					print "<input type=\"hidden\" name=\"teamname\" value=\"$teamname\"  class=\"input\">"; 
					print "$teamname";
				}
				else {	
					print "<input type=\"text\" name=\"teamname\" size=\"15\" maxlength=\"15\" value=\"$teamname\" class=\"input\">"; 
				}
			  ?>
			</td>
		</tr>
		<tr valign="middle"> 
			<td BGCOLOR="#E8E984">Team Leader</td>
            <td BGCOLOR="#E8E984" width="75%">
              <select name="teamlead">
                <?
			  	// DISPLAY MEMBERS
			  	$row = mysql_fetch_array($listusers);
			  	while ($row) {
					$memberlist = $row["uname"];
					
					if ($teamlead == $memberlist) {
						print "<option value=\"$memberlist\" SELECTED class=\"input\">" . $row["uname"] . "</option>";
					}
					else {
						print "<option value=\"$memberlist\" class=\"input\">" . $row["uname"] . "</option>";
					}
					$row = mysql_fetch_array($listusers);
				}
			  ?>
              </select>
              <a href="authuser.php" class="minilinks">Add</a>
			</td>
		</tr>
		<tr valign="middle"> 
			<td BGCOLOR="#E8E984">Status</td>
			<td BGCOLOR="#E8E984">
              <select name="status">
                <?
			  	// ACTIVE / INACTIVE
				if ($status == "inactive") {
					print "<option value=\"active\" class=\"input\">Active</option>";
                	print "<option value=\"inactive\" class=\"input\" selected>Inactive</option>";
				}
				else {
					print "<option value=\"active\" class=\"input\" selected>Active</option>";
                	print "<option value=\"inactive\" class=\"input\">Inactive</option>";
				}
              
			  ?>
              </select>
			</td>
		</tr>
          <tr BGCOLOR="#E8E984" valign="middle"> 
            <td colspan="2"> 
              
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
	  
	     
	 </td><td width="50%">
	 
	 
 <table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" bordercolor="#ffff88">
			<tr> 
				<td colspan="3" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center">TEAM LIST</td>
			</tr>
        <tr> 
          <td width="35%" BGCOLOR="#E8E984">Team Name</td>
          <td width="34%" BGCOLOR="#E8E984">Team Lead</td>
          <td width="31%" BGCOLOR="#E8E984">Status</td>
        </tr>

<?
	// Fetch rows from AuthUser table and display ALL users
	$qQuery = "SELECT * FROM authteam ORDER BY id";
	
	// OLD CODE - DO NOT REMOVE
	// $result = mysql_db_query($dbname, $qQuery);
	
	// REVISED CODE
	$result = mysql_query($qQuery);
	
	$row = mysql_fetch_array($result);
	while ($row) {  		
		print "<tr><td width=\"35%\"  BGCOLOR=\"#E8E984\"><a href=\"authgroup.php?action=Edit&teamname=".$row["teamname"]."&teamlead=".$row["teamlead"]."&status=".$row["status"]."\" class=\"minilinks\">";
		print 		$row["teamname"];
		print "		</a></td>";
        print "  <td width=\"34%\" BGCOLOR=\"#E8E984\">".$row["teamlead"]."</td>";
        print "  <td width=\"31%\" BGCOLOR=\"#E8E984\">".($row["status"])."</td></tr>";
		
		$row = mysql_fetch_array($result);
	}
?> 
	  </table>
<br>


</td></tr>
<tr><td colspan="2">


 <table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" bordercolor="#ffff88">
			<tr> 
				<td  BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center">Message:</font></b></td>
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
		  </font></td>
        </tr>
      </table>



    </td>
  </tr>
</table>

</td></tr></table>





<?PHP include('../../includes/bottomtextmenu.php'); ?>


<?PHP include('../../includes/pageend.php'); ?>