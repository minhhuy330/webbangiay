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
                            <span class="breadcrumb-item active">Contact Us</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper page-about">
            
            <!-- Start of Contact Section -->
            <section class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div id="map_location" class="map-location">
                                <div id="map">
                                    <div id="gmap-wrap">
                                        <div id="gmap">
                                        </div>
                                    </div>
                                </div> <!-- end of #map -->
                            </div> <!-- end of #map_location -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="contact-form-wrapper">
                                <div class="section-title left-aligned with-border">
                                    <h2>get In Touch</h2>
                                </div>
                                <form id="contact-form" action="http://d29u17ylf1ylz9.cloudfront.net/ororus-v1/sendemail.php" method="post">
                                    <div class="form-row mb-2">
                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                            <input type="text" name="name" class="form-control" id="com-name" placeholder="Your Name *" required>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                            <input type="email" name="email" class="form-control" id="com-email" placeholder="Your Email *" required>
                                        </div>
                                    </div>
                                    <div class="form-row mb-2">
                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject">
                                        </div>
                                    </div>
                                    <div class="form-row mb-2">
                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                            <textarea id="comment" placeholder="Type Your Message....." name="message" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <button name="send_message" type="submit" class="btn btn-secondary">Send Your Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end of contact-form-wrapper -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Contact Section -->

            <!-- Start of Team Section -->
            <section class="team-section pt-full pb-half bgc-offset">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="ion ion-md-locate"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Our Location</h4>
                                    <p>123 North Avenue, Santa Rosa</p>
                                    <p>California</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="ion ion-ios-call"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Contact Us Anytime</h4>
                                    <p>Mobile: <a href="#">(+1) 800 555 888</a></p>
                                    <p>Fax: (+1) 800 666 999</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="ion ion-md-mail-open"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Write Some Words</h4>
                                    <p><a href="#">support24/7@example.com</a></p>
                                    <p><a href="#">contact@example.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Team Section -->

            <!-- Start of Client Section -->
            <div class="client-section mb-full">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="client-carousel">

                                <!-- Slides -->
                                <div class="swiper-wrapper">
                                    <div class="item-brand swiper-slide">
                                        <img src="assets/images/brand/client-logo-1.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="assets/images/brand/client-logo-2.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="assets/images/brand/client-logo-3.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="assets/images/brand/client-logo-4.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="assets/images/brand/client-logo-5.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="assets/images/brand/client-logo-6.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="assets/images/brand/client-logo-7.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="assets/images/brand/client-logo-8.jpg" alt="Client Logo">
                                    </div>
                                </div>
                            </div> <!-- end of client-carousel -->
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Client Section -->
	<?php
		include("newletter.php");
	?>
</main>	
<?php
include("footer.php");
?>