function display()
{
	var photo_input = document.getElementById("photo");
	var control_button = document.getElementById("control_button");
	var str = control_button.value;
	if(str == "Change")
	{
		photo_input.style.display = "inline";
		control_button.value = "Cancel";
	}
	else
	{
		photo_input.style.display = "none";
		photo_input.value = null;
		control_button.value = "Change";
	}	
}

function checkpassword()
{
	var pass1 = document.getElementById('password').value;
	if(pass1)
	{
		var pass2 = document.getElementById('password_confirm').value;
		if(pass1==pass2)
		{
			document.getElementById("submit").disabled="";
		}
		else
		{
			alert('Two passwords can not match.');
			document.getElementById("submit").disabled="disabled";
		}
	}
}

function checkNum()
{
	var right = document.getElementById('droit').value;
	var obj = document.getElementById('submit');
	var org = document.getElementById('original').value;
	if(right.match(/\d{1,3}/))
	{
		 if(right<=100 && right>=0 && right!=org)
		 {
			 obj.disabled = '';
		 }
		 else
		 {
			 obj.disabled = 'disabled';
			 if(right==org)
				 alert("Don't be the same value.");
			 else
				 alert('The integer over-ranged.'); 
		 }
	}
	else
	{
		obj.disabled = 'disabled';
		alert('Please input a integer.');		
	}
}