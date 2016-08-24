		<div class="row" id="header">
			<div class="col-md-3">
				<img id="logo" src="<?php echo base_url("public/img/logo.png")?>" />
			</div>
			<div class="col-md-6">
				<p id="contact"><i class="glyphicon glyphicon-phone-alt"></i>400-12345678910 <i class="glyphicon glyphicon-envelope"></i>shop@goodjobs.cn</p>
				<div class="input-group">
			      <input type="text" class="form-control" placeholder="请输入商品名称或编号...">
			      <span class="input-group-btn">
			        <button class="btn btn-danger" type="button">搜索</button>
			      </span>
			    </div>
			</div>
			<div class="col-md-3">
			   <p>
			   <?php if( $this->session->userdata('user_is_login')){  
			   		 echo  "欢迎回来".$this->session->userdata('user');?>
			   		  <a href="<?php echo site_url('User/login') ?>">退出</a>
			   		 <?php  }else{ ?>
                     <a href="<?php echo site_url('User/login') ?>">欢迎登陆</a>
                     <a href="<?php echo site_url('User/regedit') ?>">快速注册</a>
			   		 
			  <?php
			    
			} 
			 $ci=&get_instance(); $ci->load->model('admin_model');
			   ?>

			   
			   	 
			   </p>
				<a href="" id="shopcart" class="pull-right">
					<i class="glyphicon glyphicon-shopping-cart"></i>我的购物车<span><?php echo $ci->admin_model->get_count($this->session->userdata('user_id')); ?></span>
				</a>
			</div>
		</div>