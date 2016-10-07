<?php $this->load->view('header'); ?>
<img class="banner" src="<?=base_url("public/img/banner.jpg")?>" />
<div class="container">
   <div class="media col-md-8">
       <?php 
          foreach ($articles as $val) {
       ?> 
        <h4><a href="<?=site_url("/artileController/view/".$val->id ) ?>"><?=$val->title ?></a></h4>
       <div class="item clearfix">
         <img class="media-object" src="<?=base_url("public/{$val->img}")?>">       
         <p> <?=$val->desc ?> </p>
         <a class="btn btn-success btn-lg active"  href="<?=site_url("/artileController/view/".$val->id) ?>">全文阅读>></a>
       </div>
       <p class="foot">
        <i class="glyphicon glyphicon-time" aria-hidden="true"></i> <sapn><?=date("Y-m-d",$val->create_time)?></sapn> &nbsp;&nbsp;&nbsp;
        <i class="glyphicon glyphicon-heart-empty" aria-hidden="true"></i><sapn > <?=$val->view?>次查看</span>
       </p>
       <hr>
       <?php
          }
        ?>  
   </div>

    <div class="col-md-4 ">
                    
     </div>
</div> 

</body>
</html>
<script src="<?=base_url('public/js/jquery-3.1.0.min.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap.min.js')?>"></script>