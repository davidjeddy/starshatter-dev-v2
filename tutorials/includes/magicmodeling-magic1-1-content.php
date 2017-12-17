<!--Side Menu 1-->
<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="0" CELLPADDING="0">
	<TR>
		<TD>
			<TABLE WIDTH="100%" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">



				<TR ALIGN="center"> 
					<TD HEIGHT="29" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png">
						<font class="default">Magic 1-1</font>
					</TD>
				<tr>
				</tr>
<tr><td>
<font class="default">
&nbsp;&nbsp;&nbsp;Welcome to the Magic 101 tutorial. In this tutorial we will get a handle on the ever popular (ok not so popular) 3d program used to create objects for Starshatter. We shall embark upon this by a hands on method. I'll show you and explain as much as I know and show you how to do it one step at a time. Also I am assuming you have a basic working knowledge of windows, in not then you should be <a href="Http://www.Microsoft.com" target="_new" class="minilinks">HERE</a>.
</td></tr>

<tr><td align="left">
<font class="default">
&nbsp;&nbsp;&nbsp;First up, a break down of the interface. Don't worry if you don't understand everything or if there seems to be alot here, right now just try to familiarize your self with the interface a little, by the end of this tutorial you'lll know Magic like a master (or something like that).
</td></tr>

<tr><td align="center">
<a href="javascript://" onClick="popimage('<?PHP echo $httproot ?>tutorials/includes/magic1-1/magic101-1.jpg',640,480);return false">
<img src="<?PHP echo $httproot ?>tutorials/includes/magic1-1/magic101-1_mini.jpg" alt="MagicInterface" border="0" ></a><br><br>
</td></tr>

