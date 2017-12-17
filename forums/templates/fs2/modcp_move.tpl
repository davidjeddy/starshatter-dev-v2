
<form action="{S_MODCP_ACTION}" method="post">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{MESSAGE_TITLE}
	</span></td>
  </tr>
</table><br />
  <table width="100%" cellpadding="0" cellspacing="1" class="forumline">
	<tr> 
	  <th><b>{MESSAGE_TITLE}</b></th>
	</tr>
	<tr> 
	  <td class="row1"> 
		<table width="100%" cellspacing="0" cellpadding="1">
		  <tr> 
			<td>&nbsp;</td>
		  </tr>
		  <tr> 
			<td class="center"><span class="gen">{L_MOVE_TO_FORUM} &nbsp; {S_FORUM_SELECT}<br /><br />
			  <input type="checkbox" name="move_leave_shadow" checked="checked" />{L_LEAVESHADOW}<br />
			  <br />
			  {MESSAGE_TEXT}</span><br />
			  <br />
			  {S_HIDDEN_FIELDS} 
			  <input class="mainoption" type="submit" name="confirm" value="{L_YES}" />
			  &nbsp;&nbsp; 
			  <input class="liteoption" type="submit" name="cancel" value="{L_NO}" />
			</td>
		  </tr>
		  <tr> 
			<td>&nbsp;</td>
		  </tr>
		</table>
	  </td>
	</tr>
  </table></form>