 
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center" class="forumline">
  <tr> 
	<td align="left"><span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></td>
  </tr>
</table>
<br />
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="14" align="center">
  <tr> 
    <td rowspan="1" colspan="1" width="1%" height="14" background="templates/FSClean/images/front/Image2_1x2.gif" align="left"> 
      <img name="Image20" src="templates/FSClean/images/front/Image2_1x1.gif" width="5" height="14" border="0"></td>
    <td rowspan="1" colspan="1" width="98%" height="14" background="templates/FSClean/images/front/Image2_1x2.gif" align="center" valign="top" nowrap> 
    </td>
    <td rowspan="1" colspan="1" width="1%" height="14" align="right" background="templates/FSClean/images/front/Image2_1x2.gif"> 
      <img name="Image22" src="templates/FSClean/images/front/Image2_1x3.gif" width="14" height="14" border="0"></td>
  </tr>
</table>
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
  <!-- BEGIN switch_groups_joined -->
  <tr> 
	<th colspan="2" align="center" class="thHead" height="25">{L_GROUP_MEMBERSHIP_DETAILS}</th>
  </tr>
  <!-- BEGIN switch_groups_member -->
  <tr> 
	<td class="row1"><span class="gen">{L_YOU_BELONG_GROUPS}</span></td>
	<td class="row2" align="right"> 
	  <table width="90%" cellspacing="0" cellpadding="0" border="0">
		<tr><form method="get" action="{S_USERGROUP_ACTION}">
			<td width="40%"><span class="gensmall">{GROUP_MEMBER_SELECT}</span></td>
			<td align="center" width="30%"> 
			  <input type="submit" value="{L_VIEW_INFORMATION}" class="liteoption" />{S_HIDDEN_FIELDS}
			</td>
		{S_HIDDEN_FIELDS}</form></tr>
	  </table>
	</td>
  </tr>
  <!-- END switch_groups_member -->
  <!-- BEGIN switch_groups_pending -->
  <tr> 
	<td class="row1"><span class="gen">{L_PENDING_GROUPS}</span></td>
	<td class="row2" align="right"> 
	  <table width="90%" cellspacing="0" cellpadding="0" border="0">
		<tr><form method="get" action="{S_USERGROUP_ACTION}">
			<td width="40%"><span class="gensmall">{GROUP_PENDING_SELECT}</span></td>
			<td align="center" width="30%"> 
			  <input type="submit" value="{L_VIEW_INFORMATION}" class="liteoption" />{S_HIDDEN_FIELDS}
			</td>
		{S_HIDDEN_FIELDS}</form></tr>
	  </table>
	</td>
  </tr>
  <!-- END switch_groups_pending -->
  <!-- END switch_groups_joined -->
  <!-- BEGIN switch_groups_remaining -->
  <tr> 
	<th colspan="2" align="center" class="thHead" height="25">{L_JOIN_A_GROUP}</th>
  </tr>
  <tr> 
	<td class="row1"><span class="gen">{L_SELECT_A_GROUP}</span></td>
	<td class="row2" align="right"> 
	  <table width="90%" cellspacing="0" cellpadding="0" border="0">
		<tr><form method="get" action="{S_USERGROUP_ACTION}">
			<td width="40%"><span class="gensmall">{GROUP_LIST_SELECT}</span></td>
			<td align="center" width="30%"> 
			  <input type="submit" value="{L_VIEW_INFORMATION}" class="liteoption" />{S_HIDDEN_FIELDS}
			</td>
		{S_HIDDEN_FIELDS}</form></tr>
	  </table>
	</td>
  </tr>
  <!-- END switch_groups_remaining -->
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="14" align="center">
  <tr> 
    <td rowspan="1" colspan="1" width="1%" height="14" align="left"> 
      <img name="Image20" src="templates/FSClean/images/front/Image2_1x1down.gif" width="5" height="14" border="0"></td>
    <td rowspan="1" colspan="1" width="98%" height="14" background="templates/FSClean/images/front/Image2_1x2down.gif"> 
    </td>
    <td rowspan="1" colspan="1" width="1%" height="14" align="right"> 
      <img name="Image22" src="templates/FSClean/images/front/Image2_1x3down.gif" width="14" height="14" border="0"></td>
  </tr>
</table>
<br />
<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
  <tr> 
	<td align="right" valign="top"><span class="gensmall">{S_TIMEZONE}</span></td>
  </tr>
</table>

<br clear="all" />

<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>