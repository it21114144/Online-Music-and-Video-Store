
function checkPassword()
{
	var password = document.getElementById("pwd").value;
	var confirmpassword = document.getElementById("cpwd").value; 
	
	if(password == confirmpassword)
	{
		alert("Account has Successfully Created!");
		return true;
	}	
	else
	{
		alert("Password Mismatch");
		
	}	
}

function resetform()
{
	document.getElementById("reset").reset();
	
}

function checkResetPassword()
{
	var New = document.getElementById("newpwd").value;
	var confirmNew = document.getElementById("cnewpwd").value; 
	
	if(New == confirmNew)
	{
		alert("Reset Password is Successfull!");
		return true;
	}	
	else
	{
		alert("Password Mismatch");
		
	}	
	
}
