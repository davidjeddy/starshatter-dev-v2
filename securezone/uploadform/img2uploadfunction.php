<?PHP
if($the_img2!="none")
	{
		$the_img2_name=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . "-2.jpg";
		if (!copy($the_img2,$the_path1.$the_img2_name)){}
		if(file_exists("".$the_path1.$the_img2_name.""))
			{
				exec("C:\apache\imagemagic\convert.exe -resize 200x154 ".$the_path1.$the_img2_name."  ".$the_path1."tmb_".$the_img2_name."");
			}
	}
?>					