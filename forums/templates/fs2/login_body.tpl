 
<form action="{S_LOGIN_ACTION}" method="post" target="_top">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{L_LOGIN_LOGOUT}
	</span></td>
  </tr>
</table><br />

<table width="100%" cellpadding="0" cellspacing="1" class="forumline">
  <tr> 
	<th nowrap="nowrap">{L_ENTER_PASSWORD}</th>
  </tr>
  <tr> 
		<td class="row1">
<table border="0" cellpadding="3" cellspacing="1" width="100%">
  <tr> 
	  	<td class="row1" valign="middle"><div class="center"><span class="gensmall">{L_USERNAME}:</span> 
		<input class="post" type="text" name="username" size="10" />
		<span class="gensmall">&nbsp;&nbsp;&nbsp;{L_PASSWORD}:</span> 
		<input class="post" type="password" name="password" size="10" />
		<span class="gensmall">&nbsp;&nbsp; &nbsp;&nbsp;{L_AUTO_LOGIN}</span> 
		<input class="text" type="checkbox" name="autologin" />
		&nbsp;&nbsp;&nbsp; 
		<input type="submit" class="mainoption" name="login" value="{L_LOGIN}" />
		</div> </td>
  </tr>
  <tr align="center"> 
		<td colspan="2"><span class="gensmall"><a href="{U_SEND_PASSWORD}">{L_SEND_PASSWORD}</a></span></td>
  </tr>  
</table>
		</td>
  </tr>
</table></form>