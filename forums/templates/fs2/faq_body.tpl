<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td align="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{L_FAQ}
	</span></td>
  </tr>
</table><br />

<table class="forumline" width="100%" cellspacing="1" cellpadding="0">
	<tr>
		<th>{L_FAQ_TITLE}</th>
	</tr>
	<tr>
		<td class="row1"><div class="left">
			<!-- BEGIN faq_block_link -->
			<span class="gen"><b>{faq_block_link.BLOCK_TITLE}</b></span><br />
			<!-- BEGIN faq_row_link -->
			<span class="gen"><a href="{faq_block_link.faq_row_link.U_FAQ_LINK}" class="postlink">{faq_block_link.faq_row_link.FAQ_LINK}</a></span><br />
			<!-- END faq_row_link -->
			<br />
			<!-- END faq_block_link -->
		</div></td>
	</tr>
	<tr>
		<td class="catBottom"></td>
	</tr>
</table><br />

<!-- BEGIN faq_block -->
<table class="forumline" width="100%" cellspacing="1" cellpadding="0">
	<tr> 
		<th>{faq_block.BLOCK_TITLE}</th>
	</tr>
	<!-- BEGIN faq_row -->  
	<tr> 
		<td class="{faq_block.faq_row.ROW_CLASS}" align="left" valign="top"><span class="gen"><a name="{faq_block.faq_row.U_FAQ_ID}"></a><b>{faq_block.faq_row.FAQ_QUESTION}</b></span><br /><span class="gen">{faq_block.faq_row.FAQ_ANSWER}<br /><a class="postlink" href="#Top">{L_BACK_TO_TOP}</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/fs2/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<!-- END faq_row -->
	<tr>
		<td class="catBottom"></td>
	</tr>	
</table>

<br clear="all" />
<!-- END faq_block -->
