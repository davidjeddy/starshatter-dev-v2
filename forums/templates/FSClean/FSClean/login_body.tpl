 
<form action="{S_LOGIN_ACTION}" method="post" target="_top">

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center" class="forumline">
  <tr> 
	<td align="left" class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></td>
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
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
  <tr> 
	<th height="25" class="thHead" nowrap="nowrap">{L_ENTER_PASSWORD}</th>
  </tr>
  <tr> 
	<td class="row1"><table border="0" cellpadding="3" cellspacing="1" width="100%">
		  <tr> 
			<td colspan="2" align="center">&nbsp;</td>
		  </tr>
		  <tr> 
			<td width="45%" align="right"><span class="gen">{L_USERNAME}:</span></td>
			<td> 
			  <input type="text" name="username" size="25" maxlength="40" value="{USERNAME}" />
			</td>
		  </tr>
		  <tr> 
			<td align="right"><span class="gen">{L_PASSWORD}:</span></td>
			<td> 
			  <input type="password" name="password" size="25" maxlength="25" />
			</td>
		  </tr>
		  <tr align="center"> 
			<td colspan="2"><span class="gen">{L_AUTO_LOGIN}: <input type="checkbox" name="autologin" /></span></td>
		  </tr>
		  <tr align="center"> 
			<td colspan="2">{S_HIDDEN_FIELDS}<input type="submit" name="login" class="mainoption" value="{L_LOGIN}" /></td>
		  </tr>
		  <tr align="center"> 
			<td colspan="2"><span class="gensmall"><a href="{U_SEND_PASSWORD}" class="gensmall">{L_SEND_PASSWORD}</a></span></td>
		  </tr>
		</table></td>
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
{S_HIDDEN_FIELDS}</form>
