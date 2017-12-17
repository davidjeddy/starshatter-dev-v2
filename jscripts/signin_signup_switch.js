function WM_checkIn(id) {

/*
WM_checkIn()
Takes the ID of a positioned HTML element and returns an object reference.

Source: Webmonkey Code Library
(http://www.hotwired.com/webmonkey/javascript/code_library/)

Author: Taylor
Author Email: taylor@wired.com
Author URL: http://www.taylor.org/

Usage: WM_checkIn('id')
*/

  // This function checks for DOM strategy, then 
  // returns an object reference.
  if (document.all) {
    return document.all[id].style;
  } else if(document.layers) {
    return document.layers[id];
  }
}




/*
WM_changeVisibility()
Changes whether a layer is visible or hidden.

Source: Webmonkey Code Library
(http://www.hotwired.com/webmonkey/javascript/code_library/)

Author: Nadav Savio
Author Email: nadav@wired.com

usage: WM_changeVisibility('targetLayer1',[visible|hidden|toggle],'targetLayer2',[visible|hidden|toggle],...,'targetLayerN',[visible|hidden|toggle])

*/

// set hidden/visible vars for Netscape 4 compatibility
if (document.layers) {
  var hidden = "hide";
  var visible = "show";
} else {
  var hidden = "hidden";
  var visible = "visible";
}
var toggle = "toggle";

function WM_changeVisibility() {
  if (document.layers || document.all) {
    var inc, endInc=arguments.length;
    // run through the args (objects) and set the visibility of each
    for (inc=0; inc<endInc; inc+=2) {
      // get a good object reference
      var daObj = WM_checkIn(arguments[inc]);
      if (arguments[inc+1] == hidden) {
        // hide the object
        daObj.visibility = hidden;
      } else if (arguments[inc+1] == visible) {
        // show the object
        daObj.visibility = visible;
      } else if (arguments[inc+1] == toggle) {
        // toggle the object's visibility
        if (daObj.visibility == visible) {
          daObj.visibility = hidden;
        } else if (daObj.visibility == hidden) {
          daObj.visibility = visible;
        }
      }
    }
  }
}