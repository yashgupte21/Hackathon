function myFunction()
{
  var a = document.forms["form1"]["username"];
	if(a.value=="")
 	{
		alert("Please fill the username!!");
        return false;
	}

  /*if (! allLetter(a)) {
		 alert("First Name should be all characters!!");
		 return false;
	}*/

  var b = document.forms["form1"]["pass"];
	if(b.value=="")
 	{
		alert("Please fill the password!!");
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
