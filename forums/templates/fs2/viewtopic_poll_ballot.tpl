<div class="center"><table cellspacing="0" cellpadding="0" class="center">			
	<tr>
		<td colspan="2"><form method="POST" action="{S_POLL_ACTION}"><table cellspacing="0" cellpadding="4" class="center">
			<tr>
				<td class="center"><span class="gen"><b>{POLL_QUESTION}</b></span></td>
			</tr>
			<tr>
				<td class="center"><table cellspacing="0" cellpadding="2">
					<tr>
						<!-- BEGIN poll_option -->							
						<td><input type="radio" name="vote_id" value="{poll_option.POLL_OPTION_ID}" />&nbsp;</td>
						<td><span class="gen">{poll_option.POLL_OPTION_CAPTION}</span></td>
						<!-- END poll_option -->								
					</tr>
				</table></td>
			</tr>
			<tr>
				<td class="center"><input type="submit" name="submit" value="{L_SUBMIT_VOTE}" class="liteoption" /></td>
					</tr>
					<tr>
						
		  <td class="center"><span class="gensmall"><b><a href="{U_VIEW_RESULTS}">{L_VIEW_RESULTS}</a></b></span></td>
					</tr>
				</table>{S_HIDDEN_FIELDS}</td>
			</tr></form>
</table></div>			