<!DOCTYPE html>
<html>
<head>
	<title>
		Register Form
	</title>
</head>
<body>
	<form action="<?php echo base_url() ?>welcome/saveedituser"" method="POST">
	<input type="text" name="username" value="<?php echo $username;?>" placeholder="username">
	<input type="password" name="password" value="<?php echo $password;?>" placeholder="password">
	<input type="text" name="fullname" value="<?php echo $fullname;?>" placeholder="fullname">
	<select name="level" placeholder="level">
		<option value="0"><?php echo $level;?></option>
		<option value="1">Owner</option>
		<option value="2">Admin</option>
		<option value="3">Operator</option>
		<option value="4">Services</option>
		<option value="5">User</option>
	</select>
	<input type="submit" name="submit" value="Edit">
	</form>
</body>
</html>