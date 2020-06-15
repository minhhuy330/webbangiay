<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/ororus-v1/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Aug 2018 05:38:08 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ororus - eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">


    <!-- CSS files
    ============================================ -->

    <!-- Boostrap stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">

    <!-- Plugins stylesheet -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Master stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>

</head>

<body>

    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
    <![endif]-->

    <!-- Start of Whole Site Wrapper with mobile menu support -->
    <div id="whole" class="whole-site-wrapper color-scheme-four">

        <!-- Start of Newsletter Popup -->
        <div id="newsletter_popup" class="newsletter-popup">
            <div class="popup-container">
                <div class="popup-close">
                    <span class="p-close"><span>X</span></span>
                </div> <!-- end of popup-close -->

                <div class="popup-area text-center">
                    <h2>Subscribe to our Newsletter</h2>
                    <div class="popup-body">
                        <p>Subscribe to the Ororus mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                        <div class="subscribe-form-group">
                            <form action="#">
                                <input type="text" name="message" id="message" class="form-control" placeholder="Enter your email address" required>
                                <button type="submit" class="btn btn-secondary">Subscribe</button>
                            </form>
                        </div>
                    </div> <!-- end of popup-body -->

                    <div class="popup-footer">
                        <div class="form-check">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" id="cancel_popup">
                                <span class="checkmark"></span>
                                <label class="form-check-label" for="cancel_popup">Don't show this popup again</label>
                            </div>
                        </div>
                    </div> <!-- end of popup-footer -->
                </div> <!-- end of popup-area -->
            </div> <!-- end of popup-container -->
        </div>
        <!-- End of Newsletter Popup -->

        <!-- Start of Header -->
        <header class="header primary-bg-color white-scheme header-type-2">
            <div class="header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 align-self-center">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo4.png" alt="Logo" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                            <div class="header-right">
                                <div class="row align-items-center">
                                    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-7 order-2 order-sm-2 order-md-2 order-lg-1">
                                        <div class="header-search-area">
                                            <div class="search-categories">
                                                <form action="Search.php" method="GET">
                                                    <div class="search-form-input">
													<select id="select" name="select" class="nice-select">
														<?php
															include("ketnoidb.php");
															$sql="SELECT * FROM loaisanpham ";								
															$result=$conn->query($sql);
															if($result->num_rows >0)
															{							
															//fetch_assoc là lấy dữ liêu trả về 1 mảng associate có key, value
																while($rows = $result ->fetch_assoc())
																{
															?>	
																	
																		<option><?=$rows["TenLoai"]?></option>
																		
																	
														<?php
																}
															}						
														?>	 							
														</select>
                                                        <div class="search-wrapper">
                                                            <input type="text" placeholder="Search" value="" name="search">
                                                            <button class="header-search-btn" type="submit"><i class="ion ion-ios-search"></i></button>
                                                        </div>
                                                    </div>
													
                                                </form>
												
                                            </div>
                                        </div> <!-- end of header-search-area -->
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-5 order-1 order-sm-1 order-md-1 order-lg-2">
                                        <ul class="list-inline">
                                            <li class="top-links list-inline-item">
                                                <div class="btn-group">
                                                    <button class="btn-link dropdown-toggle">My Account <i class="fa fa-angle-down"></i></button>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                           <li><a href="register.php">Register</a></li>
                                                           <li><a href="login.php">Login</a></li>
                                                           <li><a href="cart.php">Shopping Cart</a></li>
                                                           <li><a href="checkout.php">Checkout</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="language list-inline-item">
                                                <div class="btn-group">
                                                    <button class="btn-link dropdown-toggle"><img src="assets/images/icons/en-gb.png" alt="Icons"> English <i class="fa fa-angle-down"></i></button>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                           <li><a href="#"><img src="assets/images/icons/en-gb.png" alt="Icons"> English</a></li>
                                                           <li><a href="#"><img src="assets/images/icons/fr-fr.png" alt="Icons"> French</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="currency list-inline-item">
                                                <div class="btn-group">
                                                    <button class="btn-link dropdown-toggle"> USD <i class="fa fa-angle-down"></i></button>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                           <li><a href="#">€ Euro</a></li>
                                                           <li><a href="#">£ Pound Sterling</a></li>
                                                           <li><a href="#">$ US Dollar</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> <!-- end of list-inline -->
                                        <div class="header-cart-area">
                                            <div class="header-cart">
                                                <div class="btn-group">
                                                    <button class="btn-link dropdown-toggle icon-cart">
                                                        <i class="pe-7s-cart"></i>
                                                        <span class="cart-text">My Cart</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <div class="shopping-cart-content">
                                                            <ul class="list-unstyled">
                                                                <li class="single-cart-item media">
                                                                    <div class="shopping-cart-img mr-4">
                                                                        <a href="#">
                                                                            <img class="img-fluid" alt="Cart Item" src="assets/images/cart/cart-1.jpg">
                                                                            <span class="product-quantity">1x</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="shopping-cart-title media-body">
                                                                        <h4><a href="#">Donec Ac Tempus</a></h4>
                                                                        <p class="cart-price">$120.00</p>
                                                                        <div class="product-attr">
                                                                            <span>Size: S</span>
                                                                            <span>Color: Black</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shopping-cart-delete">
                                                                        <a href="#"><i class="ion ion-md-close"></i></a>
                                                                    </div>
                                                                </li>
                                                                <li class="single-cart-item media">
                                                                    <div class="shopping-cart-img mr-4">
                                                                        <a href="#">
                                                                            <img class="img-fluid" alt="Cart Item" src="assets/images/cart/cart-2.jpg">
                                                                            <span class="product-quantity">2x</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="shopping-cart-title media-body">
                                                                        <h4><a href="#">Aliquam Consequat</a></h4>
                                                                        <p class="cart-price">$200.00</p>
                                                                        <div class="product-attr">
                                                                            <span>Color: White</span>
                                                                            <span>Accessories: Yes</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shopping-cart-delete">
                                                                        <a href="#"><i class="ion ion-md-close"></i></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="shopping-cart-total">
                                                                <h4>Sub-Total : <span>$320.00</span></h4>
                                                                <h4>Total : <span>$320.00</span></h4>
                                                            </div>
                                                            <div class="shopping-cart-btn">
                                                                <a class="default-btn" href="cart.html">view cart</a>
                                                                <a class="default-btn" href="checkout.html">checkout</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end of header-cart-area -->
                                    </div>
                                </div>
                            </div> <!-- end of header-right -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of header-area -->

            <!-- Start of Main and Mobile Navigation -->
            <div class="main-nav-area transparent-nav">
                <div class="container">
                    <nav id="main_nav" class="stellarnav">
                        <ul class="text-left">
                            <li><a href="index.php"><span>Home</span></a>
                               
                            </li>
                            <li class="mega" data-columns="3"><a href="my-account.php"><span>Pages</span></a>
                                <ul class="mega-container">
                                    <li><a href="my-account.php" class="mega-menu-title"><h3>Inner pages 01</h3></a>
                                        <ul>
                                            <li><a href="my-account.php">My Account</a></li>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="register.php">Register</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#" class="mega-menu-title"><h3>Inner pages 02</h3></a>
                                        <ul>
                                            <li><a href="cart.php">Cart Page</a><li>
                                            <li><a href="checkout.php">Checkout Page</a></li>
                                            <li><a href="wishlist.php">Wishlist Page</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#" class="mega-menu-title"><h3>Inner pages 03</h3></a>
                                        <ul>
                                            <li><a href="compare.php">Product Compare</a></li>
                                            <li><a href="faqs.php">FAQs Page</a></li>
                                            <li><a href="404.php">404 Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop-grid.php"><span>Shop Pages</span></a>
                                <ul>
                                    <li><a href="shop-grid.php">Shop Grid</a></li>
                                    <li><a href="shop-list.php">Shop List</a></li>
                                    <li><a href="shop-right-sidebar.php">Shop Right Sidebar</a></li>
                                    <li><a href="shop-fullwidth.php">Shop Full Width</a></li>
                                    <li><a href="single-product.php">Single Product Page</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.php"><span>Blog Pages</span></a>
                                <ul>
                                    <li><a href="blog.php">Blog FullWidth</a></li>
                                    <li><a href="blog-left-sidebar.php">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.php">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php"><span>About Us</span></a></li>
                            <li><a href="contact.php	"><span>Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div> <!-- end of container -->
            </div>
            <!-- End of Main and Mobile Navigation -->
        </header>
        <!-- End of Header -->

     
