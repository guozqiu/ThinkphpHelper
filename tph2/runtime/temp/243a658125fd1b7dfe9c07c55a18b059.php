<?php if (!defined('THINK_PATH')) exit(); /*a:0:{}*/ ?>
<div class="container ">
<div class="row">
	<div class="col-md-6">
		<div class="widget">
			<div class="widget-head">
			  <div class="pull-left" height="80">
			 	新建<?php echo pressTableDict($tableName); ?>
			  </div>
			  <div class="widget-icons pull-right">
				<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
				<a href="#" class="wclose"><i class="icon-remove"></i></a>
			  </div>  
			  <div class="clearfix"></div>
			</div>  
			<div class="widget-content" >
			<div class="padd">
				<div class="form quick-post">
					  <div class="form-horizontal">                        
						  <div class="form-group">
							<?php echo $content; ?>
						  </div>              
					  </div>
				</div><!--end  paddad-->
			</div>
		</div>	
		</div>	
	</div>
</div>
</div>
