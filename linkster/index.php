<?
require("common.php");

######### CLICK COUNT #########
		if ($QUERY_STRING && $LID && $URL)
			{
				mysql_query("UPDATE $link_table SET Clicks = Clicks+1 WHERE ID = $LID");  // add 1 to click count
				header("Location: $URL");  // send user to website
			}

######### PRINT HEADER/MENU #########
//require("$header_html");
		if ($public_add == "yes" || $QUERY_STRING)
			{
				require("$header_html");
				?><TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD HEIGHT="29" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png">
			<FONT CLASS="default">StarShatter Dev. Communications - Public Links</font>
		</TD>
	</TR>
</table> 
<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD HEIGHT="29" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle2.png">
			<FONT CLASS="default">Add a Link</font>
		</TD>
	</TR>
</table><?PHP 
				echo "\n<p align=$tbl_align>\n";
				echo "<table border=0 cellpadding=0 cellspacing=0 width=$tbl_width>\n";
				echo "  <tr>\n";
				echo "    <td>\n";
			}
		if ($public_add == "yes" && $action != "add_link")
			{
				echo "    <li><a href=$PHP_SELF?action=add_link class='minilinks'>Add a link</a></li>\n";
			}
		if ($mode == "flat" && $action == "add_link")
			{
				echo "    <li><a href=$PHP_SELF class='minilinks'>Back to links</a></li>\n";
			}
		if ($mode == "leveled" && $QUERY_STRING)
			{
				echo "    <li><a href=$PHP_SELF class='minilinks'>Back to categories</a></li>\n";
			}
		if ($public_add == "yes" || $QUERY_STRING)
			{
				echo "    </td>\n";
				echo "  </tr>\n";
				echo "</table>\n";
				echo "</p>\n";
			}

######### FLAT MODE #########
		if ($mode == "flat" && !$QUERY_STRING)
			{
				?>
<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD HEIGHT="29" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle2.png">
			<FONT CLASS="default">Links</font>
		</TD>
	</TR>
</table>
				<?PHP 
				$query = "SELECT $link_table.ID AS LID, Clicks, Website, URL, $link_table.Description AS LDescription, $cat_table.ID AS CID, Category, $cat_table.Description AS CDescription FROM $cat_table, $link_table WHERE $cat_table.ID = $link_table.Cat_ID ORDER BY $cat_order, $links_order";
				print_table ($query, $PHP_SELF, $tbl_border, $tbl_cellpadding, $tbl_cellspacing, $tbl_width, $tbl_align, $row1_color, $row2_color, $row3_color, $Category, $CDescription, $LID, $URL, $Website, $LDescription, $Clicks, $show_clicks, $show_credit, $credit_html, $new_window, $cat_table, $link_table);
				require("$footer_html");
			}

