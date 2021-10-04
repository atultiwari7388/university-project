<?php include("includes/header.php");?>
<?php
if($_REQUEST['st_id'])
{
$sql="select *from `student` where `st_id`=$_REQUEST[st_id]";
 $rs=mysql_query($sql)or die(mysql_error());
 $data=mysql_fetch_assoc($rs);
}
if($_REQUEST['st_id'])
 {
  $sql="select *from `fees` where `st_id`=$_REQUEST[st_id]";
 $rs=mysql_query($sql)or die(mysql_error());
 $data=mysql_fetch_assoc($rs); 
 }
?>
<form id="form1" name="form1" method="post" action="lib/fees.php"   enctype="multipart/form-data" onSubmit="return valid_student(this);">
<table width="966" height="500" border="1" align="center">
<tr>						
<td colspan="4"><div align="center" style="background-color:#33FF66; color:#663399; font-size:28px;">Student Fees Form</div></td>
</tr>
<tr>
<td width="212">Enter Name:</td>
<td width="244"><input type="text" name="st_name" id="st_name" value="<?php $data['st_name'];?>"/></td>
<td width="221">Enter Father:</td>
<td width="261"><input type="text" name="st_father" id="st_father" value="<?php $data['st_father'];?>">
</td>
</tr>
<tr>
<td>Enter Course</td>
<td><input type="text" name="st_course" id="st_course" value="<?php $data['st_course'];?>"></td>
<td>Enter Paid:</td>
<td><input type="text" name="st_paid" id="st_paid" value="<?php echo $data['st_paid'];?>"></td>
</tr>
<tr>
<td>Enter Balence:</td>
<td><input type="text" name="st_bal" id="st_bal" value="<?php echo $data['st_bal'];?>"></td>
<td>Enter fees:</td>
<td><input type="text" name="st_totalfees" id="st_totalfees" value="<?php echo $data['st_totalfees'];?>"></td>
</tr>
<tr>
<td height="38" colspan="4">
<div align="center">								<label>
<input type="hidden" name="st_id" value="<?php 
 $data['st_id'];?>"/>
<input type="hidden" name="st_bal" value="<?php 
 $data['st_bal'];?>"/>
<input type="hidden" name="act" value="save_fees"/>
</label>
<label>
<input type="submit"  name="submit" value="submit"/>							</label>			
<label>					
<input type="Reset"  name="Reset" value="Reset">								
</label>
</div></td>
</tr>
</table>
</form>
<?php include("includes/footer.php");?>