<?PHP
if ($ModType == "original")
			{
				echo "<td BGCOLOR=\"#E8E984\"><font class=\"default\">Original</font></td>";
			}
		if ($ModType == "b5")
			{
				echo "<td BGCOLOR=\"#E8E984\"><font class=\"default\">Babylon 5</font></td>";
			}
		if ($ModType == "saab")
			{
				echo "<td BGCOLOR=\"#E8E984\"><font class=\"default\">Space: Above & ...</font></td>";
			}
		if ($ModType == "st")
			{
				echo "<td BGCOLOR=\"#E8E984\"><font class=\"default\">Star Trek</font></td>";
			}
		if ($ModType == "sw")
			{
				echo "<td BGCOLOR=\"#E8E984\"><font class=\"default\">Star Wars</font></td>";
			}
		if ($ModType == "bg")
			{
				echo "<td BGCOLOR=\"#E8E984\"><font class=\"default\">Battlestar Galactica</font></td>";
			}
		if ($ModType == "fs")
			{
				echo "<td BGCOLOR=\"#E8E984\"><font class=\"default\">Farscape</font></td>";
			}
		if ($ModType == "hw")
			{
				echo "<td BGCOLOR=\"#E8E984\"><font class=\"default\">Homeworld</font></td>";
			}
		if ($ModType == "other")
			{
				echo "<td BGCOLOR=\"#E8E984\"><font class=\"default\">Other</font></td>";
			}
		if ($ModType == "battletech")
			{
				echo "<td BGCOLOR=\"#E8E984\"><font class=\"default\">Battletech</font></td>";
			}
		elseif($ModType == "")
			{
				echo"<td BGCOLOR=\"#E8E984\"><font class=\"default\">---</font></td>";
			}
?>