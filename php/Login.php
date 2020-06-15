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
                            <span class="breadcrumb-item active">Login</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Login Wrapper -->
            <div class="login-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="user-login">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="section-title left-aligned with-border">
                                                <h2>Log in to your account</h2>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 offset-lg-2 offset-xl-3">
                                            <div class="login-form mt-half">
                                                <form action="Test-login.php" method="POST">
                                                    <div class="form-group row align-items-center mb-4">
                                                        <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email address</label>
                                                        <div class="col-12 col-sm-12 col-md-8">
                                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-4">
                                                        <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">Password</label>
                                                        <div class="col-12 col-sm-12 col-md-8">
                                                 <input name="c-password" type="password" class="form-control"  id="c-password" placeholder="Password" required>
                                                            <button class="pass-show-btn" type="button">Show</button>
                                                        </div>
                                                    </div>
                                                    <div class="login-box mt-5 text-center">
                                                        <p><a href="#">Forgot your password?</a></p>
                                                        <button type="btn_submit" name="btn_submit" class="default-btn tiny-btn mt-4">Sign In</button>
                                                    </div>
                                                    <div class="text-center mt-half pt-half top-bordered">
                                                        <p>No account? <a href="register.php">Create one here</a>.</p>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of user-login -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
          <!-- nd of Login Wrapper -->
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