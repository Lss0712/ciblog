<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>添加</title>
	<link href="<?=base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/css/bootstrap-theme.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/css/style.css')?>" rel="stylesheet">
	<script charset="utf-8" src="<?=base_url("public/editor/kindeditor.js")?>"></script>
	<script charset="utf-8" src="<?=base_url("public/editor/lang/zh_CN.js")?>"></script>
	<script charset="utf-8" src="<?=base_url("public/js/jquery-1.9.0.min.js")?>"></script>
	<script charset="utf-8" src="<?=base_url("public/js/jquery.upload.js")?>"></script>
	
	
	<script>
		//	var=editor;
	        KindEditor.ready(function(K) {
	            K.create('#content');
	        });
	</script>
</head>
<body>
<?php $this->load->view('admin/header')?>


<div class="container" style="margin-top:30px">
<h1><?=$title?>文章</h1>
<div class="row">
	<div class="col-md-6 col-md-offset-2">
   			<form class="form-horizontal" action="" method="post">
				  <div class="form-group">
				    <label class="col-sm-2 control-label">标题</label>
				    <div class="col-sm-10">
				      <input type="text" name="title" class="form-control"  value="<?php echo set_value('title',$editarticle->title); ?>">
				      <?php echo form_error('title'); ?>
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="col-sm-2 control-label">分类</label>
				    <div class="col-sm-3">
				    <select name="catalog_id" class="form-control" ">
				    	<?php foreach ($data as $value) { ?>
				    	    <option <?php echo set_select('catalog_id',$value['id'],$editarticle->catalog_id==$value['id'])?> > 
				    		<?= $value['name']?>
				    	</option>
				    	<?php  } ?>
				    	
				    </select>
				     <?php echo form_error('catalog_id'); ?>
				    </div>
				  </div>
				<div class="form-group">
				    <label  class="col-sm-2 control-label">图片</label>
				    <div class="col-sm-5">
				      <input type="text" name='img' id="img" class="form-control" value="<?php echo set_value('img',$editarticle->img); ?>">
				    <a href="#" id="upload">上传</a>
				      <?php echo form_error('img'); ?>
				    </div>
				     <div id="preview" class="col-sm-5"></div>
				  </div>
				  <div class="form-group">
				    <label  class="col-sm-2 control-label">简介</label>
				    <div class="col-sm-10">
				    <input type="text" name='desc' class="form-control" value="<?php echo set_value('desc',$editarticle->desc)?>">
				      <?php echo form_error('desc'); ?>
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="col-sm-2 control-label">内容</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" name="content" id="content" value="<?php echo set_value('content'); ?>"><?=$editarticle->content ?></textarea>
				     <?php echo form_error('content'); ?>
				    </div>
				  </div>
				
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">提交</button>
				      <a href="<?=site_url('admin/manger/getAlllist')?>">返回</a>
				      <input type="hidden" name="ac" value="add">
				    </div>
				  </div>
</form>
	</div>
	</div>
		<!--<script>
			//	var=editor;
		        KindEditor.create('#content');
		</script>-->
 </div>
</body>
</html>
<script type="text/javascript">
	$("#upload").click(function(){
		$.upload({
	        url: '<?php echo site_url("admin/Util/do_upload")?>', 
	        fileName: 'file', 
	        dataType: 'text',
	        onSend: function() {
	            return true;
	        },
	        onComplate: function(data) {
	        	if(data.indexOf('uploads')>=0){
	        	$("#img").val(data);
	        	$("#preview").html('<img style="height:80px;" src="<?php echo base_url()?>'+data+'" />')
	        }else{
	        	alert(data);
	             }
	        }
		});
	})
	
</script>