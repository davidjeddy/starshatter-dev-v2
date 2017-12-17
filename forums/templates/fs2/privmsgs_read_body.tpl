<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td align="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	<a href="{U_PRIVATEMSGS}">{L_PRIVATEMSGS}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{BOX_NAME} :: {L_MESSAGE}
	</span></td>
  </tr>
</table><br />

<table cellspacing="0" cellpadding="0" width="100%"><tr><td class="center">
<table cellspacing="2" cellpadding="2">
  <tr> 
	<td valign="middle">{INBOX_IMG}</td>
	<td valign="middle"><span class="cattitle">{INBOX} &nbsp;</span></td>
	<td valign="middle">{SENTBOX_IMG}</td>
	<td valign="middle"><span class="cattitle">{SENTBOX} &nbsp;</span></td>
	<td valign="middle">{OUTBOX_IMG}</td>
	<td valign="middle"><span class="cattitle">{OUTBOX} &nbsp;</span></td>
	<td valign="middle">{SAVEBOX_IMG}</td>
	<td valign="middle"><span class="cattitle">{SAVEBOX}</span></td>
  </tr>
</table>
</td></tr></table><br />

<form method="post" action="{S_PRIVMSGS_ACTION}">
<table width="100%" cellspacing="2" cellpadding="2">
  <tr>
	  <td valign="middle">{REPLY_PM_IMG}</td>
  </tr>
</table>

<table cellpadding="0" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th colspan="3" nowrap="nowrap">{BOX_NAME} :: {L_MESSAGE}</th>
	</tr>
	<tr> 
	  <td class="row2"><span class="genmed">{L_FROM}:</span></td>
	  <td width="100%" class="row2" colspan="2"><span class="genmed">{MESSAGE_FROM}</span></td>
	</tr>
	<tr> 
	  <td class="row2"><span class="genmed">{L_TO}:</span></td>
	  <td width="100%" class="row2" colspan="2"><span class="genmed">{MESSAGE_TO}</span></td>
	</tr>
	<tr> 
	  <td class="row2"><span class="genmed">{L_POSTED}:</span></td>
	  <td width="100%" class="row2" colspan="2"><span class="genmed">{POST_DATE}</span></td>
	</tr>
	<tr> 
	  <td class="row2"><span class="genmed">{L_SUBJECT}:</span></td>
	  <td width="100%" class="row2"><span class="genmed">{POST_SUBJECT}</span></td>
	  <td nowrap="nowrap" class="row2" align="right"> {QUOTE_PM_IMG} {EDIT_PM_IMG}</td>
	</tr>
	<tr> 
	  <td valign="top" colspan="3" class="row1"><span class="postbody">{MESSAGE}</span></td>
	</tr>
	<tr> 
	  <td width="78%" valign="bottom" colspan="3" class="row1"> 
		<table cellspacing="0" cellpadding="0" height="18">
		  <tr> 
			<td valign="middle" nowrap="nowrap">{PROFILE_IMG} {PM_IMG} {EMAIL_IMG} 
			  {WWW_IMG} {AIM_IMG} {YIM_IMG} {MSN_IMG} {ICQ_IMG}</td>
		  </tr>
		</table>
	  </td>
	</tr>
	<tr>
	  <td class="catBottom" colspan="3"><div class="right"> {S_HIDDEN_FIELDS} 
		<input type="submit" name="save" value="{L_SAVE_MSG}" class="liteoption" />
		&nbsp; 
		<input type="submit" name="delete" value="{L_DELETE_MSG}" class="liteoption" />
	  </div></td>
	</tr>
  </table>

  <table width="100%" cellspacing="2" cellpadding="2">
	<tr> 
	  <td>{REPLY_PM_IMG}</td>
	</tr>
  </table>
</form>