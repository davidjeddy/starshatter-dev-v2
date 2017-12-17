<?PHP
//set variables that are used in this page
$check["uname"];
$username=$check["uname"] ;
//echo $username

//need to change this stuff for new search format.
//include ('uploadform/formvariables.php');
$timedate1 = date("g:i a, F j, Y, ");
$timedate2 = date("g:i a,");
$timedate3 = date("F j, Y, ");
$the_path1="C:\apache\htdocs\ssdv2\userFiles\\";
$file_rename_path=$the_path1 . $object_type . "_" . $username . "_" . $mod_class . "_" . $object_name . "_";
$new_file_name=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . "_" .  ".zip";
$the_img1_name=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . "-1.jpg";
$the_img2_name=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . "-2.jpg";
$writephpfile=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . ".php";
$errorchecker1=0;
$errorchecker2=1;






//file size
$max_file_size 	= "10487560"; # =10Megs
//registerd file type- part of the allowed files that can be uploaded. these are the MIME types
$registered_file_types =  array("application/x-zip-compressed"=> ".zip");
//allowed file types to upload
$allowed_file_types = array("application/x-zip-compressed");

$max_img_width	= "1025";
$max_img_height	= "800";
$registered_img1_types = array(
					"image/pjpeg"						=> ".jpg, .jpeg",
					"image/jpeg"						=> ".jpg, .jpeg",);
$allowed_img1_types = array("image/pjpeg","image/jpeg");

$registered_img2_types = array(
					"image/pjpeg"						=> ".jpg, .jpeg",
					"image/jpeg"						=> ".jpg, .jpeg",);
$allowed_img2_types = array("image/pjpeg","image/jpeg");

//form function, sets up the form 
//include ('uploadform/uploadformfunction.php');
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







//validates the form info
//include ('uploadform/formvalidationfunction.php');
function validate_form_info($object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$creators_comments)
	{
		$start_form_error = "<font class=\"form_error\">form_error: <UL>";
		if ($object_name == "")
			{
				$form_error .= "<li>Please NAME your upload.</li>";
			}
		if ($object_type == "")
			{
				$form_error .= "<li>Please choose an object TYPE. </li>";
			}
		if ($mod_file_type == "")
			{
				$form_error .= "<li>Please select a MOD FILE TYPE. </li>";
			}
		if ($version_number == "")
			{
				$form_error .= "<li>Please enter a correct VERSION number. </li>";
			}
		if ($mod_class == "")
			{
				$form_error .= "<li>Please enter a correct MOD type. </li>";
			}
		if ($lods == "")
			{
				$form_error .= "<li>Please enter a correct LOD number. </li>";
			}
		if ($textures == "")
			{
				$form_error .= "<li>Please pick a TEXTURE option. </li>";
			}
		if ($def == "")
			{
				$form_error .= "<li>Please pick a DEF option. </li>";
			}
		if ($debris == "")
			{
				$form_error .= "<li>Please pick a DEBRIS option. </li>";
			}
		$creators_comments_length= strlen($creators_comments);
		if ($creators_comments > 260)
			{
				$form_error.="<li>Creators Comments is over 256 characters. Please adjust comment length.</li>";
			}
		if ($form_error)
			{
				$end_form_error="</UL></FONT>";
				$final_form_error=$start_form_error . $form_error . $end_form_error;
				$error = $start_form_error . $form_error . $end_form_error;
				return $final_form_error;
				return $error;
			}
			//returns to run the rest if all is false here
			else
			{
				return false;
			}
	}








//validates the uploaded file
//include ('uploadform/filevalidationfunction.php');
function validate_file_upload($the_file)
	{
		global $max_file_size,$allowed_file_types,$the_file_type,$registered_file_types;
		$start_file_error = "<font class=\"error\">UPLOAD ERROR:<br>";
		if ($the_file == "none")
			{
				$file_error .= "You did not specify a file to upload.<br>";
			}
		elseif(!in_array($the_file_type,$allowed_file_types))
			{
				$file_error .= "The file that you uploaded was of a type that is not allowed, you are only allowed to upload files of the type:<br>";
				while ($type = current($allowed_file_types))
					{
						$file_error .= "-" . $registered_file_types[$type] . " (" . $type . ")<br>";
						next($allowed_file_types);
					}
			}
		if ($file_error)
			{
				$end_file_error="</FONT>";
				$final_file_error=$start_file_error . $file_error . $end_file_error;
				$error = $start_file_error . $file_error . $end_file_error;
				return $final_file_error;
				return $error;
			}
		else
			{
				return false;
			}
			
	}







