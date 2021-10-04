<?php 
include("../includes/db_connect.php");
   if($_REQUEST['act'])
   {
    $_REQUEST['act']();
   } 

     function save_fees()
     {
      global $con;
       $R=$_REQUEST;
      if($R['st_id'])
        {
        $sql="select *from `fees` where         st_id='$_REQUEST[st_id]'";  
       $rs=mysql_query($sql) or die(mysql_error());
      $data=mysql_fetch_array($rs);
	   }
	  // print("$sql"); 
	 // mysql_error($data);

	  if('st_bal'==""){
	    $bal_amt=$data['st_totalfees']-$R['st_paid'];
		$paid_amt=$data['st_paid'];}
	else
	 {	
	  $bal_amt='$bal_amt'-$R['st_paid'];
	  $paid_amt='$paid_amt'+$R['st_paid'];
	  }
	  date_default_timezone_set("Asia/Kolkata");
	  $date=date('d-m-y h:i:s A');

      if($data['st_date']!="")
      $date=$data['st_date'].".".date;

     if($R['st_desc']=""){
	 $R['st_desc']='$bal_amt'+'$paid_amt'; 
	 $desc='$date'+'$R[st_desc]';

if($R['st_id'])
  {
   $sql="UPDATE `fees` SET 
  `st_name`='$R[st_name]',`st_father`='$R[st_father]', `st_paid`='$paid_amt',`st_bal`='$bal_amt',
  `st_desc`='$desc',`st_date`='$date',`st_course`=
  '$R[st_course]',`st_totalfees`='$R[st_totalfees]',
   WHERE `st_id`='$R[st_id]'";
   $msg="update has been Updated!!";
   }
else
 {
 $sql="INSERT INTO `fees`(`st_id`,`st_name`,`st_father`, `st_paid`,`st_bal`,`st_desc`,`st_date`,`st_course`,
 `st_totalfees`) VALUES('$R[st_id]','$R[st_name]',
 '$R[st_father]','$paid_amt','$bal_amt','$desc','$date',
 '$R[st_course]','$R[st_totalfees]')";
 $msg="record is saved!!"; 
}
 }

 if(isset($sql))
$rs=mysql_query($sql) or die(mysql_error());
if(!empty($rs))

if($rs)
{
//print("Record is saved");
header("location:../fees_view.php?msg=Record Is Saved!!"); 
}
}


################function delete student ##################
 function delete_fees(){ 
    $sql="delete *from student where st_id='$_REQUEST[st_id]'";
    $rs=mysql_query($sql)or die(mysql_error());
    if($rs)
	print("Record is deleted");
     //header("location:../student_view.php?msg=Record Is Deleted!!");
   }


