<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	<a href="{U_SEARCH}">{L_SEARCH}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{L_SEARCH_MATCHES}
	</span></td>
  </tr>
</table><br />
 
<table width="100%" cellspacing="2" cellpadding="2">
  <tr> 
	<td class="left" valign="bottom"><span class="maintitle">{L_SEARCH_MATCHES}</span><br /></td>
  </tr>
</table>

<table width="100%" cellpadding="0" cellspacing="1" class="forumline">
  <tr> 
	<th width="4%" nowrap="nowrap">&nbsp;</th>
	<th nowrap="nowrap">&nbsp;{L_FORUM}&nbsp;</th>
	<th nowrap="nowrap">&nbsp;{L_TOPICS}&nbsp;</th>
	<th nowrap="nowrap">&nbsp;{L_AUTHOR}&nbsp;</th>
	<th nowrap="nowrap">&nbsp;{L_REPLIES}&nbsp;</th>
	<th nowrap="nowrap">&nbsp;{L_VIEWS}&nbsp;</th>
	<th nowrap="nowrap">&nbsp;{L_LASTPOST}&nbsp;</th>
  </tr>
  <!-- BEGIN searchresults -->
  <tr> 
	<td class="row1" valign="middle"><div class="center"><img src="{searchresults.TOPIC_FOLDER_IMG}" alt="{searchresults.L_TOPIC_FOLDER_ALT}" /></div></td>
	
	<td class="row1"><span class="forumlink"><a href="{searchresults.U_VIEW_FORUM}">{searchresults.FORUM_NAME}</a></span></td>
	
	<td class="row2"><span class="topictitle">{searchresults.NEWEST_POST_IMG}{searchresults.TOPIC_TYPE}<a href="{searchresults.U_VIEW_TOPIC}">{searchresults.TOPIC_TITLE}</a></span><br /><span class="gensmall">{searchresults.GOTO_PAGE}</span></td>
	
	<td class="row1" valign="middle"><div class="center"><span class="name">{searchresults.TOPIC_AUTHOR}</span></div></td>
	
	<td class="row2" valign="middle"><div class="center"><span class="postdetails">{searchresults.REPLIES}</span></div></td>
	
	<td class="row1"valign="middle"><div class="center"><span class="postdetails">{searchresults.VIEWS}</span></div></td>
	
	<td class="row2" valign="middle" nowrap="nowrap"><div class="center"><span class="postdetails">{searchresults.LAST_POST_TIME}<br />{searchresults.LAST_POST_AUTHOR} {searchresults.LAST_POST_IMG}</span></div></td>
  </tr>
  <!-- END searchresults -->
  <tr> 
	<td class="catBottom" colspan="7" valign="middle"></td>
  </tr>
</table>

<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
  <tr> 
	<td class="left" valign="top"><span class="nav">{PAGE_NUMBER}</span></td>
	<td class="right" valign="top" nowrap="nowrap"><span class="nav">{PAGINATION}</span><br /></td>
  </tr>
</table>