<tr><td align="left">
And a menu breakdown:<br>
<p align="left" valign="top">
<font class="default">
<font class="newtitle">FILE</font><br>
&nbsp;&nbsp;&nbsp;<font class="title1">NEW</font>&nbsp;&nbsp;&nbsp;- create a new file. Magic uses a proprietary .MAG file format.<br>
&nbsp;&nbsp;&nbsp;<font class="title1">OPEN</font>&nbsp;&nbsp;&nbsp;- open a .MAG file<br>
&nbsp;&nbsp;&nbsp;<font class="title1">SAVE</font>&nbsp;&nbsp;&nbsp;- Saves the project.<br>
&nbsp;&nbsp;&nbsp;<font class="title1">SAVE AS</font>&nbsp;&nbsp;&nbsp;- Save as a new name or in a new place.<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="title1">IMPORT</font>&nbsp;&nbsp;&nbsp;- Used to add two mesh's into on file.<br>
&nbsp;&nbsp;&nbsp;<font class="title1">EXPORT</font>&nbsp;&nbsp;&nbsp;-<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="title1">RECENT FILES</font>&nbsp;&nbsp;&nbsp;Will list recently opened files in Magic<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="title1">EXIT</font>&nbsp;&nbsp;&nbsp;- leave Magic.( A bad thing to do if you have not saved recently.)<br><br><br>
<font class="newtitle">EDIT</font><br>
&nbsp;&nbsp;&nbsp;<font class="title1">UNDO</font>&nbsp;&nbsp;&nbsp; Undo changes<br>
&nbsp;&nbsp;&nbsp;<font class="title1">REDO</font>&nbsp;&nbsp;&nbsp;Redo whatever it is you just undid<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="title1">CLONE</font>&nbsp;&nbsp;&nbsp;Clone makes an exact copy of what you have selected<br>
&nbsp;&nbsp;&nbsp;<font class="title1">PASTE</font>&nbsp;&nbsp;&nbsp;paste info from the clipboard<br>
&nbsp;&nbsp;&nbsp;<font class="title1">DELETE</font>&nbsp;&nbsp;&nbsp;well dua..<br>
&nbsp;&nbsp;&nbsp;<font class="title1">SELECT ALL</font>&nbsp;&nbsp;&nbsp;Select everything available<br>
&nbsp;&nbsp;&nbsp;<font class="title1">SELECT NONE</font>&nbsp;&nbsp;&nbsp;unselect everything<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="title1">FLIP NORMALS</font>&nbsp;&nbsp;&nbsp;Flip the face of the polygon inside out, useful when making concave objects such as hanger bays<br>
&nbsp;&nbsp;&nbsp;<font class="title1">REMOVE PLOY</font>&nbsp;&nbsp;&nbsp;delete the selected polygons<br>
&nbsp;&nbsp;&nbsp;<font class="title1">MIRROR SELECTION</font>&nbsp;&nbsp;&nbsp;Copy the selecting to the opposite X, Y or Z axis.<br>
&nbsp;&nbsp;&nbsp;<font class="title1">SEAL SELECTION</font>&nbsp;&nbsp;&nbsp;-this don't work yet<br>
&nbsp;&nbsp;&nbsp;<font class="title1">REDUCE VERTS</font>&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="title1">FLATTEN X</font>&nbsp;&nbsp;&nbsp;Align vertices on the X axis<br>
&nbsp;&nbsp;&nbsp;<font class="title1">FLATTEN Y</font>&nbsp;&nbsp;&nbsp;Align vertices on the Y axis<br>
&nbsp;&nbsp;&nbsp;<font class="title1">FLATTEN Z</font>&nbsp;&nbsp;&nbsp;Align vertices on the Z axis<br><br><br>
<font class="newtitle">VIEW</font><br>
&nbsp;&nbsp;&nbsp;<font class="title1">ZOOM-></font><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font class="title1">ZOOM IN</font>&nbsp;&nbsp;&nbsp;(Zoom in on the selected windows (either the grids windows or the 3D window)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font class="title1">ZOOM OUT</font>&nbsp;&nbsp;&nbsp;Zoom out on he selected window (ditto)<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="title1">SHOW VERTICES NORMALS</font>&nbsp;&nbsp;&nbsp;Show what direction the vertices are facing (good when texturing)<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="title1">FINAL RENDER</font>&nbsp;&nbsp;&nbsp;this don't work<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;<font class="title1">SHOW TOOLBAR</font>&nbsp;&nbsp;&nbsp;Show / hide the toolbar<br>
&nbsp;&nbsp;&nbsp;<font class="title1">SHOW STATUS BAR</font>&nbsp;&nbsp;&nbsp;Show / hide the status bar<br><br><br>
<font class="newtitle">Create</font><br>
&nbsp;&nbsp;&nbsp;<font class="title1">PLOY...</font>&nbsp;&nbsp;&nbsp;You will be asked for X,Y,Z position and number if sides (3 or 4)<br>
&nbsp;&nbsp;&nbsp;<font class="title1">CUBE...</font>&nbsp;&nbsp;&nbsp;You will be asked for X,Y,Z position and size of each side (in X,Y,Z lengths)<br>
&nbsp;&nbsp;&nbsp;<font class="title1">CONE...</font>&nbsp;&nbsp;&nbsp;You will be asked for X,Y,Z position, size of each side (in X,Y,Z lengths), and number of faces (default is 4)<br>
&nbsp;&nbsp;&nbsp;<font class="title1">CYLINDER...</font>&nbsp;&nbsp;&nbsp;You will be asked for X,Y,Z position, size of each side (in X,Y,Z lengths), sectors, and the number of rings.<br>
&nbsp;&nbsp;&nbsp;<font class="title1">SPHERE...</font>&nbsp;&nbsp;&nbsp;You will be asked for X,Y,Z position, size of each side (in X,Y,Z lengths), sectors, and the number of rings.<br><br><br>
<font class="newtitle">MODIFY</font>&nbsp;&nbsp;&nbsp;Modify is one of the most important menu area's in Magic, as so well will learn this when we get to it.<br><br><br>
<font class="newtitle">PROPERTIES</font><br>
&nbsp;&nbsp;&nbsp;<font class="title1">MODEL</font>&nbsp;&nbsp;&nbsp;Give info about the model; Surface, Verts, Polys, and Sketch color<br>
&nbsp;&nbsp;&nbsp;<font class="title1">CAMERA</font>&nbsp;&nbsp;&nbsp;We'll get into this a little later on.<br>
&nbsp;&nbsp;&nbsp;<font class="title1">GRID</font>&nbsp;&nbsp;&nbsp;General grid properties, pretty self explanatory.<br>
&nbsp;&nbsp;&nbsp;<font class="title1">SNAP GRID</font> Snap&nbsp;&nbsp;&nbsp;Snap verts to grid. On / Off.<br><br><br>
<font class="newtitle">HELP</font><br>
&nbsp;&nbsp;&nbsp;<font class="title1">ABOUT</font>&nbsp;&nbsp;&nbsp;Magic Version and creator.<br><br><br>

&nbsp;&nbsp;&nbsp;Ok, so thats the file menu area, next up the toobar:<br><br>
</td></tr>

<tr><td>
<font class="newtitle">TOOLBAR</font>
</td></tr>

<tr><td align="center">
<a href="javascript://" onClick="popimage('<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-1.jpg',627,272);return false">
<img src="<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-1_mini.jpg" alt="Toolbar-1" border="0" align="center"></a>
</td></tr>

<tr><td>
<font class="default">
<font class="title1">1)</font> New MAG file.<br>
<font class="title1">2)</font> Open MAG file.<br>
<font class="title1">3)</font> Save MAG file.<br>
</font>
</td></tr>

