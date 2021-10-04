<form id="form1" name="form1" method="post" action="lib/login.php">
<table width="1200" border="2" cellpadding="1">
<tr>
<td colspan="2"><div align="center">Login Here </div></td>
</tr>
<tr>
<td width="596">UserName:</td>
<td width="586"><input type="text" name="login_name" id="login_name"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text" name="login_pass" id="login_pass"></td>
</tr>
<tr>
<td height="37" colspan="2"><div align="center">
<input type="hidden" name="act" id="act" value="check_login" />
<label>
<input type="submit"  name="submit" value="submit"/>							</label>
<input type="submit" name="Back" value="Back"/>
</div></td>
</tr>
</table>
</form>
<?php  include("includes/footer.php");?>