<?php include("db_connect.php");


############function of Dynamic option list########
function get_option_list($table,$col_id,$col_name,$sel)
{
 $sql="select *from $table";
  $option_list="<option value='0'>plz select</option>";
  $rs=mysql_query($sql)or die(mysql_error());
  while($data=mysql_fetch_assoc($rs))
  {
   if($sel==$data[$col_id])
    $option_list.="<option value='$data[$col_id]' selected>$data[$col_name]</option>";
    else
        $option_list.="<option value='$data[$col_id]'>$data[$col_name]</option>";
    
  }
  return $option_list;
}


 ############function of Dynamic checkbox ########
function get_check_list($table,$col_id,$col_name,$sel,$name)
{
  $sql="select *from $table order by $col_id";
  $check_list="";
  $sel=explode(",",$sel);
  $rs=mysql_query($sql)or die(mysql_error());
 while($data=mysql_fetch_assoc($rs))
 {
  if(in_array($data[$col_id],$sel))
    $check_list.="<input type='checkbox' name='$name' value='$data[$col_id]'    checked>$data[$col_name]";
  else
   {
   $check_list.="<input type='checkbox' name='$name' value=$data[$col_id]  checked>$data[$col_name]";
    }
 }
 return $check_list;
}


##############function for single vlaue################
 function get_value($table,$col_id,$col_name,$sel)
 {
  $sql="select $col_name from $table where $col_id='$sel'";
   $rs=mysql_query($sql)or die(mysql_error());
   $data=mysql_fetch_array($rs);
   return $data[$col_name];
 }
 
 


 ###############function for multiple value##############
 function get_multi_value($table,$col_id,$col_name,$sel)
 {
 $multi_value="";
$sql = "select *from $table where $col_id in($sel)" ;
 /////// echo $sql; die;
   $rs=mysql_query($sql) or die(mysql_error());
  while($data=mysql_fetch_array($rs))
   {
    $multi_value.=$data[$col_name].",";
   }
   return $multi_value;
 }
?>