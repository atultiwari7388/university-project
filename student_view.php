<?php include("includes/header.php");?>
<form action="#" name="form_search">
<center> Enter Text to search:<input type="text" name="st_search"/>
 <input type="submit" value="search"/></center>
</form></div>
<form name="student_view" id="student_view" method="post" action="lib/student.php">
<div style="background-color:#99FF99; color:#660099; font-size:24px;">
<?php if(isset($_REQUEST['msg'])) echo $_REQUEST['msg'];?></div>
<table border="1" width="100%" align="center">
<tr align="right">
<th colspan="18"><a href="student_add.php">
<img src="images/add.ico" height="40" width="50"/></a>||
<a href="javascript:multiple_student_delete();">
<img src="delete.ico" height="40" width="50"></a>||
<a href="javascript:printout();">
<img src="images/scan.ico" height="40" width="50"/></a></th>
</tr>
<tr align="center" bgcolor="#99CC00">
<td><input type="checkbox" value="check_all" onclick="mark_All(this);"/></td>
<th>Name</th>
<th>father</th>
<th>phone</th>
<th>Email</th>
<th>Gender</th>
<th>Address1</th>
<th>Address2</th>
<th>DOB</th>
<th>DOA</th>
<th>Pincode</th>
<th>Image</th>
<th>Action</th>
</tr>
<?php
  if(isset($_REQUEST['st_search']))
   {
    $sql="select *from student where st_name like '%$_REQUEST[st_search]%'
    or st_gen like '$_REQUEST[st_search]' or st_pincode like '$_REQUEST[st_search]'";
 }
  else
  {
   $sql="select *from `student` order by st_id";
  }
 $rs=mysql_query($sql)or die(mysql_error());
 while($data=mysql_fetch_assoc($rs))
 {
 ?>
 <tr align="center">
  <td><input type="checkbox" name="st_multi_id[]" id="st_multi_id[]" value="<?=$data[st_id]?>"/></td>
  <td><?php echo $data['st_name'];?></td>
  <td><?php echo $data['st_father'];?></td>
  <td><?php echo $data['st_phone'];?></td>
  <td><?php echo $data['st_Email'];?></td>
  <td><?php echo $data['st_gen'];?></td>
  <td><?php echo $data['st_address1'];?></td>
  <td><?php echo $data['st_address2'];?></td>
  <td><?php echo $data['st_dob'];?></td>
  <td><?php echo $data['st_doa'];?></td>
  <td><?php echo $data['st_pincode'];?></td>
<td><a href="uploads/<?php echo $data['st_image'];?>"target="_blank">
<img src="uploads/<?php echo $data['st_image'];?> "height="50" width="60"/></a>
</td>
<th><a href="student_add.php?st_id=<?php echo $data['st_id'];?>"><img src="Edit.ico" height="20" width="20"/></a>
||
<a href="javascript:delete_student?st_id=<?php echo $data['st_id'];?>"><img src="Delete.ico" height="20" width="20"/></a>||
<a href="student_details.php?st_id=<?php echo $data['st_id'];?>">Details</a>||
<a href="fees_add.php?st_id=<?php echo $data['st_id'];?>">Payfees</a>
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