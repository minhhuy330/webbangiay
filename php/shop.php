<div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-md-2 order-lg-1">
                            <aside id="secondary" class="widget-area">
                                <div class="sidebar-widget price-filter-widget">
                                    <h2 class="widgettitle">Price</h2>
                                    <div class="filter-price-content">
                                        <form action="#" method="post">
                                            <div id="price_slider" class="price-slider"></div>
                                            <div class="filter-price-wrapper">
                                                <div class="filter-content">
                                                    <div class="input-type">
                                                        <input type="text" id="min_price" readonly=""/>
                                                    </div>
                                                    <span>—</span>
                                                    <div class="input-type">
                                                        <input type="text" id="max_price" readonly=""/>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>  
                                    </div>
                                </div> <!-- end of sidebar-widget -->

                                <div class="sidebar-widget list-widget">
                                    <h2 class="widgettitle">Category</h2>
									
                                    <div class="list-widget-wrapper">
									
								<?php 
									include("ketnoidb.php");
									$sql="Select * from loaisanpham";
									$result =$conn->query($sql);
									if($result->num_rows>0)
									{
										while($rows=$result->fetch_assoc())
										{
								?>
                                        <div class="list-group">
                                            <a href="#"><?=$rows["TenLoai"]?></a>
                                            
                                        </div>
											<?php
									}
									}?>
                                    </div>
								
                                </div> <!-- end of sidebar-widget -->
										

                               
                                <div class="sidebar-widget banner">
                                    <div class="promo-banner hover-effect-1 mb0">
                                        <a href="#">
                                            <img src="assets/images/banners/banner-5.jpg" alt="Promo Banner">
                                        </a>
                                    </div>
                                </div> <!-- end of sidebar-widget -->
                            </aside> <!-- end of #secondary -->
                        </div>