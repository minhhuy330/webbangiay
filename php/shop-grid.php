<?php include("header.php");
 
?>
<!-- Start of Main Content Wrapper -->
        <!-- Start of Breadcrumbs -->
        <?php
			 include("Breadcrumbs.php");
		?>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Shop Products Wrapper -->
            <div class="shop-products-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 order-1 order-md-1 order-lg-2">
                            <main id="primary" class="site-main">
                                <div class="shop-wrapper">
                                   <?php
								   include("showSP.php");
								   ?>									
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="shop-products-wrapper">
                                                <div class="tab-content">
												
                                                    <div id="grid" class="tab-pane fade active show" role="tabpanel">
														
                                                        <div class="row">
														
															<?php
													include("ketnoidb.php");
													$sql="SELECT * FROM sanpham";								
													$result=$conn->query($sql);
													if($result->num_rows >0)							
													//fetch_assoc là lấy dữ liêu trả về 1 mảng associate có key, value
														while($rows = $result ->fetch_assoc()){
												
													?>			
                                                            <div class="product-layout product-grid col-6 col-sm-6 col-md-4 col-lg-4">
																					
															<div class="product-thumb">					
                                                                    <div class="product-inner">
											<div class="product-image">
												<div class="label-product label-new">New</div>
												<a href="single-product.php?slug=<?php echo $rows['SLUG']?>">
													<img src= "Image/<?=$rows["HinhAnh"]?>"alt="Proin Lectus Ipsum" class="hover-image">
													<img src="Image/<?=$rows["HinhAnh"]?>" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
												</a>
												<div class="action-links">
													<a class="action-btn btn-cart" href="Single-product.php?slug=<?php echo $rows['SLUG']?>" title="Add to Cart"><i class="pe-7s-cart"></i></a>
													<a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
													<a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
													<a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
												</div>
											</div> <!-- end of product-image -->

											<div class="product-caption">
												<div class="product-ratings">
													<div class="rating-box">
														<ul class="rating d-flex">
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
													</div>
												</div>
												<h4 class="product-name"><a href="Single-product.php?slug=<?php echo $rows['SLUG']?>"><?=$rows["TenSP"]?></a></h4>
												<p class="product-price">
													<span class="price-old">$330.00</span>
													<span class="price-new">$<?=$rows["Gia"]?></span>
												</p>
											</div><!-- end of product-caption -->
										</div><!-- end of product-inner -->
										</div><!-- end of product-thumb -->

										</div> <!-- end of product-layout -->
										<?php
										}
										?>	
										</div>
										</div>

												<div id="list" class="tab-pane fade active show" role="tabpanel">
														<?php include("shop-list.php")?>													
                                                </div>
                                            </div> <!-- end of shop-products-wrapper -->										
                                           <?php
											include("phantrang.php");
											?>
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of shop-wrapper -->
                            </main> <!-- end of #primary -->
                        </div>
						<?php
						include("shop.php");
						?>										
                     
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
			
            <!-- End of Shop Products Wrapper -->
			
            <?php
			include("newletter.php");
			?>
        </div>
		
        <!-- End of Main Content Wrapper -->	
<?php
include("footer.php");
?>