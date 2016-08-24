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
	<?php $this->load->view('header') ?>
	<br>
	<div>
		<?php var_dump($carts) ?>
		<table  class="table">
			<th width="550">商品</th>
			<th width="100">数量</th>
			<th width="100">单价</th>
			<th width="100">总额</th>
			<th width="150">操作</th>
			<?php  

			foreach ($carts as $c) { $data=$this->Products_model->get_one($c->product_id); ?>
				<tr>
					<td>
					<a href="<?php echo site_url('Product/detail/'.$c->product_id)?>">
					<img style="width:60px;" src="<?=base_url($data->img)?>"  />
					<?=$data->title?>
					</a>	
					</td>
					
					<td>
						<?=$c->num?>
					</td>
					<td>
						<?=$data->price?>
					</td>
					<td>
						<?=intval($c->num)*intval($data->price)?>
					</td>
				</tr>
		<?php	} ?>
			
		</table>
	</div>
</div>
</body>
</html>