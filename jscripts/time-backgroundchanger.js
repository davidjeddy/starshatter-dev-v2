day=new Date()     //..get the date
x=day.getHours()    //..get the hour
if(x>=0 && x<2) {
   document.write('<body bgcolor=#000000>')
} else
if(x>=2 && x<4) {
   document.write('<body bgcolor=#444444>')
} else
if(x>=4 && x<6) {
   document.write('<body bgcolor=#888888>')
} else
if (x>=6 && x<8) {
   document.write('<body bgcolor=#cccccc>')
} else
if(x>=10 && x<12) {
   document.write('<body bgcolor=#DFDFDF>')
} else
if(x>=14 && x<16) {
   document.write('<body bgcolor=#DFDFDF>')
} else
if(x>=16 && x<18) {
   document.write('<body bgcolor=#cccccc>')
} else
if(x>=18 && x<20) {
   document.write('<body bgcolor=#888888>')
} else
if (x>=20 && x<22) {
   document.write('<body bgcolor=#444444>')
}
if (x>=22 && x<24) {
   document.write('<body bgcolor=#000000>')
}