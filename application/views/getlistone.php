<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fenye</title>
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/nivo-slider.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/front.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>public/css/list.css" />

</head>
<body>
	<div class="container">
		<?php $this->load->view("header"); ?>
		<br>
		<div class="row">
		<div class="col-md-3">
			<div id="list_menu">
					<div id="menu_title" >
						<?php echo $id->name ?>
					</div>	
					<ul>

					<?php foreach ($parent as  $value): ?>
						  <li <?php if($value->id==$data->id){ ?> class="active"  <?php } ?>><a href="<?=site_url('Product/getlistone/'.$value->id) ?>">
						 	<?php echo  $value->name ?>
						 </a></li>
					<?php endforeach ?>
					</ul>
		    </div>
	    </div>
	    <div class="col-md-9">
			<table class="navname">
				<tr>
					<td class="num">品牌</td>
					<td class="two">佳能 尼康 索尼</td>
				</tr>
				<tr>
					<td class="num">单反级别</td>
					<td class="two">入门级 中级 高级</td>
				</tr>
				<tr>
					<td class="num">屏幕尺寸</td>
					<td class="two">3英寸 3.2英寸</td>
				</tr>
				<tr>
					<td class="num">价格</td>
					<td class="two">1360以下元 1360-2720元 2720-4080元 6800以上元</td>
				</tr>
			</table>
			<br>
		 <?php foreach ($products1 as $val) {  ?>
		  	 <a href="<?=current_url()."?brand_id=".$val->id ?>"><?=$val->name ?></a>
		<?php  } ?>
		<br>
		
		<div class="row">
			<?php foreach ($products as  $p) { //var_dump($products) ?> 
			 		<div class="col-md-3 product_item" >
					<img class="product_item_img" src="<?=base_url($p->img) ?>" />
					<ul class="clearfix">
    					<?php $imgs=$this->product_img_model->get_all_img($p->id);
     				foreach ($imgs as $i) {  ?>
     				<li>
     					<img  src="<?=base_url($i->url)?>" />
     				</li>
     			<?php
     				}	
    			 ?>
    			    </ul>	
    			    <h5><?php echo $p->title ?></h5>
    			    <p><?php echo $p->price ?></p>
    			    <a href="<?=site_url("Product/detail/".$p->id)?>" class="btn btn-danger">立即购买</a>
			    </div>    			
			<?php  } ?> 			
		</div>
	 </div>
</body>
<script type="text/javascript" src="<?php echo base_url('public/js/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js')?>"></script>
<script type="text/javascript">
$(function(){
	$('.product_item ul li').mouseover(function(){
		$(this).parents('.product_item').find('ul li').removeClass('hhh');
		$(this).addClass('hhh');
		var src=$(this).find('img').attr('src'); 
		$(this).parents('.product_item').find('.product_item_img').attr('src',src);	
	});

});
	
</script>
</html>