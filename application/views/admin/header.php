<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">LEE</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">文章列表 <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">导航列表</a></li>
		       
		      </ul>
		     
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$this->session->userdata('is_login'); ?> <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">退出</a></li>
		            
		          </ul>
		        </li>
		      </ul>
		    </div>
		  </div>
     </nav>