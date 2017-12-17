
<br clear="all" />
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="14" align="center">
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
	  <th class="thCornerL" height="25">{L_PM}</th>
	  <th class="thTop">{L_USERNAME}</th>
	  <th class="thTop">{L_POSTS}</th>
	  <th class="thTop">{L_FROM}</th>
	  <th class="thTop">{L_EMAIL}</th>
	  <th class="thTop">{L_WEBSITE}</th>
	  <th class="thCornerR">{L_SELECT}</th>
	</tr>
	<tr> 
	  <td class="catSides" colspan="8" height="28"><span class="cattitle">{L_PENDING_MEMBERS}</span></td>
	</tr>
	<!-- BEGIN pending_members_row -->
	<tr> 
	  <td class="{pending_members_row.ROW_CLASS}" align="center"> {pending_members_row.PM_IMG} 
	  </td>
	  <td class="{pending_members_row.ROW_CLASS}" align="center"><span class="gen"><a href="{pending_members_row.U_VIEWPROFILE}" class="gen">{pending_members_row.USERNAME}</a></span></td>
	  <td class="{pending_members_row.ROW_CLASS}" align="center"><span class="gen">{pending_members_row.POSTS}</span></td>
	  <td class="{pending_members_row.ROW_CLASS}" align="center"><span class="gen">{pending_members_row.FROM}</span></td>
	  <td class="{pending_members_row.ROW_CLASS}" align="center"><span class="gen">{pending_members_row.EMAIL_IMG}</span></td>
	  <td class="{pending_members_row.ROW_CLASS}" align="center"><span class="gen">{pending_members_row.WWW_IMG}</span></td>
	  <td class="{pending_members_row.ROW_CLASS}" align="center"><span class="gensmall"> <input type="checkbox" name="pending_members[]" value="{pending_members_row.USER_ID}" /></span></td>
	</tr>
	<!-- END pending_members_row -->
	<tr> 
	  <td class="cat" colspan="8" align="right"><span class="cattitle"> 
		<input type="submit" name="approve" value="{L_APPROVE_SELECTED}" class="mainoption" />
		&nbsp; 
		<input type="submit" name="deny" value="{L_DENY_SELECTED}" class="liteoption" />
		</span></td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="14" align="center">
  <tr> 
    <td rowspan="1" colspan="1" width="1%" height="14" align="left"> 
      <img name="Image20" src="templates/FSClean/images/front/Image2_1x1down.gif" width="5" height="14" border="0"></td>
    <td rowspan="1" colspan="1" width="98%" height="14" background="templates/FSClean/images/front/Image2_1x2down.gif"> 
    </td>
    <td rowspan="1" colspan="1" width="1%" height="14" align="right"> 
      <img name="Image22" src="templates/FSClean/images/front/Image2_1x3down.gif" width="14" height="14" border="0"></td>
  </tr>
</table>