function popimage(imagesrc,winwidth,winheight)
	{
		var look='width='+winwidth+',height='+winheight+','
		popwin=window.open("","",look)
		popwin.document.open()
		popwin.document.write('<title>-=StarShatter Dev=-</title><body bgcolor="#000000" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0"><a href="#" onClick="window.close();return true;"><img src="'+imagesrc+'" border="0"></a></body>')
		popwin.document.close()
	}