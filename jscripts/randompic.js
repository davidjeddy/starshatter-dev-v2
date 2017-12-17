NOT TO BE USED AS AN INCLUDE! MUST COPY SOURCE TO TARGET FILE
<SCRIPT language="Javascript" TYPE="text/javascript">
	

	var ic = 28;                     // Number of alternative images
	var i = new Array(ic);          // Array to hold filenames
	var path = "exclusives/damo B5Htl pics/";
	i[0]="A28";i[1]="A1";i[2]="A2";i[3]="A3";i[4]="A4";i[5]="A5";i[6]="A6";i[7]="A7";i[8]="A8";i[9]="A9";i[10]="A10";i[11]="A11";i[12]="A12";i[13]="A13";i[14]="A14";i[15]="A15";i[16]="A16";i[17]="A17";i[18]="A18";i[19]="A19";i[20]="A20";i[21]="A21";i[22]="A22";i[23]="A23";i[24]="A24";i[25]="A25";i[26]="A26";i[27]="A27";

    function pickRandom(range) {
        if (Math.random)
            return Math.round(Math.random() * (range-1));
        else {
            var now = new Date();
            return (now.getTime() / 1000) % range;
        }
    }
    
    var choice = pickRandom(ic);
				 
document.writeln('<a href="javascript://" onClick="popimage(\''+path+''+ i[choice] +'.jpg\',800,600);return false"><img src="'+path+'tmb_'+ i[choice] +'.jpg" width=\"240\" height=\"180\" border=\"0\" alt=\"SSDv2\"></a><br>');
</script>