<?PHP
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
?>