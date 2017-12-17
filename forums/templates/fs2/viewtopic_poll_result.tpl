<div class="center"><table cellspacing="0" cellpadding="0">
<tr> 
  <td colspan="2">
	<table cellspacing="0" cellpadding="4">
	  <tr> 
		<td colspan="4" class="center"><span class="gen"><b>{POLL_QUESTION}</b></span></td>
	  </tr>
	  <tr> 
		<td align="left"> 
		  <table cellspacing="0" cellpadding="2">
			<!-- BEGIN poll_option -->
			<tr> 
			  <td><span class="gen">{poll_option.POLL_OPTION_CAPTION}</span></td>
			  <td> 
				<table cellspacing="0" cellpadding="0">
				  <tr> 
					<td><img src="templates/fs2/images/vote_lcap.gif" width="4" alt="" height="12" /></td>
					<td><img src="{poll_option.POLL_OPTION_IMG}" width="{poll_option.POLL_OPTION_IMG_WIDTH}" height="12" alt="{poll_option.POLL_OPTION_PERCENT}" /></td>
					<td><img src="templates/fs2/images/vote_rcap.gif" width="4" alt="" height="12" /></td>
				  </tr>
				</table>
			  </td>
			  <td class="center"><b><span class="gen">&nbsp;{poll_option.POLL_OPTION_PERCENT}&nbsp;</span></b></td>
			  <td class="center"><span class="gen">[ {poll_option.POLL_OPTION_RESULT} ]</span></td>
			</tr>
			<!-- END poll_option -->
		  </table>
		</td>
	  </tr>
	  <tr> 
		<td colspan="4" class="center"><span class="gen"><b>{L_TOTAL_VOTES} : {TOTAL_VOTES}</b></span></td>
	  </tr>
	</table>
  </td>
</tr>
</table></div>