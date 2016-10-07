<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.cont{
			width:100%;
			height:600px;
		}
		.title{
			width: 750px;
			height: 30px;
			text-align: center;
			font-size: 25px;
			font-weight: bold;
		}
		.desc{
			width: 750px;
			height: 20px;
			font-size: 16px;
			text-align: center;
		}
	</style>
	<script charset="utf-8" src="<?=base_url("public/editor/kindeditor.js")?>"></script>
	<script charset="utf-8" src="<?=base_url("public/editor/lang/zh-CN.js")?>s"></script>
	
	<script>
		//	var=editor;
	        KindEditor.ready(function(K) {
	            K.create('#content');
	        });
	</script>
</head>
<body>

<form action="" method="post">
	<table width="800" cellpadding="5" cellspacing="0" align="center" border="1">
		<tr >
			<td colspan="2">
				标题:<input type="text" name="title" class="title" value="<?=$editarticle->title ?> ">
			</td>
		</tr>
		
		<tr>
			<td>所属类别：<select name="catalog_id" >	
							
			</td>
			<td>图片:<input type="text" name="img" value="<?=$editarticle->img ?>"></td>
		</tr>
		
		<tr>
			<td  colspan="2">
				简介:<input type="text" name="desc" class="desc" value="<?=$editarticle->desc ?>">
			</td>
		</tr>
		
		<tr>
			<td colspan="2">
				<textarea name="content" id="content" class="cont"><?=$editarticle->content ?></textarea>
			</td>
			
		</tr>
		
		<tr>
			<td colspan="2">
				<input type="submit" >
			</td>
			<input type="hidden" name="ac"  value="edit" >
		</tr>
	</table>
</form>
</body>
</html>