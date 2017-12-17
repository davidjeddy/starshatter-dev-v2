
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
			<font class="title1">Campaigns: Some side things to keep you interested.</font>
		</td>
	</tr>
</table><br>
<?PHP include('includes/contentfiles/OrigCampaignMod.php');?>
<a name="b5"></a>
<?PHP include('includes/contentfiles/b5CampaignMod.php');?>
<a name="saab"></a>
<?PHP include('includes/contentfiles/saabCampaignMod.php');?>
<a name="st"></a>
<?PHP include('includes/contentfiles/stCampaignMod.php');?>
<a name="sw"></a>
<?PHP include('includes/contentfiles/swCampaignMod.php');?>
<a name="bg"></a>
<?PHP include('includes/contentfiles/bgCampaignMod.php');?>
<a name="fs"></a>
<?PHP include('includes/contentfiles/fsCampaignMod.php');?>
<a name="hw"></a>
<?PHP include('includes/contentfiles/hwCampaignMod.php');?>
<a name="battletech"></a>
<?PHP include('includes/contentfiles/battletechCampaignMod.php');?>
<a name="other"></a>
<?PHP include('includes/contentfiles/otherCampaignMod.php');?>
</font>
		</td>
	</tr>
<?PHP include('includes/bottomtextmenu.php'); ?>
<?PHP include('includes/pageend.php'); ?>