<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	<a href="{U_VIEW_FORUM}">{FORUM_NAME}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />	
	{TOPIC_TITLE}
	</span></td>
  </tr>
</table><br />

{POLL_DISPLAY}

<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr> 
	<td class="left" valign="bottom" colspan="2"><a class="maintitle" href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a><br />
	<span class="gensmall"><b>{PAGINATION}</b></span></td>
	<td class="right" valign="bottom" nowrap="nowrap"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a></span></td>	
  </tr>
</table>

<table class="forumline" width="100%" cellspacing="1" cellpadding="0">
	<tr>
		<th width="130" nowrap="nowrap">{L_AUTHOR}</th>
		<th nowrap="nowrap">{L_MESSAGE}</th>
	</tr>
	<!-- BEGIN postrow -->
  <tr> 
	<td width="140" valign="top" class="row2"><div class="center">
	<span class="name"><a name="{postrow.U_POST_ID}"></a><b>{postrow.POSTER_NAME}</b></span><br /><span class="postdetails">{postrow.POSTER_RANK}</span><br />{postrow.RANK_IMAGE}<br />
	
<table width="90%" cellspacing="1" cellpadding="0" class="forumline">
  <tr>
	<td class="row1"><div class="left"><span class="postdetails">
	{postrow.POSTER_POSTS}<br />{postrow.POSTER_JOINED}<br />{postrow.POSTER_FROM}
	</span></div></td>
  </tr>
</table>
	
	</span></div></td>  
	<td class="row1" valign="top">	
<table width="100%" cellspacing="0" cellpadding="0">
		<tr>
			<td><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" /></a><span class="postdetails">{L_POSTED}: {postrow.POST_DATE}</span></td>
			<td valign="top" class="right" nowrap="nowrap">{postrow.QUOTE_IMG} {postrow.EDIT_IMG} {postrow.DELETE_IMG} {postrow.IP_IMG}</td>
		</tr>
		<tr> 
			<td colspan="2"><hr /></td>
		</tr>
		<tr>
			<td colspan="2">
			<table width="100%" cellspacing="0" cellpadding="4"><tr><td>
			<span class="postbody">{postrow.MESSAGE}</span>
			<span class="gen">{postrow.SIGNATURE}</span>
			<span class="gensmall">{postrow.EDITED_MESSAGE}</span>
			</td></tr></table>
			</td>
		</tr>
</table>
	</td>
  </tr>
  <tr> 
	<td class="row2" width="140" valign="middle"><div class="center"><span class="nav"><a href="#top">{L_BACK_TO_TOP}</a></span></div></td>
	<td class="row1" valign="bottom" nowrap="nowrap"><table cellspacing="0" cellpadding="0" border="0">
		<tr> 
			<td valign="middle" nowrap="nowrap">{postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.EMAIL_IMG} {postrow.WWW_IMG} {postrow.AIM_IMG} {postrow.YIM_IMG} {postrow.MSN_IMG}{postrow.ICQ_IMG}</td>
		</tr>
	</table></td>
  </tr>	
  <tr> 
	<td class="spaceRow" colspan="2" height="5"><img src="templates/fs2/images/spacer.gif" alt="" width="1" height="1" /></td>
  </tr>
	<!-- END postrow -->
  <tr> 
		<td class="catBottom" colspan="2"><div class="center"><table cellspacing="0" cellpadding="0">
			<tr><form method="post" action="{S_POST_DAYS_ACTION}">
				<td class="center"><span class="gensmall">{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}&nbsp;</span><input type="submit" value="{L_GO}" class="liteoption" name="submit" /></span></td>
			</form></tr>
		</table></div></td>
	</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2">
  <tr> 
  	<td class="left" valign="top"><span class="gensmall">{S_WATCH_TOPIC}</span></td>
	<td class="right" valign="top"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a></span></td>

  </tr>
  <tr>
	<td align="left"><span class="nav">{PAGE_NUMBER}</span></td>
	<td align="right" nowrap="nowrap"><span class="nav">{PAGINATION}</span></td>	
  </tr>
  <tr>
  	<td colspan="2" class="center">{S_TOPIC_ADMIN}</td>
  </tr>	
</table>
