<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="<?=base_url("public/css/bootstrap.min.css")?>" rel="stylesheet">
	<link href="<?=base_url('public/css/bootstrap-theme.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/css/style.css')?>" rel="stylesheet">
</head>
<body>
	<nav class=" navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="thumbnail logo" href="<?=site_url("/artileController/") ?>""><img class="img-img-circle" src=<?=base_url("public/img/nav_left.png")?>></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" style="margin-top:15px;">
       
        <?php 
        	foreach ($nav as $value) {
        ?>
              <li <?php if($value['id']==$catalog_id) echo'class=active'?>  style="margin-right:80px"><a href="<?=site_url("/artileController/navlist/".$value['id']) ?>"><?=$value['name'] ?></a></li>
        <?php
    	   	}
        ?>      
         <li   style="margin-right:80px"><a class='btn' href="<?=site_url("/admin/loginAdmin/login")?>">登录</a></li>       
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>