<?php include '../lib/conn.php' ?>
<?php 
  if(isset($_GET['id'])&&filter_var($_GET['id']))
 {
  $idsanpham=$_GET['id'];
  $query="SELECT * FROM sanpham WHERE idsanpham='$idsanpham'";
  $result=mysqli_query($conn,$query) or die("Error: ".mysqli_error($conn));
  if(!isset($_SESSION['cart']) or empty($_SESSION['cart'])){
  	      $total = 0;
  }
  else{
          $total =0;
  	      foreach ($_SESSION['cart'] as $value) {
  	      	  $total+= $value['quantity'];

  	      }
  }
  while ($data=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  	?>
  	        <div class="row col-sm-8">

			<div class="col-sm-5" style="height: 457px;border: 1px solid #ccc;border-radius: 5px;">
			  <div class="row"></div>
			     <img  src="../image/<?php echo $data['hinhanh']; ?>" style="margin-top: 100px;width: 272px;height: 254px;">
			</div>
			<div class="col-sm-7" style="height: 457px;">
				  <ul class="list-group">
				        	<li class="list-group-item">
						    			<div class="caption">Tên sản phẩm:
						    			  <strong style="font-size: 90%;"><?php echo $data['tensanpham'];?></strong>
						    			</div>
						    			<div class="caption"></div>


						    </li>
				        	<li class="list-group-item">
						    			<div class="caption">Giá:
						    			  <strong style="font-size: 90%;color: red;"><?php echo $data['gia'];?></strong>
						    			</div>
				        	</li>
				        	<li class="list-group-item">
						    			<div class="caption">Màu sắc:
                                             <strong style="font-size: 90%;"><?php echo $data['mausac'];?></strong>
						    			</div>
				        	</li>
				        	<li class="list-group-item">
						    			<div class="caption">Xuất xứ:
                                            <strong style="font-size: 90%;"><?php echo $data['xuatxu'];?></strong>
						    			</div>
				        	</li>
				       
				        	

						    			<a href="../user_client/user_order.php?id=<?php echo $data['idsanpham'];?>" class="btn btn-success btn-block" style="padding: 27px 0;">
						    			      <i class="fa fa-check-square" aria-hidden="true"  style="margin-right: 10px;
                                                font-size: 120%;"></i>Mua Ngay
						    			</a>
						    			<a href="../user_client/insert_products.php?id=<?php echo $data['idsanpham'];?>" 
						    			          class="btn btn-danger btn-block" style="padding: 27px 0;">
						    			    <i class="fa fa-cart-arrow-down" aria-hidden="true" style="margin-right: 10px;
                                                font-size: 120%;">
                                        	
                                        </i>Thêm vào giỏ hàng
                                        </a>
				        	
				        </ul>
			</div>
			<div class="clearfix"></div>
			<!--Bài viết về sản phẩm-->
		    <div class="col-sm-12 row">
		    	<div class="panel panel-danger " style="background: orange;margin-top: 30px;">
		    	     <h4 style="text-align: center;">Bài viết sản phẩm</h4>
		    	     
		    	</div>
		    	<p><?php echo $data['mota'];?></p>
		    	<div>

		    	</div>
   			 </div>
   		 </div>
	<?php $_GET['idtenhang']=$data['idtenhang']; ?>
		<?php
  }
  
  }

 ?>