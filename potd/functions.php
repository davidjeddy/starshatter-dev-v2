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
// | functions.php                                                        |
// | Date Started: February 5, 2003                                       |
// | Last Modified: February 26, 2003                                     |
// +----------------------------------------------------------------------+
$version="1.01";
include("class.FastTemplate.php");
$templates = new FastTemplate(".");
if(phpversion() >= "4.2.0"){
	if(is_array($_SERVER)){
		extract($_SERVER, EXTR_PREFIX_SAME, "server");
	}
	if(is_array($_GET)){
		extract($_GET, EXTR_PREFIX_SAME, "get");
	}
	if(is_array($_POST)){
		extract($_POST, EXTR_PREFIX_SAME, "post");
	}
	if(is_array($_COOKIE)){
		extract($_COOKIE, EXTR_PREFIX_SAME, "cookie");
	}
	if(is_array($_FILES)){
		extract($_FILES, EXTR_PREFIX_SAME, "file");
	}
	if(is_array($_ENV)){
		extract($_ENV, EXTR_PREFIX_SAME, "env");
	}
	if(is_array($_REQUEST)){
		extract($_REQUEST, EXTR_PREFIX_SAME, "request");
	}
	if(is_array($_SESSION)){
		extract($_SESSION, EXTR_PREFIX_SAME, "session");
	}
}
class Mysql {
	var $mysql_username;
	var $mysql_password;
	var $mysql_db;
	var $mysql_host;
	var $result_id;
	var $link_id;
	var $dbconnect;
	var $num_rows;
	var $query_count=0;
	
