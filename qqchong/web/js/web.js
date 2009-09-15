//field_name: 窗口甲等待填入URI的文本框的id
//url: 对于上传来说就别管了
//type: 这个也不说了，对我们没用
//win: 这就是窗口甲的句柄，后面用来通信
function upload_image(field_name, url, type, win)
{    
	tinyMCE.activeEditor.windowManager.open({
		file : '/js/uploadImg.js',  //上传窗口的路径        
		title : '浏览图片',        
		width : 420,        
		height : 200,        
		resizable : "no",        
		inline : "yes",        
		close_previous : "no"    }, {        
			window : win,  //告诉它是被谁弹出来的        
			input : field_name  //这个是指生成的图片地址要往哪里填    
			});    
	return false;
}