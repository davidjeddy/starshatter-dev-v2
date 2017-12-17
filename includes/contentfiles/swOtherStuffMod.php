<?PHP
print "
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"left\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle.png\"><FONT CLASS=\"default\">Star Wars  Other Stuff MOD's</font></TD>
	</TR>
</table>";

if(file_exists("userFiles/lists/sw_OtherStuff.php"))
	{
		print "
<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"left\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle2.png\"><FONT CLASS=\"default\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other Stuff</font></TD>
	</TR>
</table>";
		include ('userFiles/lists/sw_OtherStuff.php');
	}

else
	{
		echo "<br>";
	}
echo "<br>";
?>