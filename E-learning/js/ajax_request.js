$(document).ready(function(){
   //Ajax Call From Already  Emali Verfcation
   $("#stuemail").on("keypress,blur",function(){
      var stuemail=$("#stuemail").val();
      $.ajax({
         method:"POST",
         url:"student/addstudent",
         dataType:"json",
         data:{
            checkemail:"checkemail",
            stuemail:stuemail,

         },
         success:function(data){
            console.log(data);        
         }

      });
   });

});




function addstureg()
{
// 	alert("hii");
   var email=/^[a-z0-9.-_%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/i;
   var stuname=$('#stuname').val();
   var stuemail=$('#stuemail').val();
   var stupass=$('#stupass').val();
   // alert(stuname);
   // alert(stupass);
   // alert(stuemail);
   // Checking Form Fields on Form Submission
   if(stuname.trim()==""){
      $("#stumsg1").html('<small style="color:red" "font-size:10px";>Please Enter Name!</small>');
      $("#stumsg1").focus();
      return false;
   }
   else if (stuemail.trim()=="") {
      $('#stumsg2').html('<small style="color:red";>Please Enter Email!</small>');
      $('#stumsg2').focus();
      return false;
   }
      else if (stuemail.trim()!="" &&!email.test(stuemail)) {
         $('#stumsg2').html('<small style="color:red";>Please Enter Vaild Email e.g. Example @gmail.com</small>');
      $('#stumsg2').focus();
      return false;

      }
 
   else if (stupass.trim()=="") {
      $('#stumsg3').html('<small style="color:red";>Please Enter Password!</small>');
      $('#stumsg3').focus();
      return false;
   }
   else{
      $.ajax({
      method:'POST',
      url:'student/addstudent.php',
      dataType:"json",
      
      data:{
         stusignup:"stusignup",
         stuname:stuname,
         stuemail:stuemail,
         stupass:stupass,
      },
      success:function(data){
         console.log(data);
         if (data =="OK") {
            $('#successMsg').html("<span class='alert-success'>Registration Successful! </span>");
         
         clearStuRegfields();
      }             
         else if (data="Faild") {
            $('#successMsg').html("<span class='alert-danger'>Unable to Registration! </span>");

         }
      },

   });


   }

   
 }
 //Empty All Fields
 function clearStuRegfields(){
   $('#stuRegForm').trigger("reset");
   $('#stumsg1').html(" ");
    $('#stumsg2').html(" "); 
    $('#stumsg3').html(" ");
 }