<html>
 <head>
  <title>SilverCounter - Installation</title>
  <style type='text/css'>
   a, a:visited, a:active {
    text-decoration: none;
    color: #E05E00;
   }
   a:hover {
    text-decoration: underline;
    color: #E05E00;
   }
   SELECT {
    FONT-SIZE: 11px;
    FONT-FAMILY: Tahoma;
    COLOR: #505050;
    BACKGROUND-COLOR: #F1F1F1;
    border-top-width : 1px;
    border-right-width : 1px;
    border-bottom-width : 1px;
    border-left-width : 1px;
    border-collapse: collapse;
    border-color: #555555;
    text-indent : 1px;
   }
   TEXTAREA {
    FONT-SIZE: 11px;
    FONT-FAMILY: Tahoma;
    COLOR: #505050;
    BACKGROUND-COLOR: #F1F1F1;
    border-top-width : 1px;
    border-right-width : 1px;
    border-bottom-width : 1px;
    border-left-width : 1px;
    border-collapse: collapse;
    border-color: #555555;
    text-indent : 1px;
   }
   INPUT {
    FONT-SIZE: 11px;
    FONT-FAMILY: Tahoma;
    COLOR: #505050;
    BACKGROUND-COLOR: #F1F1F1;
    border-top-width : 1px;
    border-right-width : 1px;
    border-bottom-width : 1px;
    border-left-width : 1px;
    border-collapse: collapse;
    border-color: #555555;
    text-indent : 1px;
    font-weight: bold;
   }
   BODY {
    FONT-FAMILY: Verdana;
    COLOR: #505050;
    FONT-SIZE: 10;
   }
   TR, TD {
    FONT-SIZE: 10;
    COLOR: #505050;
   }
  </style>
 </head>
 <body bgcolor='#DEDEDE'>
  <table style='background: #f1f1f1;padding: 4px;border: 1px dashed #c0c0c0;' width='100%' align='center'>
   <tr>
    <td>
     <table width='100%' bgcolor='#FDFDFD' align='center'>
      <tr>
       <td>
<?
$install = "yes";
require("counter.php");
$datum = date("d.m.Y");
if (!$step) {$step = "1";}
if ($step == "1") {
?>
        <form action='install.php' method='get'>
        <font size='2'><b>» Checking Mysql login data</b><br><br><br>
        Please check the mysql login data you entered. You can change the Mysql login data by editing "counter.php".<br><br>
        MySQL Host: <b><?echo $server;?></b><br>
        Username: <b><?echo $user;?></b><br>
        Password: <b><?echo $pass;?></b><br>
        Name of the Database: <b><?echo $mysqldb;?></b><br><br>
<?
 if (!mysql_connect($server, $user, $pass) != "") {
  echo "<font color='red' size='2'><br>";
  echo mysql_error($serverid);
  echo "</font>";
 }
 else {
  echo "<b>Connecting to  Mysql server $server.....successfully</b><br>";
 }
 if (!mysql_select_db($mysqldb) != "") {
  echo "<font size='2' color='red'>";
  echo mysql_error($serverid);
  echo "</font>";
 }
 else {
  echo "<b>Connecting to database $mysqldb.....successfully</b><br><br><br><center><input type='hidden' name='step' value='2'><input type='submit' value='.: Continue Installation :.'></center>";
 }
?>
        </font>
        </form>
<?
}
if ($step == "2") {
 mysql_connect($server, $user, $pass);
 mysql_select_db($mysqldb);
?>
        <form action='install.php' method='get'>
        <font size='2'><b>» Creating required tables</b><br><br><br>
        The required tables will be created in this step!<br><br>
<?
 if (!mysql_query("CREATE TABLE silvercounter (id int(7) NOT NULL auto_increment, gesamt varchar(255) NOT NULL default '', datum varchar(255) NOT NULL default '', passwort varchar(255) NOT NULL default '', abstand varchar(255) NOT NULL default '', template text NOT NULL, heute varchar(255) NOT NULL default '', ipabstand varchar(255) NOT NULL default '', installdatum varchar(255) NOT NULL default '', PRIMARY KEY  (id))") != "") {
  echo "<font color='red' size='2'>";
  echo mysql_error($serverid);
  echo "</font>";
 }
 else {
  echo "<b>Creating table silvercounter .....successfully</b><br>";
 }
 if (!mysql_query("CREATE TABLE silvercounter_online (id int(7) NOT NULL auto_increment, ip varchar(255) NOT NULL default '', zeit varchar(255) NOT NULL default '', PRIMARY KEY  (id))") != "") {
  echo "<font color='red' size='2'>";
  echo mysql_error($serverid);
  echo "</font>";
 }
 else {
  echo "<b>Creating table silvercounter_online .....successfully</b><br>";
 }
 if (!mysql_query("CREATE TABLE silvercounter_today (id int(7) NOT NULL auto_increment, ip varchar(255) NOT NULL default '', zeit varchar(255) NOT NULL default '', PRIMARY KEY  (id))") != "") {
  echo "<font color='red' size='2'>";
  echo mysql_error($serverid);
  echo "</font>";
 }
 else {
  echo "<b>Creating table silvercounter_today .....successfully</b><br>";
 }
 if (!mysql_query("INSERT INTO silvercounter VALUES('1', '0', '$datum', '', '300', '<table title=\"Powered by SilverCounter v1.0  -  &copy; Silver-Scripts.de\">\r\n<tr>\r\n<td>Online:</td>\r\n<td><b>\$online</b></td>\r\n</tr>\r\n<tr>\r\n<td>Today:</td>\r\n<td><b>\$today</b></td>\r\n</tr>\r\n<tr>\r\n<td>Total:</td>\r\n<td><b>\$total</b></td>\r\n</tr>\r\n</table>', '0', '86400', '$datum')") != "") {
  echo "<font color='red' size='2'>";
  echo mysql_error($serverid);
  echo "</font>";
 }
 else {
  echo "<b>Inserting data into table silvercounter .....successfully</b><br>";
 }
?>
        <br><br><center><input type='hidden' name='step' value='3'>
        <input type='submit' value='.: Continue Installation :.'></center>
        </font>
        </form>
<?
}
if ($step == "3") {
?>
        <form action='install.php' method='post'>
        <font size='2'><b>» Enter password</b><br><br><br>
        To finish the installation you have to enter a password to log in into your Admin Control Panel!</b><br><br><br>
        <center>Password: <input type='text' name='newpw'><br><br>
        <input type='hidden' name='step' value='4'><input type='submit' value='.: Finish Installation :.'></center>
        </font>
        </form>
<?
}
if ($step == "4") {
 mysql_connect($server, $user, $pass);
 mysql_select_db($mysqldb);
 mysql_query("UPDATE silvercounter SET passwort = '$newpw' WHERE id = '1'");
?>
        <font size='2'><b>» Installation complete!</b><br><br><br>
        SilverCounter v1.0 has been installed successfully! It's strongly recommended that you delete "install.php" from your webserver immediatly!<br><br><a href='counter.php?action=login'><b>Go to the Admin Control Panel</b></a><br>
<?
}
?>
       </td>
      </tr>
      <tr>
       <td></td>
      </tr>
      <tr height='20'>
       <td></td>
      </tr>
      <tr align='center'>
       <td>Powered by <b>SilverCounter v1.0.1</b><br>&copy; <b><a href='http://www.silver-scripts.de' target='_blank'><b>Silver-Scripts.de</b></a></td>
      </tr>
     </table>
    </td>
   </tr>
  </table>
 </body>
</html>