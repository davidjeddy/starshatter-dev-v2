<?

/*/ Please enter your correct mysql login data! /*/

// Host of your mysql server (usually "localhost")
 $server = "localhost";

// Username of your mysql database
 $user = USERNAME;

// Password of your mysql database
 $pass = "PASSWORD";

// Name of your database
 $mysqldb = "SSDv2Counter";


/*/ DO NOT EDIT BELOW THIS LINE!!! /*/

if ($install == "") {
 mysql_connect($server, $user, $pass) or DIE("tot");
 mysql_select_db($mysqldb);
 if ($action == "") {
  $ip = $REMOTE_ADDR;
  $zeit = time();
  $datum = date("d.m.Y");
  $a = "0";
  $b = "0";
  $result2 = mysql_query("SELECT * FROM silvercounter WHERE id = '1'");
  $resultb = mysql_fetch_array($result2);
  $alt = $zeit-$resultb[7];
  mysql_query("DELETE FROM silvercounter_today WHERE zeit < '$alt'");
  $result1 = mysql_query("SELECT * FROM silvercounter_today");
  while ($resulta = mysql_fetch_array($result1)) {
   if ($resulta[1] == $ip) {$a = "1";}
  }
  $result3 = mysql_query("SELECT * FROM silvercounter_online");
  while ($resultc = mysql_fetch_array($result3)) {
   if ($resultc[1] == $ip) {$b = "1";}
  }
  if ($a == "0") {
   $neugesamt = $resultb[1]+1;
   $neuheute = $resultb[6]+1;
   mysql_query("UPDATE silvercounter SET gesamt = '$neugesamt', heute = '$neuheute' WHERE id = '1'");
   if ($b == "0") {
    mysql_query("INSERT INTO silvercounter_online (ip, zeit) VALUES ('$ip', '$zeit')");
   }
   mysql_query("INSERT INTO silvercounter_today (ip, zeit) VALUES ('$ip', '$zeit')");
  }
  if ($a == "1") {
   mysql_query("UPDATE silvercounter_online SET zeit = '$zeit' WHERE ip = '$ip'");
   if ($b == "0") {
    mysql_query("INSERT INTO silvercounter_online (ip, zeit) VALUES ('$ip', '$zeit')");
   }
  }
  if ($resultb[2] != $datum) {
   mysql_query("UPDATE silvercounter SET datum = '$datum', heute = '1' WHERE id = '1'");
  }
  $alt2 = $zeit-$resultb[4];
  mysql_query("DELETE FROM silvercounter_online WHERE zeit < '$alt2'");
  $result4 = mysql_query("SELECT COUNT(*) FROM silvercounter_online");
  $resultd = mysql_fetch_array($result4);
  $result5 = mysql_query("SELECT gesamt, heute FROM silvercounter WHERE id = '1'");
  $resulte = mysql_fetch_array($result5);
  $total = $resulte[0];
  $today = $resulte[1];
  $online = $resultd[0];
  function silvercounter_template() {
   $gettemplate = mysql_query("SELECT template FROM silvercounter WHERE id = '1'");
   $template2 = mysql_fetch_array($gettemplate);
   $templatee = $template2[0];
   $templatee = str_replace("\"","\\\"", $templatee);
   return $templatee;
  }
  eval ("\$template = \"".silvercounter_template()."\";");
  echo $template;
 }
 if ($action != "" && $action != "install") {
?>
<html>
 <head>
  <title>SilverCounter - Admin Control Panel</title>
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
    text-decoration: bold;
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
<?
 }
 $result1 = mysql_query("SELECT passwort, abstand, gesamt, template, heute, ipabstand, installdatum FROM silvercounter");
 $resulta = mysql_fetch_array($result1);
 $resulta[3] = str_replace(" title=\"Powered by SilverCounter v1.0.1  -  &copy; Silver-Scripts.de\"", "", $resulta[3]);
 if ($loginpasswort != $resulta[0] && $action == "login") {
?>
      <form action='counter.php' method='post'>
      <input type='hidden' name='action' value='acp'>
      <tr>
       <td><font size='2'><b>� Login</b></font></td>
      </tr>
      <tr height='20'>
       <td><td>
      </tr>
      <tr align='center'>
       <td>
        <table align='center' border='0'>
         <tr>
          <td><font size='2'><b>Password:</b></font></td>
          <td width='150'><input type='password' name='loginpasswort' style='width:100%'></td>
         </tr>
         <tr height='5'>
          <td></td>
         </tr>
         <tr align='center'>
          <td colspan='2'><input type='submit' style='font-weight:bold' value='  Login  '></td>
         </tr>
        </table>
       </td>
      </tr>
      </form>
<?
 }
 if ($loginpasswort != $resulta[0] && $action == "acp") {
?>
      <tr>
       <td><font size='2'><b>� Wrong Password</b></font></td>
      </tr>
      <tr height='20'>
       <td><td>
      </tr>
      <tr align='center'>
       <td><b><font size='2'>You entered a wrong password! Please hit the Back-Button of your browser to return to the login screen.</font></b></td>
      </tr>
<?
 }
 if ($loginpasswort == $resulta[0] && $action == "acp") {
?>
      <form action='counter.php' method='post'>
      <input type='hidden' name='action' value='save'>
      <input type='hidden' name='loginpasswort' value='<?=$loginpasswort;?>'>
      <tr>
       <td><b><font size='2'>� Edit Settings</font></b></td>
      </tr>
      <tr height='20'>
       <td><td>
      </tr>
      <tr align='center'>
       <td>
        <table width='90%' align='center' border='0'>
         <tr>
          <td width='300'><b><font size='2'>Change Password:</font></b><br>Here you can enter a new password for the Admin Control Panel.</td>
          <td valign='top'><input type='text' name='newloginpasswort' value='<?=$loginpasswort;?>' style='width:80%'></td>
         </tr>
         <tr>
          <td width='300'><b><font size='2'>User-Online Time:</font></b><br>Here you can enter how many seconds a user is shown as 'online'.</td>
          <td valign='top'><input type='text' name='newabstand' value='<?=$resulta[1];?>' style='width:80%'></td>
         </tr>
         <tr>
          <td width='300'><b><font size='2'>When to delete IPs:</font></b><br>Here you can set how many seconds an user's ip is saved in the database. 0 = No IP-lock. 86400 = Full IP lock.</td>
          <td valign='top'><input type='text' name='newipabstand' value='<?=$resulta[5];?>' style='width:80%'></td>
         </tr>
         <tr>
          <td width='300'><b><font size='2'>Total number of visitors:</font></b><br>Here you can edit the total number of visitors.</td>
          <td valign='top'><input type='text' name='newgesamt' value='<?=$resulta[2];?>' style='width:80%'></td>
         </tr>
         <tr>
          <td width='300'><b><font size='2'>Total number of visitors today:</font></b><br>Here you can edit the number of today's visitors.</td>
          <td valign='top'><input type='text' name='newheute' value='<?=$resulta[4];?>' style='width:80%'></td>
         </tr>
         <tr>
          <td width='300' valign='top'><b><font size='2'>Edit Template:</font></b><br>Here you can change the counter's look. (HTML)<br><br>$total = Total number of visitors<br>$today = Number of today's visitors<br>$online = Number of 'online users'</td>
          <td valign='top'><textarea name='newtemplate' rows='14' style='width:80%'><?=$resulta[3];?></textarea></td>
         </tr>
         <tr height='5'>
          <td></td>
         </tr>
         <tr align='center'>
          <td colspan='2'><input type='submit' value='.: Save Settings :.' style='font-weight:bold'></td>
         </tr>
         <tr height='20'>
          <td></td>
         </tr>
        </table>
       </td>
      </tr>
      <tr>
       <td><b><font size='2'>� Information</font></b></td>
      </tr>
      <tr height='20'>
       <td><td>
      </tr>
      <tr>
       <td>
        <table width='90%' align='center' border='0'>
         <tr> 
          <td width='300'><b><font size='2'>Code for Installation:</font></b><br>Paste this code to the place where the counter shall be shown. Please note that the filename has to end on .php !</td>
          <td valign='top'><input type='text' value='&lt;?include("<?echo realpath("counter.php");?>");?&gt;' style='width:80%'></td>
         </tr>
         <tr>
          <td width='300'><b><font size='2'>Current Silver-Scripts.de News:</font></b><br>Here you can see the latest news concerning Silver-Scripts.de</td>
          <td><?include("http://www.silver-scripts.de/iframe/news.htm");?></td>
         </tr>
         <tr>
          <td><b><font size='2'>Date of Installation</font></b><br>The date of installation is shown here.</td>
          <td valign='top'><font style='font-size:10px'><?=$resulta[6];?></font></td>
         </tr>
        </table>
       </td>
      </tr>
      </form>
<?
 }
 if ($action == "save" && $loginpasswort == $resulta[0]) {
  if ($newloginpasswort == "") {$fehler = "Password";}
  if ($newabstand == "") {$fehler = "User-Online Time";}
  if ($newipabstand == "") {$fehler = "When to delete IPs";}
  if ($newgesamt == "") {$fehler = "Total Users";}
  if ($newheute == "") {$fehler = "Today Users";}
  if ($newtemplate == "") {$fehler = "Template";}
  if ($fehler != ""){
?>
      <tr>
       <td><b><font size='2'>� Error</font></b></td>
      </tr>
      <tr height='20'>
       <td><td>
      </tr>
      <tr align='center'>
       <td><b><font size='2'>You didn't enter anything in the following field: <?=$fehler;?></font></b></td>
      </tr>
<?
  }
  if ($fehler == "") {
   $newtemplate = str_replace("<table", "<table title=\"Powered by SilverCounter v1.0.1  -  &copy; Silver-Scripts.de\"", $newtemplate);
   mysql_query("UPDATE silvercounter SET gesamt = '$newgesamt', abstand = '$newabstand', passwort = '$newloginpasswort', template = '$newtemplate', heute = '$newheute', ipabstand = '$newipabstand' WHERE id = '1'");
?>
 </body>
 <head>
  <meta http-equiv='refresh' content='1;URL=counter.php?action=acp&loginpasswort=<?=$newloginpasswort;?>'>
 </head>
 <body>
      <tr>
       <td><b><font size='2'>� Settings saved</font></b></td>
      </tr>
      <tr height='20'>
       <td><td>
      </tr>
      <tr align='center'>
       <td><b><a href='counter.php?action=acp&loginpasswort=<?=$newloginpasswort;?>'>The settings have been saved successfully. Click here if the redirection doesn't work.</a></b></td>
      </tr>
<?
  }
 }
 if ($action != "" && $action != "install") {
?>
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
<?
 }
}
?>