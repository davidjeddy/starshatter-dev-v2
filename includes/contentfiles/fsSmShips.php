<?PHP
print "
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"left\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle.png\"><FONT CLASS=\"default\">Farscape MOD's</font></TD>
	</TR>
</table>";

if(file_exists("userFiles/lists/fs_drone.php"))
	{
		print "
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"left\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle2.png\"><FONT CLASS=\"default\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drones</font></TD>
	</TR>
</table>";
		include ('userFiles/lists/fs_drone.php');
	}

if(file_exists("userFiles/lists/fs_fighter.php"))
	{
		print "
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"left\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle2.png\"><FONT CLASS=\"default\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fighters</font></TD>
	</TR>
</table>";
		include ('userFiles/lists/fs_fighter.php');
	}

if(file_exists("userFiles/lists/fs_attack.php"))
	{
		print "
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"left\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle2.png\"><FONT CLASS=\"default\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Attack</font></TD>
	</TR>
</table>";
		include ('userFiles/lists/fs_attack.php');
	}

if(file_exists("userFiles/lists/fs_lca.php"))
	{
		print "
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"left\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle2.png\"><FONT CLASS=\"default\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LCA</font></TD>
	</TR>
</table>";
		include ('userFiles/lists/fs_lca.php');
	}
	
else
	{
		echo "<br>";
	}
echo "<br>";
?>