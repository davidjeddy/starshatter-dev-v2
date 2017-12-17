
<html>
<?PHP include('../includes/pagestart1deep.php'); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="4" bgcolor="#DFDFDF" >
	<tr>
		<td valign="top" colspan="2">
<?PHP include('../includes/topmenus.php'); ?>
		</td>
	</tr>
<!--BodyArea-->
	<tr>
		<td width="0" valign="top" align="center"> 
		
			<!--<PHP include('../includes/vesselmodeling-sidemenu.php'); ?>-->
<br><br><br>
		</td>
<!--Content area-->
<td align="left" valign="top" width="75%">
<font class="default">

			



<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD HEIGHT="29" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png">
			<FONT CLASS="default">&nbsp;&nbsp;&nbsp;Universe Creation Tutorials.</font>
		</TD>
	</TR>
</table> 

<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
	<TR ALIGN="center"> 
		<TD HEIGHT="29" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle2.png">
			<FONT CLASS="default">Universe Creation</font>
		</TD>
	</TR>
</table>
<Font class="default">Right now this is the info we have, I will be working on a full blow tutorial soon. for now thought Emjoy.<br><br>
1) Create a directory in your Mods folder called Galaxy.<br><br>
2) Inside the Galaxy folder.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2i) You will create one sub-folder for each star system.<br><br>
3) In the main Galaxy folder, you will need a def file listing all of the systems in your mod. You can call it anything you like. The format of the Galaxy file is:<br><br>

