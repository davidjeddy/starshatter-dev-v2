<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{L_WHO_IS_ONLINE}
	</span></td>
  </tr>
</table><br />

<table width="100%" cellpadding="0" cellspacing="1" class="forumline">
  <tr> 
	<th width="35%">&nbsp;{L_USERNAME}&nbsp;</th>
	<th width="25%">&nbsp;{L_LAST_UPDATE}&nbsp;</th>
	<th width="40%">&nbsp;{L_FORUM_LOCATION}&nbsp;</th>
  </tr>
  <tr> 
	<td class="catHead" colspan="3"><div class="left"><span class="cattitle"><b>{TOTAL_REGISTERED_USERS_ONLINE}</b></span></div></td>
  </tr>
  <!-- BEGIN reg_user_row -->
  <tr> 
	<td width="35%" class="{reg_user_row.ROW_CLASS}"><div class="left"><span class="gen"><a href="{reg_user_row.U_USER_PROFILE}">{reg_user_row.USERNAME}</a></span></div></td>
	<td width="25%" nowrap="nowrap" class="{reg_user_row.ROW_CLASS}"><div class="center"><span class="gen">{reg_user_row.LASTUPDATE}</span></div></td>
	<td width="40%" class="{reg_user_row.ROW_CLASS}"><div class="center"><span class="gen"><a href="{reg_user_row.U_FORUM_LOCATION}">{reg_user_row.FORUM_LOCATION}</a></span></div></td>
  </tr>
  <!-- END reg_user_row -->
  <tr> 
	<td class="catHead" colspan="3"><span class="cattitle"><b>{TOTAL_GUEST_USERS_ONLINE}</b></span></td>
  </tr>
  <!-- BEGIN guest_user_row -->
  <tr> 
	<td width="35%" class="{guest_user_row.ROW_CLASS}"><div class="left"><span class="gen">{guest_user_row.USERNAME}</span></div></td>
	<td width="25%" nowrap="nowrap" class="{guest_user_row.ROW_CLASS}"><div class="center"><span class="gen">{guest_user_row.LASTUPDATE}</span></div></td>
	<td width="40%" class="{guest_user_row.ROW_CLASS}"><div class="center"><span class="gen"><a href="{guest_user_row.U_FORUM_LOCATION}" class="gen">{guest_user_row.FORUM_LOCATION}</a></span></div></td>
  </tr>
  <!-- END guest_user_row -->
</table>

<table width="100%" cellspacing="0" cellpadding="0">
  <tr> 
	<td class="left" valign="top"><span class="gensmall">{L_ONLINE_EXPLAIN}</span></td>
  </tr>
</table>