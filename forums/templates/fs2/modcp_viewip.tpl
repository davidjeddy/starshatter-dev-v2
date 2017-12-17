<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td class="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{L_IP_INFO}
	</span></td>
  </tr>
</table><br />

<table width="100%" cellpadding="0" cellspacing="1" class="forumline">
  <tr> 
	<th>{L_IP_INFO}</th>
  </tr>
  <tr> 
	<td class="catHead"><span class="cattitle"><b>{L_THIS_POST_IP}</b></span></td>
  </tr>
  <tr> 
	<td class="row1"> 
	  <table width="100%" cellspacing="0" cellpadding="0">
		<tr> 
		  <td>&nbsp;<span class="gen">{IP} [ {POSTS} ]</span></td>
		  <td class="right"><span class="gen">[ <a href="{U_LOOKUP_IP}">{L_LOOKUP_IP}</a> 
			]&nbsp;</span></td>
		</tr>
	  </table>
	</td>
  </tr>
  <tr> 
	<td class="catHead"><span class="cattitle"><b>{L_OTHER_USERS}</b></span></td>
  </tr>
  <!-- BEGIN userrow -->
  <tr> 
	<td class="{userrow.ROW_CLASS}"> 
	  <table width="100%" cellspacing="0" cellpadding="0">
		<tr> 
		  <td>&nbsp;<span class="gen"><a href="{userrow.U_PROFILE}">{userrow.USERNAME}</a> [ {userrow.POSTS} ]</span></td>
		  <td class="right"><a href="{userrow.U_SEARCHPOSTS}" title="{userrow.L_SEARCH_POSTS}"><img src="{SEARCH_IMG}" alt="{L_SEARCH}" /></a> 
			&nbsp;</td>
		</tr>
	  </table>
	</td>
  </tr>
  <!-- END userrow -->
  <tr> 
	<td class="catHead"><span class="cattitle"><b>{L_OTHER_IPS}</b></span></td>
  </tr>
  <!-- BEGIN iprow -->
  <tr> 
	<td class="{iprow.ROW_CLASS}"><table width="100%" cellspacing="0" cellpadding="0">
		<tr> 
		  <td>&nbsp;<span class="gen">{iprow.IP} [ {iprow.POSTS} ]</span></td>
		  <td class="right"><span class="gen">[ <a href="{iprow.U_LOOKUP_IP}">{L_LOOKUP_IP}</a> 
			]&nbsp;</span></td>
		</tr>
	  </table></td>
  </tr>
  <!-- END iprow -->
  <tr>
  	<td class="catBottom"></td>
  </tr>
</table>
