<?php include("includes/header.php");?>
<form name="fees_view" id="fees_view" method="post" action="lib/fees.php">
<div style="background-color:#99FF99; color:#FFFF00; font-size:24px; align:center;">
<?php if(isset($_REQUEST['msg'])) echo $_REQUEST['msg'];?></div>
<table border="1" width="100%" align="center">
		<tr align="right">
	<th colspan="18"><a href="fees_add.php">
 <img src="images/add.ico" height="40" width="50"/></a>|| <a href="javascript:delete();"><img src="images/delete.ico" height="40" width="50"/></a>||
 <a href="javascript:printout();">
 <img src="images/scan.ico" height="40" width="50"/></a></th>
</tr>
<tr align="center" bgcolor="#99CC00">
<td><input type="checkbox" value="check_all" onclick="mark_All(this);"/></td>
<th width="10%">Name</th>
<th width="6%">father</th>
<th width="10%">Paid Amount</th>
<th width="10%">Balence</th>
<th width="9%">Date</th>
<th width="15%">Description</th>
<th width="10%">Toalfees</th>
<th width="20%">Action</th>
<?php
   $sql="select *from `fees` order by st_id";
 
 $rs=mysql_query($sql)or die(mysql_error());
 while($data=mysql_fetch_assoc($rs))
 {
 ?>
 <tr align="center">
  <td><input type="checkbox" name="st_multi_id[]" id="st_multi_id[]" value="<?=$data[st_id]?>"/></td>
 <td><?php echo $data['st_name'];?></td>
 <td><?php echo $data['st_father'];?></td>
 <td><?php echo $data['st_paid'];?></td>
<td><?php  echo $data['st_bal'];?></td>
<td><?php echo $data['st_date'];?></td>
<td><?php echo $data['st_desc'];?></td>
<td><?php echo $data['st_totalfees'];?></td>
<th><a href="fees_add.php?st_id=<?php echo $data['st_id']?>"><img src="Edit.ico" height="20" width="20"/></a>
||<a href="javascript:delete_fees(<?php echo $data['st_id'];?>);"><img src="Delete.ico" height="20" width="20"/></a>
||<a href="fees_details.php?st_id=<?php echo $data['st_id'];?>">Details</a>
</th>
</tr>
<?php
 }
 ?>
</table>
<input type="hidden" name="act"/>
 <input type="hidden" name="st_id"/>
</form>
 <?php include("includes/footer.php");?>