GALAXY<br><br>
system: { loc: (52.0, 51.0, 1.0), class: G, iff: 1, name: Earth }<br>
star: { loc: (56.0, 56.0, 1.0), class: M, name: "A" }<br>
star: { loc: (43.5, 55.0, 1.0), class: M, name: "B" }<br><br>
4) In the galaxy.def file, systems are places you can visit and stars are background stars that show up on the galaxy map, but that you can't actually go to.<br><br>
5) The class parameter is the main-sequence stellar class of the star or system. Values can be: O B A F G K M (from blue-white super giant to red dwarf). You can also use R W and Z for red giant, white dwarf, and black hole. <br><br>
6) The loc vector is the location of the system on the galactic map. The x and y elements of the vector must be greater than +10 or less than -10 so that they don't interfere with the main game galaxy.<br><br>
7) The name parameter is the name of the system or star on the map. For systems, this is also the name of the folder that contains all of the planetary data for the system.<br><br>
8) Each star system folder must contain a system def file with the same name as the system. The Earth system must contain a file with this path: \Mods\Galaxy\Earth\Earth.def<br><br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8i) STARSYSTEM<br><br>
name:       Athenar<br>
/*************************************/<br>
sky:        {<br>
&nbsp;&nbsp;&nbsp;nebula:     "Nebula6.mag",<br>
&nbsp;&nbsp;&nbsp;poly_stars: "stars.mag"<br>
}<br>
<br>
stars:500<br>
dust:300<br>
<br>
/*************************************/<br>
<br>
ambient:(16, 17, 26)<br><br>
<br>
star:{<br>
&nbsp;&nbsp;&nbsp;name:    Athenar,<br>
&nbsp;&nbsp;&nbsp;image:   "Suns/G3.pcx",<br>
&nbsp;&nbsp;&nbsp;tscale:  6,<br>
&nbsp;&nbsp;&nbsp;radius:  16e8,<br>
&nbsp;&nbsp;&nbsp;mass:    2e30,<br>
&nbsp;&nbsp;&nbsp;light:   1.6e11,<br>
&nbsp;&nbsp;&nbsp;color:   (255, 250, 230),// - standard yellow<br>
&nbsp;&nbsp;&nbsp;back:    ( 50,  50,  90) // - nebula6<br>
}<br>
<br>
planet:{<br>
&nbsp;&nbsp;&nbsp;name:    Athenar,<br>
&nbsp;&nbsp;&nbsp;image:   "Athenar/athenar_lo.pcx",<br>
&nbsp;&nbsp;&nbsp;high_res:"Athenar/athenar_hi.pcx",<br>
&nbsp;&nbsp;&nbsp;radius:  5.72e6,<br>
&nbsp;&nbsp;&nbsp;mass:    3.53e24,<br>
&nbsp;&nbsp;&nbsp;atmosphere: (80,100,150),<br>
&nbsp;&nbsp;&nbsp;orbit:   1.95e11,<br>
}<br>
<br>
region:{<br>
&nbsp;&nbsp;&nbsp;name:    Athenar,<br>
&nbsp;&nbsp;&nbsp;radius:  480e3,<br>
&nbsp;&nbsp;&nbsp;grid:    20e3,<br>
&nbsp;&nbsp;&nbsp;orbit:   18e6,<br>
&nbsp;&nbsp;&nbsp;inclination: 0.4<br>
}<br>
<br>
moon:{<br>
&nbsp;&nbsp;&nbsp;name:    Nike,<br>
&nbsp;&nbsp;&nbsp;image:   "Jarnell/lanos_lo.pcx",<br>
&nbsp;&nbsp;&nbsp;high_res:"Jarnell/lanos_hi.pcx",<br>
&nbsp;&nbsp;&nbsp;radius:  0.72e6,<br>
&nbsp;&nbsp;&nbsp;mass:    4.1e22,<br>
&nbsp;&nbsp;&nbsp;orbit:   81e6<br>
}<br>
<br>
planet:{<br>
&nbsp;&nbsp;&nbsp;name:    Pallas,<br>
&nbsp;&nbsp;&nbsp;image:   "Athenar/pallas_lo.pcx",<br>
&nbsp;&nbsp;&nbsp;high_res:"Athenar/pallas_hi.pcx",<br>
&nbsp;&nbsp;&nbsp;radius:  3.35e6,<br>
&nbsp;&nbsp;&nbsp;mass:    2.52e24,<br>
&nbsp;&nbsp;&nbsp;atmosphere: (80,120,150),<br>
&nbsp;&nbsp;&nbsp;orbit:   4.25e11,<br>
}<br>
<br>
region:{<br>
&nbsp;&nbsp;&nbsp;name:    Pallas,<br>
&nbsp;&nbsp;&nbsp;radius:  480e3,<br>
&nbsp;&nbsp;&nbsp;grid:    20e3,<br>
&nbsp;&nbsp;&nbsp;orbit:   19e6,<br>
&nbsp;&nbsp;&nbsp;inclination: 0.2,<br>
&nbsp;&nbsp;&nbsp;link:    Navara, // Janus<br>
&nbsp;&nbsp;&nbsp;link:    Dawn,   // Jarnell<br>
}<br>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8ii) Regions orbit the item they follow in the file. You can place regions around stars, planets, or moons.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8iii) Low-res surface images should be 256x256. High-res can be whatever you want, I use 1024x512. The game engine will stretch the image to the proper size.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8iv) Planets and moons can have a rotation paremeter that defines how long a local day is in hours.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8v) Inclination refers to orbital inclination, and controls how high in the sky the sun will appear when you are in orbit. I usually use higher values for inner planets and lower values for outer planets, for psycho-perceptual reasons.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8vi) There is also a tilt parameter that controls the deflection of the planetary axis from the orbital plane. I usually use values between 0 and 0.2.<br><br>
8vii) The glow and glow_high_res parameters define overlay bitmaps that can be used for city lights, or other glow-in-the-dark effects.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8ix) Asteroids are a single parameter of the region structure, asteroids: 100, that sets the number of asteroids in the region. The parameter defaults to zero (obviously). Asteroids are randomly placed throughout the region by the game engine.<br><br>
9) Rings:<br>
ring: "Giants/Ring2.pcx",<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;minrad:  1.2,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;maxrad:  1.9,<br><br>

The minrad and maxrad params define the inner and outer radius of the ring system, relative to the planet's own radius.<br>

NOTE: Oh, and in case it wasn't clear, all texture bitmaps are given relative to the Mods\Galaxy folder. Most moons and gas giants look about the same, so I have folders that just hold reusable textures for them. Saves room in the .dat file not to repeat them for each star system.<br><br>

</font>
<br><bR><br>
			</font>
		</td>
	</tr>
<?PHP include('../includes/bottomtextmenu.php'); ?>

<?PHP include('../includes/pageend.php'); ?>