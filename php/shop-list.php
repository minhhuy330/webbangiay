
<div class="row">
												
	<div class="col-12 col-sm-12 col-md-12">
			<div class="product-layout product-list">
			<?php
		include("ketnoidb.php");
		$sql="SELECT * FROM sanpham";								
		$result=$conn->query($sql);
		if($result->num_rows >0)							
		//fetch_assoc là lấy dữ liêu trả về 1 mảng associate có key, value
			while($rows = $result ->fetch_assoc()){
	
	?>
				<div class="product-thumb">
					<div class="product-inner media align-items-center">
						<div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
							<div class="label-product label-new">New</div>
							<a href="single-product.php?slug=<?php echo $row['SLUG']?>">
								<img src="Image/<?=$rows["HinhAnh"]?>" alt="Proin Lectus Ipsum" class="hover-image">
								<img src="Image/<?=$rows["HinhAnh"]?>" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
							</a>
							<div class="action-links">
								<a class="action-btn btn-cart" href="single-product.php?slug=<?php echo $row['SLUG']?>" title="Add to Cart"><i class="pe-7s-cart"></i></a>
								<a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
								<a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
								<a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
							</div>
						</div> <!-- end of product-image -->

						<div class="product-caption media-body">
							<div class="product-ratings">
								<div class="rating-box">
									<ul class="rating d-flex justify-content-md-start">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
							<h4 class="product-name"><a href="single-product.php?slug=<?php echo $row['SLUG']?>"><?=$rows["TenSP"]?></a></h4>
							<p class="product-price">
								<span class="price-old">$330.00</span>
								<span class="price-new"><?=$rows["Gia"]?></span>
							</p>
							<p class="product-des">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
						</div><!-- end of product-caption -->
					</div><!-- end of product-inner -->
				</div><!-- end of product-thumb -->
			<?php 
			}
			?>
			</div> <!-- end of product-layout -->
		</div>
	</div>
	</div>