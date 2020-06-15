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
                            <span class="breadcrumb-item active">Register</span>
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
                                                <h2>Create an Account</h2>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
                                            <div class="registration-form login-form mt-half">
                                                <form action="#">
                                                    <div class="login-info mb-half">
                                                        <p>Already have an account? <a href="login.html">Log in instead!</a></p>
                                                    </div>
                                                    <div class="form-group row align-items-center">
                                                        <label class="col-12 col-sm-12 col-md-4 col-form-label">Title</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="form-row">
                                                                <div class="col-6 col-sm-3">
                                                                    <div class="custom-radio">
                                                                        <input class="form-check-input" type="radio" name="gender" id="male">
                                                                        <span class="checkmark"></span>
                                                                        <label class="form-check-label" for="male">Mr.</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-3">
                                                                    <div class="custom-radio">
                                                                        <input class="form-check-input" type="radio" name="gender" id="female">
                                                                        <span class="checkmark"></span>
                                                                        <label class="form-check-label" for="female">Mrs.</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="f-name" class="col-12 col-sm-12 col-md-4 col-form-label">First Name</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="text" class="form-control" id="f-name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="l-name" class="col-12 col-sm-12 col-md-4 col-form-label">Last Name</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="text" class="form-control" id="l-name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email Address</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="text" class="form-control" id="email" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputpassword" class="col-12 col-sm-12 col-md-4 col-form-label">Current Password</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="password" class="form-control" id="inputpassword" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="newpassword" class="col-12 col-sm-12 col-md-4 col-form-label">New Password</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="password" class="form-control" id="newpassword" required="">
                                                            <button class="pass-show-btn" type="button">Show</button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">Confirm Password</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="password" class="form-control" id="c-password" required="">
                                                            <button class="pass-show-btn" type="button">Show</button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="birth" class="col-12 col-sm-12 col-md-4 col-form-label">Birthdate (Optional)</label>
                                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                            <input type="text" class="form-control" id="birth" placeholder="MM / DD / YYYY" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-check row p-0 mt-5">
                                                        <div class="col-12 col-sm-12 col-md-8 offset-md-4 col-lg-6 offset-lg-4">
                                                            <div class="custom-checkbox">
                                                                <input class="form-check-input" type="checkbox" id="offer">
                                                                <span class="checkmark"></span>
                                                                <label class="form-check-label" for="offer">Receive offers from our partners</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-check row p-0 mt-4">
                                                        <div class="col-12 col-sm-12 col-md-8 offset-md-4 col-lg-8 offset-lg-4">
                                                            <div class="custom-checkbox">
                                                                <input class="form-check-input" type="checkbox" id="subscribe" required="">
                                                                <span class="checkmark"></span>
                                                                <label class="form-check-label" for="subscribe">Sign up for our newsletter<br>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers..</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="register-box d-flex justify-content-end mt-half">
                                                        <button type="submit" class="default-btn tiny-btn">Register</button>
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
            <!-- End of Login Wrapper -->

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
        <!-- End of Main Content Wrapper -->
</main>	
<?php
include("footer.php");
?>