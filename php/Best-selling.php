<section class="best-selling-section no-title">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="section-title left-aligned with-border">
                                <h2 class="visually-hidden">Tab Products</h2>
                            </div>
                        </div>
                    </div> <!-- end of row -->

                    <div class="row">
                        <div class="col-12 col-md-12">
						
                            <div class="best-selling-wrapper pos-r">

                                    <!-- Nav Pills -->
                                <ul class="nav nav-pills top-nav-pills type-2 mb-5 justify-content-center" id="best_products" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="nav_bestsellers" data-toggle="pill" href="#category_bestsellers" role="tab" aria-controls="category_bestsellers" aria-selected="true">Best sellers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="nav_featured" data-toggle="pill"  href="#category_featured" role="tab" aria-controls="category_featured" aria-selected="true">Featured products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="nav_new" data-toggle="pill" href="#category_new" role="tab" aria-controls="category_new" aria-selected="false">New arrivals</a>
                                    </li>
                                </ul> <!-- end of nav -->
                                
                                
                                <!-- Tab Contents -->
                                <div class="tab-content" id="best_products_contents">
								
                                    <div class="tab-pane fade show active" id="category_bestsellers" role="tabpanel" aria-labelledby="nav_bestsellers">
                                        <div class="product-carousel" data-visible-slide="5" data-visible-lg-slide="3" data-loop="true" data-speed="1000">

                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
											<?php
												include("ketnoidb.php");
												$sql="SELECT * FROM sanpham where IdDacTinh=1 and Id%2!=0";													
												$result=$conn->query($sql);
												if($result->num_rows >0)
												{							
												//fetch_assoc là lấy dữ liêu trả về 1 mảng associate có key, value
													while($rows = $result ->fetch_assoc())
													{
											?>	
                                                <div class="swiper-slide">
                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner with-bottom-padding">
                                                                <div class="product-image">
                                                                    <div class="label-product label-new">Hot</div>
                                                                     <a href="single-product.html">
                                                                        <img src="Image/<?=$rows["HinhAnh"]?>" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="Image/<?=$rows["HinhAnh"]?>" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                    <h4 class="product-name"><a href="single-product.html"><?=$rows["TenSP"]?></a></h4>
                                                                    <p class="product-price">                                                                    
                                                                        <span class="price-new">$<?=$rows["Gia"]?></span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->
                                                </div> <!-- end of swiper-slide -->
											<?php
													}
												}
											?>
											</div>
											 
                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of product-carousel -->
                                    </div> <!-- end of tab-pane -->
									<?php include("Featured-product.php")?>
									<?php include("new-arrival.php")?>
                                </div> <!-- end of tab-content -->
								
                            </div> <!-- end of best-selling-wrapper -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Best Selling Section -->
			
			