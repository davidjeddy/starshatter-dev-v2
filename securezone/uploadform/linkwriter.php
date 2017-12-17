<?PHP
//$username,$object_name,$object_type,$mod_file_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2
$linkfile=$mod_class."_".$object_type.".php";

//original
if ($mod_class=="original")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}

//b5
if ($mod_class=="b5")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}


//saab
if ($mod_class=="saab")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}


//st
if ($mod_class=="st")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}



//sw
if ($mod_class=="sw")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Fleet
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}



//bg
if ($mod_class=="bg")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Fleet
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}



//fs
if ($mod_class=="fs")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
				if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Fleet
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}



//hw
if ($mod_class=="hw")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Fleet
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}



//battletech
if ($mod_class=="battletech")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Fleet
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}



//other
if ($mod_class=="other")
	{
	//SmShips
		if ($object_type=="Drone")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Fighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Attack")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="LCA")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		
		//MdShips
		if ($object_type=="Tug")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Corvette")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Frigate")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Destroyer")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//LgShips
		if ($object_type=="Cruiser")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Drednaught")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Freighter")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Stations
		if ($object_type=="Station")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Farcaster")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="OtherStation")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Fleet
		if ($object_type=="Fleet")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Planet Buildings
		if ($object_type=="Building")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Factory")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="SAM")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="EWR")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="C3I")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
		if ($object_type=="Starbase")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}


		//Weapon DEFs
		if ($object_type=="Weapon")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
			
			
		//Mission DEFs
		if ($object_type=="Mission")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}

		//Other Stuff
		if ($object_type=="OtherStuff")
			{
				$f=fopen($the_path1."lists\\".$linkfile, "a+");
				fwrite($f,"<!--$username - $object_name --><?PHP include ('userFiles/$writephpfile'); ?><!---->");
				fclose($f);
			}
	}
?>