<!DOCTYPE html>
<html>
<head>
	<title>自己的电商系统</title>
	<meta charset="utf-8">
	<base href="http://localhost/shop/" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/nivo-slider.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/front.css" />
</head>
<body id="product_detail">
	<div class="container">
		<?php $this->load->view('header')?>
		<br />
		<div class="row">
			<div class="col-md-6" id="product_imgs">
				<img id="product_main_img" src="<?=base_url($product->img)?>" />
				<ul class="clearfix">
				 	<?php foreach($imgs as $i){ ?>
		 			<li>
						<img  src="<?=base_url($i->url)?>">
					</li>
					<?php } ?>
				</ul>
				<span>商品编号：2131674</span><a href=""><i class="glyphicon glyphicon-share-alt"></i>分享</a>
				<i class="glyphicon glyphicon-heart"><a href="">关注商品</a></i>
			</div>
			<div class="col-md-6">
			<form method="post" action="<?php echo  site_url('shopping/addtocart') ?>">
				<h3><?=$product->title?></h3>
				<input type="hidden" name="product_id" value="<?php echo $product->id ?>">
				<table class="product_arg">
					<tr>
						<td class="l">价格：</td>
						<td class="price">￥<?=$product->price?></td>
					</tr>
					<tr>
						<td class="l">商品评分：</td>
						<td class="star">
							<?php for($i=0;$i<5;$i++){?>
								<?php if($i < $product->star){?>
								<i class="glyphicon glyphicon-star"></i>
								<?php }else{?>
								<i class="glyphicon glyphicon-star-empty"></i>
								<?php }?>
							<?php }?>
						</td>
					</tr>
					<tr>
						<td class="l">运费：</td>
						<td class="deliver_fee">满99免运费</td>
					</tr>
					<tr>
						<td class="l">购买数量：
							

						</td>
							<td class="num">
								<sapn class="reduce">-</sapn>
								 <input class="inp" type="text" name="num" value="1" />
								  <span class="add">+</span>
							</td>
					</tr>
					<tr>
						<td class="l">送货:</td>
						<td class="deliver">由仓库全国最近点 发货，并提供售后服务。如有问题咨询在线客服~!
                                         上午08:30前完成下单下午送达,下午下单隔日第二天送达.</td>
					</tr>
					<tr>
						<td class="l"><a href="#" class="btn btn-success btn-lg"><i class="glyphicon glyphicon-shopping-cart"></i>立即购买</a></td>
						<td >&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-danger btn-lg">购物车</button></td>
					</tr>
				</table>
			</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-9">
				<?php echo htmlspecialchars_decode($product->content) ?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url('public/js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('public/js/jquery.elevateZoom-3.0.8.min.js')?>"></script>
    <script type="text/javascript">
	    $(function(){
	    $("#product_imgs ul li").mouseover(function(){
	    	$("#product_imgs ul li").removeClass("hover");
	    	$(this).addClass("hover");
	    	var src=$(this).find('img').attr('src');
	    	$("#product_main_img").attr('src',src);
	    	});

	     $('.add').click(function(){

	     	var i=$('.inp').val();
	     	i++;
         $('.inp').val(i);
	     });

	      $('.reduce').click(function(){
	     	var i=$('.inp').val();
	     	if(i>0){
	     	i--;
         $('.inp').val(i);
              }
	     });
	     
	      $('#product_main_img').elevateZoom({
	      	zoomWindowWidth:300,
	      	zoomWindowHeight:300

	      });

	    });

    </script>

</body>
</html>