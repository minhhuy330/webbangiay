<!-- Start of Product Showcase Section -->
            <section class="product-showcase">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-md-2 order-lg-1">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="section-title left-aligned with-border">
                                        <h2>Sale Off</h2>
                                    </div>
                                    <div class="latest-product-wrapper pos-r">
                                        <div class="product-carousel" data-visible-slide="1" data-visible-lg-slide="1" data-visible-md-slide="3" data-visible-sm-slide="2" data-loop="true" data-speed="1000">

                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
											<?php
											
													include("ketnoidb.php");
													$sql="SELECT * FROM sanpham,saleoff where sanpham.Id=saleoff.IdSP";								
													$result=$conn->query($sql);
													if($result->num_rows >0)							
													//fetch_assoc là lấy dữ liêu trả về 1 mảng associate có key, value
														while($rows = $result ->fetch_assoc()){
															$giamgia=$rows["Gia"]*($rows["Giagiam"]/100);
												
												?>
                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
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
                                                                    <span class="price-new">$<?php echo $giamgia?></span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->
											<?PHP
											}
											?>
                                            </div> <!-- end of swiper-wrapper -->

                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of product-carousel -->
                                    </div> <!-- end of latest-product-wrapper -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="section-title left-aligned with-border pt-full">
                                        <h2>Testimonials</h2>
                                    </div>

                                    <div class="testimonials pos-r">
                                        <div class="testimonial-container">

                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="testimonial-media" data-swiper-parallax="-100">
                                                        <img src="assets/images/testimonial/testimonial-1.jpg" alt="Alva Ono">
                                                    </div>
                                                    <div class="testimonial-content" data-swiper-parallax="-500">
                                                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you!</p>
                                                        <div class="client-meta" data-swiper-parallax="-300">
                                                            <h3 class="client-name">Alva Ono</h3>
                                                        </div>
                                                    </div>
                                                </div> <!-- end of swiper-slide -->

                                                <div class="swiper-slide">
                                                    <div class="testimonial-media" data-swiper-parallax="-100">
                                                        <img src="assets/images/testimonial/testimonial-2.jpg" alt="Dewey Tetzlaff">
                                                    </div>
                                                    <div class="testimonial-content" data-swiper-parallax="-500">
                                                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you!</p>
                                                        <div class="client-meta" data-swiper-parallax="-300">
                                                            <h3 class="client-name">Dewey Tetzlaff</h3>
                                                        </div>
                                                    </div>
                                                </div> <!-- end of swiper-slide -->

                                                <div class="swiper-slide">
                                                    <div class="testimonial-media" data-swiper-parallax="-100">
                                                        <img src="assets/images/testimonial/testimonial-3.jpg" alt="Amber Laha">
                                                    </div>
                                                    <div class="testimonial-content" data-swiper-parallax="-500">
                                                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you!</p>
                                                        <div class="client-meta" data-swiper-parallax="-300">
                                                            <h3 class="client-name">Amber Laha</h3>
                                                        </div>
                                                    </div>
                                                </div> <!-- end of swiper-slide -->
                                            </div> <!-- end of swiper-wrapper -->

                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next testimonial-slide"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev testimonial-slide"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of testimonial-container -->
                                    </div> <!-- end of testimonials -->
                                </div>
                            </div>
                        </div> <!-- end of col -->

                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 order-1 order-md-1 order-lg-2">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 order-2 order-md-2 order-lg-1">
                                    <div class="promo-banner hover-effect-1">
                                        <a href="#">
                                            <img src="assets/images/banners/banner-5.jpg" alt="Promo Banner">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 order-1 order-md-1 order-lg-2">
                                    <div class="section-title left-aligned with-border">
                                        <h2>Mostview Products</h2>
                                    </div>
                                    <div class="product-carousel-wrapper pos-r">
                                        <div class="product-carousel" data-visible-slide="2" data-visible-lg-slide="2" data-visible-md-slide="2" data-loop="true" data-speed="1000" data-space-between="20">

                                            <!-- Slides -->
											<?php
											include("MostView.php");
											?>

                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of product-carousel -->
                                    </div> <!-- end of product-carousel-wrapper -->
                                </div>
                            </div><!-- end of row -->

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="promo-banner hover-effect-1 mt-half">
                                        <a href="#">
                                            <img src="Image/banner/4.jpg" alt="Promo Banner">
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end of row -->

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="section-title left-aligned with-border pt-half">
                                        <h2>Microphones</h2>
                                    </div>
                                    <div class="single-category-wrapper pos-r">
                                        <div class="product-carousel" data-visible-slide="2" data-visible-lg-slide="2" data-loop="true" data-speed="1000">

                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="assets/images/products/best/products-1-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="assets/images/products/best/products-1-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
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
                                                                <h4 class="product-name"><a href="single-product.html">Accumsan Elit</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="assets/images/products/best/products-2-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="assets/images/products/best/products-2-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
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
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Aliquam Consequat</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$420.00</span>
                                                                    <span class="price-new">$150.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="assets/images/products/best/products-3-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="assets/images/products/best/products-3-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
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
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Cas Meque Metus</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$320.00</span>
                                                                    <span class="price-new">$180.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="assets/images/products/best/products-4-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="assets/images/products/best/products-4-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
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
                                                                <h4 class="product-name"><a href="single-product.html">Donec Ac Tempus</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$430.00</span>
                                                                    <span class="price-new">$100.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="assets/images/products/best/products-5-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="assets/images/products/best/products-5-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
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
                                                                <h4 class="product-name"><a href="single-product.html">Donec Non Est</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$280.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->
                                            </div> <!-- end of swiper-wrapper -->

                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of product-carousel -->
                                    </div> <!-- end of single-category-wrapper -->
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="section-title left-aligned with-border pt-half">
                                        <h2>On-Ear</h2>
                                    </div>
                                    <div class="single-category-wrapper pos-r last">
                                        <div class="product-carousel" data-visible-slide="2" data-visible-lg-slide="2" data-loop="true" data-speed="1000">

                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="assets/images/products/best/products-6-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="assets/images/products/best/products-6-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
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
                                                                <h4 class="product-name"><a href="single-product.html">Etiam Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$100.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="assets/images/products/best/products-7-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="assets/images/products/best/products-7-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
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
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Fusce Aliquam</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$240.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="assets/images/products/best/products-8-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="assets/images/products/best/products-8-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
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
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Fusce Sheam</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$180.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="assets/images/products/best/products-9-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
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
                                                                <h4 class="product-name"><a href="single-product.html">Letraset Sheets</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$260.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="assets/images/products/best/products-10-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="assets/images/products/best/products-10-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
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
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Lorem Ipsum</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$430.00</span>
                                                                    <span class="price-new">$200.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->
                                            </div> <!-- end of swiper-wrapper -->

                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of product-carousel -->
                                    </div> <!-- end of single-category-wrapper -->
                                </div>
                            </div><!-- end of row -->
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Product Showcase Section -->