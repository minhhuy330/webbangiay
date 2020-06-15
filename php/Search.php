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
                            <span class="breadcrumb-item active">Shop</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Shop Products Wrapper -->
            <div class="shop-products-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <main id="primary" class="site-main">
                                <div class="shop-wrapper">
                                   <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="shop-toolbar">
                                                <div class="toolbar-inner">
                                                    <div class="product-view-mode">
                                                        <ul role="tablist" class="nav shop-item-filter-list">
                                                            <li role="presentation" class="active"><a href="#grid" aria-controls="grid" role="tab" data-toggle="tab" class="active show" aria-selected="true"><i class="ion-md-grid"></i></a></li>
                                                            <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-toggle="tab"><i class="ion-md-list"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="toolbar-amount">
                                                        <span>Showing 10 to 18 of 27</span>
                                                    </div>
                                                </div>
                                                <div class="product-select-box">
                                                    <div class="product-show">
                                                        <p>Show:</p>
                                                        <select class="nice-select" name="showing">
                                                            <option value="1">8</option>
                                                            <option value="2">12</option>
                                                            <option value="3">16</option>
                                                            <option value="4">20</option>
                                                            <option value="5">24</option>
                                                        </select>
                                                    </div>
                                                    <div class="product-sort">
                                                        <p>Sort By:</p>
                                                        <select class="nice-select" name="sortby">
                                                            <option value="trending">Default</option>
                                                            <option value="sales">Name (A - Z)</option>
                                                            <option value="sales">Name (Z - A)</option>
                                                            <option value="rating">Price (Low > High)</option>
                                                            <option value="date">Rating (Lowest)</option>
                                                            <option value="price-asc">Model (A - Z)</option>
                                                            <option value="price-asc">Model (Z - A)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="shop-products-wrapper">
                                                <div class="tab-content">
                                                    <div id="grid" class="tab-pane fade active show" role="tabpanel">
                                                        <div class="row">
															
															<?php
															if(isset($_GET['search']))
															{
																$search = $_GET['search'];
																include("ketnoidb.php");
																$sql="SELECT * FROM sanpham where (TenSP like '%$search%'|| Gia like '%$search%' )";								
																$result=$conn->query($sql);
																if($result->num_rows >0)
																{							
																//fetch_assoc là lấy dữ liêu trả về 1 mảng associate có key, value
																	while($rows = $result ->fetch_assoc())
																	{?>
																		<div class="product-layout product-grid col-6 col-sm-6 col-md-4 col-lg-3">
																	<div class="product-thumb">
																		<div class="product-inner">
																			<div class="product-image">
																				<div class="label-product label-new">New</div>
																				<a href="single-product.html">
																				   
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
																					<span class="price-old">$330.00</span>
																					<span class="price-new">$120.00</span>
																				</p>
																			</div><!-- end of product-caption -->
																		</div><!-- end of product-inner -->
																	</div><!-- end of product-thumb -->
																</div> <!-- end of product-layout -->
																<?php
																	}
																}	
															}?>	
														
                                                            

                                                            
                                                        </div>
                                                    </div>
                                                   
                                    </div> <!-- end of row -->
                                </div> <!-- end of shop-wrapper -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Shop Products Wrapper -->

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
        </div>
</main>	
<?php
include("footer.php");
?>