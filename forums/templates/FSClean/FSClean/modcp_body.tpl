
<form method="post" action="{S_MODCP_ACTION}">
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center" class="forumline">
  <tr> 
	<td align="left"><span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a> -> <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></span></td>
  </tr>
</table>
<br />
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="14">
  <tr> 
    <td rowspan="1" colspan="1" width="1%" height="14" background="templates/FSClean/images/front/Image2_1x2.gif" align="left"> 
      <img name="Image20" src="templates/FSClean/images/front/Image2_1x1.gif" width="5" height="14" border="0"></td>
    <td rowspan="1" colspan="1" width="98%" height="14" background="templates/FSClean/images/front/Image2_1x2.gif" align="center" valign="top" nowrap>     
</td>
    <td rowspan="1" colspan="1" width="1%" height="14" align="right" background="templates/FSClean/images/front/Image2_1x2.gif"> 
      <img name="Image22" src="templates/FSClean/images/front/Image2_1x3.gif" width="14" height="14" border="0"></td>
  </tr>
</table>
  <table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
	<tr> 
	  <td class="catHead" colspan="5" align="center" height="28"><span class="cattitle">{L_MOD_CP}</span> 
	  </td>
	</tr>
	<tr> 
	  <td class="spaceRow" colspan="5" align="center"><span class="gensmall">{L_MOD_CP_EXPLAIN}</span></td>
	</tr>
	<tr> 
	  <th width="4%" class="thLeft" nowrap="nowrap">&nbsp;</th>
	  <th nowrap="nowrap">&nbsp;{L_TOPICS}&nbsp;</th>
	  <th width="8%" nowrap="nowrap">&nbsp;{L_REPLIES}&nbsp;</th>
	  <th width="17%" nowrap="nowrap">&nbsp;{L_LASTPOST}&nbsp;</th>
	  <th width="5%" class="thRight" nowrap="nowrap">&nbsp;{L_SELECT}&nbsp;</th>
	</tr>
	<!-- BEGIN topicrow -->
	<tr> 
	  <td class="row1" align="center" valign="middle"><img src="{topicrow.TOPIC_FOLDER_IMG}" width="19" height="18" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
	  <td class="row1">&nbsp;<span class="topictitle">{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span></td>
	  <td class="row2" align="center" valign="middle"><span class="postdetails">{topicrow.REPLIES}</span></td>
	  <td class="row1" align="center" valign="middle"><span class="postdetails">{topicrow.LAST_POST_TIME}</span></td>
	  <td class="row2" align="center" valign="middle"> 
		<input type="checkbox" name="topic_id_list[]" value="{topicrow.TOPIC_ID}" />
	  </td>
	</tr>
	<!-- END topicrow -->
	<tr align="right"> 
	  <td class="catBottom" colspan="5" height="29"> {S_HIDDEN_FIELDS} 
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
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="14">
  <tr> 
    <td rowspan="1" colspan="1" width="1%" height="14" background="templates/FSClean/images/front/Image2_1x2down.gif" align="left"> 
      <img name="Image20" src="templates/FSClean/images/front/Image2_1x1down.gif" width="5" height="14" border="0"></td>
    <td rowspan="1" colspan="1" width="98%" height="14" background="templates/FSClean/images/front/Image2_1x2down.gif"> 
    </td>
    <td rowspan="1" colspan="1" width="1%" height="14" align="right" background="templates/FSClean/images/front/Image2_1x2down.gif"> 
      <img name="Image22" src="templates/FSClean/images/front/Image2_1x3down.gif" width="14" height="14" border="0"></td>
  </tr>
</table>
<br />
  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2" class="forumline">
  <tr> 
	<td align="left" valign="middle"><span class="nav">{PAGE_NUMBER}</b></span></td>
	<td align="right" valign="top" nowrap="nowrap"><span class="gensmall">{S_TIMEZONE}</span><br /><span class="nav">{PAGINATION}</span></td>
  </tr>
</table>
{S_HIDDEN_FIELDS}</form>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
	<td align="right">{JUMPBOX}</td>
  </tr>
</table>
