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
include('../phpscripts/sitevariables.php');
$deleteroot=$systemroot."userFiles/";
if(substr($file, -4, 4)==".zip")
	{
		//pars down to the file name
		$ModEndCounter=0;
		$dash1="";
		while ($dash1 !== "_")
			{$dash1 = substr("$file",$ModEndCounter,1);$ModEndCounter++;}
		if ($ModEndCounter>32)
			{break;return;}
		if ($dash1 == "_")
			{
				$FileName1=substr("$file",0,128);
				$fileminusmod=substr("$FileName1",$ModEndCounter,128);
				$ModTypeab=substr("$FileName1",0,$ModEndCounter);
				$ModType=substr("$ModTypeab",0,$ModEndCounter-1);

				$ObjEndCounter=0;
				$dash2="";
				while ($dash2 !== "_")
					{$dash2 = substr("$fileminusmod",$ObjEndCounter,1);$ObjEndCounter++;}
				if ($ObjEndCounter>32)
					{break;return;}
				if ($dash2 == "_")
					{
						$FileObjType=substr("$fileminusmod",0,128);
						$FilenameMinusObj=substr("$fileminusmod",$ObjEndCounter,128);
						$FileObjType=substr("$fileminusmod",0,$ObjEndCounter-1);
						
						$UsrEndCounter=0;
						$dash3="";
						while ($dash3 !== "_")
							{$dash3 = substr("$FilenameMinusObj",$UsrEndCounter,1);$UsrEndCounter++;}
						if ($UsrEndCounter>32)
							{break;return;}
						if ($dash3 == "_")
							{
								$FileUsr=substr("$FilenameMinusObj",0,128);
								$FilenameMinusUSr=substr("$FilenameMinusObj",$UsrEndCounter,128);
								$FileUsrName=substr("$FilenameMinusObj",0,$UsrEndCounter-1);

								$FileEndCounter=0;
								$dash4="";
								while ($dash4 !== ".")
									{$dash4 = substr("$FilenameMinusObj",$FileEndCounter,1);$FileEndCounter++;}
								if ($FileEndCounter>32)
									{break;return;}
								if ($dash4 == ".")
									{
										$FileIs= substr("$FilenameMinusUSr",0,128);
										$FileUsrIs=substr("$FilenameMinusObj",$FileEndCounter,128);
										$FileNoExt=substr("$FileIs",0,-4);


										if ($authuser == $FileUsrName)
											{
												$filetoworkon = $deleteroot."lists/".$ModType."_".$FileObjType.".php";
												$handle = fopen ($filetoworkon, "r+");
												$filecontents = fread ($handle, filesize ($filetoworkon));
												fclose ($handle);
												$FindListCounter=0;
												$Listdash1="<!--$FileUsrName - $FileNoExt --><?PHP include ('userFiles/$ModType"._."$FileObjType"._."$FileUsrName"._."$FileNoExt.php'); ?><!---->";
												while ($Listdash1 !== "<!--$FileUsrName - $FileNoExt --><?PHP include ('userFiles/$ModType"._."$FileObjType"._."$FileUsrName"._."$FileNoExt.php'); ?><!---->")
													{
														$Listdash1 = substr("$filecontents",$FindListCounter);$FindListCounter++;
													}
												if ($FindListCounter>256)
													{
														break;return;
													}
												if ($Listdash1 == "<!--$FileUsrName - $FileNoExt --><?PHP include ('userFiles/$ModType"._."$FileObjType"._."$FileUsrName"._."$FileNoExt.php'); ?><!---->")
													{
														$filecontents_minuslink_done = str_replace("<!--$FileUsrName - $FileNoExt --><?PHP include ('userFiles/$ModType"._."$FileObjType"._."$FileUsrName"._."$FileNoExt.php'); ?><!---->", "", $filecontents);
													}
														$handle = fopen ($filetoworkon, "w");
														fwrite($handle, $filecontents_minuslink_done);
														fclose($handle);

														$filename_only=substr($file,0,-4);
														unlink("".$deleteroot.$filename_only.".zip");
														unlink("".$deleteroot.$filename_only.".php");
														unlink("".$deleteroot.$filename_only."_info.php");
														if(file_exists($deleteroot.$filename_only."-1.jpg"))
															{
																unlink("".$deleteroot.$filename_only."-1.jpg");
																unlink("".$deleteroot."tmb_".$filename_only."-1.jpg");
															}
													if(file_exists("".$deleteroot.$filename_only."-2.jpg"))
														{
															unlink("".$deleteroot.$filename_only."-2.jpg");
															unlink("".$deleteroot."tmb_".$filename_only."-2.jpg");
														}
												}
											elseif ($authuser !== $FileUsrName)
												{
													return;
												}
											return;
									}
							}
					}
			}
	}

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
<br><br><br>
		</td>
