<?xml version="1.0" encoding="{S_CONTENT_ENCODING}"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={S_CONTENT_ENCODING}" />
<meta http-equiv="Content-Style-Type" content="text/css" />
{META}
{NAV_LINKS}
<title>{SITENAME} :: {PAGE_TITLE}</title>
<link rel="stylesheet" href="templates/fs2/{T_HEAD_STYLESHEET}" type="text/css" />
<!-- BEGIN switch_enable_pm_popup -->
<script language="Javascript" type="text/javascript">
<!--
	if ( {PRIVATE_MESSAGE_NEW_FLAG} )
	{
		window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'height=225,resizable=yes,width=400');;
	}
//-->
</script>
<!-- END switch_enable_pm_popup -->
</head>
<body>
<table width="100%" cellspacing="0" cellpadding="0">
	<tr>		
		<td class="center">

<table width="700" cellspacing="0" cellpadding="10">
	<tr>		
		<td class="center"><a href="{U_INDEX}"><img src="templates/fs2/images/forumstyles.gif" alt="{SITENAME}" /></a><br />
		
<table cellspacing="0" cellpadding="2">
  <tr> 
	<td class="center" nowrap="nowrap">
	<a href="{U_INDEX}" class="mainmenu">Index</a>
	<img src="templates/fs2/images/div.gif" class="divmiddle" alt="div" />&nbsp;
	<a href="{U_FAQ}" class="mainmenu">{L_FAQ}</a>&nbsp;
	<img src="templates/fs2/images/div.gif" class="divmiddle" alt="div" />&nbsp;
	<a href="{U_SEARCH}" class="mainmenu">{L_SEARCH}</a>&nbsp;
	<img src="templates/fs2/images/div.gif" class="divmiddle" alt="div" />&nbsp;
	<a href="{U_MEMBERLIST}" class="mainmenu">{L_MEMBERLIST}</a>&nbsp;
	<img src="templates/fs2/images/div.gif" class="divmiddle" alt="div" />&nbsp;
	<a href="{U_GROUP_CP}" class="mainmenu">{L_USERGROUPS}</a>&nbsp;
	<!-- BEGIN switch_user_logged_out -->
	<img src="templates/fs2/images/div.gif" class="divmiddle" alt="div" />&nbsp;
	<a href="{U_REGISTER}" class="mainmenu">{L_REGISTER}</a>&nbsp;
	<img src="templates/fs2/images/div.gif" class="divmiddle" alt="div" />&nbsp;
	<a href="{U_LOGIN_LOGOUT}" class="mainmenu">{L_LOGIN_LOGOUT}</a>&nbsp;
	<!-- END switch_user_logged_out -->
	
	<!-- BEGIN switch_user_logged_in -->  
	<img src="templates/fs2/images/div.gif" class="divmiddle" alt="div" />&nbsp;	
	<a href="{U_PROFILE}" class="mainmenu">{L_PROFILE}</a>&nbsp;
	<img src="templates/fs2/images/div.gif" class="divmiddle" alt="div" />&nbsp;
	<a href="{U_PRIVATEMSGS}" class="mainmenu">{L_PRIVATEMSGS}</a>&nbsp;
	<img src="templates/fs2/images/div.gif" class="divmiddle" alt="div" />&nbsp;
	<a href="{U_LOGIN_LOGOUT}" class="mainmenu">{L_LOGIN_LOGOUT}</a>
	<!-- END switch_user_logged_in -->
	</td>
  </tr> 
</table>  		
		
		</td>
	</tr>	
	<tr>
		<td valign="top" class="left">
		
<!-- BEGIN switch_user_logged_out -->
<form method="post" action="{S_LOGIN_ACTION}"><table width="100%" cellpadding="3" cellspacing="0">
	<tr> 
	  <td class="center" valign="middle"><span class="gensmall">{L_USERNAME}: 
		<input class="post" type="text" name="username" size="10" />
		&nbsp;&nbsp;&nbsp;{L_PASSWORD}: 
		<input class="post" type="password" name="password" size="10" />
		&nbsp;&nbsp; &nbsp;&nbsp;{L_AUTO_LOGIN} 
		<input class="text" type="checkbox" name="autologin" />
		&nbsp;&nbsp;&nbsp; 
		<input type="submit" class="mainoption" name="login" value="{L_LOGIN}" />
		</span> </td>
	</tr>
  </table></form>
<!-- END switch_user_logged_out -->		