function valid_student(frm){
   if(frm.st_name.value==""){	
    alert("Enter Name:");
    frm.st_name.focus();
    return false;
}
/* if(frm.st_name.value!=null){
 var a=st_name;
  for(var i=0; i<a.length; i++){
   if(i==0)
  var  b=a.toUpperCase();
   document.write(st_name);
   else
   document.write(st_name); 
  }
 }
*/
 if(frm.st_father.value==""){
 alert("Enter father:");
 frm.st_name.focus();
 return false;
 }

 if(frm.st_phone.value==""){
   alert("Enter phone");
   frm.st_phone.focus();
   return false;
 }
 if(frm.st_phone.value.maxlength<10)
 {
   alert("Enter phone number:");
   frm.st_phone.focus();
   return false; 
 }

              ############ Email #########
 var email=frm.st_Email.value;
if(email.indexOf("@")==-1 || email.indexOf("@")==0 || email.indexOf("@")==(email.length)-1){
  alert("Email Incorrect:");
  frm.st_Email.focus();
   return false;
}
var c=0;
 for(var i=0; i<email.length; i++)
 {
    if(email.charAt(i)=="@")
   c++;
}
 if(c>1)
 {
   alert("Email Incorrect:");
   frm.st_Email.focus();
   return false;
 }


if(frm.st_gen[0].checked==false && frm.st_gen[1].checked==false){
 alert("please Select Gender:");
 frm.st_gen[1].checked=true;
  return false;
}


var chk=false;
   var frm_len=frm.elements.length;
    for(i=0;i<frm_len;i++){
   if(frm.elements[i].name=="st_qual[]"&&frm.elements[i].type=="checkbox"){
      if(frm.elements[i].checked==true)
      {
	chk=true;
	break;
      }
     }
    }



    if(chk==false)
       {
          aedclert("Plz Select Qualification");
	 return false;
       }
   
 if(frm.st_address1.value=="")
 {
   alert("Enter Local Address");
    frm.st_address1.focus();
    return false;
 }
 if(frm.st_address2.value=="")
  {
    alert("Enter Permanent Address");
    frm.st_address2.focus();
    return false;
 }	 
 if(frm.st_city.value=="0")
 {
   alert("Select City:");
   frm.st_city.focus();
   return false;
 }
 if(frm.st_state.value=="0")
 {
   alert("Select State:");
    frm.st_state.focus();
    return false;
 }
  if(frm.st_country.value=="0")
 {
   alert("Select country:");
    frm.st_country.focus();
    return false;
 }



var pin=frm.st_pincode.value;
 if(pin=="")
 { 
 alert("Enter pincode:");
  pin.focus();
  return false;
 }
if(pin.maxlength<6)
 {
  alert("Enter 6 digits pincode:");
  frm.st_pincode.focus();
  return false;
 }
    if(frm.st_dob.value==""){	
    alert("Enter DOB:");
    frm.st_dob.focus();
    return false;
 }
if(frm.st_doa.value=="")
  {
     alert("Enter DOA:");
     frm.st_doa.focus();
     return false;
  }
   if(frm.st_course.value=="0")
 {
   alert("Select course:");
    frm.st_course.focus();
    return false;
 }
  if(frm.st_total.value.maxlength<=5)
 {
   alert("Enter total number:");
   frm.st_total.focus();
   return false; 
 }
 if(frm.st_paid.value.maxlength<=5)
 {
   alert("Enter paid:");
   frm.st_paid.focus();
   return false; 
 }
 
  if(frm.st_balence.value.maxlength<=5)
 {
   alert("Enter  Balence:");
   frm.st_balence.focus();
   return false; 
 }

 
 if(frm.st_image.value=="")
{
 alert("Select your image:");
  frm.st_image.focus();
  return false;
}
return true;
}
///function for printout/////
 function printout()
 {
	  window.print();
	  
 }

//////function for delete student////////
  function delete_student(st_id){
	  alert("called");
   if(confirm("Are you sure to Delete selected Record"))
    {
       this.document.student_view.act.value='delete_student';
       this.document.student_view.st_id.value='st_id';
       this.document.student_view.submit();
      }
  }
    function delete_fees('st_id'){
   if(confirm("Are you sure to Delete selected Record"))
    {
       this.document.fees_view.act.value="delete_fees()";
       this.document.fees_view.st_id.value="st_id";
       this.document.fees_view.submit();
      }
  }
    /////////funtion for mulitiple delete//////
    function multiple_student_delete()
    {
    if(confirm("Are you sure to Delete selected Record?"))
      {
       this.document.student_view.act.value="multiple_student_delete";
       this.document.student_view.submit();
      }
    }
  
///function for select all //////
   function mark_All(obj)
   {
    var frm=this.document.student_view;	 
    var frm_len=frm.elements.length;
    for(var i=0; i<frm_len; i++)
     {
     if(frm.elements[i].name=="st_multi_id[]"&&frm.      elements[i].type=="checkbox"){
      frm.elements[i].checked=obj.checked;	    
      }
    }
  }
    function mark_All(obj)
   {
    var frm=this.document.fees_view;	 
    var frm_len=frm.elements.length;
    for(var i=0; i<frm_len; i++)
     {
     if(frm.elements[i].name=="st_multi_id[]"&&frm.      elements[i].type=="checkbox"){
      frm.elements[i].checked=obj.checked;	    
      }
    }
 function balence(){
  var totalfees=document.getElementById("st_totalfees").   value;
   var paid=document.getElementById("st_paid").value;
   var balence=document.getElementById("st_bal").value;
   if(balence="")
   balence=parseInt("totalfees")-parseInt("paid");
   else
    balence=parseInt("balence")-parseInt("paid");
}

	  
