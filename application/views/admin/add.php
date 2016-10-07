<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>添加</title>
	<style type="text/css">
		form{
			width:720px;
			height: 560px;
			margin-top:80px;
			background: #C3D4B0;
			margin:50px auto;
		}
		.cont{
			width:700px;
			height:300px;
		}
		.title{
			width: 650px;
			height: 30px;
			text-align: center;
			font-size: 25px;
			font-weight: bold;
		}
	</style>
	<script charset="utf-8" src="editor/kindeditor.js"></script>
	<script charset="utf-8" src="editor/lang/zh_CN.js"></script>
	
	<script>
		//	var=editor;
	        KindEditor.ready(function(K) {
	            K.create('#content');
	        });
	</script>
</head>
<body>
<form action="<>" method="post" enctype="multipart/form-data">
<table  cellpadding="5" cellspacing="0"  border="1">
		<tr class="head">
			<td colspan="4"><center><h1>为LEE博客画上一笔吧<h1></center></td>
		</tr>
		<tr >
			<td colspan="2">标题:<input type="text" name="title" class="title"></td>
		</tr>
		<tr>
			<td>
				所属类别：<select name="catalog_id">
							
				           </select>
		   </td>
		  <td>图片:<input type="file" name="img"></td>
		</tr>
		<tr>
			<td  colspan="2">简介:<input type="text" name="desc"></td>
		</tr>
		<tr>
			<td colspan="2"><textarea name="content" id="content" class="cont"></textarea></td>
			
		</tr>
		<tr>
			<td colspan="2"><input type="submit" ></td>
			<input type="hidden" name="ac"  value="value" >
		</tr>
	</table>
	<!--<script>
		//	var=editor;
	        KindEditor.create('#content');
	</script>-->
</form>
</body>
</html>