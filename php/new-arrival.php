<div class="tab-pane fade" id="category_new" role="tabpanel" aria-labelledby="nav_new">
                                        <div class="product-carousel" data-visible-slide="5" data-visible-lg-slide="3" data-loop="true" data-speed="1000">

                                            <!-- Slides -->
                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
											<?php
												include("ketnoidb.php");
												$sql="SELECT * FROM sanpham where IdDacTinh=4 and Id%2!=0";													
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
                                                                    <div class="label-product label-new">New</div>
                                                                    <a href="single-product.php?slug=<?php echo $row['SLUG']?>">
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
                                                                    <h4 class="product-name"><a href="single-product.php?slug=<?php echo $row['SLUG']?>"><?=$rows["TenSP"]?></a></h4>
                                                                    <p class="product-price">
                                                                         <span class="price-old">$<?=$rows["Gia"]?></span>
                                                                        <span class="price-new">$<?=$rows["GiamGia"]?></span>
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
                                