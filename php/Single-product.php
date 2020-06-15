<?php include("header.php");
?>
<!-- Start of Main Content Wrapper -->
<main id="content" class="main-content-wrapper">
	<div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Breadcrumbs -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <a class="breadcrumb-item" href="shop-grid.html">Shop</a>
                            <span class="breadcrumb-item active">Aliquam Consequat</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Main Product Wrapper -->
            <div class="main-product-wrapper">
                <div class="container">
                    <div class="row">
					
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="single-product-wrapper">
								<?php
										include("ketnoidb.php");
										if(isset($_GET['slug']))
								{
									
									$slug = $_GET['slug'];
										//echo $slug;
									$sql = "SELECT * FROM sanpham,loaisanpham,hinhcon WHERE sanpham.SLUG='$slug' and loaisanpham.Idloai = sanpham.IdLoaiSP and sanpham.Id =hinhcon.IdSanPham";
									$result = $conn->query($sql);
									if($result->num_rows > 0)
									{
										$rows=$result->fetch_assoc();//có một dòng dữ liệu không cần vòng lặp
										//fetch_assoc : lấy dữ liệu trả về 1 mảng ASSOCIATE    key và value -> lấy dữ liệu row[0])(không dùng while thì chỉ lấy 1 dòng dữ liệu đầu tiên, còn dùng while thì sẽ duyệt hết tất cả)
										
										//fetch_array : -> lấy dữ liệu row[0] hoặc row['name'];
										?>
                                    <div class="row">
										<div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="product-gallery">
                                                <div class="gallery-with-thumbs">
                                                    <div class="product-full-image main-slider image-popup">

                                                        <!-- Slides -->
                                                        <div class="swiper-wrapper">
                                                            <figure class="swiper-slide">
                                                                <a href="Image/<?=$rows['HinhAnh']?>"data-size="800x800">
                                                                    <img src="Image/<?=$rows['HinhAnh']?> "alt="Product Image">
                                                                    <div class="image-overlay"><i class="pe-7s-expand1"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="Image/<?=$rows['DuongDan']?>" data-size="800x800">
                                                                    <img src="Image/<?=$rows['DuongDan']?>" alt="Product Image">
                                                                    <div class="image-overlay"><i class="pe-7s-expand1"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="Image/<?= $rows['DuongDan']?>" data-size="800x800">
                                                                    <img src="Image/<?=$rows['DuongDan']?>" alt="Product Image">
                                                                    <div class="image-overlay"><i class="pe-7s-expand1"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="Image/<?=$rows['DuongDan']?>" data-size="800x800">
                                                                    <img src="Image/<?=$rows['DuongDan']?>" alt="Product Image">
                                                                    <div class="image-overlay"><i class="pe-7s-expand1"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            
                                                        </div>
                                                    </div> <!-- end of product-full-image -->

                                                    <div class="product-thumb-image pos-r">
                                                        <div class="nav-slider">
														
                                                            <!-- Slides -->
                                                            <div class="swiper-wrapper">
															<div class="swiper-slide">
                                                                    <img src="Image/<?=$rows['HinhAnh']?>" alt="Product Thumbnail Image">
                                                                </div>
															<?php
															$tryvan = "SELECT * FROM sanpham,hinhcon WHERE sanpham.Id =hinhcon.IdSanPham";
															$csdl = $conn->query($sql);
															if($csdl->num_rows > 0)
														{
															while($row=$csdl->fetch_assoc())
															{
															?>
                                                                
                                                                <div class="swiper-slide">
                                                                    <img src="Image/<?=$row['DuongDan']?>" alt="Product Thumbnail Image">
                                                                </div>
                                                               <?php 
															}
														}
																?>
																
                                                           
                                                            </div>

                                                            <!-- Navigation -->
                                                            <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                                            <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                                        </div> <!-- end of nav-slider -->
                                                    </div> <!-- end of product-thumb-image -->
                                                </div> <!-- end of gallery-with-thumbs -->
                                            </div> <!-- end of product-gallery -->
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="product-details">
                                                <h3 class="product-name"><?=$rows['TenSP']?></h3>
                                                <div class="product-ratings d-flex">
                                                    <ul class="rating d-flex mr-4">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="comments-advices list-inline d-flex">
                                                        <li class="list-inline-item mr-3"><a href="#">2 Reviews</a></li>
                                                        <li class="list-inline-item"><a href="#">Write a Review</a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <p class="d-flex align-items-center">
                                                        <span class="price-old"><?=$rows['GiamGia']?></span>
                                                        <span class="price-new">$<?=$rows['Gia']?></span>
                                                        <span class="price-discount">-5%</span>
                                                    </p>
                                                </div>
                                                <div class="product-meta">
                                                    <ul class="list-unstyled">
                                                        <li>Brands <a href="#"><span><?=$rows['TenLoai']?></span></a></li>
                                                        <li>Product Code: <span><?=$rows['Id']?></span></li>
                                                        <li>Reward Points: <span><?=$rows['SoLuong']?></span></li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="product-description">
                                                    <p><?=$rows['MoTa']?></p>
                                                </div>
                                                <div class="product-actions">
                                                    <h3>Available Options</h3>
                                                    <div class="product-size clearfix">
                                                        <label>Size</label>
                                                        <select class="nice-select">
                                                            <option>S</option>
                                                            <option>M</option>
                                                            <option>L</option>
                                                        </select>
                                                    </div>
                                                 
                                                    <div class="product-stock">
                                                       <label>Quantity</label>
                                                        <ul class="d-flex flex-wrap align-items-center">
                                                            <li class="box-quantity">
                                                                <form action="#">
                                                                    <input class="quantity" type="number" min="1" value="1">
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="default-btn">  <a href="Cart.php?thaotac=them&slug=<?php echo $rows['SLUG']?>">Add to Cart</a></button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="wishlist-compare">
                                                        <button class="btn-wishlist" type="button" title="Add to Wishlist">Add to Wishlist</button>
                                                        <button class="btn-compare" type="button" title="Add to Compare">Add to Compare</button>
                                                    </div>
                                                </div>

                                                <div class="social-sharing d-flex align-items-center mt-half">
                                                    <span>Share</span>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><a href="#" class="bg-facebook" data-toggle="tooltip" data-position="top" data-original-title="Facebook" target="_blank"><i class="fa fa-facebook"></i><span>Share</span></a></li>
                                                        <li class="list-inline-item"><a href="#" class="bg-twitter" data-toggle="tooltip" data-position="top" data-original-title="Twitter" target="_blank"><i class="fa fa-twitter"></i><span>Tweet</span></a></li>
                                                        <li class="list-inline-item"><a href="#" class="bg-gplus" data-toggle="tooltip" data-position="top" data-original-title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i><span>Google+</span></a></li>
                                                        <li class="list-inline-item"><a href="#" class="bg-pinterest" data-toggle="tooltip" data-position="top" data-original-title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                                                    </ul>
                                                </div>
                                            </div> <!-- end of product-details -->
                                        </div>
                                    </div> <!-- end of row -->

						
							<?php
						}
					}
				?>	
                                   
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
					
					
                </div> <!-- end of container -->
            </div>
            <!-- End of Main Product Wrapper -->

            <!-- Start of Related Products -->
            <section class="related-products">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="section-title left-aligned with-border">
                                <h2>Related Products</h2>
                            </div>
                            <div class="latest-product-wrapper pos-r">
                                <div class="product-carousel" data-visible-slide="4" data-visible-lg-slide="4" data-visible-md-slide="3" data-visible-sm-slide="2" data-loop="true" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
									<?php
									$tryvan1 = "SELECT * FROM sanpham WHERE IdDacTinh=4 and Id%2!=0";
															$csdl1 = $conn->query($tryvan1);
															if($csdl1->num_rows > 0)
														{
															while($dong=$csdl1->fetch_assoc())
															{
									?>
                                        <div class="swiper-slide product-layout product-grid">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <a href="Single-product.php">
                                                            <img src="Image/<?=$dong['HinhAnh']?>" alt="Proin Lectus Ipsum" class="hover-image">
                                                            <img src="Image/<?=$dong['HinhAnh']?>" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
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
                                                        <h4 class="product-name"><a href="Single-product.php"><?=$rows['TenSP']?></a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new">$<?=$rows['Gia']?></span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </div> <!-- end of product-layout -->
										<?php
															}
														}?>
                                       
                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Navigation -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of product-carousel -->
                            </div> <!-- end of latest-product-wrapper -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Related Products -->

            <!-- Start of Newsletter Section -->
            <section class="newsletter-section vpadding bgc-offset">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                            <div class="newsletter-title d-lg-flex justify-content-lg-start">
                                <h6>Subscribe to our Newsletter</h6>
                                <h3>Subscribe to our newsletter and know first about all the promotions and discounts. Be always trendy.</h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                            <div class="newsletter-form-wrapper">
                                <form action="http://d29u17ylf1ylz9.cloudfront.net/ororus-v1/index.html" method="post">
                                    <input type="email" name="email" placeholder="Enter you email address here..." value="" required> 
                                    <input type="submit" class="default-btn" name="contact" value="Subscribe">
                                </form>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Newsletter Section -->
        </div
        <!-- End of Main Content Wrapper -->
</main>	
<?php
include("footer.php");
?>