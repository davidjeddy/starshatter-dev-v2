<form method="post" action="{S_POST_DAYS_ACTION}">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td align="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{FORUM_NAME}
	</span></td>
  </tr>
</table><br />

  <table width="100%" cellspacing="2" cellpadding="2">
	<tr> 
	  <td class="left" valign="bottom" colspan="2"><a class="maintitle" href="{U_VIEW_FORUM}">{FORUM_NAME}</a><br /><span class="gensmall"><b>{L_MODERATOR}: {MODERATORS}</span></td>
	  <td class="right" valign="bottom"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" alt="{L_POST_NEW_TOPIC}" /></a></td>
	</tr>
  </table>

  <table cellpadding="0" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th colspan="2" nowrap="nowrap">&nbsp;{L_TOPICS}&nbsp;</th>
	  <th width="100" nowrap="nowrap">&nbsp;{L_AUTHOR}&nbsp;</th>
	  <th width="50" nowrap="nowrap">&nbsp;{L_REPLIES}&nbsp;</th>	  
	  <th width="50" nowrap="nowrap">&nbsp;{L_VIEWS}&nbsp;</th>
	  <th nowrap="nowrap">&nbsp;{L_LASTPOST}&nbsp;</th>
	</tr>
	<!-- BEGIN topicrow -->
	<tr> 
	  <td class="row2" valign="middle"><div class="center"><img src="{topicrow.TOPIC_FOLDER_IMG}" alt="{topicrow.L_TOPIC_FOLDER_ALT}" hspace="5" vspace="5" /></div></td>
	  
	  <td class="row1" width="100%"><span class="topictitle">{topicrow.NEWEST_POST_IMG}{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}">{topicrow.TOPIC_TITLE}</a></span>
	  <span class="gensmall"><br />{topicrow.GOTO_PAGE}</span></td>
		
	  <td class="row2" valign="middle"><div class="center"><span class="name">{topicrow.TOPIC_AUTHOR}</span></div></td>	
	  
	  <td class="row1" valign="middle"><div class="center"><span class="postdetails">{topicrow.REPLIES}</span></div></td>
	  
	  <td class="row2" valign="middle"><div class="center"><span class="postdetails">{topicrow.VIEWS}</span></div></td>
	  
	  <td class="row1" valign="middle" nowrap="nowrap"><div class="center"><span class="postdetails">{topicrow.LAST_POST_TIME}<br />{topicrow.LAST_POST_AUTHOR} {topicrow.LAST_POST_IMG}</span></div></td>
	</tr>
	<!-- END topicrow -->
	<!-- BEGIN switch_no_topics -->
	<tr> 
	  <td class="row1" colspan="6" height="30" valign="middle"><div class="center"><span class="gen">{L_NO_TOPICS}</span></div></td>
	</tr>
	<!-- END switch_no_topics -->
	<tr>
	  <td colspan="6" class="row2">
	  <span class="gensmall"><b>{LOGGED_IN_USER_LIST}</b></span>
	  </td>
	</tr>  
	<tr>
	  <td colspan="6" class="row3">
<table width="100%" cellspacing="0" cellpadding="0">
	<tr>
	<td class="row3" valign="top"><table cellspacing="3" cellpadding="0" width="100%">
			<tr>
				<td width="20"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" width="17" height="19" /></td>
				<td class="gensmall">{L_NEW_POSTS}</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" width="17" height="19" /></td>
				<td class="gensmall">{L_NO_NEW_POSTS}</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" ><img src="{FOLDER_ANNOUNCE_IMG}" alt="{L_ANNOUNCEMENT}" width="17" height="19" /></td>
				<td class="gensmall">{L_ANNOUNCEMENT}</td>
			</tr>
			<tr> 
				<td width="20"><img src="{FOLDER_HOT_NEW_IMG}" alt="{L_NEW_POSTS_HOT}" width="17" height="19" /></td>
				<td class="gensmall">{L_NEW_POSTS_HOT}</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20"><img src="{FOLDER_HOT_IMG}" alt="{L_NO_NEW_POSTS_HOT}" width="17" height="19" /></td>
				<td class="gensmall">{L_NO_NEW_POSTS_HOT}</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20"><img src="{FOLDER_STICKY_IMG}" alt="{L_STICKY}" width="17" height="19" /></td>
				<td class="gensmall">{L_STICKY}</td>
			</tr>
			<tr>
				<td width="20" class="gensmall"><img src="{FOLDER_LOCKED_NEW_IMG}" alt="{L_NEW_POSTS_TOPIC_LOCKED}" width="17" height="19" /></td>
				<td class="gensmall">{L_NEW_POSTS_LOCKED}</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" class="gensmall"><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_TOPIC_LOCKED}" width="17" height="19" /></td>
				<td class="gensmall">{L_NO_NEW_POSTS_LOCKED}</td>
			</tr>
		</table></td>	
		<td class="row3" width="35%"><div class="right"><span class="gensmall">{S_AUTH_LIST}</span></div></td>	
	</tr>
</table>	  
	  </td>
	</tr>	
	<tr> 
	  <td class="catBottom" valign="middle" colspan="6"><div class="center"><span class="genmed">{L_DISPLAY_TOPICS}:&nbsp;{S_SELECT_TOPIC_DAYS}&nbsp;</span> 
	  <input type="submit" class="liteoption" value="{L_GO}" name="submit" />
	  </div></td>
	</tr>
  </table>

  <table width="100%" cellspacing="2" cellpadding="2">
	<tr> 
	  <td class="left" valign="top" nowrap="nowrap"><span class="gensmall"><a href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a></span></td>	
	  <td class="right" valign="top" width="50"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" alt="{L_POST_NEW_TOPIC}" /></a></td>	  
	</tr>
	<tr>
	  <td class="left"><span class="nav">{PAGE_NUMBER}</span></td>
	  <td class="right" nowrap="nowrap"><span class="nav">{PAGINATION}</span></td>	  
	</tr>
  </table>
</form>