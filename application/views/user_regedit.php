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
	<div id="regedit_wrapper">
	<div class="container">
		<div id="regedit">
			<div class="panel panel-default">
				<div class="panel-heading">
					用户注册
				</div>
				<div class="panel-body">
					<form method="post" action="" >
						<div class="form-group">
							<label>账户名</label>
							<input type="text" class="form-control" name="username" placeholder="请输入账户名...">
						</div>
						<div class="form-group">
							<label>密码</label>
							<input type="password" class="form-control" name="password" placeholder="请输入密码...">
						</div>
						<div class="form-group">
							<label>再次输入密码</label>
							<input type="password" class="form-control" name="password" placeholder="请再次输入密码...">
						</div>

						<div class="form-group">
							<label>验证码</label>
							<div class="row">
							<div class="col-md-6">
							<input type="text" class="form-control" name="vritify" placeholder="请再次输入密码...">
							<img src="<?php echo site_url('user/vritify')  ?>">
							</div>
							<div class="col-md-6">
								
							</div>
							</div>
						</div>


						<div class="form-group">
							<button type="button" class="btn btn-block btn-success">登录</button>	
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
<script type="text/javascript" src="<?php echo base_url('public/js/jquery.js')?>"></script>
<script type="text/javascript">
	
</script>
</body>
</html>