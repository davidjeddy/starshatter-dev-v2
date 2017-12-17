
<?PHP
//function calling DIR search
RecurseDir("userFiles/lists");
//we can strip this down we dont need to recourse the directories.
//function that searches
function RecurseDir($directory)
	{
	Global $filepath;
		$thisdir = array("name", "struct");
		$thisdir['name'] = $directory;
//open dir for reading?
		if ($dir = @opendir($directory))
			{
//variable for the DIR looping
				$i = 0;
				//as long as theres file to read stay in this dir
				while ($file = readdir($dir))
					{
// if the file is NOT . (return), or ..(double return)
						if (($file != ".")&&($file != ".."))
							{
//with this line it prints the entire path and file
								$filepath = $directory."/".$file;
								//echo "filepath:&nbsp;&nbsp;&nbsp;"; echo $filepath;echo "<BR>";



/*
forget all files expect that end with .php
*/
if(substr("userFiles/lists".$filepath, -4, 4)==".php")
	{
/*
end extention search
*/


/*
pretext parsing, can we get ride of this?
*/

	if(substr($filepath, 0, 16)=="userFiles/lists/")
		{
			$filenames=$filepath;
			$filepath2=substr($filepath, 16, 128);
			echo "filename:&nbsp;&nbsp;&nbsp;";echo $filenames; echo"<BR>";
			echo "filename2: &nbsp;&nbsp;&nbsp;"; echo $filepath2; echo"<BR><BR><BR>";
			include ('userFiles/lists/'.$filepath2);
		{
	}
}}}}}}		
?>