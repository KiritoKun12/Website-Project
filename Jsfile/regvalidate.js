function regvalidateform()
{ 
      var letters = /^[A-Za-z]+$/;
      if(document.myform.fname.value.match(letters))
      {
      alert('Your firstname has been accepted');
      }
      else
      {
      alert('Please input alphabet characters only');
      document.myform.fname.focus();
      return false;
      }
  
      var letters = /^[A-Za-z]+$/;
      if(document.myform.lname.value.match(letters) || document.myform.lname.value=="")
      {
      alert('Your lastname has been accepted');
      }
      else
      {
      alert('Please input alphabet characters only');
      document.myform.lname.focus();
      return false;
      }

      var numbers = /^[1-9]\d{9}$/;
      if(document.myform.contact.value.match(numbers))
      {
      alert('Your contact no. has been accepted....');
      }
      else
      {
      alert('Please input numeric characters of suitable length only ');
      document.myform.contact.focus();
      return false;
      }
      
      return true;
   } 