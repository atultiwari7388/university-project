<?php
  $con=mysql_connect("localhost","root","vertrigo") or die(
  mysql_error());
  $db=mysql_select_db("university") or die(mysql_error());
?>