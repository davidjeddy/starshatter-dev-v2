<!--Side Menu 1-->
<TABLE WIDTH="200" BORDER="2" BORDERCOLOR="#ffff88" CELLSPACING="0" CELLPADDING="0">
	<TR>
		<TD>
			<TABLE WIDTH="200" BORDER="0" BORDERCOLOR="#ffff88" CELLSPACING="2" CELLPADDING="0">
				<TR ALIGN="center"> 
					<TD HEIGHT="29" BACKGROUND="<?PHP echo $httproot ?>interfaces/default/SideMenuTitle.png"><font class="default">User's Online Info</font>
					</td>

				<TR>
					<TD ALIGN="center" VALIGN="middle" BGCOLOR="#E8E984">
						<FONT CLASS="sidenews">
						<?PHP include("phpscripts/counters/counter.php");?>
						<a href="phpscripts/counters/counter.php?action=login" class="minilinks" target="_new">Admin</a>
						</font>
				</TR>

			</TABLE>
		</TD>
	</TR>
</TABLE>