//image validation function
//include ('uploadform/imgvalidationfunction.php');
function validate_img_upload($the_img1,$the_img2)
	{
		//calls global variables
		global $max_img_width, $max_img_height,$allowed_img1_types,$registered_img1_types,$allowed_img2_types,$registered_img2_types,$the_img1_type,$the_img2_type;
		if (!$the_img1 == "none")
			{
//img1 type check
				if (!in_array($the_img1_type,$allowed_img1_types))
					{
						$start_img1_error="<font class=\"error\">Image #1 is not a JPG File!";
						while ($type = current($allowed_img1_types))
							{
								$img1_error .= "<li>" . $registered_img1_types[$type] . " (" . $type . ")</li>";
								next($allowed_img1_types);
							}
					}
//img1 size check
				if (ereg("image",$the_img1_type) && (in_array($the_img_type,$allowed_img1_types)))
					{
						$size = GetImageSize($the_img1);
						list($foo,$width,$bar,$height) = explode("\"",$size[3]);
						if ($width > $max_img_width)
							{
								$img1_error .= "<li>Image 1 should be no wider than " . $max_img_width . " Pixels</li>";
							}
						if ($height > $max_img1_height)
							{
								$img1_error .= "<li>Image 1 should be no higher than " . $max_img_height . " Pixels</li>";
							}
					}
				$end_img1_error .= "</li></ul></font><BR>";
				$img_error="img error";
			}
			
			
//IMG2 will go here
		if (!$the_img2 == "none")
			{
//img1 type check
				if (!in_array($the_img2_type,$allowed_img2_types))
					{
						$start_img2_error="<font class=\"error\">Image #2 is not a JPG File!";
						while ($type = current($allowed_img2_types))
							{
								$img2_error .= "<li>" . $registered_img2_types[$type] . " (" . $type . ")</li>";
								next($allowed_img2_types);
							}
					}
//img2 size check
				if (ereg("image",$the_img2_type) && (in_array($the_img_type,$allowed_img2_types)))
					{
						$size = GetImageSize($the_img1);
						list($foo,$width,$bar,$height) = explode("\"",$size[3]);
						if ($width > $max_img_width)
							{
								$img1_error .= "<li>Image 2 should be no wider than " . $max_img_width . " Pixels</li>";
							}
						if ($height > $max_img1_height)
							{
								$img1_error .= "<li>Image 2 should be no higher than " . $max_img_height . " Pixels</li>";
							}
					}
				$end_img1_error .= "</li></ul></font><BR>";
				$img_error="img error";
			}
	}







