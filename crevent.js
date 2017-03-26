function myFunction()
{
  //alert("hi");
    var a = document.forms["form1"]["title"];
  if(a.value=="")
  {
    alert("Please fill the Title of the workshop!!");
        return false;
  }

  var b = document.forms["form1"]["desc"];
  if(b.value=="")
  {
    alert("Please fill the Description of the workshop!!");
        return false;
  }

  var c = document.forms["form2"]["date"];
  if(c.value=="")
  {
    alert("Please fill the Date of the workshop!!");
        return false;
  }

  var d = document.forms["form2"]["time1"];
  if(d.value=="")
  {
    alert("Please fill the Timings of the workshop!!");
        return false;
  }

  var e = document.forms["form2"]["place"];
  if(e.value=="")
  {
    alert("Please fill the Venue of the workshop!!");
        return false;
  }


  var f = document.forms["form2"]["nfees"];
  if(f.value=="")
  {
    alert("Please fill the fees for Non CSI members.");
        return false;
  }

  var g = document.forms["form2"]["fees"];
  if(g.value=="")
  {
    alert("Please fill the fees for CSI members");
        return false;
  }

  var h = document.forms["form3"]["f_name1"];
  if(h.value=="")
  {
    alert("Please fill the First Name of the organizer.");
        return false;
  }
    if (! allLetter(h)) {
     alert("First Name should be all characters!!");
     return false;
}
var i = document.forms["form3"]["l_name1"];
if(i.value=="")
{
  alert("Please fill the Last Name of the organizer.");
      return false;
}
  if (! allLetter(i)) {
   alert("Last Name should be all characters!!");
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
