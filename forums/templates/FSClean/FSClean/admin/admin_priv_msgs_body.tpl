<b>{INFO_MESSAGE}</b><br />
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
	<td class="gen">
		{L_EXPLAIN_MODES}<br /><br />
		<li>{L_MODE_1}
		<li>{L_MODE_2}
		<li>{L_MODE_3}
		<li>{L_MODE_4}
		<li>{L_MODE_5}
		<li>{L_MODE_6}
	</td>
	</tr>
</table>
<form method="post" action="{S_MODE_ACTION}">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
	  <td align="left"><span class="nav">{L_PRIVATE_MESSAGES}</span></td>
	  <td align="right" nowrap="nowrap"><span class="genmed">{L_SELECT_SORT_METHOD}:&nbsp;{S_MODE_SELECT}&nbsp;&nbsp;{L_ORDER}&nbsp;{S_ORDER_SELECT}&nbsp;&nbsp; 
		<input type="submit" name="submit" value="{L_SUBMIT}" class="liteoption" />
		</span></td>
	</tr>
  </table>
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr> 
	  <th height="25" class="thCornerL">#</th>
	  <th class="thTop">{L_SUBJECT}</th>
	  <th class="thTop">{L_FROM}</th>
	  <th class="thTop">{L_TO}</th>
	  <th class="thTop">{L_SENT_DATE}</th>
	  <th class="thCornerR">&nbsp;</th>
	</tr>
	<!-- BEGIN memberrow -->
	<tr> 
	  <td class="{memberrow.ROW_CLASS}" align="center"><span class="gen">&nbsp;{memberrow.ROW_NUMBER}&nbsp;</span></td>
	  <td class="{memberrow.ROW_CLASS}" align="center"><span class="gen"><a href="#" onClick="{memberrow.U_VIEWMSG}">{memberrow.SUBJECT}</a></span></td>
	  <td class="{memberrow.ROW_CLASS}" align="center" valign="middle"><span class="gen">{memberrow.FROM}</span></td>
	  <td class="{memberrow.ROW_CLASS}" align="center" valign="middle"><span class="gensmall">{memberrow.TO}</span></td>
	  <td class="{memberrow.ROW_CLASS}" align="center" valign="middle"><span class="gensmall">{memberrow.DATE}</span></td>
	  <td class="{memberrow.ROW_CLASS}" align="center" valign="middle"><span class="gensmall"><a href="{memberrow.U_DELETE}">{L_DELETE}</a></span></td>
	</tr>
	<!-- END memberrow -->
	<tr> 
	  <td class="catbottom" colspan="8" height="28">&nbsp;</td>
	</tr>
  </table>
  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
	  <td align="right" valign="top"></td>
	</tr>
  </table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td><span class="nav">{PAGE_NUMBER}</span></td>
	<td align="right"><span class="gensmall"></span><br /><span class="nav">{PAGINATION}&nbsp;</span></td>
  </tr>
</table>{S_HIDDEN_FIELDS}</form>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>
