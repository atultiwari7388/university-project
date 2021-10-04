<?php include("includes/header.php");?>
<?php
if(isset($_REQUEST['st_id']))
{ 
$sql="select * from `student` where `st_id`='$_REQUEST[st_id]'";
 $rs=mysql_query($sql)or die(mysql_error());
 $data=mysql_fetch_assoc($rs);
}
?>
<feildset>
<legend>student Details:</legend>
<table width="1337" height="500" border="1" align="center">
<tr>						
<td colspan="4"><div align="center" style="background-color:#33FF66; color:#663399; font-size:28px;">Student Registration Form</div></td>
</tr>
<tr>
<td width="190">Name:</td>
<td width="250"><label>
<?php echo $data['st_name']?>
</label></td>
<td width="190">Father: </td>
<td width="250">
<?php echo $data['st_father']?>
</td>
</tr>
<tr>
<td>Phone: </td>
<td>
<?php echo $data['st_phone'];?></td>
<td>Email:</td>
<td>
<?php echo $data['st_Email']?></td>
</tr>
<tr>
<td>Gender:</td>
<td><label>								
<?php echo $data['st_gen']?></td>
<td>Qualification:</td>
<td><label>								
<?php echo get_multi_value("Qualification","qual_id","qual_name",$data['st_qual']);?>
</td>
</tr>
<tr>						
<td>Local Address:</td>
<td><label>								
<?php echo $data['st_address1'];?></td>
<td>Parmanent Address: </td>
<td>
<?php echo $data['st_address2']?>
</td>
</tr>
<tr>
<td>City: </td>
<td>												
<?php echo get_value("city","city_id","city_name",$data['st_city']);?>
</label></td>
<td>State:</td>
<td>																				
<?php  echo get_value("state","state_id","state_name",$data['st_state']);?>
</td>
</tr>			
<tr>
<td>Country:</td>
<td>								
<?php  echo get_value("country","country_id","country_name",$data['st_country']);?>
</td>
<td>Pincode: </td>
<td>
<?php echo $data['st_pincode']?></td>
</tr>
<tr>
<td>DOB:</td>
<td>
<?php echo $data['st_dob']?></td>
<td>DOA: </td>
<td>
<?php echo $data['st_doa']?></td>
</tr>
<tr>
<td>Course:</td>
<td>								
<?php echo get_value("course","course_id","course_name",$data['st_course'])?>
</td>
<td>Image:</td>
<td><span><img src="uploads/<?php $data['st_image']?>" height="50" width="80" border="3"/></span></td>
</tr>
<tr>
<td colspan="4">
<div align="center">	

	########### printout Details #############
<label>
<button onclick="printout();"><img src="Image/print.ico" height="30"/>
</button>
<button onclick="history.back();">Back</button>
</label>
<input type="hidden" name="st_id" value="<?php $data['st_id']?>"/>
<input type="hidden" name="st_image" value="<?php echo $data['st_image']?>"/>
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
</feildset>
<?php include("includes/footer.php");?>