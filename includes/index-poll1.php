

<table width="200" border="2" bordercolor="#ffff88" cellspacing="0" cellpadding="2">
	<tr>
		<td>
		
			<table width="200" border="0" bordercolor="#ffff88" cellspacing="2" cellpadding="0">
				<tr align="center"> 
					<td height="29" background="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png">
						<font class="default">SSD Poll #1</font>
					</td>
				</tr>
				<tr align="center">
<td align="left" valign="top" bgcolor="#E8E984">
<?php

/* path */ 
$poll_path = "c:/apache/htdocs/ssdv2/phpscripts/proxy2poll";

require $poll_path."/include/config.inc.php";
require $poll_path."/include/$POLLDB[class]";
require $poll_path."/include/class_poll.php";
$CLASS["db"] = new polldb_sql;
$CLASS["db"]->connect(); 

$php_poll = new poll();

/* the first poll *
echo $php_poll->poll_process(1);


/* the second poll *
$php_poll->set_template_set("simple");
$php_poll->set_max_bar_length(80); 
echo $php_poll->poll_process(2);


/* the third poll */
$php_poll->set_template_set("popup");
if ($php_poll->is_valid_poll_id(4)) {
    echo $php_poll->display_poll(4);
} 

?>


</td>
</tr></table>
</td></tr></table>