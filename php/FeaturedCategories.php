<!-- Start of Featured Category -->
            <section class="feature-category mt-full">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="section-title left-aligned with-border">
                                <h2>Featured Categories</h2>
                            </div>
                        </div>
                    </div> <!-- end of row -->

                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="featured-category-wrapper pos-r">
                                <div class="categories-carousel product-carousel" data-visible-slide="3" data-loop="false" data-speed="1000">

                                    <!-- Slides -->
																
                                    <div class="swiper-wrapper">
										<?php
										include("ketnoidb.php");
										$sqls="SELECT * FROM sanpham,loaisanpham where loaisanpham.IdLoai=sanpham.IdLoaiSP and parentID=0";								
										$results=$conn->query($sqls);
										if($results->num_rows >0)							
										//fetch_assoc là lấy dữ liêu trả về 1 mảng associate có key, value
											while($rows = $results ->fetch_assoc())
											{
												//lấy id của từng danh muc 
												$id =$rows["IdLoai"];
												$cadl="select count(*) as soluong from sanpham where IdLoaiSP in (select IdLoai from loaisanpham where IdLoai='$id')";
												$kq=$conn->query($cadl);
												 $dong=$kq->fetch_assoc()
												 
										?>
										<div class="swiper-slide">

												<div class="single-category-2 media align-items-center">
													<div class="media-image mr-xl-3">
														<a href="#"><img src="Image/<?=$rows["HinhAnh"]?>" alt= "Category Image"></a>
													</div>
													<div class="media-body">
														<h2><a href="#"><?=$rows["TenLoai"]?> </a><span>(<?=$dong['soluong']?>)</span></h2>
														<ul class="sub-featured-categories list-unstyled">
															<?php
															getTenSP($rows["Id"]);
															?>
														</ul>
														<a href="#" class="view-more">See More</a>
													</div>
												</div> <!-- end of single-category -->
										</DIV>
										<?php
												
											}
										?>
									</div>
										
								<?php
									function getTenSP($Id)
									{
											include("ketnoidb.php");
											$sql="SELECT * FROM sanpham,loaisanpham where IdLoai=IdLoaiSP and parentID = ".$Id." Limit 0,3";
											$result=$conn->query($sql);
											if($result->num_rows>0)
												while($rows=$result->fetch_assoc())
												{
													//$id =$rows["IdL oai"];
													//$truyvan="Select count(*) as s1 from sanpham where parentID = ".$Id."";
													//$row=$conn->query($truyvan);
													//$re=$row->fetch_assoc();
													
									?>
									
													
													 <h2><a href="#"><?=$rows["TenSP"]?> </h2>
													 <?php
													 getTenSP($rows['Id']);
													 ?>
									<?php
												}
									}
									?>
                                    <!-- Navigation -->
                                    <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of categories-carousel -->
                            </div> <!-- end of featured-category-wrapper -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>