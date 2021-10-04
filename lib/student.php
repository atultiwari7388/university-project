¥<?php 
include("../includes/db_connect.php");
   if($_REQUEST['act'])
   {
    $_REQUEST['act']();
   } 
     function save_student()
     {
      global $con;
       $R=$_REQUEST;
       if($_FILES['st_image']['name'])
       {
       $st_image=$_FILES['st_image']['name'];
       $st_img_arr=explode(".",$st_image);
       $st_image=$st_img_arr[0].time().".".$st_img_arr[1];
       move_uploaded_file($_FILES['st_image']['tmp_name'],"../uploads/".$st_image);
       }
 else
 {
    $st_image=$R['st_image'];
 }
 $st_qual=implode(",",'$_REQUEST[st_qual]');
 if($R['st_id'])
 {
   $sql="UPDATE `student` SET `st_name`='$R[st_name]',`st_father`='$R[st_father]',`st_address1`='$R[st_address1]',`st_address2`='$R[st_address2]',`st_gen`='$R[st_gen]',`st_phone`='$R[st_phone]',`st_qual`='$st_qual',`st_image`='$st_image',`st_dob`='$R[st_dob]',`st_doa`='$R[st_doa]',`st_city`='$R[st_city]',`st_state`='$R[st_state]',`st_country`='$R[st_country]',`st_course`='$R[st_course]',`st_Email`='$R[st_Email]',`st_pincode`='$R[st_pincode]',`st_totalfees`='$R[st_totalfees]' WHERE `st_id`='$R[st_id]'";
   $msg="Record has been Updated!!";
 }
 else
 {
 $sql="INSERT INTO `student`(`st_id`,`st_name`, `st_father`, `st_address1`, `st_address2`, `st_gen`, `st_phone`, `st_qual`, `st_image`, `st_dob`, `st_doa`, `st_city`, `st_state`, `st_country`, `st_course`, `st_Email`, `st_pincode`,`st_totalfees`) VALUES ('$R[st_id]','$R[st_name]', '$R[st_father]', '$R[st_address1]', '$R[st_address2]', '$R[st_gen]', '$R[st_phone]', '$st_qual', '$st_image', '$R[st_dob]', '$R[st_doa]', '$R[st_city]', '$R[st_state]', '$R[st_country]', '$R[st_course]', '$R[st_Email]', '$R[st_pincode]','$R[st_totalfees]')";
 $msg="Record Has Been saved!!";
}
$rs=mysql_query($sql)or die(mysql_error());
if($rs)
{
print("Record is saved");
//header("location:../student_view.php?msg=Record Is Saved!!"); 
}
}
################function delete student ##################
 function delete_student(){
  $sql="select st_image from student where 'st_id'=$_REQUEST[st_id]";
  $rs=mysql_query($sql)or die(mysql_error());
   $data=mysql_fetch_assoc($rs);
   if($data['st_image'])
   {
    unlink("../uploads/".$data['st_image']);
   } 
    $sql="delete from student where st_id=$_REQUEST[st_id]";
    $rs=mysql_query($sql)or die(mysql_error());
    if($rs)
     header("location:../student_view.php?msg=Record Is Deleted!!");
   }
###function  for delete all student####
function multiple_student_delete()
{
 $st_multi_id=$_REQUEST['st_multi_id'];
 if($st_multi_id==0)
 header("location:../student_view.php?msg=plz Select to continue!!");
 foreach($st_multi_id as $st_id)
  {
   $sql="Select st_image from `student` where st_id=$st_id";
   $rs=mysql_query($sql)or die(mysql_error());
   $data=mysql_fetch_assoc($rs);
    if($data['st_image'])
    {
     unlink("../uploads/".$data['st_image']);
    }
    $sql="delete from student where st_id=.$_REQUEST[st_id]";
    $rs=mysql_query($sql)or die(mysql_error());
    }
    if($rs)
    header("location:../student_view.php?msg=Selected Record Is Deleted!!");
  }
?>       
        
       