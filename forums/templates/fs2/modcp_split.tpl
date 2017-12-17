
<form method="post" action="{S_SPLIT_ACTION}">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	<a href="{U_VIEW_FORUM}">{FORUM_NAME}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{L_SPLIT_TOPIC}
	</span></td>
  </tr>
</table><br />

  <table width="100%" cellpadding="0" cellspacing="1" class="forumline">
	<tr> 
	  <th colspan="3" nowrap="nowrap">{L_SPLIT_TOPIC}</th>
	</tr>
	<tr> 
	  <td class="row3" colspan="3"><div class="center"><span class="gensmall">{L_SPLIT_TOPIC_EXPLAIN}</span></div></td>
	</tr>
	<tr> 
	  <td class="row2" nowrap="nowrap"><span class="gen">{L_SPLIT_SUBJECT}</span></td>
	  <td class="row1" colspan="2"> 
		<input type="text" size="35" style="width: 350px" maxlength="100" name="subject" class="post" />
		</td>
	</tr>
	<tr> 
	  <td class="row2" nowrap="nowrap"><span class="gen">{L_SPLIT_FORUM}</span></td>
	  <td class="row1" colspan="2">{S_FORUM_SELECT}</td>
	</tr>
	<tr> 
	  <td class="catHead" colspan="3"> 
		<table width="60%" cellspacing="0" cellpadding="0">
		  <tr> 
			<td width="50%" class="center"> 
			  <input class="liteoption" type="submit" name="split_type_all" value="{L_SPLIT_POSTS}" />
			</td>
			<td width="50%" class="center"> 
			  <input class="liteoption" type="submit" name="split_type_beyond" value="{L_SPLIT_AFTER}" />
			</td>
		  </tr>
		</table>
	  </td>
	</tr>
	<tr> 
	  <th nowrap="nowrap">{L_AUTHOR}</th>
	  <th nowrap="nowrap">{L_MESSAGE}</th>
	  <th nowrap="nowrap">{L_SELECT}</th>
	</tr>
	<!-- BEGIN postrow -->
	<tr> 
	  <td valign="top" class="{postrow.ROW_CLASS}"><span class="name"><a name="{postrow.U_POST_ID}"></a>{postrow.POSTER_NAME}</span></td>
	  <td width="100%" valign="top" class="{postrow.ROW_CLASS}"> 
		<table width="100%" cellspacing="0" cellpadding="3">
		  <tr> 
			<td valign="middle"><img src="templates/fs2/images/icon_minipost.gif" alt="{L_POST}"><span class="postdetails">{L_POSTED}: 
			  {postrow.POST_DATE}&nbsp;&nbsp;&nbsp;&nbsp;{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></td>
		  </tr>
		  <tr> 
			<td valign="top"> 
			  <hr size="1" />
			  <span class="postbody">{postrow.MESSAGE}</span></td> 
		  </tr>
		</table>
	  </td>
	  <td width="5%" class="{postrow.ROW_CLASS}"><div class="center">{postrow.S_SPLIT_CHECKBOX}</div></td>
	</tr>
	<tr> 
	  <td colspan="3" height="1" class="row3"><img src="templates/fs2/images/spacer.gif" width="1" height="1" alt="."></td>
	</tr>
	<!-- END postrow -->
	<tr> 
	  <td class="catBottom" valign="top" colspan="3"> 
		<table width="60%" cellspacing="0" cellpadding="0">
		  <tr> 
			<td width="50%" class="center"> 
			  <input class="liteoption" type="submit" name="split_type_all" value="{L_SPLIT_POSTS}" />
			</td>
			<td width="50%" class="center"> 
			  <input class="liteoption" type="submit" name="split_type_beyond" value="{L_SPLIT_AFTER}" />
			  {S_HIDDEN_FIELDS} </td>
		  </tr>
		</table>
	  </td>
	</tr>
  </table></form>