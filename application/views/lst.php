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

		<table  class="table">


			<th width="550">商品</th>
			<th width="100">数量</th>
			<th width="100">单价</th>
			<th width="100">总额</th>
			<th width="150">操作</th>
			<?php  
            $sum=0;
			foreach ($carts as $c) { $data=$this->Products_model->get_one($c->product_id); ?>
				<tr  class="cartid">
					
					<td><input type="checkbox" class="is_select" value="<?=$c->id ?>" >
					<a href="<?php echo site_url('Product/detail/'.$c->product_id)?>">
					<input type="hidden" class="product_id" value="<?=$c->product_id?>">
					<img style="width:60px;" src="<?=base_url($data->img)?>"  />
					<?=$data->title?>
					</a>	
					</td>
					
					<td class="t" width="200">
						<sapn class="reduce">-</sapn>
						 <input class="inp" type="text" name="num" value="<?=$c->num?>" />
						  <span class="add">+</span>
					</td>
					<td>

						<?=$data->price?>
						
					</td>
					<td>
						<?= $p=intval($c->num)*intval($data->price)?>
						<?php $sum =$sum +$p; ?>
					</td>
					<td>
						<a href="<?=site_url('shopping/del/id='.$c->id)?>">删除</a>
					</td>
					
				</tr>
		<?php	} ?>
		<tr>
			<td>
			 <input id="checkall" type="checkbox" >全选：
				<a href="" id="del_all">删除</a>
			</td>
			
			<td>
			 总价：<?=$sum ?>
			 
			</td>
		</tr>
		
		</table>
		<button type="submit" class="btn btn-danger pull-right" id="checkout">去结算</button>
		
	</div>
</div>
</body>
<script type="text/javascript" src="<?php echo base_url('public/js/jquery.js')?>"></script>
<script type="text/javascript">
	
	$(".table #checkall").click(function(){
		$("input[type=checkbox]").prop('checked',this.checked);
     
	});
	$("#del_all").click(function(){
		$('.is_select').each(function(i,item){
             var ids=[];
             if($(item).prop('checked')){
             	ids.push($(item).val());             	
             }
             if(ids.length==0){

             }else{
             	  $.post("<?=site_url('shopping/dels')?>",{'ids' : ids}, function(data){
         			if(data=="ok"){
         				location.reload();
         			}
                 });   
             }
        
		});
		 return false;
	})
	$('.reduce').click(function(){
		var id=$(this).parents('.cartid').find('.is_select').val();
		var num=parseInt($(this).parents('.t').find('.inp').val())-1;
       $.get("<?=site_url("shopping/updatecart")?>", {'id':id,'num':num},function(data){
       		if(data=="ok"){
         			location.reload();
         			}	
       })
	});

	$('.add').click(function(){
		var id=$(this).parents('.cartid').find('.is_select').val();
		var num=parseInt($(this).parents('.t').find('.inp').val())+1;
       $.get("<?=site_url("shopping/updatecart")?>", {'id':id,'num':num},function(data){
       		if(data=="ok"){
         			location.reload();
         			}	
       })
	})

	$('.inp').blur(function(){
		var id=$(this).parents('.cartid').find('.is_select').val();
		var num=parseInt($(this).parents('.t').find('.inp').val());
       $.get("<?=site_url("shopping/updatecart")?>", {'id':id,'num':num},function(data){
       		if(data=="ok"){
         			location.reload();
         			}	
       })
	})
	$('#checkout').click(function(){
		 var data=[];
       $('.is_select').each(function(i,item){       
              if($(item).prop('checked')){
					var element={
		             		'num':$(item).parents('.cartid').find('.inp').val(),
		             		'product_id':$(item).parents('.cartid').find('.product_id').val()
             	                }
					 data.push(element);     
                  }
       });
       		   
       		  	  $.post("<?=site_url("shopping/order1")?>",{"data":data},function(data){
       		  	  	// console.log(data);
       		  	  	  if(data=='ok'){
       		  	  	  window.location.href="<?=site_url('shopping/order')?>"}
       		  	  });
       		  	  	
            
	});
	 

</script>
</html>