<? // Copyright 2001 Steve Gliebe. All rights reserved.
require("common.php");
mysql_query("CREATE TABLE $cat_table (ID int(3) DEFAULT '0' NOT NULL auto_increment, Count int(5) DEFAULT '0' NOT NULL, Category varchar(50) NOT NULL, Description varchar(200), UNIQUE ID (ID))") or die(mysql_error());
mysql_query("CREATE TABLE $link_table (ID int(5) DEFAULT '0' NOT NULL auto_increment, Cat_ID int(3) DEFAULT '0' NOT NULL, Clicks int(5) DEFAULT '0' NOT NULL, Website varchar(50) NOT NULL, URL varchar(150) NOT NULL, Description varchar(200), UNIQUE ID (ID))") or die(mysql_error());
require("$header_html");
echo "<p>";
print_title_message("Tables Created", "Linkster's tables ($cat_table and $link_table) have been successfully created in your database ($database).\n<p>Remove this file from you server and continue with the installation instructions.</p>");
echo "</p>";
require("$footer_html");
mysql_close($db);
?>