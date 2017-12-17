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
// | install.php                                                          |
// | Date Started: February 13, 2003                                      |
// | Last Modified: February 14, 2003                                     |
// +----------------------------------------------------------------------+
require("setup.php");
require("functions.php");
$mysql=new Mysql;
$mysql->Connect();
$admin=new Admin;
$admin->Header();
$mysql->Query("CREATE TABLE fpotd_admins (
  admin_id int(11) NOT NULL auto_increment,
  username varchar(255) NOT NULL default '',
  password varchar(255) NOT NULL default '',
  add_potd enum('Yes','No') NOT NULL default 'Yes',
  edit_potd enum('Yes','No') NOT NULL default 'Yes',
  delete_potd enum('Yes','No') NOT NULL default 'Yes',
  user_admin enum('Yes','No') NOT NULL default 'Yes',
  PRIMARY KEY  (admin_id)
) TYPE=MyISAM");
echo "Admin Table Created<br>";
$mysql->Query("CREATE TABLE fpotd_potd (
  potd_id int(11) NOT NULL auto_increment,
  potd_name varchar(255) NOT NULL default '',
  short_description varchar(255) NOT NULL default '',
  long_description mediumtext NOT NULL,
  small_image_filename varchar(255) NOT NULL default '',
  big_image_filename varchar(255) NOT NULL default '',
  date int(11) NOT NULL default '0',
  public enum('No','Yes') NOT NULL default 'No',
  PRIMARY KEY  (potd_id)
) TYPE=MyISAM");
echo "Picture of the Day Table Created<br>";
$mysql->Query("INSERT INTO fpotd_admins VALUES (1, 'admin', 'admin', 'Yes', 'Yes', 'Yes', 'Yes')");
echo "Admin Account Created with<br>
<b>Username:</b> admin<br>
<b>Password:</b> admin<br>
Delete this file then login to admin.php and change the password then the script is ready to be used";

$admin->Footer();
$mysql->Close();
?>