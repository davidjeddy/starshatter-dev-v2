
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
<a name="originals"></a>
<?PHP include('includes/OrigLgShips.php');?>
<a name="b5"></a>
<?PHP include('includes/b5LgShips.php');?>
<a name="saab"></a>
<?PHP include('includes/saabLgShips.php');?>
<a name="st"></a>
<?PHP include('includes/stLgShips.php');?>
<a name="sw"></a>
<?PHP include('includes/swLgShips.php');?>
<a name="b5"></a>
<?PHP include('includes/bgLgShips.php');?>
<a name="fs"></a>
<?PHP include('includes/fsLgShips.php');?>
<a name="hw"></a>
<?PHP include('includes/hwLgShips.php');?>
<a name="battletech"></a>
<?PHP include('includes/battletechLgShips.php');?>
<a name="other"></a>
<?PHP include('includes/otherLgShips.php');?>
</font>
		</td>
	</tr>
<?PHP include('includes/bottomtextmenu.php'); ?>
<?PHP include('includes/pageend.php'); ?>