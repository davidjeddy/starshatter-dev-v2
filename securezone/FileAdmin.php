
<?
if (!class_exists(auth))
	{
		include ("auth.php");
	} 
include ("authconfig.php");
include ("check.php");
	
	if ($check["level"] != 1 && $check["level"] != 999)
	{
		// Feel free to change the error message below. Just make sure you put a "\" before
		// any double quote.
		include ('permissionerror.php');
		exit; // End program execution. This will disable continuation of processing the rest of the page.
	}
	
$authuser = $check["uname"];
$authuser = strtolower($authuser);
?>
<html>

<?PHP include('../includes/pagestart1deep.php'); ?>
<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="4" BGCOLOR="#DFDFDF" >
	<tr>
		<TD VALIGN="top" COLSPAN="2">
		
		
<?PHP include('../includes/topmenus.php'); ?>


		</TD>
	</TR>

<!--BodyArea-->
	<TR>
		<TD WIDTH="0" VALIGN="top" ALIGN="center"> 
		<!--side menu area's-->

<br><br><br>
		</td>
<!--Content area-->
<td align="left" valign="top" width="75%">
<font class="default">
<TABLE WIDTH="100%" BORDER="2" CELLPADDING="2" CELLSPACING="0" BORDERCOLOR="#ffff88">
<tr><td colspan="2">
<?PHP 
	if ($check["level"] == 1 )
		{
			include('admin/adminmenu.php'); 
		}
	if ($check["level"] == 999 )
		{
			include('members/usermenu.php'); 
		}
?>
</td></tr>
<TR><TD>
<font class="default">

<TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="2" BORDERCOLOR="#ffff88">
<tr><td colspan="6" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png" align="center"><font class="default">File Admin</font></td></td></tr>
<tr><td BGCOLOR="#E8E984"><font class="default">#</font></td><td BGCOLOR="#E8E984"><font class="default">Mod Type</font></td><td BGCOLOR="#E8E984"><font class="default">Object Type</font></td><td BGCOLOR="#E8E984"><font class="default">Username</font></td><td BGCOLOR="#E8E984"><font class="default">File Name</font></td><td BGCOLOR="#E8E984"><font class="default">Action</font></td></TR>
<?PHP
$filecounter=0;
global $file,$ModType,$FileObjType,$FileUsr,$FileIs,$filecounter;
RecurseDir("../userFiles",$authuser,$filecounter);
function RecurseDir($directory,$authuser,$filecounter)
	{
		$thisdir = array("name", "struct");
		$thisdir['name'] = $directory;
		if ($dir = @opendir($directory))
			{
				while ($file = readdir($dir))
					{
						if (($file != ".")&&($file != "..")&&($file != "lists")&&($file != "$$$.dlcnt")&&($file != "!---ModType-ObjType-UserName-ObjectName.txt"))
							{
//substr search to narrow down to the PHP file (nt the info file). then pars name to display form fields. Us unlink to delete files selected.
if(substr($file, -4, 4)==".zip")
	{
	$filecounter++;
	echo"<tr><td BGCOLOR=\"#E8E984\"><font class=\"default\">$filecounter</font></td>";
	
//pars down to the file name
$ModEndCounter=0;
$dash1="";
while ($dash1 !== "_")
	{$dash1 = substr("$file",$ModEndCounter,1);$ModEndCounter++;}
if ($ModEndCounter>128)
	{break;return;}
if ($dash1 == "_")
	{
		//echo "ModEndCounterr:   ";echo $ModEndCounter;echo "<br>";
		$FileName1=substr("$file",0,128);
		//echo "Filename before MOD TYPE strip:&nbsp;&nbsp;&nbsp;"; echo $file; echo"<BR>";
		$fileminusmod=substr("$FileName1",$ModEndCounter,128);
		//echo "Filename after MOD TYPE strip:&nbsp;&nbsp;&nbsp;"; echo $fileminusmod; echo"<BR>";
		$ModType=substr("$FileName1",0,$ModEndCounter);
		//echo "Filename MOD:&nbsp;&nbsp;&nbsp;"; echo $ModType; echo"<BR>";
		$ModType=substr("$ModType",0,$ModType-1);
		//echo "Filename Mod Type abriv:";echo "$ModType"; echo "<br>";
		//echo "MOD TYPE DONE<BR><br>";
		include ('FileAdminModType.php');
		
		
		
		$ObjEndCounter=0;
		$dash2="";
		while ($dash2 !== "_")
			{$dash2 = substr("$fileminusmod",$ObjEndCounter,1);$ObjEndCounter++;}
		if ($ObjEndCounter>128)
			{break;return;}
		if ($dash2 == "_")
			{
				//echo "ObjEndCounter:   ";echo $ObjEndCounter;echo "<br>";
				$FileObjType=substr("$fileminusmod",0,128);
				//echo "Filename before OBJ TYPE strip:&nbsp;&nbsp;&nbsp;"; echo $FileObjType; echo"<BR>";
				$FilenameMinusObj=substr("$fileminusmod",$ObjEndCounter,128);
				//echo "Filename after OBJ TYPE strip:&nbsp;&nbsp;&nbsp;"; echo $FilenameMinusObj; echo"<BR>";
				$FileObjType=substr("$fileminusmod",0,$ObjEndCounter-1);
				//echo "Filename OBJ TYPE:&nbsp;&nbsp;&nbsp;"; echo $FileObjType; echo"<BR>";
				//echo "Obj Type DONE<BR><br>";
				include ('FileAdminObjType.php');
				
				
				
				$UsrEndCounter=0;
				$dash3="";
				while ($dash3 !== "_")
					{$dash3 = substr("$FilenameMinusObj",$UsrEndCounter,1);$UsrEndCounter++;}
				if ($UsrEndCounter>128)
					{break;return;}
				if ($dash3 == "_")
					{
						//echo "UsrEndCounterr:   ";echo $UsrEndCounter;echo "<br>";
						$FileUsr=substr("$FilenameMinusObj",0,128);
						//echo "Filename before USR strip:&nbsp;&nbsp;&nbsp;"; echo $FileUsr; echo"<BR>";
						$FilenameMinusUSr=substr("$FilenameMinusObj",$UsrEndCounter,128);
						//echo "Filename after USR strip:&nbsp;&nbsp;&nbsp;"; echo $FilenameMinusUSr; echo"<BR>";
						$FileUsr=substr("$FilenameMinusObj",0,$UsrEndCounter-1);
						//echo "Filename USR:&nbsp;&nbsp;&nbsp;"; echo $FileUsr; echo"<BR>";
						//echo "USR Type DONE<BR><br>";
						echo "<td BGCOLOR=\"#E8E984\"><font class=\"default\">$FileUsr</font></td>";
						$FileUsr2 = strtolower($FileUsr);
						
						$FileEndCounter=0;
						$dash4="";
						while ($dash4 !== ".")
							{$dash4 = substr("$FilenameMinusObj",$FileEndCounter,1);$FileEndCounter++;}
						if ($FileEndCounter>128)
							{break;return;}
						if ($dash4 == ".")
							{
								//echo "FileEndCounterr:   ";echo $FileEndCounter;echo "<br>";
								$FileIs=substr("$FilenameMinusUSr",0,128);
								//echo "Filename before FILE NAME strip:&nbsp;&nbsp;&nbsp;"; echo $FileIs; echo"<BR>";
								$FileIS=substr("$FilenameMinusObj",$FileEndCounter,128);
								//echo "Filename after USR strip:&nbsp;&nbsp;&nbsp;"; echo $FilenameMinusUSr; echo"<BR>";
								$FileIs=substr("$FilenameMinusUSr",0,$FileEndCounter-1);
								//echo "Filename FILE:&nbsp;&nbsp;&nbsp;"; echo $FileIs; echo"<BR>";
								//echo "FILE NAME DONE<BR><br><br><br><br>";
								echo "<td BGCOLOR=\"#E8E984\"><font class=\"default\">$FileIs</font></td>";


								//echo "<td BGCOLOR=\"#E8E984\">$authuser<br>$FileUsr2<br>";
								echo "<td bgcolor=\"#E8E984\">";


if ($authuser == $FileUsr2 || $authuser == "pheagey")
	{
		$deletecounter++;
		echo "<a href=\"securezone/FileAdminDelete.php?file=$file\" target=\"_self\" class=\"minilinks\">Delete</a></td>";
	}

if ($authuser !== $FileUsr2)
	{
		if ($authuser == "pheagey")
			{
				echo "</td>	";
			}
		else
			{
				echo "<a href=\"userFiles/$file\" target=\"_new\" class=\"minilinks\">Download</a></td>";
			}
	}
		
					
			
}		}		}		}		}	

							}
					}
			}
	}

echo "
</td></tr></table>";
?>
</td></tr></table>
</FONT>
		</td>
	</tr>


<?PHP include('../includes/bottomtextmenu.php'); ?>
<?PHP include('../includes/pageend.php'); ?>