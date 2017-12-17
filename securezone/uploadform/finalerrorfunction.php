<?PHP
		$final_form_error = validate_form_info($username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$creators_comments);
		$final_file_error = validate_file_upload($the_file);
		$final_img_error = validate_img_upload($the_img1,$the_img2);
		if (!$final_form_error=="")
			{
				echo $final_form_error;
				$errorchecker1=$errorchecker1+2;
			}
		if (!$final_file_error=="")
			{
				echo $final_file_error;
				$errorchecker1=$errorchecker1+2;
			}
		if (!$final_img_error=="")
			{
				echo $final_img_error;
			}
?>