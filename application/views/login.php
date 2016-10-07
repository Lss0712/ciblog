<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>登录管理页面</title>
	<link href="<?=base_url("public/css/bootstrap.min.css")?>" rel="stylesheet">
	<link href="<?=base_url('public/css/bootstrap-theme.css')?>" rel="stylesheet">
</head>
<body>
	
<form  action="" method="post" class="form-horizontal" style="margin-top:200px;" >
	  <div class="form-group form-group-lg">
	    <label for="inputEmail3" class="col-xs-4 control-label">user</label>
	    <div class="col-xs-4">
	      <input type="text" class="form-control" id="inputEmail3" placeholder="user">
	    </div>
	  </div>
	  <div class="form-group form-group-lg">
	    <label for="inputPassword3" class="col-xs-4 control-label">Password</label>
	    <div class="col-xs-4">
	      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
	    </div>
	  </div>

	  <div class="form-group">
	    <div class=" col-xs-8 text-right">
	      <button type="submit" class="btn btn-success btn-lg">Sign in</button>
	    </div>
	  </div>
</form>
</body>
</html>