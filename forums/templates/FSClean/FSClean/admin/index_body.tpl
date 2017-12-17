
<h1>{L_WELCOME}</h1>

<span class="genmed">{L_ADMIN_INTRO}</span>

<h1>{L_FORUM_STATS}</h1>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="14" align="center">
  <tr> 
    <td rowspan="1" colspan="1" width="1%" height="14" background="../templates/FSClean/images/front/Image2_1x2.gif" align="left"> 
      <img name="Image20" src="../templates/FSClean/images/front/Image2_1x1.gif" width="5" height="14" border="0"></td>
    <td rowspan="1" colspan="1" width="98%" height="14" background="../templates/FSClean/images/front/Image2_1x2.gif" align="center" valign="top" nowrap>     
</td>
    <td rowspan="1" colspan="1" width="1%" height="14" align="right" background="../templates/FSClean/images/front/Image2_1x2.gif"> 
      <img name="Image22" src="../templates/FSClean/images/front/Image2_1x3.gif" width="14" height="14" border="0"></td>
  </tr>
</table>
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
  <tr> 
	<th width="25%" nowrap height="25" class="thCornerL">{L_STATISTIC}</th>
	<th width="25%" height="25" class="thTop">{L_VALUE}</th>
	<th width="25%" nowrap height="25" class="thTop">{L_STATISTIC}</th>
	<th width="25%" height="25" class="thCornerR">{L_VALUE}</th>
  </tr>
  <tr> 
	<td class="row1" nowrap><span class="genmed">{L_NUMBER_POSTS}:</span></td>
	<td class="row2"><b><span class="genmed">{NUMBER_OF_POSTS}</span></b></td>
	<td class="row1" nowrap><span class="genmed">{L_POSTS_PER_DAY}:</span></td>
	<td class="row2"><b><span class="genmed">{POSTS_PER_DAY}</span></b></td>
  </tr>
  <tr> 
	<td class="row1" nowrap><span class="genmed">{L_NUMBER_TOPICS}:</span></td>
	<td class="row2"><b><span class="genmed">{NUMBER_OF_TOPICS}</span></b></td>
	<td class="row1" nowrap><span class="genmed">{L_TOPICS_PER_DAY}:</span></td>
	<td class="row2"><b><span class="genmed">{TOPICS_PER_DAY}</span></b></td>
  </tr>
  <tr> 
	<td class="row1" nowrap><span class="genmed">{L_NUMBER_USERS}:</span></td>
	<td class="row2"><b><span class="genmed">{NUMBER_OF_USERS}</span></b></td>
	<td class="row1" nowrap><span class="genmed">{L_USERS_PER_DAY}:</span></td>
	<td class="row2"><b><span class="genmed">{USERS_PER_DAY}</span></b></td>
  </tr>
  <tr> 
	<td class="row1" nowrap><span class="genmed">{L_BOARD_STARTED}:</span></td>
	<td class="row2"><b><span class="genmed">{START_DATE}</span></b></td>
	<td class="row1" nowrap><span class="genmed">{L_AVATAR_DIR_SIZE}:</span></td>
	<td class="row2"><b><span class="genmed">{AVATAR_DIR_SIZE}</span></b></td>
  </tr>
  <tr> 
	<td class="row1" nowrap><span class="genmed">{L_DB_SIZE}:</span></td>
	<td class="row2"><b><span class="genmed">{DB_SIZE}</span></b></td>
	<td class="row1" nowrap><span class="genmed">{L_GZIP_COMPRESSION}:</span></td>
	<td class="row2"><b><span class="genmed">{GZIP_COMPRESSION}</span></b></td>
  </tr>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" height="14">
  <tr> 
    <td rowspan="1" colspan="1" width="1%" height="14" background="../templates/FSClean/images/front/Image2_1x2down.gif" align="left"> 
      <img name="Image20" src="../templates/FSClean/images/front/Image2_1x1down.gif" width="5" height="14" border="0"></td>
    <td rowspan="1" colspan="1" width="98%" height="14" background="../templates/FSClean/images/front/Image2_1x2down.gif"> 
    </td>
    <td rowspan="1" colspan="1" width="1%" height="14" align="right" background="../templates/FSClean/images/front/Image2_1x2down.gif"> 
      <img name="Image22" src="../templates/FSClean/images/front/Image2_1x3down.gif" width="14" height="14" border="0"></td>
  </tr>
