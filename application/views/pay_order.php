<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/nivo-slider.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/front.css" />

</head>
<body>
<div class="container">
	<div class="row" id="header">
				<div class="col-md-3">
					<img id="logo" src="<?php echo base_url("public/img/logo.png")?>" />
				</div>
				<div class="col-md-9">
				
				  <img style="width:100%;" src="<?php echo base_url('public/img/shop_step_2.jpg')?>" />
				  
				</div>
			</div>
	<br>
	<div>
		<h3>收货地址</h3>
		<table class="table-border">
			
			<?php  
				var_dump($addr1);?>

			
			
		</table>
		<table  class="table">


			<th width="550">商品</th>
			<th width="100">数量</th>
			<th width="100">单价</th>
			<th width="100">总额</th>
			<th width="150">操作</th>
				<?php $sum=0;
				
		 foreach ($data as $c) { $data=$this->Products_model->get_one($c['product_id']); ?>
				<tr  class="cartid">
					
					<td>
					<a href="<?php echo site_url('Product/detail/'.$c['product_id'])?>">
					
					<img style="width:60px;" src="<?=base_url($data->img)?>"  />
					<?=$data->title?>
					</a>	
					</td>
					
					<td class="t" width="200">
						<sapn class="reduce">-</sapn>
						 <input class="inp" type="text" name="num" value="<?=$c['num']?>" />
						  <span class="add">+</span>
					</td>
					<td>

						<?=$data->price?>
						
					</td>
					<td>
						<?= $p=intval($c['num'])*intval($data->price)?>
						<?php $sum =$sum +$p; ?>
					</td>
					
					
				</tr>
				
		<?php	} ?>
		<tr align="right" >
					<td colspan="4">
			 总价：<?=$sum ?>
			 
			    </td>
				</tr>
		</table>
</div>
</body>
<script type="text/javascript" src="<?php echo base_url('public/js/jquery.js')?>"></script>
<script type="text/javascript">
	
</script>
</html>