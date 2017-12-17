
<html>
<?PHP include('includes/pagestart.php'); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="4" bgcolor="#DFDFDF" >
	<tr>
		<td valign="top" colspan="2">
<?PHP include('includes/topmenus.php'); ?>
		</td>
	</tr>
<!--BodyArea-->
	<tr>
		<td width="0" valign="top" align="center"> 
<?PHP include('includes/OtherModsSideMenu.php'); ?>
<br><br><br>
<?PHP include('includes/ShipsSideMenu.php'); ?>
		</td>
<!--Content area-->
<td align="left" valign="top" width="75%">
<font class="default">

<table width="100%">
	<tr>
		<td align="left" valign="middle" HEIGHT="29" background="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png">
			<font class="title1">Weapon Mods: Blow 'em away!</font>
		</td>
	</tr>
</table><br>
<a name="originals"></a>
<?PHP include('includes/contentfiles/OrigWeapMod.php');?>
<a name="b5"></a>
<?PHP include('includes/contentfiles/b5WeapMod.php');?>
<a name="saab"></a>
<?PHP include('includes/contentfiles/saabWeapMod.php');?>
<a name="st"></a>
<?PHP include('includes/contentfiles/stWeapMod.php');?>
<a name="sw"></a>
<?PHP include('includes/contentfiles/swWeapMod.php');?>
<a name="bg"></a>
<?PHP include('includes/contentfiles/bgWeapMod.php');?>
<a name="fs"></a>
<?PHP include('includes/contentfiles/fsWeapMod.php');?>
<a name="hw"></a>
<?PHP include('includes/contentfiles/hwWeapMod.php');?>
<a name="battletech"></a>
<?PHP include('includes/contentfiles/battletechWeapMod.php');?>
<a name="other"></a>
<?PHP include('includes/contentfiles/otherWeapMod.php');?>
</font>
		</td>
	</tr>
<?PHP include('includes/bottomtextmenu.php'); ?>
<?PHP include('includes/pageend.php'); ?>