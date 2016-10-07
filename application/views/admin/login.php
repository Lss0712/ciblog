<html>
<head>
<title>My Form</title>
<link href="<?=base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?=base_url('public/css/bootstrap-theme.css')?>" rel="stylesheet">
</head>
<body>

<?php echo validation_errors(); ?>
<form action="" method="post" >

<h5>用户名</h5>
<input  type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

<h5>密码</h5>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>