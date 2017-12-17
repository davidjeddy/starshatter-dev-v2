<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td align="left"><span class="nav">
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

<table cellpadding="0" cellspacing="1" width="100%" class="forumline">
  <tr> 
	<th width="150" nowrap="nowrap">{L_AUTHOR}</th>
	<th width="100%" nowrap="nowrap">{L_MESSAGE}</th>
  </tr>
  <!-- BEGIN searchresults -->
  <tr> 
	<td class="row3" colspan="2"><span class="topictitle"><img src="templates/fs2/images/folder.gif" align="absmiddle">&nbsp; {L_TOPIC}:&nbsp;<a href="{searchresults.U_TOPIC}">{searchresults.TOPIC_TITLE}</a></span></td>
  </tr>
  <tr> 
	<td width="150" valign="top" class="row1" rowspan="2"><span class="name"><b>{searchresults.POSTER_NAME}</b></span><br /><br />
	<span class="postdetails">{L_REPLIES}: <b>{searchresults.TOPIC_REPLIES}</b><br />
	{L_VIEWS}: <b>{searchresults.TOPIC_VIEWS}</b></span><br /></td>
	
	<td width="100%" valign="top" class="row1"><img src="{searchresults.MINI_POST_IMG}" width="12" height="9" alt="{searchresults.L_MINI_POST_ALT}" /><span class="postdetails">{L_FORUM}:&nbsp;<b><a href="{searchresults.U_FORUM}">{searchresults.FORUM_NAME}</a></b>&nbsp; &nbsp;{L_POSTED}: {searchresults.POST_DATE}&nbsp; &nbsp;{L_SUBJECT}: <b><a href="{searchresults.U_POST}">{searchresults.POST_SUBJECT}</a></b></span></td>
  </tr>
  <tr>
	<td valign="top" class="row1"><span class="postbody">{searchresults.MESSAGE}</span></td>
  </tr>
  <!-- END searchresults -->
  <tr> 
	<td class="catBottom" colspan="2"></td>
  </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2">
  <tr> 
	<td class="left" valign="top"><span class="nav">{PAGE_NUMBER}</span></td>
	<td class="right" valign="top" nowrap="nowrap"><span class="nav">{PAGINATION}</span><br /></td>
  </tr>
</table>
