<?php
/**
 *
 *  MySQL      -> class_mysql.php
 *  PostgreSQL -> class_pgsql.php
 *
 */

$POLLDB["dbName"] = "SSDv2Poll-1";
$POLLDB["host"]   = "localhost";
$POLLDB["user"]   = "Pheagey";
$POLLDB["pass"]   = "celcer07";
$POLLDB["class"]  = "class_mysql.php";


/* tables  */

$POLLTBL["poll_config"]  = "poll_config";
$POLLTBL["poll_index"]   = "poll_index";
$POLLTBL["poll_data"]    = "poll_data";
$POLLTBL["poll_ip"]      = "poll_ip";
$POLLTBL["poll_log"]     = "poll_log";
$POLLTBL["poll_comment"] = "poll_comment";
$POLLTBL["poll_user"]    = "poll_user";
$POLLTBL["poll_tpl"]     = "poll_templates";
$POLLTBL["poll_tplset"]  = "poll_templateset";

?>