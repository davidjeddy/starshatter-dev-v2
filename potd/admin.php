<?php
// +----------------------------------------------------------------------+
// |                          Fantastic POTD                              |
// +----------------------------------------------------------------------+
// |                          By Tony Baird                               |
// |                  Copyright (c) 2003 Fantastic Scripts                |
// |                          http://fscripts.com                         |
// +----------------------------------------------------------------------+
// | Fantastic POTD Can be modified freely as long as copyright is intact |
// | and this is left at the top of every source file                     |
// +----------------------------------------------------------------------+
// | admin.php                                                            |
// | Date Started: February 9, 2003                                       |
// | Last Modified: February 26, 2003                                     |
// +----------------------------------------------------------------------+
session_name("fpotd");
session_start();
require("setup.php");
require("functions.php");
$mysql=new Mysql;
$mysql->Connect();
$html=new HTML;
$function=new Functions;
$admin=new Admin;
if ($_POST['login']) {
	$admin->Login();
	echo "<html>
<head>
<title>Fantastic POTD Admin Area</title>
</head>

<frameset cols=\"150,*\" framespacing=\"0\" border=\"0\" frameborder=\"0\">
  <frame name=\"menu\" target=\"main\" src=\"admin.php?action=menu\" scrolling=\"auto\">
  <frame name=\"main\" src=\"admin.php?action=main\">
  <noframes>
  <body>

  <p>This page uses frames, but your browser doesn\'t support them.</p>

  </body>
  </noframes>
</frameset>
</html>";
  // Frame Menu
}elseif ($_GET['action']=="menu") {
	$admin->Login();
	echo "<html>
		<head>
		<title>Fantastic Picture of the Day</title>
		<style>
		body        {font-family:Verdana; color:#FFFFFF;font-size: 10px;}
		h1, h2, h3, h4, h5, h6                         {font-family:Verdana;}
		blockquote                              {font-family:Verdana;}
		INPUT { color: #FFFFFF; background: #008080; border: 1px solid #FFFFFF;}
		SELECT { color: #FFFFFF; background: #008080; border: 1px solid #FFFFFF;}
		TEXTAREA { color: #FFFFFF; background: #008080; border: 1px solid #FFFFFF;}
		a:                                         {font-family:Verdana; color:#00BBBB;text-decoration:none;}
		a:link                                         {font-family:Verdana; color:#00BBBB;text-decoration:none;}
		a:active                                         {font-family:Verdana; color:#00BBBB;text-decoration:none;}
		a:visited                                {font-family:Verdana; size:2; color:#00BBBB;text-decoration:none;}
		a:hover                                 {font-family:Verdana; size:2; color:#FFFFFF;text-decoration:underline;}
		 BODY
			{
			SCROLLBAR-FACE-COLOR: #006262;
			SCROLLBAR-HIGHLIGHT-COLOR: #000000;
			SCROLLBAR-SHADOW-COLOR: #006262;
			SCROLLBAR-3DLIGHT-COLOR: #00A6A6;
			SCROLLBAR-ARROW-COLOR: #FFFFFF;
			SCROLLBAR-TRACK-COLOR: #00A6A6;
			SCROLLBAR-DARKSHADOW-COLOR: #008080
			}
		</style>
		<base target=\"main\">
		</head>

		<body text=\"#FFFFFF\" bgcolor=\"#008080\">";
	if ($admin->add_potd || $admin->edit_potd || $admin->delete_potd) {
		echo "<div align=\"center\">
			  <center>
			  <table id=\"AutoNumber6\" style=\"BORDER-COLLAPSE: collapse\" borderColor=\"#111111\" cellSpacing=\"0\" cellPadding=\"4\" width=\"100%\" bgColor=\"#009999\" border=\"1\">
				<tr>
				  <td>
				  <p align=\"center\"><b><font size=\"1\">POTD Options</font></b></td>
				</tr>";
	}
	if ($admin->add_potd) {
			echo "
				<tr>
				 <td bgcolor=\"#008080\"><font size=\"1\">
				  <a href=\"admin.php?action=add_potd\">Add POTD</a></font></td>
				</tr>";
	}
	if ($admin->edit_potd || $admin->delete_potd) {
		echo "
			<tr>
			<td bgcolor=\"#008080\"><font size=\"1\">
			<a href=\"admin.php?action=edit_potd\">Edit / Delete POTD</a></font></td>
			</tr>";
	}
	if ($admin->add_potd || $admin->edit_potd || $admin->delete_potd) {
		echo "
			  </table>
			  </center>
			</div>";
	}
	if ($admin->user_admin) {
		echo "
			<br>
			<div align=\"center\">
			  <center>
			  <table id=\"AutoNumber6\" style=\"BORDER-COLLAPSE: collapse\" borderColor=\"#111111\" cellSpacing=\"0\" cellPadding=\"4\" width=\"100%\" bgColor=\"#009999\" border=\"1\">
				<tr>
				  <td>
				  <p align=\"center\"><font size=\"1\"><b>User 
				  Options</font></b></td>
				</tr>
				<tr>
				  <td bgcolor=\"#008080\"><font size=\"1\">
				  <a href=\"admin.php?action=add_user\">Add User</a></font></td>
				</tr>
				<tr>
				  <td bgcolor=\"#008080\"><font size=\"1\">
				  <a href=\"admin.php?action=edit_user\">Edit / Delete User</a></font></td>
				</tr>
			  </table>
			  </center>
			</div>";
	}
	echo "<br>
			<div align=\"center\">
			  <center>
			  <table id=\"AutoNumber6\" style=\"BORDER-COLLAPSE: collapse\" borderColor=\"#111111\" cellSpacing=\"0\" cellPadding=\"4\" width=\"100%\" bgColor=\"#009999\" border=\"1\">
				<tr>
				  <td>
				  <p align=\"center\"><font size=\"1\"><b>Account Options</b></font></td>
				</tr>
				<tr>
				  <td bgcolor=\"#008080\"><font size=\"1\">
				  <a href=\"admin.php?action=change_password\">Change Password</a></font></td>
				</tr>
			  </table>
			  </center>
			</div>";
// Main Admin Area 
}elseif ($_GET['action']=="main") {
	$admin->Login();
	$admin->Header();
	echo "
	<p align=\"center\">Welcome to the Fantastic POTD Admin Area use the Menu 
        on the left to use features of this script</p>";
	$admin->Footer();

// Add POTD
}elseif ($_GET['action']=="add_potd") {
	$admin->Login();
	$admin->Header();
	if ($admin->add_potd=="No") {
		$admin->Error("You Do not have permission to use this feature");
	}
	echo "<font size=\"4\"><b>Add POTD</b></font><br>
		<P><CENTER><TABLE BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"0\">
		  <TR><FORM ACTION=\"admin.php\" ENCTYPE=\"multipart/form-data\" METHOD=\"POST\">
			<TD WIDTH=\"100%\">
			<TABLE BORDER=\"1\" CELLSPACING=\"1\" CELLPADDING=\"4\" bgcolor=\"#009999\" style=\"border-collapse: collapse\" bordercolor=\"#111111\">
			  <TR>
				<TD>
				<b><font size=\"1\">POTD Name:</font></b></TD> 
				<TD>
				<INPUT NAME=\"potd_name\" TYPE=\"text\" SIZE=\"25\"><font size=\"1\"> </font>
		</TD>
			  </TR>
			  <TR>
				<TD>
				<b><font size=\"1\">Short Description:</font></b></TD> 
				<TD>
				<textarea rows=\"10\" name=\"short_description\" cols=\"27\"></textarea><font size=\"1\">
				</font>
		</TD>
			  </TR>
			  <TR>
				<TD>
				<b><font size=\"1\">Long Description:</font></b></TD> 
				<TD>
				<font size=\"1\">&nbsp;</font><textarea rows=\"10\" name=\"long_description\" cols=\"27\"></textarea></TD>
			  </TR>
					<TR>
				<TD>
				<b><font size=\"1\">Small Image:</font></b><font size=\"1\"></FONT></font></TD> 
				<TD>
				<INPUT NAME=\"small_image\" TYPE=\"file\" SIZE=\"25\"></TD> 
			  </TR>
			  <TR>
				<TD>
				<b><font size=\"1\">Big Image:</font></b><font size=\"1\"></FONT></font></TD> 
				<TD>
				<INPUT NAME=\"big_image\" TYPE=\"file\" SIZE=\"25\"></TD> 
			  </TR>
			  </TABLE></TD>
		  </TR>
		</TABLE>

		<P><CENTER>
		<p><INPUT NAME=\"add_potd\" TYPE=\"submit\" VALUE=\"Add POTD\"></FORM></p>";
	$admin->Footer();
// Actually Adds the POTD
}elseif ($_POST['add_potd']) {
	$admin->Login();
	$admin->Header();
	if ($admin->add_potd=="No") {
		$admin->Error("You Do not have permission to use this feature");
	}
	if (!$_POST['potd_name']) {
		$error .="Missing POTD Name<br>";
	}
	if (!$_POST['short_description']) {
		$error .="Missing Short Description<br>";
	}
	if (!$_POST['long_description']) {
		$error .="Missing Long Description<br>";
	}
	if (!$_FILES['small_image']['name']) {
		$error .="Missing Small Image<br>";
	}
	if (!$_FILES['big_image']['name']) {
		$error .="Missing Big image<br>";
	}
	if ($error) {
		$admin->Error($error);
	}
	$time=time();
	$mysql->Query("SELECT * FROM fpotd_potd ORDER BY date");
	$show_potd=mysql_fetch_array($mysql->result_id);
	if ($show_potd[date]<$time) {
		$time=$time+86400;
	} else {
		$time=$show_potd[date]+86400;
	}
	// Small Image Upload
	$_FILES['small_image']['name']="small_".$_FILES['small_image']['name']."";
	$_FILES['small_image']['name']=str_replace(".","_$time.",$_FILES['small_image']['name']);
	copy($_FILES['small_image']['tmp_name'],"$potd_path".$_FILES['small_image']['name']."");
	unlink($_FILES['small_image']['tmp_name']);
	// Big Image Upload
	$_FILES['big_image']['name']=str_replace(".","_$time.",$_FILES['big_image']['name']);
	copy($_FILES['big_image']['tmp_name'],"$potd_path".$_FILES['big_image']['name']."");
	unlink($_FILES['big_image']['tmp_name']);

	$mysql->Query("INSERT INTO fpotd_potd VALUES('','".$_POST['potd_name']."','".$_POST['short_description']."','".$_POST['long_description']."','".$_FILES['small_image']['name']."','".$_FILES['big_image']['name']."','$time','No')");
	$admin->Success("Picture of the Day Added");
	$admin->Footer();

// Edit POTD
}elseif ($_GET['action']=="edit_potd") {
	$admin->Login();
	$admin->Header();
	if ($admin->edit_potd=="No" && $admin->delete_potd=="No") {
		$admin->Error("You Do not have permission to use this feature");
	}
	if (!$_REQUEST['page']) {
		$page=1;
	} else {
		$page=$_REQUEST['page'];
	}
	$mysql->Query("SELECT * FROM fpotd_potd");
	$mysql->Num_rows();
	$potd_bottom=($page-1)*$potd_per_page;
	$potd_top=$page*$potd_per_page;
	$num_potd=$mysql->num_rows;
	$num_pages2=$num_potd/$potd_per_page;
	$num_pages=ceil($num_pages2);
	for ($eachpage=1; $eachpage<=$num_pages; $eachpage++) {
		if ($page == $eachpage) {
			$pages_bottom .="($page)&nbsp;";
		} else {
			$pages_bottom .= "[<a href=\"admin.php?action=edit_potd&page=$eachpage\">$eachpage</a>]&nbsp;";
		}
	}
	$mysql->Query("SELECT * FROM fpotd_potd LIMIT $potd_bottom,$potd_top");
	while ($show_potd=mysql_fetch_array($mysql->result_id)) {
		echo "<div align=\"center\">
  <center>
  <table border=\"1\" cellpadding=\"4\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"410\" id=\"AutoNumber7\" bgcolor=\"#009999\">
    <tr>
      <td><b><font size=\"1\">POTD Name:</font></b></td>
      <td><font size=\"1\">$show_potd[potd_name]</font></td>
    </tr>
    <tr>
      <td><b><font size=\"1\">Short Description:</font></b></td>
      <td><font size=\"1\">$show_potd[short_description]</font></td>
    </tr>
    <tr>
      <td><b><font size=\"1\">Function:</font></b></td>
      <td><font size=\"1\">[";
	  if ($admin->edit_potd=="Yes") {
		  echo "
			<a href=\"admin.php?action=do_edit_potd&id=$show_potd[potd_id]\">Edit POTD</a>";
	  }
	  if ($admin->edit_potd=="Yes" && $admin->delete_potd=="Yes") {
		  echo " | "; 
	  }
	  if ($admin->delete_potd=="Yes") {
		echo "<a href=\"admin.php?action=delete_potd&id=$show_potd[potd_id]\">Delete 
      POTD</a>";
	  }
	  echo "
	  ]</font></td>
    </tr>
  </table>
  </center>
</div><br><br>";
	}
	echo "<p align=\"center\">$pages_bottom</p>";
	$admin->Footer();
	
// Delete POTD
}elseif ($_GET['action']=="delete_potd") {
	$admin->Login();
	$admin->Header();
	if ($admin->delete_potd=="No") {
		$admin->Error("You Do not have permission to use this feature");
	}
	$mysql->Query("SELECT * FROM fpotd_potd WHERE potd_id=".$_GET['id']."");
	$show_potd=mysql_fetch_array($mysql->result_id);
	unlink("$potd_path"."$show_potd[small_image_filename]");
	unlink("$potd_path"."$show_potd[big_image_filename]");
	$mysql->Query("DELETE FROM fpotd_potd WHERE potd_id=".$_GET['id']."");
	$admin->Success("POTD Deleted Successfully");
	$admin->Footer();
// Form for Editing the POTD
}elseif ($_GET['action']=="do_edit_potd") {
	$admin->Login();
	$admin->Header();
	if ($admin->edit_potd=="No") {
		$admin->Error("You Do not have permission to use this feature");
	}
	$mysql->Query("SELECT * FROM fpotd_potd WHERE potd_id=".$_GET['id']."");
	$show_potd=mysql_fetch_array($mysql->result_id);
	$function->strip_array($show_potd);
	echo "<font size=\"4\"><b>Edit POTD</b></font><br>
		<P><CENTER><TABLE BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"0\">
		  <TR><FORM ACTION=\"admin.php\" ENCTYPE=\"multipart/form-data\" METHOD=\"POST\">
			<TD WIDTH=\"100%\">
			<TABLE BORDER=\"1\" CELLSPACING=\"1\" CELLPADDING=\"4\" bgcolor=\"#009999\" style=\"border-collapse: collapse\" bordercolor=\"#111111\">
			  <TR>
				<TD>
				<b><font size=\"1\">POTD Name:</font></b></TD> 
				<TD>
				<INPUT NAME=\"potd_name\" value=\"$show_potd[potd_name]\" TYPE=\"text\" SIZE=\"25\"><font size=\"1\"> </font>
		</TD>
			  </TR>
			  <TR>
				<TD>
				<b><font size=\"1\">Short Description:</font></b></TD> 
				<TD>
				<textarea rows=\"10\" name=\"short_description\" cols=\"27\">$show_potd[short_description]</textarea><font size=\"1\">
				</font>
		</TD>
			  </TR>
			  <TR>
				<TD>
				<b><font size=\"1\">Long Description:</font></b></TD> 
				<TD>
				<font size=\"1\">&nbsp;</font><textarea rows=\"10\" name=\"long_description\"  cols=\"27\">$show_potd[long_description]</textarea></TD>
			  </TR>
					<TR>
				<TD>
				<b><font size=\"1\">Small Image:<br></b> (Only if adding a new one)</font><font size=\"1\"></FONT></font></TD> 
				<TD>
				<INPUT NAME=\"small_image\" TYPE=\"file\" SIZE=\"25\"></TD> 
			  </TR>
			  <TR>
				<TD>
				<b><font size=\"1\">Big Image:<br></b> (Only if adding a new one)</font><font size=\"1\"></FONT></font></TD> 
				<TD>
				<INPUT NAME=\"big_image\" TYPE=\"file\" SIZE=\"25\"></TD> 
			  </TR>
			  </TABLE></TD>
		  </TR>
		</TABLE>
		<P><CENTER>
				  <input type=\"hidden\" value=\"$show_potd[potd_id]\" name=\"potd_id\">
		<p><INPUT NAME=\"edit_potd\" TYPE=\"submit\" VALUE=\"Edit POTD\"></FORM></p>";
	$admin->Footer();

}elseif ($_POST['edit_potd']) {
	$admin->Login();
	$admin->Header();
	if ($admin->edit_potd=="No") {
		$admin->Error("You Do not have permission to use this feature");
	}
	if (!$_POST['potd_name']) {
		$error .="Missing POTD Name<br>";
	}
	if (!$_POST['short_description']) {
		$error .="Missing Short Description<br>";
	}
	if (!$_POST['long_description']) {
		$error .="Missing Long Description<br>";
	}
	if ($error) {
		$html->Error($error);
	}
	$mysql->Query("SELECT * FROM fpotd_potd WHERE potd_id=".$_POST['potd_id']."");
	$show_potd=mysql_fetch_array($mysql->result_id);
	$time=$show_potd[date];
	if ($_FILES['small_image']['name']) {
		echo "test";
		// Small Image Upload
		$_FILES['small_image']['name']="small_".$_FILES['small_image']['name']."";
		$_FILES['small_image']['name']=str_replace(".","_$time.",$_FILES['small_image']['name']);
		copy($_FILES['small_image']['tmp_name'],"$potd_path".$_FILES['small_image']['name']."");
		unlink($_FILES['small_image']['tmp_name']);
		unlink("$potd_path"."$show_potd[small_image_filename]");
		$small_image_filename=$_FILES['small_image']['name'];	
	} else {
		$small_image_filename=$show_potd[small_image_filename];
	}
	if ($_FILES['big_image']['name']) {
		// Big Image Upload
		$_FILES['big_image']['name']=str_replace(".","_$time.",$_FILES['big_image']['name']);
		copy($_FILES['big_image']['tmp_name'],"$potd_path".$_FILES['big_image']['name']."");
		unlink($_FILES['big_image']['tmp_name']);
		unlink("$potd_path"."$show_potd[big_image_filename]");
		$big_image_filename=$_FILES['big_image']['name'];
	} else {
		$big_image_filename=$show_potd[big_image_filename];
	}
	$mysql->Query("UPDATE fpotd_potd SET potd_name='".$_POST['potd_name']."', short_description='".$_POST['short_description']."', long_description='".$_POST['long_description']."', small_image_filename='$small_image_filename', big_image_filename='$big_image_filename' WHERE potd_id=".$_POST['potd_id']."");
	$admin->Success("POTD Updated Successfully");
	$admin->Footer();
// Add User Page
}elseif ($_GET['action']=="add_user") {
	$admin->Login();
	$admin->Header();
	if ($admin->user_admin=="No") {
		$admin->Error("You Do not have permission to use this feature");
	}
	echo "<font size=\"4\"><b>Add User</b></font><br>
		<P><CENTER><TABLE BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"0\">
		  <TR><FORM ACTION=\"admin.php\" METHOD=\"POST\">
			<TD WIDTH=\"100%\">
			<TABLE BORDER=\"1\" CELLSPACING=\"1\" CELLPADDING=\"4\" bgcolor=\"#009999\" style=\"border-collapse: collapse\" bordercolor=\"#111111\">
			  <TR>
				<TD>
				<font size=\"1\"><b>Username</b></font><b><font size=\"1\">:</font></b></TD> 
				<TD>
				<INPUT NAME=\"new_username\" TYPE=\"text\" SIZE=\"25\"><font size=\"1\"> </font>
		</TD>
			  </TR>
			  <TR>
				<TD>
				<font size=\"1\"><b>Password</b></font><b><font size=\"1\">:</font></b></TD> 
				<TD>
				<INPUT NAME=\"new_password\" TYPE=\"password\" SIZE=\"25\"></TD>
			  </TR>
			  <TR>
				<TD>
				<font size=\"1\"><b>Add POTD</b></font><b><font size=\"1\">:</font></b></TD> 
				<TD>
				<font size=\"1\"><select size=\"1\" name=\"option_add_potd\">
                <option>Yes</option>
                <option>No</option>
                </select></font></TD>
			  </TR>
					<TR>
				<TD>
				<font size=\"1\"><b>Edit POTD</b></font><b><font size=\"1\">:</font></b><font size=\"1\"></FONT></font></TD> 
				<TD>
				<font size=\"1\"><select size=\"1\" name=\"option_edit_potd\">
                <option>Yes</option>
                <option>No</option>
                </select></font></TD> 
			  </TR>
			  <TR>
				<TD>
				<font size=\"1\"><b>Delete POTD</b></font><b><font size=\"1\">:</font></b><font size=\"1\"></FONT></font></TD> 
				<TD>
				<font size=\"1\"><select size=\"1\" name=\"option_delete_potd\">
                <option>Yes</option>
                <option>No</option>
                </select></font></TD> 
			  </TR>
			  <TR>
				<TD>
				<font size=\"1\"><b>User Admin:</b></font></TD> 
				<TD>
				<font size=\"1\"><select size=\"1\" name=\"option_user_admin\">
                <option selected>No</option>
                <option>Yes</option>
                </select></font></TD> 
			  </TR>
			  </TABLE></TD>
		  </TR>
		</TABLE>

		<P><CENTER>
		<p><INPUT NAME=\"add_user\" TYPE=\"submit\" VALUE=\"Add User\"></FORM></p>";
		$admin->Footer();
// Actually Adds the User
}elseif ($_POST['add_user']) {
	$admin->Login();
	$admin->Header();
	if ($admin->user_admin=="No") {
		$admin->Error("You Do not have permission to use this feature");
	}
	if ($_POST['username']) {
		$error .="Missing Username<br>";
	}
	if ($_POST['password']) {
		$error .="Missing Password<br>";
	}
	if ($error) {
		$admin->Error($error);
	}
	$mysql->Query("INSERT INTO fpotd_admins VALUES ('','".$_POST['new_username']."','".$_POST['new_password']."','".$_POST['option_add_potd']."','".$_POST['option_edit_potd']."','".$_POST['option_delete_potd']."','".$_POST['option_user_admin']."')");
	$admin->Success("User Added Successfully");
	$admin->Footer();

// Edit User List
}elseif ($_GET['action']=="edit_user") {
	$admin->Login();
	$admin->Header();
	if ($admin->user_admin=="No") {
		$admin->Error("You Do not have permission to use this feature");
	}
	echo "<font size=\"4\"><b>Edit User</b></font><br>";
	$mysql->Query("SELECT * FROM fpotd_admins");
	while ($show_user=mysql_fetch_array($mysql->result_id)) {
		echo "
				<div align=\"center\">
		  <center>
		  <table border=\"1\" cellpadding=\"4\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"410\" id=\"AutoNumber7\" bgcolor=\"#009999\">
			<tr>
			  <td><font size=\"1\"><b>Username</b></font><b><font size=\"1\">:</font></b></td>
			  <td><font size=\"1\">$show_user[username]</font></td>
			</tr>
			<tr>
			  <td><font size=\"1\"><b>Add POTD</b></font><b><font size=\"1\">:</font></b></td>
			  <td><font size=\"1\">$show_user[add_potd]</font></td>
			</tr>
			<tr>
			  <td><font size=\"1\"><b>Edit POTD:</b></font></td>
			  <td><font size=\"1\">$show_user[edit_potd]</font></td>
			</tr>
			<tr>
			  <td><font size=\"1\"><b>Delete POTD:</b></font></td>
			  <td><font size=\"1\">$show_user[delete_potd]</font></td>
			</tr>
			<tr>
			  <td><font size=\"1\"><b>User Admin:</b></font></td>
			  <td><font size=\"1\">$show_user[user_admin]</font></td>
			</tr>
			<tr>
			  <td><b><font size=\"1\">Function:</font></b></td>
			  <td><font size=\"1\">[
			  <a href=\"admin.php?action=do_edit_user&id=$show_user[admin_id]\">Edit User</a>
			  
			
				| <a href=\"admin.php?action=delete_user&id=$show_user[admin_id]\">Delete 
			  User</a>
			  ]</font></td>
			</tr>
		  </table>
		  </center>
		</div><br><br>";
	}
	$admin->Footer();
// Delete's User
}elseif ($_GET['action']=="delete_user") {
	$admin->Login();
	$admin->Header();
	if ($admin->user_admin=="No") {
		$admin->Error("You Do not have permission to use this feature");
	}
	$mysql->Query("DELETE FROM fpotd_admins WHERE admin_id=".$_GET['id']."");
	$admin->Success("User Deleted Successfully");
	$admin->Footer();

// Edit User Form
}elseif ($_GET['action']=="do_edit_user") {
	$admin->Login();
	$admin->Header();
	if ($admin->user_admin=="No") {
		$admin->Error("You Do not have permission to use this feature");
	}
	$mysql->Query("SELECT * FROM fpotd_admins WHERE admin_id=".$_GET['id']."");
	$show_user=mysql_fetch_array($mysql->result_id);
	if ($show_user[add_potd]=="Yes") {
		$add_potd="<option selected>Yes</option>
                   <option>No</option>";
	} else {
		$add_potd="<option selected>No</option>
				   <option>Yes</option>";
	}
	if ($show_user[edit_potd]=="Yes") {
		$edit_potd="<option selected>Yes</option>
                   <option>No</option>";
	} else {
		$edit_potd="<option selected>No</option>
				   <option>Yes</option>";
	}
	if ($show_user[delete_potd]=="Yes") {
		$delete_potd="<option selected>Yes</option>
                   <option>No</option>";
	} else {
		$delete_potd="<option selected>No</option>
				   <option>Yes</option>";
	}
	if ($show_user[user_admin]=="Yes") {
		$user_admin="<option selected>Yes</option>
                   <option>No</option>";
	} else {
		$user_admin="<option selected>No</option>
				   <option>Yes</option>";
	}
	echo "<font size=\"4\"><b>Edit User</b></font><br>
		<P><CENTER><TABLE BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"0\">
		  <TR><FORM ACTION=\"admin.php\" METHOD=\"POST\">
			<TD WIDTH=\"100%\">
			<TABLE BORDER=\"1\" CELLSPACING=\"1\" CELLPADDING=\"4\" bgcolor=\"#009999\" style=\"border-collapse: collapse\" bordercolor=\"#111111\">
			  <TR>
				<TD>
				<font size=\"1\"><b>Username</b></font><b><font size=\"1\">:</font></b></TD> 
				<TD>
				<INPUT NAME=\"new_username\" TYPE=\"text\" SIZE=\"25\" value=\"$show_user[username]\"><font size=\"1\"> </font>
		</TD>
			  </TR>
			  <TR>
				<TD>
				<font size=\"1\"><b>New Password:<br>
                </b>(Leave blank if N/A)</font></TD> 
				<TD>
				<INPUT NAME=\"new_password\" TYPE=\"password\" SIZE=\"25\"></TD>
			  </TR>
			  <TR>
				<TD>
				<font size=\"1\"><b>Add POTD</b></font><b><font size=\"1\">:</font></b></TD> 
				<TD>
				<font size=\"1\"><select size=\"1\" name=\"option_add_potd\">
               
                $add_potd
                </select></font></TD>
			  </TR>
					<TR>
				<TD>
				<font size=\"1\"><b>Edit POTD</b></font><b><font size=\"1\">:</font></b><font size=\"1\"></FONT></font></TD> 
				<TD>
				<font size=\"1\"><select size=\"1\" name=\"option_edit_potd\">
                
                $edit_potd
                </select></font></TD> 
			  </TR>
			  <TR>
				<TD>
				<font size=\"1\"><b>Delete POTD</b></font><b><font size=\"1\">:</font></b><font size=\"1\"></FONT></font></TD> 
				<TD>
				<font size=\"1\"><select size=\"1\" name=\"option_delete_potd\">
               
                $delete_potd
                </select></font></TD> 
			  </TR>
			  <TR>
				<TD>
				<font size=\"1\"><b>User Admin:</b></font></TD> 
				<TD>
				<font size=\"1\"><select size=\"1\" name=\"option_user_admin\">
                
                $user_admin
                </select></font></TD> 
			  </TR>
			  </TABLE></TD>
		  </TR>
		</TABLE>

		<P><CENTER>
			<input type=\"hidden\" value=\"$show_user[admin_id]\" name=\"admin_id\">
		<p><INPUT NAME=\"edit_user\" TYPE=\"submit\" VALUE=\"Edit User\"></FORM></p>";
		$admin->Footer();

// Actually Edits the User
}elseif ($_POST['edit_user']) {
	$admin->Login();
	$admin->Header();
	if ($admin->user_admin=="No") {
		$admin->Error("You Do not have permission to use this feature");
	}
	$mysql->Query("SELECT * FROM fpotd_admins WHERE admin_id=".$_POST['admin_id']."");
	$show_user=mysql_fetch_array($mysql->result_id);
	if (!$_POST['new_password']) {
		$_POST['new_password']=$show_user[password];
	}
	if (!$_POST['new_username']) {
		$admin->Error("Username is a required field");
	}
	$mysql->Query("UPDATE fpotd_admins SET username='".$_POST['new_username']."', password='".$_POST['new_password']."', add_potd='".$_POST['option_add_potd']."', edit_potd='".$_POST['edit_potd']."', delete_potd='".$_POST['delete_potd']."', user_admin='".$_POST['option_user_admin']."' WHERE admin_id=".$_POST['admin_id']."");
	$admin->Success("User has successfully been updated");
	$admin->Footer();
// Change Password Page
}elseif ($_GET['action']=="change_password") {
	$admin->Login();
	$admin->Header();
	echo "<font size=\"4\"><b>Change Password</b></font><br>
		<P><CENTER><TABLE BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"0\">
		  <TR><FORM ACTION=\"admin.php\" METHOD=\"POST\">
			<TD WIDTH=\"100%\">
			<TABLE BORDER=\"1\" CELLSPACING=\"1\" CELLPADDING=\"4\" bgcolor=\"#009999\" style=\"border-collapse: collapse\" bordercolor=\"#111111\">
			  <TR>
				<TD>
				<font size=\"1\"><b>New Password</b></font></TD> 
				<TD>
				<INPUT NAME=\"new_password\" TYPE=\"password\" SIZE=\"25\"><font size=\"1\"> </font>
		</TD>
			  </TR>
			  <TR>
				<TD>
				<font size=\"1\"><b>New Password Again:</b></font></TD> 
				<TD>
				<INPUT NAME=\"new_password2\" TYPE=\"password\" SIZE=\"25\"></TD>
			  </TR>
			  </TABLE></TD>
		  </TR>
		</TABLE>

		<P><CENTER>
		<p><INPUT NAME=\"change_password\" TYPE=\"submit\" VALUE=\"Change Password\"></FORM></p>";
	
	$admin->Footer();
// Actually Changes the Password
}elseif ($_POST['change_password']) {
	$admin->Login();
	$admin->Header();
	if (!$_POST['new_password']) {
		$error .="Missing Password<br>";
	}
	if (!$_POST['new_password2']) {
		$error .="Missing Password #2<br>";
	}
	if ($_POST['new_password'] !=$_POST['new_password2']) {
		$error .="Passwords do not match<br>";
	}
	if ($error) {
		$html->Error($error);
	}
	$mysql->Query("UPDATE fpotd_admins SET password='".$_POST['new_password']."' WHERE admin_id=$admin->admin_id");
	$_SESSION['password']=$_POST['new_password'];
	$admin->Success("Password has been changed successfully");
	$admin->Footer();
// Login Page
} else {
	$admin->Header();
	echo "
	<p align=\"center\"><font face=\"Mead Bold\" size=\"5\">Admin Login</font></p>
	<form method=\"POST\" action=\"admin.php\">
	  <div align=\"center\">
		<center>
	  <table id=\"AutoNumber3\" style=\"BORDER-COLLAPSE: collapse\" borderColor=\"#111111\" cellSpacing=\"0\" cellPadding=\"4\" width=\"410\" border=\"1\">
		<tr>
		  <td vAlign=\"top\" width=\"150\" bgColor=\"#009999\">
		  <p align=\"left\"><font size=\"1\">Username:</font></td>
		  <td vAlign=\"top\" width=\"450\" bgColor=\"#009999\">
		  <input type=\"text\" name=\"username\" size=\"20\"></td>
		</tr>
		<tr>
		  <td vAlign=\"top\" width=\"150\" bgColor=\"#009999\">
		  <p align=\"left\"><font size=\"1\">Password:</font></td>
		  <td vAlign=\"top\" width=\"450\" bgColor=\"#009999\">
		  <input type=\"password\" name=\"password\" size=\"20\">
		  </td>
		</tr>
	  </table>
		</center>
	  </div>
	  <div align=\"center\">
		<center>
		<table border=\"1\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"410\" id=\"AutoNumber4\" bgcolor=\"#009999\">
		  <tr>
			<td>
			<p align=\"center\">
			<input type=\"submit\" value=\"Login\" name=\"login\"></td>
		  </tr>
		</table>
		</center>
	  </div>
	</form>";
		  $admin->Footer();
}