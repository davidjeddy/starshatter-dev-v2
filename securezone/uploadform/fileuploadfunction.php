<?PHP
				if($the_file!="none")
					{
$new_file_name=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . ".zip";
						if (!copy($the_file,$the_path1.$new_file_name)){}
					}
?>