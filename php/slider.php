 <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->
 <!-- Start of Primary Slider Section -->
        <section class="primary-slider-section mt-half mb0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div id="primary_slider" class="swiper-container slider-4">

                            <!-- Slides -->							
                            <div class="swiper-wrapper">
							<?php
							include("ketnoidb.php");
							$sql="SELECT * from slidehinh";								
							$result=$conn->query($sql);
							if($result->num_rows >0)							
							//fetch_assoc là lấy dữ liêu trả về 1 mảng associate có key, value
								while($rows = $result ->fetch_assoc()){
							
							?>
                                <div class="swiper-slide bg-img-wrapper">
                                    <div class="slide-inner image-placeholder">
                                        <img src="Image/slide/<?=$rows["DuongDan"]?>" class="visually-hidden" alt="Slider Image">                          
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="slide-content layer-animation-1">
                                                        <h1>Bower & Wilkins PX Headphones</h1>
                                                        <h2>At a price</h2>                                                        
                                                        <p>$199</p>
                                                        <div class="slide-button">
                                                            <a class="default-btn transparent" href="shop-grid.html" title="Shop Now">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php
								}
							?>
                            </div>
							

                            <!-- Slider Navigation -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of Primary Slider Section -->