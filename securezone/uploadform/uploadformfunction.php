<?PHP
function form($error=false,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2,$creators_comments)
	{
		//global sets up variables that will be used.
		global $PHP_SELF,$max_file_size;
		//error control
		if ($error) print $error . "";
		//starts form here
		print "<form ENCTYPE=\"multipart/form-data\"  action=\"" . $PHP_SELF . "\" method=\"post\">";
		//loads the max file size into a hidden area so that it can be checked.
		print "<INPUT TYPE=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"" . $max_file_size . "\">";
		//dunno about this but its needed.
		print "<INPUT TYPE=\"hidden\" name=\"task\" value=\"upload\" class=\"input\">";
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">Upload:</font></td><td bgcolor=\"#E8E984\"><INPUT NAME=\"the_file\" TYPE=\"file\" SIZE=\"16\" class=\"input\"></td>";
		//lists the max file size by the byte converted to MB then round to a whole number.
		print "<tr><td bgcolor=\"#E8E984\" colspan=\"2\"><font class=\"default\">( NOTE: Max file size is " . round(($max_file_size / 1024),0) . " Kilobytes (" . round(($max_file_size / 1024000),0) . " Megs) AND must be in .ZIP format).</font></td></tr>";
		//object name input
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">Object Name:</font></td><td bgcolor=\"#E8E984\"><input name=\"object_name\" type=\"text\" class=\"input\" maxlength=\"32\" ></td></tr>";
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">Object Type:</font></td><td bgcolor=\"#E8E984\"><select name=\"object_type\" class=\"input\">";
		print "<option value=\"\"></option>";
		print "<option value=\"Drone\">Drone</option>";
		print "<option value=\"Fighter\">Fighter</option>";
		print "<option value=\"Attack\">Attack</option>";
		print "<option value=\"LCA\">LCA</option>";
		print "<option value=\"\"></option>";
		print "<option value=\"Tug\">Tug</option>";
		print "<option value=\"Corvette\">Corvette</option>";
		print "<option value=\"Frigate\">Frigate</option>";
		print "<option value=\"Destroyer\">Destroyer</option>";
		print "<option value=\"\"></option>";
		print "<option value=\"Cruiser\">Cruiser</option>";
		print "<option value=\"Carrier\">Carrier</option>";
		print "<option value=\"Drednaught\">Drednaught</option>";
		print "<option value=\"Freighter\">Freighter</option>";
		print "<option value=\"\"></option>";
		print "<option value=\"Station\">Station</option>";
		print "<option value=\"Farcaster\">Farcaster</option>";
		print "<option value=\"OtherStation\">Other Station Types</option>";
		print "<option value=\"\"></option>";
		print "<option value=\"Building\">Building</option>";
		print "<option value=\"Factory\">Factory</option>";
		print "<option value=\"SAM\">SAM</option>";
		print "<option value=\"EWR\">EWR</option>";
		print "<option value=\"C3I\">C3I</option>";
		print "<option value=\"Starbase\">Starbase</option>";
		print "<option value=\"\"></option>";
		print "<option value=\"Weapon\">Custome Weapon(s)</option>";
		print "<option value=\"\"></option>";
		print "<option value=\"Mission\">Custome Mission(s)</option>";
		print "<option value=\"\"></option>";
		print "<option value=\"Fleet\">Custome Fleet(s)</option>";
		print "<option value=\"\"></option>";
		print "<option value=\"Campaign\">Custome Campaign(s)</option>";
		print "<option value=\"\"></option>";
		print "<option value=\"Universe\">Custome Universe(s)</option>";
		print "<option value=\"\"></option>";
		print "<option value=\"OtherStuff\">Other</option>";
		print "</select></td></tr>";
		//styling works for a text area but not a listbox??...
		//version number input
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">MOD file type:</font></td><td bgcolor=\"#E8E984\"><select name=\"mod_file_type\" class=\"input\">";
		print "<option value=\"\"></option>";
		print "<option value=\"Dev\">Development Files (psd's,obj's,doc's)</option>";
		print "<option value=\"Uncomp\">Un Compressed (mag's,pcx's,def's)</option>";
		print "<option value=\"Dat\">DAT compressed (dat's)</option>";
		print "</select></td></tr>";
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">Version (X.XX):</font></td><td bgcolor=\"#E8E984\"><input name=\"version_number\" type=\"text\" class=\"input\" size=\"4\" maxlength=\"4\" value=\"\"></td></tr>";
		//mod class drop down
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">MOD:</font></td><td bgcolor=\"#E8E984\"><select name=\"mod_class\" class=\"input\">";
		print "<option value=\"\"></option>";
		print "<option value=\"na\">Not Applicatable</option>";
		print "<option value=\"original\">Original</option>";
		print "<option value=\"b5\">Babylon 5</option>";
		print "<option value=\"saab\">Space: Above & Beyond</option>";
		print "<option value=\"st\">Star Trek</option>";
		print "<option value=\"sw\">Star Wars</option>";
		print "<option value=\"bg\">Battlestar Galactica</option>";
		print "<option value=\"fs\">Farscape</option>";
		print "<option value=\"hw\">Homeworld / Cataclysm </option>";
		print "<option value=\"battletech\">Battle-Tech (any)</option>";
		print "<option value=\"other\">Other</option>";
		print "</select></td></tr>";
		//lod class drop down
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">LODs:</font></td><td bgcolor=\"#E8E984\"><select name=\"lods\" class=\"input\">";
		print "<option value=\"\"></option>";
		print "<option value=\"na\">Not Applicatable</option>";
		print "<option value=\"1\">1</option>";
		print "<option value=\"2\">2</option>";
		print "<option value=\"3\">3</option>";
		print "<option value=\"4\">4</option>";
		print "<option value=\"5\">5</option>";
		print "<option value=\"6\">6 or more</option>";
		print "</select></td></tr>";
		//textured drop down
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">Textures:</font></td><td bgcolor=\"#E8E984\"><select name=\"textures\" class=\"input\">";
		print "<option value=\"\"></option>";
		print "<option value=\"na\">No Applicatable</option>";
		print "<option value=\"no\">no</option>";
		print "<option value=\"yes\">yes</option>";
		print "</select></td></tr>";
		print "<tr><td bgcolor=\"#E8E984\" colspan=\"2\"><font class=\"default\">(For ships, buildings, weapons, etc.)</font></td></tr>";
		//DEF drop down
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">DEF file:</font></td><td bgcolor=\"#E8E984\"><select name=\"def\" class=\"input\">";
		print "<option value=\"\"></option>";
		print "<option value=\"na\">No Applicatable</option>";
		print "<option value=\"no\">no</option>";
		print "<option value=\"yes\">yes</option>";
		print "</select></td>";
		print "<tr><td bgcolor=\"#E8E984\" colspan=\"2\"><font class=\"default\">(For ships, buildings, weapons, etc.)</font></td></tr>";
		//Debris drop down
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">Debris:</font></td><td bgcolor=\"#E8E984\"><select name=\"debris\" class=\"input\">";
		print "<option value=\"\"></option>";
		print "<option value=\"na\">No Applicatable</option>";
		print "<option value=\"no\">no</option>";
		print "<option value=\"yes\">yes</option>";
		print "</select></td></tr>";
		print "<tr><td bgcolor=\"#E8E984\" colspan=\"2\"><font class=\"default\">(For ships, buildings, weapons, etc.)</font></td></tr>";
		//$the_img1 file
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">Image #1:</font></td><td bgcolor=\"#E8E984\"><INPUT NAME=\"the_img1\" TYPE=\"file\" SIZE=\"16\" class=\"input\"></td></tr>";
//$the_img2 file
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">Img #2:</font></td><td bgcolor=\"#E8E984\"><INPUT NAME=\"the_img2\" TYPE=\"file\" SIZE=\"16\" class=\"input\"></td></tr>";
		print "<tr><td bgcolor=\"#E8E984\" colspan=\"2\"><font class=\"default\">(Images must be *.jpg format and no larger than 1024*768 resolution.)</font></td></tr>";
		print "<tr><td bgcolor=\"#E8E984\"><font class=\"default\">Creators Comments:</font><br><font class=\"default\">(128 characters MAX<br>Alpha-Numeric only please.)</font></td><td bgcolor=\"#E8E984\"><textarea  name=\"creators_comments\" type=\"text\" class=\"input\" maxlength=\"128\" cols=\"32\" rows=\"4\" ></textarea></td></tr>";
		print "<tr><td bgcolor=\"#E8E984\" colspan=\"2\" align=\"center\"><input type=\"submit\" Value=\"Submit\" class=\"input\"><input type=\"submit\" Value=\"Clear\" class=\"input\"></td></tr>";
		print "</form>";
		print "</td></tr>";		
	}
?>