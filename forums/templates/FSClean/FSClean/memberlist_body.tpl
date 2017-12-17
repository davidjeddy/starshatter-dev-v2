
<form method="post" action="{S_MODE_ACTION}">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center" class="forumline">
	<tr> 
	  <td align="left"><span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></td>
	  <td align="right" nowrap="nowrap"><span class="genmed">{L_SELECT_SORT_METHOD}:&nbsp;{S_MODE_SELECT}&nbsp;&nbsp;{L_ORDER}&nbsp;{S_ORDER_SELECT}&nbsp;&nbsp; 
		<input type="submit" name="submit" value="{L_SUBMIT}" class="liteoption" />
		</span></td>
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
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr> 
	  <th height="25" class="thCornerL" nowrap="nowrap">#</th>
	  <th class="thTop" nowrap="nowrap">Send a PM</th>
	  <th class="thTop" nowrap="nowrap">{L_USERNAME}</th>
	  <th class="thTop" nowrap="nowrap">{L_EMAIL}</th>
	  <th class="thTop" nowrap="nowrap">{L_FROM}</th>
	  <th class="thTop" nowrap="nowrap">{L_JOINED}</th>
	  <th class="thTop" nowrap="nowrap">{L_POSTS}</th>
	  <th class="thTop" nowrap="nowrap">{L_POINTS}</th>
	  <th class="thCornerR" nowrap="nowrap">{L_WEBSITE}</th>
	</tr>
	<!-- BEGIN memberrow -->
	<tr> 
	  <td class="{memberrow.ROW_CLASS}" align="center"><span class="gen">&nbsp;{memberrow.ROW_NUMBER}&nbsp;</span></td>
	  <td class="{memberrow.ROW_CLASS}" align="center">&nbsp;{memberrow.PM_IMG}&nbsp;</td>
	  <td class="{memberrow.ROW_CLASS}" align="center"><span class="gen"><a href="{memberrow.U_VIEWPROFILE}" class="gen">{memberrow.USERNAME}</a></span></td>
	  <td class="{memberrow.ROW_CLASS}" align="center" valign="middle">&nbsp;{memberrow.EMAIL_IMG}&nbsp;</td>
	  <td class="{memberrow.ROW_CLASS}" align="center" valign="middle"><span class="gen">{memberrow.FROM}</span></td>
	  <td class="{memberrow.ROW_CLASS}" align="center" valign="middle"><span class="gensmall">{memberrow.JOINED}</span></td>
	  <td class="{memberrow.ROW_CLASS}" align="center" valign="middle"><span class="gen">{memberrow.POSTS}</span></td>
	  <td class="{memberrow.ROW_CLASS}" align="center" valign="middle"><span class="gen">{memberrow.POINTS}</span></td>
	  <td class="{memberrow.ROW_CLASS}" align="center">&nbsp;{memberrow.WWW_IMG}&nbsp;</td>
	</tr>
	<!-- END memberrow -->
	<tr> 
	  <td class="catbottom" colspan="9" height="28">&nbsp;</td>
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
<table width="100%" cellspacing="0" cellpadding="0" border="0" class="forumline">
  <tr> 
	<td><span class="nav">{PAGE_NUMBER}</span></td>
	<td align="right"><span class="gensmall">{S_TIMEZONE}</span><br /><span class="nav">{PAGINATION}</span></td>
  </tr>
</table>
{S_HIDDEN_FIELDS}</form>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>