	function Connect() {
		global $mysql_username;
		global $mysql_password;
		global $mysql_db;
		global $mysql_host;
		$this->mysql_username=$mysql_username;
		$this->mysql_password=$mysql_password;
		$this->mysql_db=$mysql_db;
		$this->mysql_host=$mysql_host;
		$this->link_id=mysql_connect($this->mysql_host,$this->mysql_username,$this->mysql_password);
		if (!$this->link_id) {
			echo "Unable to connect to mysql server";
		}
		$this->dbconnect=mysql_select_db($mysql_db);
		if (!$this->dbconnect) {
			echo "Unable to select database";
		}
		return $this->link_id;
	}
	function Query($sql) {
		$this->result_id=mysql_query($sql) or die(mysql_error());
		$this->query_count++;
		$this->sql .="$sql<br>";
		return $this->sql;
		return $this->result_id;
		return $this->query_count;
	}
	function Num_rows() {
		$this->num_rows=mysql_num_rows($this->result_id);
		return $this->num_rows;
	}
	function Free_result() {
		mysql_free_result($this->result_id);
	}
	function Close() {
		mysql_close($this->link_id);
	}
}
class Functions {
	function slash_array(&$array){
		reset($array);
		while(list($key,$val)=each($array)){
			if(is_string($val)) {
				$array[$key]=addslashes($val);

			} elseif(is_array($val)) {
				$array[$key]=$this->slash_array($val);
			}
		}
		return $array;
	}
	function strip_array(&$array) {
		reset($array);
		while(list($key,$val)=each($array)) {
			if(is_string($val)) {
				$array[$key]=stripslashes($val);
			} elseif(is_array($val)) {
				$array[$key]=$this->strip_array($val);
			}
		}
		return $array;
	}
	function html_array(&$array){
		reset($array);
		while(list($key,$val)=each($array)){
			if(is_string($val)) {
				$array[$key]=HTMLSpecialChars($val);

			} elseif(is_array($val)) {
				$array[$key]=$this->html_array($val);
			}
		}
		return $array;
	}
	function newline_array(&$array){
		reset($array);
		while(list($key,$val)=each($array)){
			if(is_string($val)) {
				$array[$key]=str_replace("\n","<BR>", $val);

			} elseif(is_array($val)) {
				$array[$key]=$this->newline_array($val);
			}
		}
		return $array;
	}
	function newline_array_back(&$array){
		reset($array);
		while(list($key,$val)=each($array)){
			if(is_string($val)) {
				$array[$key]=str_replace("<BR>","\n", $val);

			} elseif(is_array($val)) {
				$array[$key]=$this->newline_array($val);
			}
		}
		return $array;
	}
}
class HTML {
	function Error($error) {
		global $templates;
		$templates->define(array(
			"error" => "templates/error.tpl"
		));
		$templates->assign("error", "$error");
		$templates->parse(show_error, "error");
		$templates->FastPrint();
		exit();
	}
	function Success($success) {
		global $templates;
		$templates->define(array(
			"success" => "templates/success.tpl"
		));
		$templates->assign("success", "$success");
		$templates->parse(show_success, "success");
		$templates->FastPrint();
	}
}
class Admin {
	function Header() {
		echo "
		<html>
		<head>
		<title>Fantastic Picture of the Day</title>
		<style>
		body        {font-family:Verdana; color:#FFFFFF;font-size: 10px;}
		h1, h2, h3, h4, h5, h6                         {font-family:Verdana;}
		blockquote                              {font-family:Verdana;}
		INPUT { color: #FFFFFF; background: #008080; border: 1px solid #FFFFFF;}
		SELECT { color: #FFFFFF; background: #008080; border: 1px solid #FFFFFF;}
		TEXTAREA { color: #FFFFFF; background: #008080; border: 1px solid #FFFFFF;}
		a:                                         {font-family:Verdana; color:#00BBBB;text-decoration:none;}
		a:link                                         {font-family:Verdana; color:#00BBBB;text-decoration:none;}
		a:active                                         {font-family:Verdana; color:#00BBBB;text-decoration:none;}
		a:visited                                {font-family:Verdana; size:2; color:#00BBBB;text-decoration:none;}
		a:hover                                 {font-family:Verdana; size:2; color:#FFFFFF;text-decoration:underline;}
		 BODY
			{
			SCROLLBAR-FACE-COLOR: #006262;
			SCROLLBAR-HIGHLIGHT-COLOR: #000000;
			SCROLLBAR-SHADOW-COLOR: #006262;
			SCROLLBAR-3DLIGHT-COLOR: #00A6A6;
			SCROLLBAR-ARROW-COLOR: #FFFFFF;
			SCROLLBAR-TRACK-COLOR: #00A6A6;
			SCROLLBAR-DARKSHADOW-COLOR: #008080
			}
		</style>
		</head>

		<body text=\"#FFFFFF\" bgcolor=\"#008080\">";
	}
	function Footer() {
		global $version;
		echo "<p align=\"center\"><p align=\"center\"><font face=\"Verdana\"><font size=\"1\">Powered by 
		<a target=\"_blank\" href=\"http://fscripts.com/\">Fantastic POTD</a> v$version © 
		2003 </font> <a target=\"_blank\" href=\"http://fscripts.com\"><font size=\"1\">Fantastic Scripts</font></a></font></p>";
	}
	function Login() {
		global $mysql;
		if ($_POST['login']) {
			$_SESSION['username']=$_POST['username'];
			$_SESSION['password']=$_POST['password'];
		}
		$mysql->Query("SELECT * FROM fpotd_admins WHERE username='".$_SESSION['username']."' AND password='".$_SESSION['password']."'");
		$show_user=mysql_fetch_array($mysql->result_id);
		if (!$show_user[username] OR !$show_user[password]) {
			echo "Login Failed Incorrect Username and/or Password";
			session_destroy();
			exit();
		}
		$this->add_potd=$show_user[add_potd];
		$this->edit_potd=$show_user[edit_potd];
		$this->delete_potd=$show_user[delete_potd];
		$this->user_admin=$show_user[user_admin];
		$this->admin_id=$show_user[admin_id];
	}
	function Success($success) {
		global $admin;
		echo $success;
	}
	function Error($error) {
		global $admin;
		echo $error;
		$admin->Footer();
		exit();
	}
}


?>
