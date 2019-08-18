<?PHP
session_start();
if (isset($_SESSION['username']) && isset($_COOKIE['Auth'])) {
   header('Location: logged-in.php');
}
?>
<?php
//including the Mysql connect parameters.
include("../sql-connections/sql-connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title>Less-45 - Stacked Query Blind based twist</title>
<link rel="stylesheet" href="../index.html_files/freemind2html.css" type="text/css"/>
</head>
<body>

<div style="text-align:center">
<form name="login" method="POST" action="login.php">

<h2 style="text-align:center;background-image:url('../images/Less-45.jpg');background-repeat:no-repeat;background-position:center center">
<div style="padding-top:300px;text-align:center;color:#900;"><?php echo $form_title_in; ?></div>
</h2>

<div align="center">
<table style="margin-top:50px;">
<tr>
<td style="text-align:right">
<font class="style3">
<strong>Username:</strong>
</td>
<td style="text-align:left">
<input name="login_user" id="login_user" type="text" value="" />
</td>
</tr>
<tr>
<td style="text-align:right">
<font class="style3">
<strong>Password:</strong>
</td>
<td style="text-align:left">
<input name="login_password" id="login_password" type="password" value="" />
</td>
</tr>
<tr>
<td colspan="2" style="text-align:right">
<input name="mysubmit" id="mysubmit" type="submit" value="Login" /><br/><br/>

<a class="style3"href="forgot_password.php">Forgot your password?</a><font class="style3">
||</font>
<a class="style3"href="acc-create.php">New User click here?</a>
</td>
</tr>

</table>
</div>
</form>
</div>
<div class="botton_fix">For more please visit : <a href="http://www.hiteshchoudhary.com" target="_blank">www.hiteshchoudhary.com</a></div>
</body>
</html>
