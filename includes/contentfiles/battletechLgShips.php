	<?PHP
print "
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"left\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle.png\"><FONT CLASS=\"default\">Battletech MOD's</font></TD>
	</TR>
</table>";

if(file_exists("userFiles/lists/battletech_Cruiser.php"))
	{
		print "
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"left\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle2.png\"><FONT CLASS=\"default\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cruiser</font></TD>
	</TR>
</table>";
		include ('userFiles/lists/battletech_Cruiser.php');
	}

if(file_exists("userFiles/lists/battletech_Carrier.php"))
	{
		print "
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"left\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle2.png\"><FONT CLASS=\"default\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carrier</font></TD>
	</TR>
</table>";
		include ('userFiles/lists/battletech_Carrier.php');
	}

if(file_exists("userFiles/lists/battletech_Drednaught.php"))
	{
		print "
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"left\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle2.png\"><FONT CLASS=\"default\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drednaught</font></TD>
	</TR>
</table>";
		include ('userFiles/lists/battletech_Drednaught.php');
	}

if(file_exists("userFiles/lists/battletech_Freighter.php"))
	{
		print "
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"left\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle2.png\"><FONT CLASS=\"default\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Freighter</font></TD>
	</TR>
</table>";
		include ('userFiles/lists/battletech_Freighter.php');
	}
	
else
	{
		echo "<br>";
	}
echo "<br>";
?>