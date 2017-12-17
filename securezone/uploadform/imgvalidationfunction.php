<?PHP
function validate_img_upload($the_img1,$the_img2)
	{
		//calls global variables
		global $max_img_width, $max_img_height,$allowed_img1_types,$registered_img1_types,$allowed_img2_types,$registered_img2_types,$the_img1_type,$the_img2_type;
		if (!$the_img1 == "none")
			{
//img1 type check
				if (!in_array($the_img1_type,$allowed_img1_types))
					{
						$start_img1_error="<font class=\"error\">Image #1 is not a JPG File!";
						while ($type = current($allowed_img1_types))
							{
								$img1_error .= "<li>" . $registered_img1_types[$type] . " (" . $type . ")</li>";
								next($allowed_img1_types);
							}
					}
//img1 size check
				if (ereg("image",$the_img1_type) && (in_array($the_img_type,$allowed_img1_types)))
					{
						$size = GetImageSize($the_img1);
						list($foo,$width,$bar,$height) = explode("\"",$size[3]);
						if ($width > $max_img_width)
							{
								$img1_error .= "<li>Image 1 should be no wider than " . $max_img_width . " Pixels</li>";
							}
						if ($height > $max_img1_height)
							{
								$img1_error .= "<li>Image 1 should be no higher than " . $max_img_height . " Pixels</li>";
							}
					}
				$end_img1_error .= "</li></ul></font><BR>";
				$img_error="img error";
			}
			
			
//IMG2 will go here
		if (!$the_img2 == "none")
			{
//img1 type check
				if (!in_array($the_img2_type,$allowed_img2_types))
					{
						$start_img2_error="<font class=\"error\">Image #2 is not a JPG File!";
						while ($type = current($allowed_img2_types))
							{
								$img2_error .= "<li>" . $registered_img2_types[$type] . " (" . $type . ")</li>";
								next($allowed_img2_types);
							}
					}
//img2 size check
				if (ereg("image",$the_img2_type) && (in_array($the_img_type,$allowed_img2_types)))
					{
						$size = GetImageSize($the_img1);
						list($foo,$width,$bar,$height) = explode("\"",$size[3]);
						if ($width > $max_img_width)
							{
								$img1_error .= "<li>Image 2 should be no wider than " . $max_img_width . " Pixels</li>";
							}
						if ($height > $max_img1_height)
							{
								$img1_error .= "<li>Image 2 should be no higher than " . $max_img_height . " Pixels</li>";
							}
					}
				$end_img1_error .= "</li></ul></font><BR>";
				$img_error="img error";
			}
	}
?>