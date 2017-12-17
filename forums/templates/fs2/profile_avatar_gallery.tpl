
<form action="{S_PROFILE_ACTION}" method="post">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	<a href="{U_PROFILE}">{L_PROFILE}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{L_AVATAR_GALLERY}
	</span></td>
  </tr>
</table><br />

<table cellpadding="0" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th colspan="{S_COLSPAN}" valign="middle">{L_AVATAR_GALLERY}</th>
	</tr>
	<tr> 
	  <td class="row3" valign="middle" colspan="6"><div class="center"><span class="genmed">{L_CATEGORY}:&nbsp;{S_CATEGORY_SELECT}&nbsp;</span><input type="submit" class="liteoption" value="{L_GO}" name="avatargallery" /></div></td>
	</tr>
	<!-- BEGIN avatar_row -->
	<tr> 
	<!-- BEGIN avatar_column -->
		<td class="row1"><div class="center"><img src="{avatar_row.avatar_column.AVATAR_IMAGE}" alt="{avatar_row.avatar_column.AVATAR_NAME}" /></div></td>
	<!-- END avatar_column -->
	</tr>
	<tr>
	<!-- BEGIN avatar_option_column -->
		<td class="row2"><div class="center"><input type="radio" name="avatarselect" value="{avatar_row.avatar_option_column.S_OPTIONS_AVATAR}" /></div></td>
	<!-- END avatar_option_column -->
	</tr>

	<!-- END avatar_row -->
	<tr> 
	  <td class="catBottom" colspan="{S_COLSPAN}"><div class="center">{S_HIDDEN_FIELDS} 
		<input type="submit" name="submitavatar" value="{L_SELECT_AVATAR}" class="mainoption" />
		&nbsp;&nbsp; 
		<input type="submit" name="cancelavatar" value="{L_RETURN_PROFILE}" class="liteoption" />
	  </td>
	</tr>
  </table></form>
