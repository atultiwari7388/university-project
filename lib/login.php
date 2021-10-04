<?php 
session_start();
include("../includes/db_connect.php");
if($_REQUEST['act'])
{
  $_REQUEST['act']();
  }

  //function  for check login.........
  function check_login()
  {
   $R=$_REQUEST;
  $sql="select *from login where login_name='$R[login_name]' and login_pass='$R[login_pass]'";
  $rs=mysql_query($sql) or  die(mysql_error());
           if(mysql_num_rows($rs))
	        {
	          $_SESSION['login_id']=$R['login_name'];
		header("location:../student_view.php?msg=Login successFull!!");
	       }
	    else 
	    {
	   header("location:../index.php?msg=plz check  username or password!!");
	   } 
	}   
  
    //......function for Delete student record.......
	   function logout(){
	         if(isset($_SESSION['login_id']))
	         {
	           $_SESSION['login_id']="";
			  session_destroy();
		 header("Location:../student_view.php?msg=Logout  Successfull!!");
	   }
	  } 
	?>	
		