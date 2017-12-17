<?
######### CONFIGURATION #########
// Please set these variables
# database
$mysql_server = "localhost";				// MySQL server (try localhost or your domain)
$database = "SSDv2Links";				// database name
$user = "Pheagey";					// user with access to database
$password = "celcer07";				// password for user
# administration
$admin_password = "celcer07";				// password required to access admin.php
# options
$mode = "flat";  				// flat or leveled. use leveled for many categories and/or links
$show_clicks = "yes";				// yes or no to showing click count per link
$public_add = "yes";  				// yes: lets anyone add links, no: lets only admin add links
$new_window = "no";				// yes or no to opening links in a new window
$show_credit = "no";				// yes or no to displaying "Powered by Linkster" at bottom
# templates
$header_html = "../includes/linksterhead.php";  			// files with html to include on top and bottom of all pages
$footer_html = "../includes/linksterfoot.php";  			// use absolute path to use files outside of Linkster's directory
# table settings
$tbl_width = "100%";  				// links table width in pixels or percent
$tbl_align = "left";  				// left, right, or center
$tbl_border = "0";  				// border size in pixels
$tbl_cellpadding = "2";  			// cellpadding in pixels
$tbl_cellspacing = "2";  			// cellspacing in pixels
$row1_color = "#fafa95";  			// category bar color
$row2_color = "#E8E984";  			// link/clicks title bar color
$row3_color = "";			// bg color of link/click rows
# sorting
$cat_order = "1";  				// 1: alphabetically, 2: newest to oldest, 3: oldest to newest
$links_order = "2";  				// 1: alphabetically, 2: newest to oldest, 3: oldest to newest
// that's all you need to edit in common.php
#################################
// open database connection
$db = @mysql_connect("$mysql_server","$user","$password");
mysql_select_db("$database");

// table names
$cat_table = "linkster_cats";
$link_table = "linkster_links";

// credit HTML
$credit_html = "<span style='font-size: 8pt;'>[ Powered by <a href=http://dreamdolphin.com/?section=products&page=php_scripts&script_id=1 class=\"minilinks\">Linkster</a> ]</span>";

// category/link sorting
if ($cat_order == '1') { $cat_order = "Category"; }
if ($cat_order == '2') { $cat_order = "$cat_table.ID DESC"; }
if ($cat_order == '3') { $cat_order = "$cat_table.ID ASC"; }
if ($links_order == '1') { $links_order = "Website"; }
if ($links_order == '2') { $links_order = "$link_table.ID DESC"; }
if ($links_order == '3') { $links_order = "$link_table.ID ASC"; }

// open new window
if ($new_window == "yes")
	{
		$new_window = " target=_new";
	}
else
	{
		$new_window = "";
	}

// print title and message
function print_title_message($title, $message)
	{
		echo "<div id=linkster-title-large>$title</div>\n";
		echo "<div>$message</div>\n";
	}

// print table function
function print_table($query, $PHP_SELF, $tbl_border, $tbl_cellpadding, $tbl_cellspacing, $tbl_width, $tbl_align, $row1_color, $row2_color, $row3_color, $Category, $CDescription, $LID, $URL, $Website, $LDescription, $Clicks, $show_clicks, $show_credit, $credit_html, $new_window, $cat_table, $link_table)
	{
		$result = mysql_query($query)	or die("<p><b>Error:</b> No data exists.</p>\n</body>\n</html>\n\n");
		$link_count = mysql_num_rows($result);
		if ($link_count > 0)
			{
				echo "<p align=$tbl_align>\n";
				echo "<table border='$tbl_border' cellpadding='$tbl_cellpadding' cellspacing='$tbl_cellspacing' width='$tbl_width'>\n";
				while (list($LID, $Clicks, $Website, $URL, $LDescription, $CID, $Category, $CDescription) = mysql_fetch_array($result))
					{
						// print category
						if ($last_CID != $CID)
							{
								// span cols across two if click col exists
								$colspan = "1";
								if ($show_clicks == "yes")
									{
										$colspan = "2";
									}
										// print blank cell unless it's above first category
										if ($last_CID)
											{
												echo "  <tr>\n";
												echo "    <td colspan=$colspan><br></td>\n";
												echo "  </tr>\n";
											}
										echo "  <tr>\n";
										if ($CDescription)
											{
												$CDescription = "<span id=linkster-cat-desc>$CDescription</span>";
											}
										echo "    <td colspan=$colspan bgcolor='$row1_color'><div id=linkster-title-large>$Category</div>$CDescription</td>\n";
										echo "  </tr>\n";
										echo "  <tr>\n";
										echo "    <td align=center id=linkster-title-small bgcolor='$row2_color'>Link/Description</td>\n";
										if ($show_clicks == "yes")
											{
												echo "    <td align=center id=linkster-title-small bgcolor='$row2_color'>&nbsp;&nbsp;Clicks&nbsp;&nbsp;</td>\n";
											}
										echo "  </tr>\n";
									}
								// print link
								if ($LDescription)
									{
										$LDescription = " - $LDescription";
									}
								echo "  <tr>\n";
								echo "    <td bgcolor='$row3_color' id=linkster-list><a href=$PHP_SELF?LID=$LID&URL=$URL".$new_window." target=\"_new\" class=\"minilinks\">$Website</a>$LDescription</td>\n";
								if ($show_clicks == "yes")
									{
										echo "    <td bgcolor='$row3_color' align=center id=linkster-count>$Clicks</td>\n";
									}
								echo "  </tr>\n";
								$last_CID = $CID;
							}
						if ($show_credit == "yes")
							{
								echo "  <tr>\n";
								echo "    <td colspan=$colspan><br>$credit_html</td>\n";
								echo "  </tr>\n";
							}
						echo "</table>\n";
						echo "</p>\n";
					}
			}

