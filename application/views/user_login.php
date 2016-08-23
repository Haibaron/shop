<!DOCTYPE html>
<html>
<head>
	<title>自己的电商系统</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/nivo-slider.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/login.css" />
</head>
<body>
	<div class="container">
		<div class="row" id="header">
			<div class="col-md-3">
				<a href="<?=site_url()?>"><img id="logo" src="<?php echo base_url("public/img/logo.png")?>" /></a>
			</div>
		</div>
		<br />
	</div>
	<div id="login_wrapper">
	<div class="container">
		<div id="login">
			<div class="panel panel-default">
				<div class="panel-heading">
					欢迎登录
				</div>
				<div class="panel-body">
					<form method="post" action="">
						<div class="form-group">
							<label>账户名</label>
							<input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" placeholder="请输入账户名...">
							<?php echo form_error('username'); ?>
						</div>
						<div class="form-group">
							<label>密码</label>
							<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="请输入密码...">
							<?php echo form_error('password'); ?>
						</div>
						<div>
							<input type="text" class="form-control" style="width:150px;" name="vritfy" value="<?php echo set_value('vritfy'); ?>" placeholder="请输入验证码...">
						</div>
						<div class="form-group">
							<button type="sub method="post" action=""mit" class="btn btn-block btn-success">登录</button>
							<a  type="sub method="post" href="<?php echo site_url('User/regedit')?>" class="btn btn-block btn-success">注册</a>	
						</div>
                  
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>

</body>
</html>