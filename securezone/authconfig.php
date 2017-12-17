<?
// ALL PATHS BELOW ARE RELATIVE TO THE DIRECTORY WHERE YOU HAVE INSTALLED vAuthenticate
$resultpage = "vAuthenticate.php";	// THIS IS THE PAGE THAT WOULD CHECK FOR AUTHENTICITY
$admin = "admin/index.php";	// THIS IS THE PATH TO THE ADMIN INTERFACE
$success = "members/index.php";	// THIS IS THE PAGE TO BE SHOWN IF USER IS AUTHENTICATED
$failure = "failed.php";	// THIS IS THE PAGE TO BE SHOWN IF USERNAME-PASSWORD COMBINATION DOES NOT MATCH
	
// ALL VARIABLES BELOW SHOULD HAVE THE FULL URL ASSIGNED TO THEM
$changepassword = "securezone/chgpwd.php"; // FULL URL TO THE CHANGE PASSWORD FILE
$login = "securezone.php"; // FULL URL TO THE LOGIN PAGE
$logout = "securezone.php"; // FULL URL TO THE LOGOUT FILE
			
// DB SETTINGS
$dbhost = "localhost";	// DB Host name
$dbusername = USERNAME; 	// DB User
$dbpass = "PASSWORD";	// DB User password
$dbname	= "SSDv2Members"; 	// DB Name

?>