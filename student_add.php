<?php include("includes/header.php");?>
<?php
if($_REQUEST['st_id'])
{
$sql="select *from student where `st_id`=$_REQUEST[st_id]";
 $rs=mysql_query($sql)or die(mysql_error());
 $data=mysql_fetch_assoc($rs);
}
?>
<form id="form1" name="form1" method="post" action="lib/student.php" enctype="multipart/form-data" onSubmit="return valid_student(this);">
<table width="1097" height="500" border="1" align="center">
<tr>						
<td colspan="4"><div align="center" style="background-color:#33FF33; color:#663399; font-size:28px;">Student Registration Form</div></td>
</tr>
<tr>
<td width="193">Enter Name:</td>
<td width="208">
<input type="text" name="st_name" id="st_name" value="<?php if(isset($data)) echo $data['st_name'];?>"/></td>
<td width="250">Enter Father: </td>
<td width="418"><input type="text" name="st_father" id="st_father" value="<?php if(isset($data)) echo $data['st_father'];?>"/></td>
</tr>
<tr>
<td>Enter Phone:</td>
<td><input type="text" name="st_phone" id="st_phone" maxlength="10" value="<?php if(isset($data)) echo $data['st_phone'];?>"/></td>
<td>Enter Email:</td>
<td><input type="text" name="st_Email" id="st_Email" value="<?php  if(isset($data))echo $data['st_Email']?>"/></td>
</tr>
<tr>
<td>Select Gender: </td>
<td><label>								
<input name="st_gen" type="radio" value="male" 
<?php if(isset($data)) if($data['st_gen']=="male") echo"checked";?>/>Male </label>
<label>
<input name="st_gen" type="radio" value="Female" <?php if(isset($data))  if($data['st_gen']=="Female") echo"checked";?>/>Female</label></td>
<td>Select Qualification:</td>
<td><label>								
<?php if(isset($data)) echo get_check_list("qualification","qual_id","qual_name",$data['st_qual'],"st_qual[]");?>
</label></td>
</tr>
<tr>						
<td>
Local Address:</td><td><label>								<textarea name="st_address1" id="st_address1"><?php if(isset($data)) echo $data['st_name'];?></textarea>
</label></td>
<td>Parmanent Address: </td>
<td><textarea name="st_address2" id="st_address2"><?php if(isset($data)) echo
$data['st_name']?></textarea></td>
</tr>
<tr>
<td>Select City:</td>
<td><label>												<select name="st_city" id="st_city" "<?php if(isset($data)) echo $data['st_city'];?>"/>
<?php  echo get_option_list("city","city_id","city_name",0);?>
</select>
</label></td>
<td>Select State:</td>
<td><label>														<select name="st_state" id="st_state" "<?php if(isset($data)) echo $data['st_state'];?>"/>						
<?php  echo get_option_list("state","state_id","state_name",0);?>
</select>
</label></td>
</tr>			
<tr>
<td>Select Country:</td>
<td>								<select name="st_country" id="st_country" "<?php if(isset($data)) echo $data['st_country'];?>"/>
<?php echo get_option_list("country","country_id","country_name",0);?>														</select></td>
<td>Enter Pincode: </td>
<td><input type="text" name="st_pincode" id="st_pincode" maxlength="6" value ="<?php if(isset($data)) echo $data['st_pincode']; ?>"/></td>
</tr>
<tr>
<td>Enter DOB:</td>
<td><input type="text" name="st_dob" id="st_dob" value="<?php if(isset($data)) echo $data['st_dob'];?>" /></td>
<td>Enter DOA: </td>
<td><input type="text" name="st_doa" id="st_doa" value="<?php if(isset($data)) echo $data['st_doa'];?>"/></td>
</tr>
<tr>
<td height="91">Select Course: </td>
<td>								
<select name="st_course" id="st_course">
<?php echo get_option_list("course","course_id","course_name",0);?>
</select></td>
<td>Select Image:</td>
<td><label>								
<input type="file" id="st_image" name="st_image"/>
<span><img src="uploads/Hydrangeas1581333692.jpg" height="100" width="180" border="3"/></span></label></td>
</tr>
<tr>
<td>Enter TotalFees: </td>
<td><input type="text" name="st_totalfees" id="st_totalfees" value="<?php if(isset($data)) echo $data['st_totalfees'];?>"/></td>
</tr>
<tr>
<td height="38" colspan="4">
<div align="center">								<label>
<input type="hidden" name="st_id" value="<?php if(isset($data)) $data['st_id']?>"/>
<input type="hidden" name="st_image" value="<?php if(isset($data)) echo $data['st_image']?>"/>
<input type="hidden" name="act" value="save_student"/>
</label>
<label>
<input type="submit"  name="submit" value="submit"/>							</label>
<label>								
<input type="button"  name="Reset" value="Reset">								
</label>
</div></td>
</tr>
</table>
</form>
<?php include("includes/footer.php");?>