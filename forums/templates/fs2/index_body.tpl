 <table width="100%" cellspacing="0" cellpadding="0">
  <tr> 
	<td class="left" valign="bottom"><span class="gensmall">
	{CURRENT_TIME}<br />
	<!-- BEGIN switch_user_logged_in -->
	{LAST_VISIT_DATE}
	<!-- END switch_user_logged_in -->
	</span></td>
	<td class="right" valign="bottom"><span class="gensmall">
	<!-- BEGIN switch_user_logged_in -->
	<a href="{U_SEARCH_SELF}">{L_SEARCH_SELF}</a><br />	
	<a href="{U_SEARCH_NEW}">{L_SEARCH_NEW}</a>
	<!-- END switch_user_logged_in -->
	</span></td>
  </tr>
</table>

<table width="100%" cellpadding="0" cellspacing="1" class="forumline">
  <tr> 
	<th colspan="2" nowrap="nowrap">&nbsp;{L_FORUM}&nbsp;</th>
	<th width="50" nowrap="nowrap">&nbsp;{L_TOPICS}&nbsp;</th>
	<th width="50" nowrap="nowrap">&nbsp;{L_POSTS}&nbsp;</th>
	<th nowrap="nowrap">&nbsp;{L_LASTPOST}&nbsp;</th>
  </tr>
  <!-- BEGIN catrow -->  
  <tr> 
	<td class="catHead" colspan="5"><div class="left"><span class="cattitle"><a href="{catrow.U_VIEWCAT}">{catrow.CAT_DESC}</a></span></div></td>
  </tr>
  <!-- BEGIN forumrow -->
  <tr> 
	<td class="row2" valign="middle"><div class="center"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" hspace="5" vspace="5" /></div></td>
	
	<td class="row1" width="100%"><div class="left"><span class="forumlink"><a href="{catrow.forumrow.U_VIEWFORUM}">{catrow.forumrow.FORUM_NAME}</a></span><br />
	<span class="genmed">{catrow.forumrow.FORUM_DESC}</span></div></td>
	
	<td class="row2" valign="middle"><div class="center"><span class="gensmall">{catrow.forumrow.TOPICS}</span></div></td>
	
	<td class="row2" valign="middle"><div class="center"><span class="gensmall">{catrow.forumrow.POSTS}</span></div></td>
	
	<td class="row2" valign="middle" nowrap="nowrap"><div class="center"><span class="gensmall">{catrow.forumrow.LAST_POST}</span></div></td>
  </tr>
  <!-- END forumrow -->  
  <!-- END catrow -->
</table>
<table width="100%" cellspacing="0" cellpadding="2">
  <tr> 
	<td class="left"><span class="gensmall"><a href="{U_MARK_READ}">{L_MARK_FORUMS_READ}</a></span></td>
	<td class="right"><span class="gensmall"><a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a></span></td>
  </tr>
</table><br />

<table width="100%" cellpadding="0" cellspacing="1" border="0" class="forumline">
  <tr> 
	<th colspan="2"><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a></th>
  </tr>
  <tr> 
	<td class="catHead" colspan="2"><div class="center"><span class="gensmall">{L_ONLINE_EXPLAIN}</span></div></td>
  </tr>  
  <tr> 
	<td class="row1" width="40%"><div class="left"><span class="gensmall">
	{TOTAL_USERS}<br />{NEWEST_USER}<br />{TOTAL_POSTS}
	</span></div></td>
	<td class="row1"><div class="right"><span class="gensmall">
	{TOTAL_USERS_ONLINE}<br />{RECORD_USERS}<br />[ {L_WHOSONLINE_ADMIN} ] &nbsp; [ {L_WHOSONLINE_MOD} ]
	</span></div></td>	
  </tr>
  <tr> 
	<td class="row2" colspan="2"><div class="center"><span class="gensmall">{LOGGED_IN_USER_LIST}</span></div></td>
  </tr>   
</table><br />

<div class="center"><table cellspacing="3" cellpadding="0">
  <tr> 
	<td width="20"><img src="templates/fs2/images/folder_new.gif" alt="{L_NEW_POSTS}"/></td>
	<td><span class="gensmall">{L_NEW_POSTS}</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20"><img src="templates/fs2/images/folder.gif" alt="{L_NO_NEW_POSTS}" /></td>
	<td><span class="gensmall">{L_NO_NEW_POSTS}</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20"><img src="templates/fs2/images/folder_lock.gif" alt="{L_FORUM_LOCKED}" /></td>
	<td><span class="gensmall">{L_FORUM_LOCKED}</span></td>
  </tr>
</table></div>