#upload function
function upload($the_file,$username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$creators_comments,$the_img1,$the_img2,$the_path1)
	{
		$the_path1="C:\apache\htdocs\ssdv2\userFiles\\";
		global $the_path1,$the_file_name,$the_img1_name,$the_img2_name,$errorchecker1,$errorchecker2;
		$timedate1 = date("g:i a, F j, Y, ");
		//parse out spaces in the object_name, and file_name
		//include ('uploadform/removespacesfunction.php');
		$ob_nm_spaces = $object_name;
		$object_name = (str_replace(" ","",$ob_nm_spaces));
		$the_fl_nm_wspaces = $the_file_name;
		$the_file_name = (str_replace(" ","",$the_fl_nm_wspaces));	
		$the_writephpfile_wspaces = $writephpfile;
		$writephpfile = (str_replace(" ","",$the_writephpfile_wspaces));








		$writephpfile=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . ".php";
		$writephpfileinfo=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . "_info.php";
		
		//final error checking
		//include ('uploadform/finalerrorfunction.php');
		$final_form_error = validate_form_info($username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$creators_comments);
		$final_file_error = validate_file_upload($the_file);
		$final_img_error = validate_img_upload($the_img1,$the_img2);
		if (!$final_form_error=="")
			{
				echo $final_form_error;
				$errorchecker1=$errorchecker1+2;
			}
		if (!$final_file_error=="")
			{
				echo $final_file_error;
				$errorchecker1=$errorchecker1+2;
			}
		if (!$final_img_error=="")
			{
				echo $final_img_error;
			}








		//should only go here if EC1=2 (one error will cause this)
		if ($errorchecker1>$errorchecker2)
			{
				form($error=false,$username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$creators_comments,$the_img1,$the_img2);
				return;
			}
		if ($errorchecker1<$errorchecker2)
			{
				//include('uploadform/fileuploadfunction.php');
				if($the_file!="none")
					{
$new_file_name=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . ".zip";
						if (!copy($the_file,$the_path1.$new_file_name)){}
					}







				//include('uploadform/img1uploadfunction.php');
				if($the_img1!="none")
	{
		$the_img1_name=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . "-1.jpg";
		if (!copy($the_img1,$the_path1.$the_img1_name)){}
		if(file_exists("".$the_path1.$the_img1_name.""))
			{
				exec("C:\apache\imagemagic\convert.exe -resize 200x154 ".$the_path1.$the_img1_name."  ".$the_path1."tmb_".$the_img1_name."");
			}
	}







				
				//include('uploadform/img2uploadfunction.php');
				if($the_img2!="none")
	{
		$the_img2_name=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . "-2.jpg";
		if (!copy($the_img2,$the_path1.$the_img2_name)){}
		if(file_exists("".$the_path1.$the_img2_name.""))
			{
				exec("C:\apache\imagemagic\convert.exe -resize 200x154 ".$the_path1.$the_img2_name."  ".$the_path1."tmb_".$the_img2_name."");
			}
	}
	if($the_img2!="none")
	{
		$the_img2_name=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . "-2.jpg";
		if (!copy($the_img2,$the_path1.$the_img2_name)){}
		if(file_exists("".$the_path1.$the_img2_name.""))
			{
				exec("C:\apache\imagemagic\convert.exe -resize 200x154 ".$the_path1.$the_img2_name."  ".$the_path1."tmb_".$the_img2_name."");
			}
	}









				if ($mod_file_type == "Dev")
					{
						$mod_file_type == "Development Files";
					}
				if ($mod_file_type == "Uncomp")
					{
						$mod_file_type == "Uncompressed Files";
					}
				if ($mod_file_type == "Dat")
					{
						$mod_file_type == "DAT file";
					}
				$the_URL_path="userFiles";
				//include('uploadform/phpfilewriter.php');
				$f=fopen($the_path1.$writephpfile, "wb+");
fwrite($f,"<TABLE WIDTH=\"100%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"center\"> 
		<td colspan=\"2\" align=\"left\" VALIGN=\"middle\" BGCOLOR=\"#E8E984\">$username</td></tr>
		<td align=\"center\" VALIGN=\"middle\"><a href=\"$the_URL_path/$new_file_name\" CLASS=\"minilinks\">Download $username's $ob_nm_spaces</a></td>
		<!-- $the_URL_path/$writephpfileinfo -->
		<td align=\"center\" VALIGN=\"middle\"><A href=\"javascript://\" onClick=\"mywin=window.open('$the_URL_path/$writephpfileinfo', 'Info', 'width=450,height=305,scrollbars=no,menubar=no,location=no,status=no,resizable=no,toolbars=no');\" class=\"minilinks\">Get Info on $username's $ob_nm_spaces</a></td>
	</tr>
	<tr>
		<td align=\"center\" VALIGN=\"middle\" colspan=\"2\"><font class=\"default\">Release Date: $timedate1</font></td>
	</tr>	
	</tr>
	<tr>");
if(file_exists("".$the_path1.$the_img1_name.""))
	{
		$imagesize = GetImageSize("".$the_path1.$the_img1_name.""); 
		$imagewidth = $imagesize[0]; 
		$imageheight = $imagesize[1];
		fwrite($f,"<td align=\"center\" VALIGN=\"middle\"><A href=\"javascript://\" onClick=\"popimage('$the_URL_path/$the_img1_name',$imagewidth,$imageheight);return false\" class=\"minilinks\"><img src=\"$the_URL_path/tmb_$the_img1_name\" border=\"0\"></a></td>");
	}
else
	{
		fwrite($f,"<td align=\"center\" VALIGN=\"middle\">---</td>");
	}

if(file_exists("".$the_path1.$the_img2_name.""))
	{
		$imagesize2 = GetImageSize("".$the_path1.$the_img2_name.""); 
		$imagewidth2 = $imagesize2[0]; 
		$imageheight2 = $imagesize2[1]; 
		fwrite($f,"<td align=\"center\" VALIGN=\"middle\"><A href=\"javascript://\" onClick=\"popimage('$the_URL_path/$the_img2_name',$imagewidth2,$imageheight2);return false\" class=\"minilinks\"><img src=\"$the_URL_path/tmb_$the_img2_name\" border=\"0\"></a></td>");
	}
else
	{
		fwrite($f,"<td align=\"center\" VALIGN=\"middle\">---</td>");
	}
fwrite($f,"</tr></table>");
fclose($f);







				//include('uploadform/writephpfileinfo.php');
				$f=fopen($the_path1.$writephpfileinfo, "wb+");
fwrite($f,"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<?PHP include('../includes/pagestartfileinfo.php'); ?>
<?PHP include('../includes/topmenufileinfo.php'); ?>
		</td>
	</tr>
	<tr>
		<td align=\"center\" valign=\"top\" width=\"75%\" colspan=\"2\">
			<font class=\"default\">
<TABLE WIDTH=\"50%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"center\"> 
		<TD HEIGHT=\"29\" BACKGROUND=\"interfaces/default/SideMenuTitle.png\">
			<FONT CLASS=\"default\">$username's $ob_nm_spaces Info</font>
		</TD>
	</TR>
</table>
 
<a name=\"forums\"></a>
<TABLE WIDTH=\"50%\" BORDER=\"0\" BORDERCOLOR=\"#ffff88\" CELLSPACING=\"2\" CELLPADDING=\"0\">
	<TR ALIGN=\"center\"> 
		<TD ALIGN=\"left\" VALIGN=\"left\" BGCOLOR=\"#E8E984\">
		Object Type: $object_type
		</td>
		<TD ALIGN=\"left\" VALIGN=\"left\" BGCOLOR=\"#E8E984\">
		Textured: $textures
		</td>
		<TD ALIGN=\"left\" VALIGN=\"left\" BGCOLOR=\"#E8E984\">
		DEF'ed: $def
		</td>
	</TR>
	<TR ALIGN=\"center\"> 
		<TD ALIGN=\"left\" VALIGN=\"left\" BGCOLOR=\"#E8E984\">
		LOD'ed: $lods
		</td>
		<TD ALIGN=\"left\" VALIGN=\"left\" BGCOLOR=\"#E8E984\">
		Debris's: $debris
		</td>
		<TD ALIGN=\"left\" VALIGN=\"left\" BGCOLOR=\"#E8E984\">
		Version: $version_number
		</td>
	</tr>
	<TR>
		<TD ALIGN=\"center\" VALIGN=\"left\" BGCOLOR=\"#E8E984\" colspan=\"3\">File Type: $mod_file_type
		</td>
	</tr>
	<tr>
		<td  align=\"left\" valign=\"top\" bgcolor=\"#E8E984\" colspan=\"3\">Creators Comments:<br>&nbsp;&nbsp;&nbsp;$creators_comments</td>
	</tr>

	<tr>
		<TD ALIGN=\"center\" VALIGN=\"left\" BGCOLOR=\"#E8E984\" colspan=\"3\">
			Click to Close
		</td>
	</tr>
</table>
			</font>
		</td>
	</tr>
<?PHP include('../includes/pageend.php'); ?>");
fclose($f);








				//include('uploadform/linkwriter.php');
				//$username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2
$linkfile=$mod_class."_".$object_type.".php";

//original
if ($mod_class=="original")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}

//b5
if ($mod_class=="b5")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}


//saab
if ($mod_class=="saab")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");

				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}


//st
if ($mod_class=="st")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}



//sw
if ($mod_class=="sw")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Fleet
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}



//bg
if ($mod_class=="bg")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Fleet
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}



//fs
if ($mod_class=="fs")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
				if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Fleet
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}



//hw
if ($mod_class=="hw")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Fleet
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}



//battletech
if ($mod_class=="battletech")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Fleet
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}



//other
if ($mod_class=="other")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Fleet
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}

		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}








			}
//for after upload if everything goes good.				
//form($error=false,$username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2);
	/*<tr> 
		<Td BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center" colspan="2">FILE UPLOAD FORM</td>
	</tr>*/
echo "<tr><td bgcolor=\"#E8E984\" align=\"center\"<font>Upload was Successful.<br>Back to <a href=\"upload.php\" target=\"_self\" class=\"minilinks\">Upload Form</a></font></td></tr>";
//return;

	}


//default Start page
switch($task)
	{
		case 'upload':
		upload($the_file,$username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$creators_comments,$the_img1,$the_img2,$the_path1);
		break;
		default:
		form($error=false,$username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2);
	}
?>