
<form method="post" action="{S_MODE_ACTION}">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{L_MEMBERLIST}
	</span></td>
  </tr>
</table><br />

  <table width="100%" cellspacing="2" cellpadding="2">
	<tr> 
	  <td class="right" nowrap="nowrap"><span class="genmed">{L_SELECT_SORT_METHOD}:&nbsp;{S_MODE_SELECT}&nbsp;&nbsp;{L_ORDER}&nbsp;{S_ORDER_SELECT}&nbsp;&nbsp;</span> 
	  <input type="submit" name="submit" value="{L_SUBMIT}" class="liteoption" />
	  </td>
	</tr>
  </table>
  <table width="100%" cellpadding="0" cellspacing="1" class="forumline">
	<tr> 
	  <th height="25" nowrap="nowrap">#</th>
	  <th nowrap="nowrap">&nbsp;</th>
	  <th nowrap="nowrap">{L_USERNAME}</th>
	  <th nowrap="nowrap">{L_EMAIL}</th>
	  <th nowrap="nowrap">{L_FROM}</th>
	  <th nowrap="nowrap">{L_JOINED}</th>
	  <th nowrap="nowrap">{L_POSTS}</th>
	  <th nowrap="nowrap">{L_WEBSITE}</th>
	</tr>
	<!-- BEGIN memberrow -->
	<tr> 
	  <td class="{memberrow.ROW_CLASS}"><div class="center"><span class="gen">&nbsp;{memberrow.ROW_NUMBER}&nbsp;</span></div></td>
	  <td class="{memberrow.ROW_CLASS}"><div class="center">&nbsp;{memberrow.PM_IMG}&nbsp;</div></td>
	  <td class="{memberrow.ROW_CLASS}"><div class="center"><span class="gen"><a href="{memberrow.U_VIEWPROFILE}">{memberrow.USERNAME}</a></span></div></td>
	  <td class="{memberrow.ROW_CLASS}" valign="middle"><div class="center">&nbsp;{memberrow.EMAIL_IMG}&nbsp;</div></td>
	  <td class="{memberrow.ROW_CLASS}" valign="middle"><div class="center"><span class="gen">{memberrow.FROM}</span></div></td>
	  <td class="{memberrow.ROW_CLASS}" valign="middle"><div class="center"><span class="gensmall">{memberrow.JOINED}</span></div></td>
	  <td class="{memberrow.ROW_CLASS}" valign="middle"><div class="center"><span class="gen">{memberrow.POSTS}</span></div></td>
	  <td class="{memberrow.ROW_CLASS}"><div class="center">&nbsp;{memberrow.WWW_IMG}&nbsp;</div></td>
	</tr>
	<!-- END memberrow -->
	<tr> 
	  <td class="catBottom" colspan="8"></td>
	</tr>
  </table>

<table width="100%" cellspacing="0" cellpadding="0">
  <tr> 
	<td><span class="nav">{PAGE_NUMBER}</span></td>
	<td align="right"><span class="nav">{PAGINATION}</span></td>
  </tr>
</table></form>