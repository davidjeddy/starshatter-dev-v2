&nbsp;&nbsp;&nbsp;12/11/2003 - 11:00am EST - Ok right! Got some Official action going on now! The new SS 3.8.7 has been released and it has a new planets and a few more ships also- pics to come soon. Here's whats going down:<br><br>

Here's a run down of 3.8.x series fixes and updates:<br>
The beta distribution is over 77 MB.  The manual is about 3 MB.  The patch provides additional content as well as a new executable, and is now over 10 MB.<br><br>
NEW FEATURES AND FIXES SINCE 3.8.6:<br>
* Campaign Three is complete<br>
* Multiplayer client configuration check (anti-cheating measure)<br>
* Thrusters will fire during ship rotation (mods only)<br>
* HUD shows contact name for all contacts<br>
* New planet surface - Haiche desert mining outpost<br>
* New background nebula for Borova<br>
* New ship designs - Thunderbolt, Devastator, Vendetta<br>
* All fighters now have visible hardpoints<br>
<br>
* FIXED: shields can now have holes<br>
* FIXED: eclipse bug (very rare)<br>
* FIXED: multiple inbound bug<br>
* FIXED: HUD mode nav bug (autonav disabled)<br>
* FIXED: HUD mode ILS bug<br>
* FIXED: campaign system assignments bug<br>
* FIXED: atmospheric density calcs<br>
* FIXED: maximum agility penalty for heavy weapons<br>
* OTHER: Mod version number is now a string instead of a simple number<br>
<br>
NEW FEATURES AND FIXES SINCE 3.8.5a:<br>
* MAIL messages from friends and colleagues during missions<br>
* Campaign Three is a bit further along, but still not done<br>
* FIXED: starship groups will move apart from one another between campaign missions (to prevent the mother-of-all-furballs)<br>
* FIXED: fighters now engage starships using anti-ship missiles<br>
* FIXED: destroyer patrol missions now have more enemies<br>
* FIXED: navpoints now generated for warships when they are escorting you<br>
<br>
NEW FEATURES AND FIXES SINCE 3.8.5:<br>
* Target selection icon indicates when in primary weapon range (looks like a broken circle when out of range, circle with triangles at the corners when in range)<br>
* HUD Warning panel automatically closed before starting new mission<br>
<br>
* FIXED: mission editor will not allow "blank" loadout<br>
* FIXED: map window drawing order bug<br>
* FIXED: no afterburner effect if engine is damaged or out of power<br>
* FIXED: dedicated server crash bug<br>
* FIXED: farcasters now working in campaign as well as single missions<br>
* FIXED: reduced fuel consumption when not using engines<br>
* FIXED: stations and farcasters will no longer move around between missions as if they were starships on patrol<br>
<br> 
NEW FEATURES AND FIXES SINCE 3.8.3:<br>
* Installer instead of ZIP file<br>
* First-run configuration dialog<br>
* Better end of campaign message<br>
* Partial 3rd campaign Operation Shining Fortress<br>
* New star systems<br>
* PDBs and shields automatically enabled<br>
* MFD settings stored in user profile automatically<br>
* Combat music mode is working<br>
* Allowed to dock at neutral stations during campaign<br>
* Support for 640x480 and 1024x768<br>
* Patrol movement of starship groups between missions<br>
* Move patrol command sets AI to self-defense<br>
* trigger event supports list of events (or-condition)<br>
* trigger event ALL supports list of events (and-condition)<br>
<br>
* FIXED: assault navpoint marked complete too soon<br>
* FIXED: loss of focus when editing an event<br>
* FIXED: select last even when adding<br>
* FIXED: multiplayer self destruct<br>
* FIXED: multiplayer beam cutoff<br>
* FIXED: multiplayer weapon modes for in progress join<br>
* FIXED: multiplayer damage, shield levels<br>
* FIXED: nike missile damage too high<br>
* FIXED: multiplayer radio traffic<br>
* FIXED: validate mission - player must be in mission sector<br>
* FIXED: event IFF bugs<br>
* FIXED: most fighters now have actual hardpoints (still need to do the Viper, Razor, and Cobra)<br>
<br>
NEW CONTENT:<br>
* Marakan Carrier (Dragon Class)<br>
* Marakan Destroyer (Volnaris Class)<br>
* Marakan Hvy Fighter (Raptor Class)<br>
* Marakan Hvy Strike (Avenger Class)<br>
* Alliance Interceptor (Falcon Class)<br>
* New Starsystems (Jarnell, Silessia, Haiche, Borova, Athenar)<br>
<br>
Thanks,<br><br>






Also from milo: he added new thruster bitmasks; so now we can get correct thruster visuals for roll, yaw and pitch. <a href="http://starshatter.com/forum/thread.php?topic=2020" target="_new" class="minilinks">Here's the 411 on this</a>. And here's a quick take from the Official Ss forum:<br>

<table border="0" cellspacing="3" cellpadding="3">
	<tr height="20" valign="top">
		<td rowspan="2" width="20%">
			<font class="default">
			<b>milo</b><br><br>
			Posts: 1371<br>
			Registered: 08.18.01<br>
			</font>
		</td>
		<td width="85%" class="forumheader">
			<img src="interfaces/icons/icon_post.gif" width="15" height="15"><font class="default">&nbsp;&nbsp;Thruster bitmask</font><br>
		</td>
	</tr>
	<tr valign="top" >
		<td width="100%">
			<font class="default">Finished.  The syntax is as you suggested.  For backward compatibility, you can just specify a location vector instead of a port struct and the game will figure out the firing bitmap for translations based on the port type (translations only, not rotations).  In other words:<br>
port_bottom: { loc: (-100, 0, -100), fire: 0x0020 }<br>
is equivalent to<br>
port_bottom: (-100, 0, -100),<br><br>
Here is the list of bits for the <b>fire</b> parameter:<br>
0x0001 = Left (i.e. port side thruster used to translate to starboard)<br>
0x0002 = Right<br>
0x0004 = Fore<br>
0x0008 = Aft<br>
0x0010 = Top<br>
0x0020 = Bottom<br>
-----------------<br>
0x0040 = Yaw Left<br>
0x0080 = Yaw Right<br>
0x0100 = Pitch Down<br>
0x0200 = Pitch Up<br>
0x0400 = Roll Left<br>
0x0800 = Roll Right<br>
--milo<br>
<a href="http://www.starshatter.com" target="_blank">http://www.starshatter.com</a>
			</font>
		</td>
	</tr>
</table>
<br>
<br>
