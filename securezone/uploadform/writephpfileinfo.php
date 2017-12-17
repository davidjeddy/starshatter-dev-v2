<?PHP
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
?>