<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>管理</title>
	<link href="<?=base_url("public/css/bootstrap.min.css")?>" rel="stylesheet">
	<link href="<?=base_url('public/css/bootstrap-theme.css')?>" rel="stylesheet">
  <link href="<?=base_url('public/css/style.css')?>" rel="stylesheet">
</head>
<body>
	<div class="container">
	<table  class="table table-bordered">
		<tr >
			<td colspan="5"><center><h1>LEE <small>的博客</small></center></td>
		</tr>
		<tr>
			<th >标题</th>
			<th>创建时间</th> 
			<th>访问人数</th>
			<th>是否推荐</th>
			<th>操作&nbsp;<a class="btn btn-primary" href="<?=site_url("/admin/manger/add/") ?>">添加 &nbsp;</a> <a class="btn btn-primary" href="">nav编辑</a></th>
		</tr>
		<?php
			foreach ($mangers as  $value) {	
		?>
		<tr  onMouseOver="this.style.backgroundColor='yellow'" onMouseOut="this.style.backgroundColor='#ffffff'" align="center">
			<td >
			  <?=$value->title ?>
			</td>
			<td >
				  <?=date ('Y-m-d H:i:s',$value->create_time )?>
			</td>
			<td>
				 <?=$value->view ?>
			</td>
			
			<td >

             <?php
			 	echo $value->recommend==1? "<span class='btn btn-warning btn-sm  active'>已推荐</span>":"";
			 ?>
			</td>
			<td >
			    <?php
			 	if($value->recommend==1){
			 ?>
			   <a class="btn btn-success btn-xs" href="<?php echo  site_url("admin/manger/removeRecommend/".$value->id)?>">取消推荐</a>&nbsp;
			 <?php
			 	}else{
			 ?>
			 	<a class="btn btn-success btn-xs" href="<?php echo  site_url("admin/manger/recommend/".$value->id)?>">推荐</a>&nbsp;
			  <?php
			 	}
			 ?>

				<a class="btn btn-primary btn-xs" href="<?=site_url("admin/manger/edit/".$value->id) ?>">修改</a>&nbsp;
			    <a class="btn btn-info btn-xs" href="<?=site_url("admin/manger/del/".$value->id) ?>" onClick='return confirm('确定要删除吗')'>删除</a>
			</td>
		</tr>
    <?php
    	
    	}
    ?>
	</table>
   <?php echo $this->pagination->create_links();?>
</div>
</body>
</html>