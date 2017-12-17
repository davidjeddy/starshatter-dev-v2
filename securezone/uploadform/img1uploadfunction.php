<?PHP
if($the_img1!="none")
	{
		$the_img1_name=$mod_class . "_" .$object_type . "_" . $username . "_" . $object_name . "-1.jpg";
		if (!copy($the_img1,$the_path1.$the_img1_name)){}
		if(file_exists("".$the_path1.$the_img1_name.""))
			{
				exec("C:\apache\imagemagic\convert.exe -resize 200x154 ".$the_path1.$the_img1_name."  ".$the_path1."tmb_".$the_img1_name."");
			}
	}
?>					