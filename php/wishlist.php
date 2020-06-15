<?php include("header.php");
 
?>
        <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Breadcrumbs -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <a class="breadcrumb-item" href="shop-grid.html">Shop</a>
                            <span class="breadcrumb-item active">Wishlist</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->
            <!-- Start of Wishlist Wrapper -->
            <div class="wishlist-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="wishlist">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title left-aligned with-border">
                                                <h2>Wishlist</h2>
                                            </div>

                                            <form action="#">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <td>Image</td>
                                                                <td>Product Name</td>
                                                                <td>Model</td>
                                                                <td>Stock</td>
                                                                <td>Unit Price</td>
                                                                <td>Action</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <a href="single-product.html"><img src="assets/images/products/best/products-1-1.jpg" alt="Wishlist Product Image" title="Cas Meque Metus"></a>
                                                                </td>
                                                                <td>
                                                                    <a href="single-product.html">Cas Meque Metus</a>
                                                                </td>
                                                                <td>3</td>
                                                                <td>In Stock</td>
                                                                <td>
                                                                    <div class="price"><strong>$100.00</strong> <small><s>$430.00</s></small></div>
                                                                </td>
                                                                <td>
                                                                    <button type="button" data-toggle="tooltip" class="btn btn-primary" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                                                                    <a href="#" data-toggle="tooltip" class="btn btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="single-product.html"><img src="assets/images/products/best/products-6-1.jpg" alt="Wishlist Product Image" title="Proin Lectus Ipsum"></a>
                                                                </td>
                                                                <td>
                                                                    <a href="single-product.html">Proin Lectus Ipsum</a>
                                                                </td>
                                                                <td>3</td>
                                                                <td>In Stock</td>
                                                                <td>
                                                                    <div class="price"><strong>$180.00</strong> <small><s>$440.00</s></small></div>
                                                                </td>
                                                                <td>
                                                                    <button type="button" data-toggle="tooltip" class="btn btn-primary" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                                                                    <a href="#" data-toggle="tooltip" class="btn btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="single-product.html"><img src="assets/images/products/best/products-8-2.jpg" alt="Wishlist Product Image" title="Aliquam Consequat"></a>
                                                                </td>
                                                                <td>
                                                                    <a href="single-product.html">Aliquam Consequat</a>
                                                                </td>
                                                                <td>3</td>
                                                                <td>In Stock</td>
                                                                <td>
                                                                    <div class="price">$200.00</div>
                                                                </td>
                                                                <td>
                                                                    <button type="button" data-toggle="tooltip" class="btn btn-primary" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                                                                    <a href="#" data-toggle="tooltip" class="btn btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>

                                            <div class="cart-button-wrapper d-flex justify-content-end mt-4">
                                                <a href="cart.html" class="btn btn-secondary align-self-end">Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of wishlist -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Wishlist Wrapper -->
	
	<?php
	include("newletter.php");
	?>
</div>
        <!-- End of Main Content Wrapper -->	
<?php
include("footer.php");
?>