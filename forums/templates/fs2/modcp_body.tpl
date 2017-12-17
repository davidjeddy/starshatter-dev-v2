
<form method="post" action="{S_MODCP_ACTION}">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	<a href="{U_VIEW_FORUM}">{FORUM_NAME}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{L_MOD_CP}
	</span></td>
  </tr>
</table><br />

  <table width="100%" cellpadding="0" cellspacing="1" class="forumline">
	<tr> 
	  <td class="catHead" colspan="5"><div class="center"><span class="cattitle">{L_MOD_CP}</span></div></td>
	</tr>
	<tr> 
	  <td class="row3" colspan="5"><div class="center"><span class="gensmall">{L_MOD_CP_EXPLAIN}</span></div></td>
	</tr>
	<tr> 
	  <th width="4%" nowrap="nowrap">&nbsp;</th>
	  <th nowrap="nowrap">&nbsp;{L_TOPICS}&nbsp;</th>
	  <th width="8%" nowrap="nowrap">&nbsp;{L_REPLIES}&nbsp;</th>
	  <th width="17%" nowrap="nowrap">&nbsp;{L_LASTPOST}&nbsp;</th>
	  <th width="5%" nowrap="nowrap">&nbsp;{L_SELECT}&nbsp;</th>
	</tr>
	<!-- BEGIN topicrow -->
	<tr> 
	  <td class="row1" valign="middle"><div class="center"><img src="{topicrow.TOPIC_FOLDER_IMG}" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></div></td>
	  
	  <td class="row1">&nbsp;<span class="topictitle">{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}">{topicrow.TOPIC_TITLE}</a></span></td>
	  
	  <td class="row2" valign="middle"><div class="center"><span class="postdetails">{topicrow.REPLIES}</span></div></td>
	  
	  <td class="row1" valign="middle"><div class="center"><span class="postdetails">{topicrow.LAST_POST_TIME}</span></div></td>
	  
	  <td class="row2" valign="middle"><div class="center"> 
		<input type="checkbox" name="topic_id_list[]" value="{topicrow.TOPIC_ID}" />
	  </div></td>
	</tr>
	<!-- END topicrow -->
	<tr class="right"> 
	  <td class="catBottom" colspan="5" valign="top">{S_HIDDEN_FIELDS} 
		<input type="submit" name="delete" class="liteoption" value="{L_DELETE}" />
		&nbsp; 
		<input type="submit" name="move" class="liteoption" value="{L_MOVE}" />
		&nbsp; 
		<input type="submit" name="lock" class="liteoption" value="{L_LOCK}" />
		&nbsp; 
		<input type="submit" name="unlock" class="liteoption" value="{L_UNLOCK}" />
	  </td>
	</tr>
  </table>

  <table width="100%" cellspacing="2" cellpadding="2">
  <tr> 
	<td class="left" valign="middle"><span class="nav">{PAGE_NUMBER}</b></span></td>
	<td class="right" valign="top" nowrap="nowrap"><span class="nav">{PAGINATION}</span></td>
  </tr>
</table>
</form>