<form action="{S_SEARCH_ACTION}" method="POST"><table width="100%" cellspacing="0" cellpadding="0">
  <tr>
	<td align="left"><span class="nav">
	<a href="{U_INDEX}">{L_INDEX}</a>
	<img src="templates/fs2/images/arrow.gif" alt="arrow" />
	{L_SEARCH}
	</span></td>
  </tr>
</table><br />

<table class="forumline" width="100%" cellpadding="0" cellspacing="1">
	<tr> 
		<th colspan="4">{L_SEARCH_OPTIONS}</th>
	</tr>
	<tr> 
		<td class="row1"><div class="right"><span class="gen">{L_FORUM}:&nbsp;</span></div></td>
		<td class="row2"><div class="left"><span class="genmed"><select class="post" name="search_forum">{S_FORUM_OPTIONS}</select></span></div></td>
		<td class="row1" rowspan="2" nowrap="nowrap"><div class="right"><span class="gen">{L_SEARCH_PREVIOUS}:&nbsp;</span></div></td>
		<td class="row2" rowspan="2" valign="middle"><div class="left"><span class="genmed"><select class="post" name="search_time">{S_TIME_OPTIONS}</select><br /><input type="radio" name="search_fields" value="all" checked="checked" /> {L_SEARCH_MESSAGE_TITLE}<br /><input type="radio" name="search_fields" value="msgonly" /> {L_SEARCH_MESSAGE_ONLY}</span></div></td>
	</tr>
	<tr>
		<td class="row1"><div class="right"><span class="gen">{L_CATEGORY}:&nbsp;</span></div></td>
		<td class="row2"><div class="left"><span class="genmed"><select class="post" name="search_cat">{S_CATEGORY_OPTIONS}
		</select></span></div></td>	
	</tr>
	<tr>
		<td class="row1"><div class="right"><span class="gen">{L_DISPLAY_RESULTS}:&nbsp;</span></div></td>
		<td class="row2"><div class="left"><input type="radio" name="show_results" value="posts" /><span class="genmed">{L_POSTS}<input type="radio" name="show_results" value="topics" checked="checked" />{L_TOPICS}</span></div></td>	
		<td class="row1" rowspan="2"><div class="right"><span class="gen">{L_SORT_BY}:&nbsp;</span></div></td>
		<td class="row2" rowspan="2" valign="middle" nowrap="nowrap"><div class="left"><span class="genmed"><select class="post" name="sort_by">{S_SORT_OPTIONS}</select><br /><input type="radio" name="sort_dir" value="ASC" /> {L_SORT_ASCENDING}<br /><input type="radio" name="sort_dir" value="DESC" checked /> {L_SORT_DESCENDING}</span></div>&nbsp;</td>
	</tr>
	<tr>
		<td class="row1"><div class="right"><span class="gen">{L_RETURN_FIRST}</span></div></td>
		<td class="row2"><div class="left"><span class="genmed"><select class="post" name="return_chars">{S_CHARACTER_OPTIONS}</select> {L_CHARACTERS}</span></div></td>		
	</tr>	
	<tr> 
		<th colspan="4">{L_SEARCH_QUERY}</th>
	</tr>
	<tr> 
		<td class="row1" width="50%" colspan="2"><div class="left"><span class="gen">{L_SEARCH_KEYWORDS}:</span><br /><span class="gensmall">{L_SEARCH_KEYWORDS_EXPLAIN}</span></div></td>
		<td class="row2" valign="top" colspan="2"><div class="left"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_keywords" size="30" /><br /><input type="radio" name="search_terms" value="any" checked="checked" /> {L_SEARCH_ANY_TERMS}<br /><input type="radio" name="search_terms" value="all" /> {L_SEARCH_ALL_TERMS}</span></div></td>
	</tr>
	<tr> 
		<td class="row1" colspan="2"><div class="left"><span class="gen">{L_SEARCH_AUTHOR}:</span><br /><span class="gensmall">{L_SEARCH_AUTHOR_EXPLAIN}</span></div></td>
		<td class="row2" valign="middle" colspan="2"><div class="left"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_author" size="30" /></span></div></td>
	</tr>	
	<tr> 
		<td class="catBottom" colspan="4"><div class="center">{S_HIDDEN_FIELDS}<input class="liteoption" type="submit" value="{L_SEARCH}" /></div></td>
	</tr>
</table></form>