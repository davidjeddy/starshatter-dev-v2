<?PHP
//set variables that are used in this page
$check["uname"];
$username=$check["uname"] ;
//echo $username

//need to change this stuff for new search format.
include ('uploadform/formvariables.php');
//include ('uploadform/formvariablesecho.php');		

//file size
$max_file_size 	= "10487560"; # =10Megs
//registerd file type- part of the allowed files that can be uploaded. these are the MIME types
$registered_file_types =  array("application/x-zip-compressed"=> ".zip");
//allowed file types to upload
$allowed_file_types = array("application/x-zip-compressed");

$max_img_width	= "1025";
$max_img_height	= "800";
$registered_img1_types = array(
					"image/pjpeg"						=> ".jpg, .jpeg",
					"image/jpeg"						=> ".jpg, .jpeg",);
$allowed_img1_types = array("image/pjpeg","image/jpeg");

$registered_img2_types = array(
					"image/pjpeg"						=> ".jpg, .jpeg",
					"image/jpeg"						=> ".jpg, .jpeg",);
$allowed_img2_types = array("image/pjpeg","image/jpeg");

//form function, sets up the form 
include ('uploadform/uploadformfunction.php');

//validates the form info
include ('uploadform/formvalidationfunction.php');

//validates the uploaded file
include ('uploadform/filevalidationfunction.php');

//image validation function
include ('uploadform/imgvalidationfunction.php');

#upload function
function upload($the_file,$username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$creators_comments,$the_img1,$the_img2,$the_path1)
	{		
		global $the_path1,$the_file_name,$the_img1_name,$the_img2_name,$errorchecker1,$errorchecker2;
		$timedate1 = date("g:i a, F j, Y, ");
		//parse out spaces in the object_name, and file_name
		include ('uploadform/removespacesfunction.php');

		$writephpfile=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . ".php";
		$writephpfileinfo=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . "_info.php";
		
		//final error checking
		include ('uploadform/finalerrorfunction.php');

		//should only go here if EC1=2 (one error will cause this)
		if ($errorchecker1>$errorchecker2)
			{
				form($error=false,$username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$creators_comments,$the_img1,$the_img2);
				return;
			}
		if ($errorchecker1<$errorchecker2)
			{
				include('uploadform/fileuploadfunction.php');
					
				include('uploadform/img1uploadfunction.php');
				
				include('uploadform/img2uploadfunction.php');

				if ($mod_file_type == "Dev")
					{
						$mod_file_type == "Development Files";
					}
				if ($mod_file_type == "Uncomp")
					{
						$mod_file_type == "Uncompressed Files";
					}
				if ($mod_file_type == "Dat")
					{
						$mod_file_type == "Dat file";
					}
				$the_URL_path="userFiles";
				include('uploadform/phpfilewriter.php');
				include('uploadform/writephpfileinfo.php');
				include('uploadform/linkwriter.php');
			}
//for after upload if everything goes good.				
form($error=false,$username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2);
echo "Upload was Successful.";
return;
	}


//default Start page
switch($task)
	{
		case 'upload':
		upload($the_file,$username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$creators_comments,$the_img1,$the_img2,$the_path1);
//include ('uploadform/formvariablesecho.php');

		break;
		default;
		form($error=false,$username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2);

	}
?>