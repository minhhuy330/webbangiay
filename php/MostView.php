								

<div class="swiper-wrapper">
                                                <div class="swiper-slide product-layout product-list">
													
                                                   
													<?php
													include("ketnoidb.php");
													$sql="SELECT * FROM sanpham where id%2=0 limit 0,3 ";								
													$result=$conn->query($sql);
													if($result->num_rows >0)							
													//fetch_assoc là lấy dữ liêu trả về 1 mảng associate có key, value
													while($rows= $result ->fetch_assoc()){
													?>
                                                     <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="Image/<?=$rows["HinhAnh"]?>" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="Image/<?=$rows["HinhAnh"]?>" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new"><?=$rows["Gia"]?></span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                         </div> <!-- end of product-list-single -->
															<?php
													}
                                                    ?>
                                                   
												
                                                    </div> <!-- end of product-list-single -->
                                                   <div class="swiper-slide product-layout product-list">
                                                    
													<?php
													
													$truyvan="SELECT * FROM sanpham where id%2!=0 limit 0,3 ";								
													$ketqua=$conn->query($truyvan);
													if($ketqua->num_rows >0)							
													//fetch_assoc là lấy dữ liêu trả về 1 mảng associate có key, value
													while($dong= $ketqua ->fetch_assoc()){
													?>
                                                     <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="Image/<?=$dong["HinhAnh"]?>" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="Image/<?=$dong["HinhAnh"]?>" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="product-name"><a href="single-product.html"><?=$dong["TenSP"]?></a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new"><?=$dong["Gia"]?></span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                        </div>
															<?php
													}?>
                                                   
												

      </div>                                          
 </div> <!-- end of swiper-wrapper -->
