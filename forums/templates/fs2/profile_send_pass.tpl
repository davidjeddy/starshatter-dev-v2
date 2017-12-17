<form action="{S_PROFILE_ACTION}" method="post">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	<a href="{U_PROFILE}">{L_PROFILE}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{L_SEND_PASSWORD}
	</span></td>
  </tr>
</table><br />

  <table cellpadding="0" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th colspan="2" valign="middle">{L_SEND_PASSWORD}</th>
	</tr>
	<tr> 
	  <td class="row3" colspan="2"><span class="gensmall">{L_ITEMS_REQUIRED}</span></td>
	</tr>
	<tr> 
	  <td class="row1" width="38%"><span class="gen">{L_USERNAME}: *</span></td>
	  <td class="row2"> <input type="text" class="post" style="width: 200px" name="username" size="25" maxlength="40" value="{USERNAME}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="gen">{L_EMAIL_ADDRESS}: *</span></td>
	  <td class="row2"> <input type="text" class="post" style="width: 200px" name="email" size="25" maxlength="255" value="{EMAIL}" />
	  </td>
	</tr>
	<tr> 
	  <td class="catBottom" colspan="2"><div class="center">
	  {S_HIDDEN_FIELDS} 
	  <input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />
	  &nbsp;&nbsp; 
	  <input type="reset" value="{L_RESET}" name="reset" class="liteoption" />
	  </div></td>
	</tr>
  </table></form>