<!--Content area-->
<td align="left" valign="top" width="75%">
<font class="default">

<TABLE WIDTH="100%" BORDER="2" CELLPADDING="2" CELLSPACING="0" BORDERCOLOR="#ffff88">
<tr><td colspan="2">
<?PHP
	if ($check["level"] == 1)
		{
			include('admin/adminmenu.php');
		}
	if ($check["level"] == 999)
		{
			include('members/usermenu.php');
		}
?>
</td></tr>


    <tr>
	<td>
<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD HEIGHT="20" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png">
			<font class="default">
				File Deletion
			</font>
		</TD>
	</TR>
	<TR ALIGN="center"> 
		<TD BGCOLOR="#E8E984">
			<font class="default">
				&nbsp;&nbsp;&nbsp;File has been deleted successfully.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?PHP echo $httproot ?>securezone/FileAdmin.php" target="_self" class="minilinks">Back to File Admin</a><br><br><Br>
			</font>
		</td>
	</tr>



	<TR ALIGN="left"> 
		<TD BGCOLOR="#E8E984">
			<font class="default">
<?PHP

echo "Level: ";echo $check["level"];echo "<BR><br>";
echo "SystemRoot: ";echo $systemroot;echo "<BR>";
echo "DeleteRoot: ";echo $deleteroot;echo "<BR>";
echo "File: ";echo $file;echo "<BR><br>";
echo "ModEndCounter: ";echo $ModEndCounter;echo "<BR>";
echo "Dash1: ";echo $dash1;echo "<BR>";
echo "FileName1: ";echo $FileName1;echo "<BR>";
echo "FileMinusMod: ";echo $fileminusmod;echo "<BR>";
echo "ModType Abbriv: ";echo $ModTypeab;echo "<BR>";
echo "ModType: ";echo $ModType;echo "<BR>";
echo "ObjEndCounter: ";echo $ObjEndCounter;echo "<BR><br>";
echo "dash2: ";echo $dash2;echo "<BR>";
echo "FileObjType: ";echo $FileObjType;echo "<BR>";
echo "FileNameMinusObj: ";echo $FilenameMinusObj;echo "<BR>";
echo "FileObjType: ";echo $FileObjType;  echo "<BR>";
echo "UsrEndCounter: ";echo $UsrEndCounter;echo "<BR><br>";
echo "dash3: ";echo $dash3;echo "<BR>";
echo "UserSignInIs: ";echo $authuser; echo"<br>";
echo "FileUsr: ";echo $FileUsr;echo "<BR>";
echo "FilenameMinusUsr: ";echo $FilenameMinusUSr;echo "<BR>";
echo "FileUsrName: ";echo $FileUsrName;echo "<BR>";
echo "FileEndCounter: ";echo $FileEndCounter;echo "<BR><br>";
echo "dash4: ";echo $dash4;echo "<BR>";
echo "FileIS: ";echo $FileIs; echo "<br>";
echo "FileNoExt: ";echo $FileNoExt;echo "<BR>";
echo "fileExt: ";echo $FileUsrIs;echo "<BR><br>";
echo "File to Work on: ";echo $filetoworkon;echo "<br>";
echo "File content: <PRE>";echo $filecontents;echo "</PRE><BR>";
echo "FindListCounter: "; echo $FindListCounter; echo "<br>";
echo "isitok: ";echo $isitok; echo "<br>";
echo "Listdash B4 removal: "; echo $Listdash1_spaces; echo "<br>";
echo "List Dash:  "; echo $Listdash1; echo "<br>";
echo "Listfile after link is removed:   "; echo $filecontents_minuslink_done; echo "<br>";
echo "we are good:"; echo $wearegood; echo "<br>";

?>
			</font>
		</td>
	</tr>
</table>





		</td>
	</tr>
</table>

<?PHP include('../includes/bottomtextmenu.php'); ?>


<?PHP include('../includes/pageend.php'); ?>