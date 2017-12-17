<form action="{S_GROUPCP_ACTION}" method="post">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	<a href="{U_GROUP_CP}">{L_USERGROUPS}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{GROUP_NAME}
	</span></td>
  </tr>
</table><br />

<table class="forumline" width="100%" cellspacing="1" cellpadding="0">
	<tr> 
		<th colspan="7">{L_GROUP_INFORMATION}</th>
	</tr>
	<tr> 
		<td class="row2" width="20%"><span class="gen">{L_GROUP_NAME}:</span></td>
		<td class="row1"><span class="gen"><b>{GROUP_NAME}</b></span></td>
	</tr>
	<tr> 
		<td class="row2" width="20%"><span class="gen">{L_GROUP_DESC}:</span></td>
		<td class="row1"><span class="gen">{GROUP_DESC}</span></td>
	</tr>
	<tr> 
		<td class="row2" width="20%"><span class="gen">{L_GROUP_MEMBERSHIP}:</span></td>
		<td class="row1"><span class="gen">{GROUP_DETAILS} &nbsp;&nbsp;</span>
		<!-- BEGIN switch_subscribe_group_input -->
		<input class="mainoption" type="submit" name="joingroup" value="{L_JOIN_GROUP}" />
		<!-- END switch_subscribe_group_input -->
		<!-- BEGIN switch_unsubscribe_group_input -->
		<input class="mainoption" type="submit" name="unsub" value="{L_UNSUBSCRIBE_GROUP}" />
		<!-- END switch_unsubscribe_group_input -->
		</td>
	</tr>
	<!-- BEGIN switch_mod_option -->
	<tr> 
		<td class="row2" width="20%"><span class="gen">{L_GROUP_TYPE}:</span></td>
		<td class="row1"><input type="radio" name="group_type" value="{S_GROUP_OPEN_TYPE}" {S_GROUP_OPEN_CHECKED} /> 
		<span class="gen">{L_GROUP_OPEN} &nbsp;&nbsp;</span>
		<input type="radio" name="group_type" value="{S_GROUP_CLOSED_TYPE}" {S_GROUP_CLOSED_CHECKED} />	
		<span class="gen">{L_GROUP_CLOSED} &nbsp;&nbsp;</span>
		<input type="radio" name="group_type" value="{S_GROUP_HIDDEN_TYPE}" {S_GROUP_HIDDEN_CHECKED} />	
		<span class="gen">{L_GROUP_HIDDEN} &nbsp;&nbsp;</span>
		<input class="mainoption" type="submit" name="groupstatus" value="{L_UPDATE}" /></span></td>
	</tr>
	<!-- END switch_mod_option -->
</table>{S_HIDDEN_FIELDS}</form>

<form action="{S_GROUPCP_ACTION}" method="post" name="post">
<table width="100%" cellpadding="0" cellspacing="1" class="forumline">
	<tr> 
	  <th>{L_PM}</th>
	  <th>{L_USERNAME}</th>
	  <th>{L_POSTS}</th>
	  <th>{L_FROM}</th>
	  <th>{L_EMAIL}</th>
	  <th>{L_WEBSITE}</th>
	  <th>{L_SELECT}</th>
	</tr>
	<tr> 
	  <td class="catHead" colspan="8"><span class="cattitle">{L_GROUP_MODERATOR}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><div class="center"> {MOD_PM_IMG} </div></td>
	  <td class="row1"><span class="gen"><div class="center"><a href="{U_MOD_VIEWPROFILE}">{MOD_USERNAME}</a></span></div></td>
	  <td class="row1" valign="middle"><div class="center"><span class="gen">{MOD_POSTS}</span></div></td>
	  <td class="row1" valign="middle"><div class="center"><span class="gen">{MOD_FROM}</span></div></td>
	  <td class="row1" valign="middle"><div class="center"><span class="gen">{MOD_EMAIL_IMG}</span></div></td>
	  <td class="row1"><div class="center">{MOD_WWW_IMG}</div></td>
	  <td class="row1"><div class="center"> &nbsp; </div></td>
	</tr>
	<tr> 
	  <td class="catHead" colspan="8"><span class="cattitle">{L_GROUP_MEMBERS}</span></td>
	</tr>
	<!-- BEGIN member_row -->
	<tr> 
	  <td class="{member_row.ROW_CLASS}"><div class="center"> {member_row.PM_IMG} </div></td>
	  <td class="{member_row.ROW_CLASS}"><div class="center"><span class="gen"><a href="{member_row.U_VIEWPROFILE}">{member_row.USERNAME}</a></span></div></td>
	  <td class="{member_row.ROW_CLASS}"><div class="center"><span class="gen">{member_row.POSTS}</span></div></td>
	  <td class="{member_row.ROW_CLASS}"><div class="center"><span class="gen"> {member_row.FROM} </span></div></td>
	  <td class="{member_row.ROW_CLASS}" valign="middle"><div class="center"><span class="gen">{member_row.EMAIL_IMG}</span></div></td>
	  <td class="{member_row.ROW_CLASS}"><div class="center"> {member_row.WWW_IMG}</div></td>
	  <td class="{member_row.ROW_CLASS}"><div class="center"> 
	  <!-- BEGIN switch_mod_option -->
	  <input type="checkbox" name="members[]" value="{member_row.USER_ID}" /> 
	  <!-- END switch_mod_option -->
	  </div></td>
	</tr>
	<!-- END member_row -->

	<!-- BEGIN switch_no_members -->
	<tr> 
	  <td class="row1" colspan="7"><div class="center"><span class="gen">{L_NO_MEMBERS}</span></div></td>
	</tr>
	<!-- END switch_no_members -->

	<!-- BEGIN switch_hidden_group -->
	<tr> 
	  <td class="row1" colspan="7"><div class="center"><span class="gen">{L_HIDDEN_MEMBERS}</span></div></td>
	</tr>
	<!-- END switch_hidden_group -->

	<!-- BEGIN switch_mod_option -->
	<tr>
		<td class="catBottom" colspan="8" valign="top"><div class="right">
		<input type="submit" name="remove" value="{L_REMOVE_SELECTED}" class="mainoption" />
		</div></td>
	</tr>
	<!-- END switch_mod_option -->
</table>

<table width="100%" cellspacing="2" cellpadding="2">
	<tr>
		<td class="left" valign="top">
		<!-- BEGIN switch_mod_option -->
		<input type="text"  class="post" name="username" maxlength="50" size="20" /> <input type="submit" name="add" value="{L_ADD_MEMBER}" class="mainoption" /> <input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="liteoption" onclick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" />
		<!-- END switch_mod_option -->
		</td>
	</tr>
	<tr>
		<td class="left" valign="middle"><span class="nav">{PAGINATION}</span></td>
		<td class="right" valign="middle"><span class="nav">{PAGE_NUMBER}</span></td>
	</tr>
</table>

{PENDING_USER_BOX}

{S_HIDDEN_FIELDS}</form>