######### LEVELED MODE #########
		if ($mode == "leveled" && !$LID && !$URL)
			{
				// print categories
				if (!$QUERY_STRING)
					{
						$query = "SELECT * FROM $cat_table ORDER BY $cat_order";
						$result = mysql_query($query) or die("<p><b>Error:</b> No data exists.</p>\n</body>\n</html>\n\n");
						echo "<p align='$tbl_align'>\n";
						echo "<table border='$tbl_border' cellpadding='$tbl_cellpadding' cellspacing='$tbl_cellspacing' width='$tbl_width'>\n";
						echo "  <tr>\n";
						echo "    <td colspan=2 bgcolor='$row1_color'><div id=linkster-title-large>Categories</div></td>\n";
						echo "  </tr>\n";
						echo "  <tr>\n";
						echo "    <td align=center id=linkster-title-small bgcolor='$row2_color'>Category/Description</td>\n";
						echo "    <td align=center id=linkster-title-small bgcolor='$row2_color'>&nbsp;&nbsp;Links&nbsp;&nbsp;</td>\n";
						echo "  </tr>\n";
						while (list($CID, $Count, $Category, $Description) = mysql_fetch_array($result))
							{
								if ($Count > 0)
									{
										$Category = "<a href=$PHP_SELF?CID=$CID class='minilinks' target='_new'>$Category</a>";
									}
								if ($Description)
									{
										$Description = "- $Description";
									}
						echo "  <tr>\n";
						echo "    <td bgcolor='$row3_color' id=linkster-list>$Category $Description</td>\n";
						echo "    <td bgcolor='$row3_color' align=center id=linkster-count>$Count</td>\n";
						echo "  </tr>\n";
					}
				if ($show_credit == "yes")
					{
						echo "  <tr>\n";
						echo "    <td colspan=2><br>$credit_html</td>\n";
						echo "  </tr>\n";
					}
				echo "</table>\n";
				echo "</p>\n";
			}
// print links for specific category
		if ($CID)
			{
				$query = "SELECT $link_table.ID AS LID, Clicks, Website, URL, $link_table.Description AS LDescription, $cat_table.ID AS CID, Category, $cat_table.Description AS CDescription";
				$query .= " FROM $cat_table, $link_table";
				$query .= " WHERE $cat_table.ID = $link_table.Cat_ID AND $cat_table.ID = $CID";
				$query .= " ORDER BY $links_order";
				print_table ($query, $PHP_SELF, $tbl_border, $tbl_cellpadding, $tbl_cellspacing, $tbl_width, $tbl_align, $row1_color, $row2_color, $row3_color, $Category, $CDescription, $LID, $URL, $Website, $LDescription, $Clicks, $show_clicks, $show_credit, $credit_html, $new_window, $cat_table, $link_table);
			}
	}
		
######### ADD LINK (PUBLIC) #########
if ($action == "add_link" && $public_add == "yes")
	{
		// process form
		if ($submit)
			{
				// check for errors
				if (!$Website)
					{
						$error = "<li>Website Name cannot be left blank</li>\n";
					}
				if (!$URL)
					{
						$error .= "<li>Website URL cannot be left blank</li>\n";
					}
				if (eregi("http://", $URL) && eregi("\.", $URL))
					{
						// URL must contain http:// and . to be valid
						$validURL = 1;
					}
				if ($URL && !$validURL)
					{ 
						$error .= "<li>Website URL is invalid</li>\n";
					}
				if (strlen($Description) > 200)
					{
						$error .= "<li>Description cannot exceed 200 characters (length: " . strlen($Description) . ")</li>\n";
					}
// add link to database
				if (!$error)
					{
						$Website = escape_quotes($Website);
						$URL = escape_quotes($URL);
						$Description = escape_quotes($Description);
						mysql_query("INSERT INTO $link_table (Cat_ID, Website, URL, Description) VALUES ('$CID','$Website','$URL','$Description')");
						mysql_query("UPDATE $cat_table SET Count = Count+1 WHERE ID = $CID");
					}
				else
					{
						$Website = strip_quotes($Website);
						$URL = strip_quotes($URL);
						$Description = strip_quotes($Description);
					}
			}
// print title and message
		$title = "Add a Link";
		$message = "Fill out the form below to add a link.";
		if ($error)
			{ 
				$title = "Error Adding Link";
				$message = "The following error(s) occured:\n <ul>$error</ul>Please correct any errors and try again.";
			}
		if ($submit && ! $error)
			{
				$title = "Link Added";
				$message = "Your link has been added.";
				require("$footer_html");
			} 
		print_title_message($title, $message);
// print form
		if (!$submit)
			{
				// sets URL before user touches it
				$URL = "http://";
			}
		if (!$submit || $error)
  			{
				echo "<form method=post action=$PHP_SELF?$QUERY_STRING>\n";
				link_form($db, $Cat_ID, $CID, $Website, $URL, $Description, $cat_table);
				echo "<input type='submit' name='submit' value='Add Link' class='input'>\n";
				echo "</form><br><br><br>\n";
				require("$footer_html");
			}
	}

########### FOOTER/CLOSE DB ###########
//require("$footer_html");
mysql_close($db);  // close db connection

?>