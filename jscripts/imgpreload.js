var myimages=new Array()
function preloadimages()
	{
		for (i=0;i<preloadimages.arguments.length;i++)
			{
				myimages[i]=new Image()
				myimages[i].src=preloadimages.arguments[i]
			}
	}
preloadimages("interfaces/default/VesselMOD.png","interfaces/default/OtherMOD.png","interfaces/default/Communicate.png","interfaces/default/OfficalFiles.png","interfaces/default/SecureZone.png","interfaces/default/Tutorials.png","interfaces/default/SideMenuTitle.png","interfaces/default/SSDTitle.png","interfaces/default/MainTableTitle.png","interfaces/default/VesselMOD-on.png","interfaces/default/OtherMOD-on.png","interfaces/default/Communicate-on.png","interfaces/default/OfficalFiles-on.png","interfaces/default/SecureZone-on.png","interfaces/default/Tutorials-on.png")