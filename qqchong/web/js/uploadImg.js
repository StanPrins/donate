<script src="tiny_mce/tiny_mce_popup.js" type="text/javascript"></script>
var FileBrowserDialogue = {    
		init : function () 
		{        
	var win = tinyMCEPopup.getWindowArg("window");        //就这句关键，IMG_URI应该由服务端生成        
	win.document.getElementById(tinyMCEPopup.getWindowArg("input")).value = 'IMG_URI';        
	tinyMCEPopup.close();    }};
tinyMCEPopup.onInit.add(FileBrowserDialogue.init, FileBrowserDialogue);
}