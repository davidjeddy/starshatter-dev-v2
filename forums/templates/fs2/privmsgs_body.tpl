 <script language="Javascript" type="text/javascript">
	//
	// Should really check the browser to stop this whining ...
	//
	function select_switch(status)
	{
		for (i = 0; i < document.privmsg_list.length; i++)
		{
			document.privmsg_list.elements[i].checked = status;
		}
	}
</script>
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	<a href="{U_PRIVATEMSGS}">{L_PRIVATEMSGS}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{PRIVATE_MESSAGE_INFO}
	</span></td>
  </tr>
</table><br />

<table cellspacing="0" cellpadding="0" width="100%">
  <tr> 
	<td class="center" valign="top" width="100%"> 
	  <table cellspacing="2" cellpadding="2">
		<tr valign="middle"> 
		  <td>{INBOX_IMG}</td>
		  <td><span class="cattitle">{INBOX} &nbsp;</span></td>
		  <td>{SENTBOX_IMG}</td>
		  <td><span class="cattitle">{SENTBOX} &nbsp;</span></td>
		  <td>{OUTBOX_IMG}</td>
		  <td><span class="cattitle">{OUTBOX} &nbsp;</span></td>
		  <td>{SAVEBOX_IMG}</td>
		  <td><span class="cattitle">{SAVEBOX} &nbsp;</span></td>
		</tr>
	  </table>
	</td>
  </tr>
</table><br />

<form method="post" name="privmsg_list" action="{S_PRIVMSGS_ACTION}">
  <table width="100%" cellspacing="2" cellpadding="2">
	<tr> 
	  <td class="left" valign="middle">{POST_PM_IMG}</td>
	  <td class="right" nowrap="nowrap" valign="bottom"><span class="gensmall">{L_DISPLAY_MESSAGES}: 
		<select name="msgdays">{S_SELECT_MSG_DAYS}
		</select></span>
		<input type="submit" value="{L_GO}" name="submit_msgdays" class="liteoption" />
		</td>
	</tr>
  </table>

  <table cellpadding="0" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th width="5%" nowrap="nowrap">&nbsp;{L_FLAG}&nbsp;</th>
	  <th width="55%" nowrap="nowrap">&nbsp;{L_SUBJECT}&nbsp;</th>
	  <th width="20%" nowrap="nowrap">&nbsp;{L_FROM_OR_TO}&nbsp;</th>
	  <th width="15%" nowrap="nowrap">&nbsp;{L_DATE}&nbsp;</th>
	  <th width="5%" nowrap="nowrap">&nbsp;{L_MARK}&nbsp;</th>
	</tr>
	<!-- BEGIN listrow -->
	<tr> 
	  <td class="{listrow.ROW_CLASS}" width="5%" valign="middle"><div class="center"><img src="{listrow.PRIVMSG_FOLDER_IMG}" alt="{listrow.L_PRIVMSG_FOLDER_ALT}" /></div></td>
	  <td width="55%" valign="middle" class="{listrow.ROW_CLASS}"><span class="topictitle">&nbsp;<a href="{listrow.U_READ}">{listrow.SUBJECT}</a></span></td>
	  <td width="20%" valign="middle" class="{listrow.ROW_CLASS}"><div class="center"><span class="name">&nbsp;<a href="{listrow.U_FROM_USER_PROFILE}">{listrow.FROM}</a></span></div></td>
	  <td width="15%" valign="middle" class="{listrow.ROW_CLASS}"><div class="center"><span class="postdetails">{listrow.DATE}</span></div></td>
	  <td width="5%" valign="middle" class="{listrow.ROW_CLASS}"><div class="center">
		<input type="checkbox" name="mark[]2" value="{listrow.S_MARK_ID}" />
		</div></td>
	</tr>
	<!-- END listrow -->
	<!-- BEGIN switch_no_messages -->
	<tr> 
	  <td class="row1" colspan="5" valign="middle"><div class="center"><span class="gen">{L_NO_MESSAGES}</span></div></td>
	</tr>
	<!-- END switch_no_messages -->
	<tr> 
	  <td class="catBottom" colspan="5"><div class="right"> {S_HIDDEN_FIELDS} 
		<input type="submit" name="save" value="{L_SAVE_MARKED}" class="mainoption" />
		&nbsp; 
		<input type="submit" name="delete" value="{L_DELETE_MARKED}" class="liteoption" />
		&nbsp; 
		<input type="submit" name="deleteall" value="{L_DELETE_ALL}" class="liteoption" />
	  </div></td>
	</tr>
  </table>

  <table width="100%" cellspacing="2" cellpadding="2">
	<tr> 
	  <td class="left" valign="middle"><span class="nav">{POST_PM_IMG}</span></td>
	  <td class="right" valign="top" nowrap="nowrap"><b><span class="gensmall">
	  {BOX_SIZE_STATUS} :: 
	  <a href="javascript:select_switch(true);">{L_MARK_ALL}</a> :: 
	  <a href="javascript:select_switch(false);">{L_UNMARK_ALL}</a></span></b><br /><span class="nav">{PAGINATION}<br /></span></td>
	</tr>
  </table>
</form>
