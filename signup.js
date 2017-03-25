function myFunction()
{
  var a = document.forms["form2"]["username"];
	if(a.value=="")
 	{
		alert("Please fill the username!!");
        return false;
	}

  /*if (! allLetter(a)) {
		 alert("First Name should be all characters!!");
		 return false;
	}*/

  var b = document.forms["form2"]["pass"];
	if(b.value=="")
 	{
		alert("Please fill the password!!");
        return false;
	}

  var c = document.forms["form2"]["re-pass"];
	if(c.value=="")
 	{
		alert("Please fill the re-password!!");
        return false;
	}

  if(b.value != c.value)
  {
    alert("Enter the correct re-password");
    return false;
  }
  else {
    alert("Sign up successful");
    return false;
  }

}
function allLetter(inputtxt)
                {
                 var letters = /^[A-Za-z]+$/;
                 if(inputtxt.value.match(letters))
                   {
              	     return true;
                   }
                 else
                   {
              	     return false;
                   }
                }
