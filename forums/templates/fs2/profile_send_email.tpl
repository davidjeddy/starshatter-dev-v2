
<script language="JavaScript" type="text/javascript">
<!--
function checkForm(formObj) {

	formErrors = false;    

	if (formObj.message.value.length < 2) {
		formErrors = "{L_EMPTY_MESSAGE_EMAIL}";
	}
	else if ( formObj.subject.value.length < 2)
	{
		formErrors = "{L_EMPTY_SUBJECT_EMAIL}";
	}

	if (formErrors) {
		alert(formErrors);
		return false;
	}
}
//-->
</script>

<form action="{S_POST_ACTION}" method="post" name="post" onsubmit="return checkForm(this)">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{L_SEND_EMAIL_MSG} to {USERNAME}
	</span></td>
  </tr>
</table><br />

{ERROR_BOX}

<table cellpadding="0" cellspacing="1" width="100%" class="forumline">
	<tr> 
		<th colspan="2"><b>{L_SEND_EMAIL_MSG}</b></th>
	</tr>
	<tr> 
		<td class="row1" width="22%"><span class="gen"><b>{L_RECIPIENT}</b></span></td>
		<td class="row2" width="78%"><span class="gen"><b>{USERNAME}</b></span> </td>
	</tr>
	<tr> 
		<td class="row1" width="22%"><span class="gen"><b>{L_SUBJECT}</b></span></td>
		<td class="row2" width="78%"><input type="text" name="subject" size="45" maxlength="100" style="width:450px" tabindex="2" class="post" value="{SUBJECT}" /> </td>
	</tr>
	<tr> 
		<td class="row1" valign="top"><span class="gen"><b>{L_MESSAGE_BODY}</b></span><br /><span class="gensmall">{L_MESSAGE_BODY_DESC}</span></td>
		<td class="row2"><textarea name="message" rows="25" cols="40" wrap="virtual" style="width:500px" tabindex="3" class="post">{MESSAGE}</textarea></td>
	</tr>
	<tr> 
		<td class="row1" valign="top"><span class="gen"><b>{L_OPTIONS}</b></span></td>
		<td class="row2"><table cellspacing="0" cellpadding="1" border="0">
			<tr> 
				<td><input type="checkbox" name="cc_email"  value="1" checked="checked" /></td>
				<td><span class="gen">{L_CC_EMAIL}</span></td>
			</tr>
		</table></td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2"><div class="center">{S_HIDDEN_FIELDS}<input type="submit" tabindex="6" name="submit" class="mainoption" value="{L_SEND_EMAIL}" /></div></td>
	</tr>
</table></form>