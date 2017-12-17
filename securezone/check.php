<?
	$CheckSecurity = new auth();
	$check = $CheckSecurity->page_check($USERNAME, $PASSWORD);
	if ($check == false)
	{
		echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">";
		if (!class_exists(auth))
			{
				include ("auth.php");
			} 
		include ("authconfig.php");
		if ($check["level"] != 1)
			{
				echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">";
				include('../includes/pagestart1deep.php');
				echo "<TABLE WIDTH=\"100%\" BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"4\" BGCOLOR=\"#DFDFDF\" >
	<tr>
		<TD VALIGN=\"top\" COLSPAN=\"2\">";
			include('../includes/topmenus.php');
	echo"</TD>
	</TR>
<!--BodyArea-->
	<TR>
		<TD WIDTH=\"0\" VALIGN=\"top\" ALIGN=\"center\"> 
		<!--side menu area's-->
		<br><br><br>
	</td>
<!--Content area-->
	<TD ALIGN=\"left\" VALIGN=\"top\" WIDTH=\"75%\">
<FONT CLASS=\"default\">
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"center\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"";echo $httproot;echo"interfaces/default/SideMenuTitle.png\">
			<FONT CLASS=\"default\">StarShatter Dev. Secure Zone</font>
		</TD>
	</TR>
</table>
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"center\"> 
		<TD ALIGN=\"left\" VALIGN=\"middle\" BGCOLOR=\"#E8E984\">
			<FONT CLASS=\"default\">Error</font>
		</TD>
	</TR>
</table>
&nbsp;&nbsp;&nbsp;You do not currently has permission to be in the StarShatter Dev. Secure Zone.<br>
Please log in <a href=\"";echo $httproot;echo "securezone.php\">Here</a>.
<br><br><br>";
				include ('../includes/bottomtextmenu.php');
				include ('../includes/pageend.php');
				exit;
			}
	}	
?>