// category select input
		function category_select($db, $selected_cat, $selected_cat_error, $cat_table)
			{
				echo "<font class=\"default\"><select name='CID'>\n";
				$query_cats = mysql_query("SELECT ID, Category FROM $cat_table ORDER BY Category");
				$cat_count = mysql_affected_rows($db); 
				for($i = 0; $i < $cat_count; $i++)
					{
						list($Cat_ID, $Category) = mysql_fetch_row($query_cats);
						$index++;  // increment the line index by 1
						if ($selected_cat_error)
							{
								$selected_cat = $selected_cat_error;
							}
						if ($Cat_ID == $selected_cat)
							{
								$selected = " selected";
							}
						else
							{
								$selected = "";
							}
						echo "<option value='$Cat_ID'" . $selected . " class=\"input\">$Category</option>\n";
					}
				echo "</select></font>\n";
			}

		// add/modify category form
		function category_form($Type, $PHP_SELF, $QUERY_STRING, $Category, $Description)
			{
				echo "<form method='post' action='$PHP_SELF?$QUERY_STRING'>\n";
				echo "<p>\n<span id=linkster-title-small>Category Name:</span><br>\n<input type=text name=Category size=30 maxlength=50 value=\"$Category\" class=\"input\">\n</p>\n";
				echo "<p>\n<span id=linkster-title-small>Category Description (Optional):</span><br>\n<textarea cols=40 rows=5 wrap=virtual name=Description  class=\"input\">$Description</textarea>\n</p>\n";
				echo "<input type=submit name=submit value=\"$Type Category\" class=\"input\">\n";
				echo "</form>\n";
			}

		// add/modify link form
		function link_form($db, $Cat_ID, $CID, $Website, $URL, $Description, $cat_table)
			{
				echo "<p><span id=linkster-title-small>Category:</span><br>\n";
				category_select($db, $Cat_ID, $CID, $cat_table); 
				print categories;
				echo "</p>\n";
				echo "<p>\n<span id=linkster-title-small>Website Name:</span><br>\n<input type=text name=Website size=30 maxlength=50 value=\"$Website\"   class=\"input\">\n</p>\n";
				echo "<p>\n<span id=linkster-title-small>Website URL:</span><br>\n<input type=text name=URL size=30 maxlength=150 value=\"$URL\"   class=\"input\">\n</p>\n";
				echo "<p>\n<span id=linkster-title-small>Short Description (Optional):</span><br>\n<textarea cols=40 rows=5 wrap=virtual name=Description   class=\"input\">$Description</textarea>\n</p>\n";
			}

// escape quotes
		function escape_quotes($string)
			{
				if (get_magic_quotes_gpc() == 0)
					{
						// if magic quotes is off
						$string = addslashes($string);  // escape ' and " with \
					}
				$string = ereg_replace("\"", "'", $string);  // replace " with '
				return $string;
			}

		// strip escaped quotes
		function strip_quotes($string)
			{
				if (get_magic_quotes_gpc() == 1)
					{  // if magic quotes is on
						$string = stripslashes($string);  // strip \ from ' and "
					}
				$string = ereg_replace("\"", "'", $string);  // replace " with '
				return $string;
			}

?>