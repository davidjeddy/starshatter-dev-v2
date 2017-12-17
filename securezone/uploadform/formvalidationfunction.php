<?PHP
function validate_form_info($object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$creators_comments)
	{
		$start_form_error = "<font class=\"form_error\">form_error: <UL>";
		if ($object_name == "")
			{
				$form_error .= "<li>Please NAME your upload.</li>";
			}
		if ($object_type == "")
			{
				$form_error .= "<li>Please choose an object TYPE. </li>";
			}
		if ($mod_file_type == "")
			{
				$form_error .= "<li>Please select a MOD FILE TYPE. </li>";
			}
		if ($version_number == "")
			{
				$form_error .= "<li>Please enter a correct VERSION number. </li>";
			}
		if ($mod_class == "")
			{
				$form_error .= "<li>Please enter a correct MOD type. </li>";
			}
		if ($lods == "")
			{
				$form_error .= "<li>Please enter a correct LOD number. </li>";
			}
		if ($textures == "")
			{
				$form_error .= "<li>Please pick a TEXTURE option. </li>";
			}
		if ($def == "")
			{
				$form_error .= "<li>Please pick a DEF option. </li>";
			}
		if ($debris == "")
			{
				$form_error .= "<li>Please pick a DEBRIS option. </li>";
			}
		$creators_comments_length= strlen($creators_comments);
		if ($creators_comments > 260)
			{
				$form_error.="<li>Creators Comments is over 256 characters. Please adjust comment length.</li>";
			}
		if ($form_error)
			{
				$end_form_error="</UL></FONT>";
				$final_form_error=$start_form_error . $form_error . $end_form_error;
				$error = $start_form_error . $form_error . $end_form_error;
				return $final_form_error;
				return $error;
			}
			//returns to run the rest if all is false here
			else
			{
				return false;
			}
	}
?>