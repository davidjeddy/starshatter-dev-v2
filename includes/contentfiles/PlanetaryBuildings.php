
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
<?PHP include('includes/OrigLgships.php');?>
<a name="b5"></a>
<?PHP include('includes/b5Lgships.php');?>
<a name="saab"></a>
<?PHP include('includes/saabLgships.php');?>
<a name="st"></a>
<?PHP include('includes/stLgships.php');?>
<a name="sw"></a>
<?PHP include('includes/swLgships.php');?>
<a name="b5"></a>
<?PHP include('includes/bgLgships.php');?>
<a name="fs"></a>
<?PHP include('includes/fsLgships.php');?>
<a name="hw"></a>
<?PHP include('includes/hwLgships.php');?>
<a name="battletech"></a>
<?PHP include('includes/battletechLgships.php');?>
<a name="other"></a>
<?PHP include('includes/otherLgships.php');?>
</font>
		</td>
	</tr>
<?PHP include('includes/bottomtextmenu.php'); ?>
<?PHP include('includes/pageend.php'); ?>