<!-- Start of Banner Section -->
            <div class="banner-section mb-half">
                <div class="container">
                    <div class="row">
					<?php
							include("ketnoidb.php");
							$sql="SELECT * from banner";								
							$result=$conn->query($sql);
							if($result->num_rows >0)							
							//fetch_assoc là lấy dữ liêu trả về 1 mảng associate có key, value
								while($rows = $result ->fetch_assoc()){
							
							?>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="promo-banner hover-effect-1">
                                <a href="#">
                                    <img src="Image/banner/<?=$rows["DuongDan"]?>"" alt="Promo Banner">
                                </a>
                            </div> <!-- end of promo-banner -->
                        </div>
                       <?php
								}
								?>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Banner Section -->