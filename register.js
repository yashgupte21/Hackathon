function myFunction()
{
  var x = document.forms["form"]["name"];
   if (x.value == "") {
       alert(" Name should not be blank !!");
       return false;
   }

 

   var b = document.forms["form"]["year"];
   if(b.value=="no")
   {
     alert("Please fill the year!!");
         return false;
   }

var c = document.forms["form"]["email"];
  if (c.value == "")
   {
                alert("Email should not be blank !!");
                return false;
    }

	if (! ValidateEmail(c))
  {
		 alert('Please input valid Email ID!!!');
      return false;
	}

var d= document.forms["form"]["mobile"];
if(d.value=="")
{
  alert("Please Enter Mobile Number");
  return false;
}
if (! allnumeric(d)) {
		 alert('Please input numeric characters only');
      return false;
	}


}

              function allnumeric(inputtxt)
                          {
                             var numbers = /^[0-9]+$/;
                             if(inputtxt.value.match(numbers))
                             {
                               return true;
                             }
                             else
                             {
                               return false;
                             }
                          }

                          function limit(element,limit)
                            {
                              var max_chars = limit;

                                if(element.value.length > max_chars)
                                 {
                                  element.value = element.value.substr(0, max_chars);
                                }
                            }


function ValidateEmail(inputText)
          			 {
          				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
          				if(inputText.value.match(mailformat))
          					{

          					return true;
          					}
          				else
          					{
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
