
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
<?PHP include('includes/VesselModsSideMenu.php'); ?>
<br><br><br>
<?PHP include('includes/ShipsSideMenu.php'); ?>
		</td>
<!--Content area-->
<td align="left" valign="top" width="75%">
<font class="default">

<table width="100%">
	<tr>
		<td align="left" valign="middle" HEIGHT="29" background="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png">
			<font class="title1">Small Ships: Drones, Fighters, Attacks, & LCAs.</font>
		</td>
	</tr>
</table><br>
<a name="originals"></a>
<?PHP include('includes/contentfiles/OrigSmships.php');?>
<a name="b5"></a>
<?PHP include('includes/contentfiles/b5Smships.php');?>
<a name="saab"></a>
<?PHP include('includes/contentfiles/saabSmships.php');?>
<a name="st"></a>
<?PHP include('includes/contentfiles/stSmships.php');?>
<a name="sw"></a>
<?PHP include('includes/contentfiles/swSmships.php');?>
<a name="bg"></a>
<?PHP include('includes/contentfiles/bgSmships.php');?>
<a name="fs"></a>
<?PHP include('includes/contentfiles/fsSmships.php');?>
<a name="hw"></a>
<?PHP include('includes/contentfiles/hwSmships.php');?>
<a name="battletech"></a>
<?PHP include('includes/contentfiles/battletechSmships.php');?>
<a name="other"></a>
<?PHP include('includes/contentfiles/otherSmships.php');?>
</font>
		</td>
	</tr>
<?PHP include('includes/bottomtextmenu.php'); ?>
<?PHP include('includes/pageend.php'); ?>