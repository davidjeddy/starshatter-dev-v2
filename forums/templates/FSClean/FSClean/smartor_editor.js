var theSelection = false;

var clientPC = navigator.userAgent.toLowerCase();
var clientVer = parseInt(navigator.appVersion);

var is_ie = ((clientPC.indexOf("msie") != -1) && (clientPC.indexOf("opera") == -1));
var is_nav  = ((clientPC.indexOf('mozilla')!=-1) && (clientPC.indexOf('spoofer')==-1)
                && (clientPC.indexOf('compatible') == -1) && (clientPC.indexOf('opera')==-1)
                && (clientPC.indexOf('webtv')==-1) && (clientPC.indexOf('hotjava')==-1));

var is_win   = ((clientPC.indexOf("win")!=-1) || (clientPC.indexOf("16bit") != -1));
var is_mac    = (clientPC.indexOf("mac")!=-1);

b_help = "Bold text: [B]text[/B]";
i_help = "Italic text: [I]text[/I]";
u_help = "Underline text: [U]text[/U]";
q_help = "Quote text: [QUOTE]text[/QUOTE]";
c_help = "Code display: [CODE]code[/CODE]";
p_help = "Insert image: [IMG]http://image_url[/IMG]";
w_help = "Insert URL: [URL]http://url[/URL] or [URL=http://url]URL text[/URL]";
s_help = "Font color: [COLOR=red]text[/COLOR] Tip: can also use HTML color=#FF0000";
f_help = "Font size: [SIZE=9]small text[/SIZE]";

var Quote = 0;
var Bold  = 0;
var Italic = 0;
var Underline = 0;
var Code = 0;

function helpline(help) {
	document.post.helpbox.value = eval(help + "_help");
	document.post.helpbox.readOnly = "true";
}

function checkForm() {
	formErrors = false;    
	if (document.post.message.value.length < 2) {
		formErrors = "You must enter a message when posting";
	}
	if (formErrors) {
		alert(formErrors);
		return false;
	} else {
		//formObj.preview.disabled = true;
		//formObj.submit.disabled = true;
		return true;
	}
}

function emoticon(text) {
	text = ' ' + text + ' ';
	PostWrite(text);
}

function bbfontstyle(bbopen, bbclose) {
	if ((clientVer >= 4) && is_ie && is_win) {
		theSelection = document.selection.createRange().text;
		if (!theSelection) {
			document.post.message.value += bbopen + bbclose;
			document.post.message.focus();
			return;
		}
		document.selection.createRange().text = bbopen + theSelection + bbclose;
		document.post.message.focus();
		return;
	} else {
		document.post.message.value += bbopen + bbclose;
		document.post.message.focus();
		return;
	}
	storeCaret(document.post.message);
}

function storeCaret(textEl) {
	if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
}

function PostWrite(text) {
	if (document.post.message.createTextRange && document.post.message.caretPos) {
		var caretPos = document.post.message.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ?	text + ' ' : text;
	}
	else document.post.message.value += text;
	document.post.message.focus(caretPos)
}

function BBCcode() {
	if ((clientVer >= 4) && is_ie && is_win) {
		theSelection = document.selection.createRange().text;
		if (theSelection != '') {
		document.selection.createRange().text = "[CODE]" + theSelection + "[/CODE]";
		document.post.message.focus();
		return;
		}
	}
	if (Code == 0) {
		ToAdd = "[CODE]";
		document.post.code.value = "Code*";
		Code = 1;
	} else {
		ToAdd = "[/CODE]";
		document.post.code.value = "Code";
		Code = 0;
	}
	PostWrite(ToAdd);
}

function BBCquote() {
	if ((clientVer >= 4) && is_ie && is_win) {
		theSelection = document.selection.createRange().text;
		if (theSelection != '') {
		document.selection.createRange().text = "[QUOTE]" + theSelection + "[/QUOTE]";
		document.post.message.focus();
		return;
		}
	}
	if (Quote == 0) {
		ToAdd = "[QUOTE]";
		document.post.quote.value = "Quote*";
		Quote = 1;
	} else {
		ToAdd = "[/QUOTE]";
		document.post.quote.value = "Quote";
		Quote = 0;
	}
	PostWrite(ToAdd);
}

function BBCbold() {
	if ((clientVer >= 4) && is_ie && is_win) {
		theSelection = document.selection.createRange().text;
		if (theSelection != '') {
		document.selection.createRange().text = "[B]" + theSelection + "[/B]";
		document.post.message.focus();
		return;
		}
	}
	if (Bold == 0) {
		ToAdd = "[B]";
		document.post.bold.value = "B*";
		Bold = 1;
	} else {
		ToAdd = "[/B]";
		document.post.bold.value = "B";
		Bold = 0;
	}
	PostWrite(ToAdd);
}

function BBCitalic() {
	if ((clientVer >= 4) && is_ie && is_win) {
		theSelection = document.selection.createRange().text;
		if (theSelection != '') {
		document.selection.createRange().text = "[I]" + theSelection + "[/I]";
		document.post.message.focus();
		return;
		}
	}
	if (Italic == 0) {
		ToAdd = "[I]";
		document.post.italic.value = "i*";
		Italic = 1;
	} else {
		ToAdd = "[/I]";
		document.post.italic.value = "i";
		Italic = 0;
	}
	PostWrite(ToAdd);
}

function BBCunder() {
	if ((clientVer >= 4) && is_ie && is_win) {
		theSelection = document.selection.createRange().text;
		if (theSelection != '') {
		document.selection.createRange().text = "[U]" + theSelection + "[/U]";
		document.post.message.focus();
		return;
		}
	}
	if (Underline == 0) {
		ToAdd = "[U]";
		document.post.under.value = "U*";
		Underline = 1;
	} else {
		ToAdd = "[/U]";
		document.post.under.value = "U";
		Underline = 0;
	}
	PostWrite(ToAdd);
}

function BBCurl() {
	var FoundErrors = '';
	var enterURL   = prompt("Enter your URL", "http://");
	var enterTITLE = prompt("Enter the webpage title", "Webpage Title");
	if (!enterURL)    {
		FoundErrors += " You have not entered the URL yet!";
	}
	if (!enterTITLE)  {
		FoundErrors += " You have not entered the title yet!";
	}
	if (FoundErrors)  {
		alert("Error!"+FoundErrors);
		return;
	}
	var ToAdd = "[URL="+enterURL+"]"+enterTITLE+"[/URL]";
	document.post.message.value+=ToAdd;
	document.post.message.focus();
}

function BBCimg() {
	var FoundErrors = '';
	var enterURL   = prompt("Enter your image URL","http://");
	if (!enterURL) {
		FoundErrors += " You have not entered the URL yet!";
	}
	if (FoundErrors) {
		alert("Error!"+FoundErrors);
		return;
	}
	var ToAdd = "[IMG]"+enterURL+"[/IMG]";
	document.post.message.value+=ToAdd;
	document.post.message.focus();
}