<tr><td align="center">
<a href="javascript://" onClick="popimage('<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-2.jpg',542,235);return false">
<img src="<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-2_mini.jpg" alt="Toolbar-1" border="0" align="center"></a>
</td></tr>

<tr><td>
<font class="default">
<font class="title1">4)</font> Cut<br>
<font class="title1">5)</font> Copy<br>
<font class="title1">6)</font> Paste<br>
</font>
</td></tr>

<tr><td align="center">
<a href="javascript://" onClick="popimage('<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-3.jpg',435,250);return false">
<img src="<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-3_mini.jpg" alt="Toolbar-1" border="0" align="center"></a>
</td></tr>

<tr><td>
<font class="default">
<font class="title1">7)</font> Undo<br>
<font class="title1">8)</font> Redo<br>
<font class="title1">9)</font> Zoom In<br>
<font class="title1">10)</font> Zoom Out<br>
</font>
</td></tr>

<tr><td align="center">
<a href="javascript://" onClick="popimage('<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-4.jpg',452,230);return false">
<img src="<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-4_mini.jpg" alt="Toolbar-1" border="0" align="center"></a>
</td></tr>

<tr><td>
<font class="default">
<font class="title1">11)</font> Create-a-cube button<br>
<font class="title1">12)</font> Create-a-Cone button<br>
<font class="title1">13)</font> Create-a-cylinder button<br>
<font class="title1">14)</font> Create-a-Sphere button<br>
</font>
</td></tr>

<tr><td align="center">
<a href="javascript://" onClick="popimage('<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-5.jpg',407,215);return false">
<img src="<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-5_mini.jpg" alt="Toolbar-1" border="0" align="center"></a>
</td></tr>

<tr><td>
<font class="default">
<font class="title1">15)</font> Move Selection<br>
<font class="title1">16)</font> Scale Selection ( X, Y, Z)<br>
<font class="title1">17)</font> Rotate Selection<br>
</font>
</td></tr>

<tr><td align="center">
<a href="javascript://" onClick="popimage('<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-6.jpg',117,91);return false">
<img src="<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-6_mini.jpg" alt="Toolbar-1" border="0" align="center"></a>
</td></tr>

<tr><td>
<font class="default">
<font class="title1">18)</font> Scale X<br>
<font class="title1">19)</font> Scale Y<br>
<font class="title1">20)</font> Scale Z<br>
</font>
</td></tr>

<tr><td align="center">
<a href="javascript://" onClick="popimage('<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-7.jpg',292,147);return false">
<img src="<?PHP echo $httproot ?>tutorials/includes/magic1-1/toolbar1-7_mini.jpg" alt="Toolbar-1" border="0" align="center"></a>
</td></tr>

<tr><td>
<font class="default">
<font class="title1">21)</font> Flip Normals (face)<br>
<font class="title1">22)</font> Delete<br><br><br>

<font class="title1">Status Bar:</font><br>
&nbsp;&nbsp;&nbsp;The bottom left of the status bar will give you general information, usuall Ready or Working.
&nbsp;&nbsp;&nbsp;the center area will read the X & Y, Y & Z, or X & Z co ordanate. Also, if tyou have a selection it will show how many verts and poly's are selected.<br>

&nbsp;&nbsp;&nbsp;Ok, so enof of that, time ot get down to the nitty gritty of makin something. In Magic 102 we shall begin makeing our object. Grab some chips & salsa, a soda or 3 and get that gray metter between your ears ready for a shock.<A href="magicmodeling-magic1-2.php" target="_self" class="minilinks">---Next---</A>
</td></tr></table>
</td></tr></table>