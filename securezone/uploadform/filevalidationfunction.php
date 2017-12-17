<?PHP
function validate_file_upload($the_file)
	{
		global $max_file_size,$allowed_file_types,$the_file_type,$registered_file_types;
		$start_file_error = "<font class=\"error\">UPLOAD ERROR:<br>";
		if ($the_file == "none")
			{
				$file_error .= "You did not specify a file to upload.<br>";
			}
		elseif(!in_array($the_file_type,$allowed_file_types))
			{
				$file_error .= "The file that you uploaded was of a type that is not allowed, you are only allowed to upload files of the type:<br>";
				while ($type = current($allowed_file_types))
					{
						$file_error .= "-" . $registered_file_types[$type] . " (" . $type . ")<br>";
						next($allowed_file_types);
					}
			}
		if ($file_error)
			{
				$end_file_error="</FONT>";
				$final_file_error=$start_file_error . $file_error . $end_file_error;
				$error = $start_file_error . $file_error . $end_file_error;
				return $final_file_error;
				return $error;
			}
		else
			{
				return false;
			}
			
	}
?>