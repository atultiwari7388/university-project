<?php include("includes/header.php");?>
<?php
if(isset($_REQUEST['st_id']))
{ 
$sql="select * from `fees` where `st_id`='$_REQUEST[st_id]'";
 $rs=mysql_query($sql)or die(mysql_error());
 $data=mysql_fetch_assoc($rs);
}
?>
<feildset>
<legend>Fees Details:</legend>
<table width="1337" height="500" border="1" align="center">
<tr>						
<td colspan="4"><div align="center" style="background-color:#33FF66; color:#663399; font-size:28px;">Fees Registration Form</div></td>
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
<td>paid amount: </td>
<td>
<?php echo $data['st_paid'];?></td>
<td>balence amount:</td>
<td>
<?php echo $data['st_bal']?></td>
</tr>
<tr>
<td>full description:</td>
<td><label>								
<?php echo $data['st_desc']?></td>						
<td>Fees date:</td>
<td><label>								
<?php echo $data['st_date'];?></td>
</label>
</label>
</tr>
<tr>
<td>Total Fees</td>
<td><label>
<?php echo $data['st_totalfees']?>
</td>
</label>
</tr>
<tr>
<td colspan="4">
<div align="center">								<label>
<button onclick="printout();"><img src="Image/print.ico" height="30"/>
</button>
<button onclick="history.back();">Back</button>
</label>
<input type="hidden" name="st_id" value="<?php $data['st_id']?>"/>
<input type="hidden" name="st_image" value="<?php echo $data['st_bal']?>"/>
<input type="hidden" name="act" value="save_student"/>
</label>
<label>
<input type="submit"  name="submit" value="submit"/>							</label>								
<label>	
<input type="Reset"  name="Reset" value="Reset">								
</label>
</div></td>
</tr>
</table>
</feildset>
<?php include("includes/footer.php");?>