</table>
<h1>{L_WHO_IS_ONLINE}</h1>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="14" align="center">
  <tr> 
    <td rowspan="1" colspan="1" width="1%" height="14" background="../templates/FSClean/images/front/Image2_1x2.gif" align="left"> 
      <img name="Image20" src="../templates/FSClean/images/front/Image2_1x1.gif" width="5" height="14" border="0"></td>
    <td rowspan="1" colspan="1" width="98%" height="14" background="../templates/FSClean/images/front/Image2_1x2.gif" align="center" valign="top" nowrap>     
</td>
    <td rowspan="1" colspan="1" width="1%" height="14" align="right" background="../templates/FSClean/images/front/Image2_1x2.gif"> 
      <img name="Image22" src="../templates/FSClean/images/front/Image2_1x3.gif" width="14" height="14" border="0"></td>
  </tr>
</table>
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
  <tr> 
	<th width="20%" class="thCornerL" height="25">&nbsp;{L_USERNAME}&nbsp;</th>
	<th width="20%" height="25" class="thTop">&nbsp;{L_STARTED}&nbsp;</th>
	<th width="20%" class="thTop">&nbsp;{L_LAST_UPDATE}&nbsp;</th>
	<th width="20%" class="thCornerR">&nbsp;{L_FORUM_LOCATION}&nbsp;</th>
	<th width="20%" height="25" class="thCornerR">&nbsp;{L_IP_ADDRESS}&nbsp;</th>
  </tr>
  <!-- BEGIN reg_user_row -->
  <tr> 
	<td width="20%" class="{reg_user_row.ROW_CLASS}">&nbsp;<span class="gen"><a href="{reg_user_row.U_USER_PROFILE}" class="gen">{reg_user_row.USERNAME}</a></span>&nbsp;</td>
	<td width="20%" align="center" class="{reg_user_row.ROW_CLASS}">&nbsp;<span class="gen">{reg_user_row.STARTED}</span>&nbsp;</td>
	<td width="20%" align="center" nowrap class="{reg_user_row.ROW_CLASS}">&nbsp;<span class="gen">{reg_user_row.LASTUPDATE}</span>&nbsp;</td>
	<td width="20%" class="{reg_user_row.ROW_CLASS}">&nbsp;<span class="gen"><a href="{reg_user_row.U_FORUM_LOCATION}" class="gen">{reg_user_row.FORUM_LOCATION}</a></span>&nbsp;</td>
	<td width="20%" class="{reg_user_row.ROW_CLASS}">&nbsp;<span class="gen"><a href="{reg_user_row.U_WHOIS_IP}" class="gen" target="_phpbbwhois">{reg_user_row.IP_ADDRESS}</a></span>&nbsp;</td>
  </tr>
  <!-- END reg_user_row -->
  <tr> 
	<td colspan="5" height="1" class="row3"><img src="../templates/FSClean/images/spacer.gif" width="1" height="1" alt="."></td>
  </tr>
  <!-- BEGIN guest_user_row -->
  <tr> 
	<td width="20%" class="{guest_user_row.ROW_CLASS}">&nbsp;<span class="gen">{guest_user_row.USERNAME}</span>&nbsp;</td>
	<td width="20%" align="center" class="{guest_user_row.ROW_CLASS}">&nbsp;<span class="gen">{guest_user_row.STARTED}</span>&nbsp;</td>
	<td width="20%" align="center" nowrap class="{guest_user_row.ROW_CLASS}">&nbsp;<span class="gen">{guest_user_row.LASTUPDATE}</span>&nbsp;</td>
	<td width="20%" class="{guest_user_row.ROW_CLASS}">&nbsp;<span class="gen"><a href="{guest_user_row.U_FORUM_LOCATION}" class="gen">{guest_user_row.FORUM_LOCATION}</a></span>&nbsp;</td>
	<td width="20%" class="{guest_user_row.ROW_CLASS}">&nbsp;<span class="gen"><a href="{guest_user_row.U_WHOIS_IP}" target="_phpbbwhois">{guest_user_row.IP_ADDRESS}</a></span>&nbsp;</td>
  </tr>
  <!-- END guest_user_row -->
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="14">
  <tr> 
    <td rowspan="1" colspan="1" width="1%" height="14" background="../templates/FSClean/images/front/Image2_1x2down.gif" align="left"> 
      <img name="Image20" src="../templates/FSClean/images/front/Image2_1x1down.gif" width="5" height="14" border="0"></td>
    <td rowspan="1" colspan="1" width="98%" height="14" background="../templates/FSClean/images/front/Image2_1x2down.gif"> 
    </td>
    <td rowspan="1" colspan="1" width="1%" height="14" align="right" background="../templates/FSClean/images/front/Image2_1x2down.gif"> 
      <img name="Image22" src="../templates/FSClean/images/front/Image2_1x3down.gif" width="14" height="14" border="0"></td>
  </tr>
</table>
<br />
