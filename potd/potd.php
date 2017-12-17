<?php
// +----------------------------------------------------------------------+
// |                          Fantastic POTD                              |
// +----------------------------------------------------------------------+
// |                          By Tony Baird                               |
// |                  Copyright (c) 2003 Fantastic Scripts                |
// |                          http://fscripts.com                         |
// +----------------------------------------------------------------------+
// | Fantastic POTD Can be modified freely as long as copyright is intact |
// | and this is left at the top of every source file                     |
// +----------------------------------------------------------------------+
// | potd.php                                                             |
// | Date Started: February 5, 2003                                       |
// | Last Modified: February 11, 2003                                     |
// +----------------------------------------------------------------------+
require("setup.php");
require("functions.php");
$mysql=new Mysql;
$mysql->Connect();
$html=new HTML;
$functions=new Functions;
if ($_REQUEST['id']=="None") {
	$html->Error("There are no more POTD's that way");
}elseif ($_REQUEST['id']) {
	$mysql->Query("SELECT * FROM fpotd_potd WHERE potd_id=".$_REQUEST['id']."");
	$show_potd=mysql_fetch_array($mysql->result_id);
	if ($show_potd[public]=="No") {
		$html->Error("This Picture of the day has not gone public yet");
	}
	$templates->define(array(
		"potd" => "templates/potd.tpl"
	));
	$functions->strip_array($show_potd);
	$date=date("$date_format", $show_potd[date]);
	$templates->assign("date", "$date");
	$templates->assign("potd_id", "$show_potd[potd_id]");
	$templates->assign("name", "$show_potd[potd_name]");
	$templates->assign("short_description", "$show_potd[short_description]");
	$templates->assign("big_image_url", "$image_url$show_potd[big_image_filename]");
	$templates->assign("long_description", "$show_potd[long_description]");
	// Gets Next Oldest POTD
	$mysql->Query("SELECT * FROM fpotd_potd WHERE potd_id<$show_potd[potd_id] AND public='Yes' ORDER BY potd_id ASC LIMIT 1");
	$show_old_potd=mysql_fetch_array($mysql->result_id);
	if (!$show_old_potd[potd_id]) {
		$old_potd_id="None";
	} else {
		$old_potd_id=$show_old_potd[potd_id];
	}
	// Get Next newest POTD
	$mysql->Query("SELECT * FROM fpotd_potd WHERE potd_id>$show_potd[potd_id] AND public='Yes' ORDER BY potd_id ASC LIMIT 1");
	$show_new_potd=mysql_fetch_array($mysql->result_id);
	if (!$show_new_potd[potd_id]) {
		$new_potd_id="None";
	} else {
		$new_potd_id=$show_new_potd[potd_id];
	}
	$templates->assign("next_id", "$new_potd_id");
	$templates->assign("previous_id", "$old_potd_id");
	$templates->parse(show_potd, "potd");
	$templates->FastPrint();




// Used for the include
} else {
	$time=time();
	$mysql->Query("SELECT * FROM fpotd_potd  WHERE date<$time ORDER BY date DESC LIMIT 1");
	$show_potd=mysql_fetch_array($mysql->result_id);
	if (!$show_potd[potd_id]) {
		$html->Error("Currently No POTD's In the Database");
	}
	if ($show_potd[public]=="No") {
		// Makes it public for viewing in the archive but also sets any below the date which may of not
		// gone public due to no hits
		$mysql->Query("UPDATE fpotd_potd SET public='Yes' WHERE date<=$show_potd[date]");
	}
	$templates->define(array(
		"potd_include" => "templates/potd_include.tpl"
	));
	$functions->strip_array($show_potd);
	$date=date("$date_format", $show_potd[date]);
	$templates->assign("date", "$date");
	$templates->assign("potd_id", "$show_potd[potd_id]");
	$templates->assign("name", "$show_potd[potd_name]");
	$templates->assign("short_description", "$show_potd[short_description]");
	$templates->assign("small_image_url", "$image_url$show_potd[small_image_filename]");
	$templates->assign("long_description", "$show_potd[long_description]");
	$templates->parse(show_potd_include, "potd_include");
	$templates->FastPrint();
}


?>