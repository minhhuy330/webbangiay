<?php
session_start(); 
include("header.php");

//Xữ lí giỏ hàng
//Kiểm tra sản phẩm có trong giỏ hàng chưa ?
$giohang = array();
if(isset($_SESSION['giohang']))
{
    $giohang = $_SESSION['giohang'];
}
if(isset($_GET['thaotac'])&&isset($_GET['slug']))//Thêm sản phẩm vào giỏ hàng
{
    //Nếu sản phẩm đã có trong giỏ hàng thì số lượng sẽ tăng lên một khi thêm sản phẩm ở lần tiếp theo
    $slug = $_GET['slug'];
	
    if($_GET['thaotac']=='them')
    {
		
        for($i=0;$i<count($giohang);$i++)
        {
            if($giohang[$i]['SLUG'] == $slug)
            {
                $giohang[$i]["SoLuong"]++;//tăng lên 1
                break;
            }
        }
        //Nếu sản phẩm chưa có trong giỏ hàng --> thêm vào  
        if($i==count($giohang))
        {
             //Lấy thông tin của sản phẩm
            $sql= "SELECT * FROM sanpham WHERE SLUG='$slug'";//phải để dấu 2 nháy
            $result  = $conn->query($sql);
            if($result->num_rows > 0)
            {
                $sanpham=$result->fetch_assoc();//lấy tất cả thông tin của sản phẩm
                $sanpham["SoLuong"] = 1;//mới thêm thì số lượng = 1
                //thêm vào giỏ hàng
                $giohang[] = $sanpham;
            }
        }
		$_SESSION['giohang']=$giohang;
    }
    else
    {
        if($_GET['thaotac']=='xoa')
        {
           //Xóa sản phẩm trong giỏ hàng
            for($i=0;$i<count($giohang);$i++)
            {
                if($giohang[$i]['slug'] == $slug)
                {
                    array_splice($giohang,$i,1);//Hàm số phần tử tại vị trí thứ i trong mảng
                    //Tham số thứ 3 là số lượng phần tử cần xóa 
                    break;
                }
            }
        } 
    }
    //cập nhật giỏ hàng vào session
    $_SESSION['giohang']=$giohang;
}

//Xử lí cập nhật giỏ hàng
if(isset($_POST['SoLuong'])&&isset($_POST['slug']))
{
    $quantity_new = $_POST['SoLuong'];
    $slug_new = $_POST['SLUG'];
    for($i=0;$i<count($giohang);$i++)
    {
        $giohang[$i]["SoLuong"] = $quantity_new[$i];
    }
     //cập nhật giỏ hàng vào session
    $_SESSION['giohang']=$giohang;
}
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
                            <span class="breadcrumb-item active">Shopping Cart</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Shopping Cart Wrapper -->
            <div class="shopping-cart-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="shopping-cart">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title left-aligned with-border">
                                                <h2>Shopping Cart</h2>
                                            </div>

                                            <form action="#">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <td>Image</td>
                                                                <td>Product Name</td>
                                                                <td>Model</td>
                                                                <td>Quantity</td>
                                                                <td>Unit Price</td>
                                                                <td>Total</td>
                                                            </tr>
                                                        </thead>
														 <?php
																   if(empty($giohang))
																	{
																		echo '
																		<p style="color:red;font-size:20px">Giỏ hàng trống 
																		<a href="products.php" style="text-decoration: underline;color: #000;
																			font-size: 15px;">Mua hàng ở đây</a></p>  
																		';
																	}
																	$tongtien = 0;
																  //Hiện các sản phẩm trong giỏ hàng
																  foreach ($giohang as $sp)
																	{    
																		$tien = $sp['SoLuong']*$sp['Gia'];
																		$tongtien += $tien;            
																  ?>
																	<tbody>
																		<tr>
																			<td>
																				<a href="Single-product.php"><img src="Image/<?=$sp['HinhAnh']?> "alt="Cart Product Image" title="Cas Meque Metus" class="img-thumbnail"></a>
																			</td>
																			<td>
																				<a href="Single-product.php"><?php echo $sp['TenSP']?> </a>
																			
																			</td>
																			<td><?php echo $sp['Size']?></td>
																			<td>
																				<div class="input-group btn-block">
																					<input type="text" name="SoLuong[]" value="<?php echo $sp['SoLuong']?> " size="1" class="form-control">
																					<span class="input-group-btn">
																						<button type="submit" data-toggle="tooltip" data-direction="top" class="btn btn-primary" data-original-title="Update" ><i class="fa fa-refresh" ></i></button>
																						<button type="button" data-toggle="tooltip" data-direction="top" class="btn btn-danger pull-right" data-original-title="Remove" ><i class="fa fa-times-circle" ></i><a href="Cart.php?thaotac=xoa&slug=<?php echo $sp['slug']?>"></a> </button>
																					</span>
																				</div>
																			</td>
																			<td><?php echo $sp['Gia']?> </td>
																			<td><?php echo $sp['GiamGia']?> </td>
																		</tr>
																	</tbody>
															  <?php
																}
																?>
                                                    </table>
                                                </div>
                                            </form>

                                            <div class="cart-accordion-wrapper mt-full">
                                                <h2>What would you like to do next?</h2>
                                                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                                                <div id="cart_accordion" class="mt-4" role="tablist">
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingCoupon">
                                                            <h4 class="mb-0">
                                                                <a data-toggle="collapse" href="#collapseCoupon" aria-expanded="false" aria-controls="collapseCoupon">Use Coupon Code<i class="ion ion-ios-arrow-down"></i></a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseCoupon" class="collapse" role="tabpanel" aria-labelledby="headingCoupon" data-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <div class="input-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-coupon">Enter your coupon here</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <div class="input-group">
                                                                        <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
                                                                        <input type="button" value="Apply Coupon" id="button-coupon" class="btn btn-secondary">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingTax">
                                                            <h4 class="mb-0">
                                                                <a class="collapsed" data-toggle="collapse" href="#collapseTax" aria-expanded="false" aria-controls="collapseTax">Estimate Shipping &amp; Taxes<i class="ion ion-ios-arrow-down"></i></a>
                                                              </h4>
                                                        </div>
                                                        <div id="collapseTax" class="collapse" role="tabpanel" aria-labelledby="headingTax" data-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <p>Enter your destination to get a shipping estimate.</p>
                                                                <div class="input-group form-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-country"><span class="text-danger">*</span> Country</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <select name="country_id" id="input-country" class="form-control nice-select">
                                                                            <option value=""> --- Please Select --- </option>
                                                                            <option value="">Argentina</option>
                                                                            <option value="">Bangladesh</option>
                                                                            <option value="">Belgium</option>
                                                                            <option value="">Brazil</option>
                                                                            <option value="">Germany</option>
                                                                            <option value="">India</option>
                                                                            <option value="">United Kingdom</option>
                                                                            <option value="">United States</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group form-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-zone"><span class="text-danger">*</span> Region / State</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <select name="zone_id" id="input-zone" class="form-control nice-select">
                                                                            <option value=""> --- Please Select --- </option>
                                                                            <option value="">Alabama</option>
                                                                            <option value="">Arizona</option>
                                                                            <option value="">California</option>
                                                                            <option value="">Florida</option>
                                                                            <option value="">Newyork</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group form-group mb-5">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-postcode"><span class="text-danger">*</span> Post Code</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control mb-0">
                                                                    </div>
                                                                </div>
                                                                <button type="button" id="button-quote" class="btn btn-secondary">Get Quotes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingGift">
                                                            <h4 class="mb-0">
                                                                <a class="collapsed" data-toggle="collapse" href="#collapseGift" aria-expanded="false" aria-controls="collapseGift">Use Gift Certificate<i class="ion ion-ios-arrow-down"></i></a>
                                                              </h4>
                                                        </div>
                                                        <div id="collapseGift" class="collapse" role="tabpanel" aria-labelledby="headingGift" data-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <div class="input-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-voucher">Enter your gift certificate code here</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <div class="input-group">
                                                                            <input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
                                                                            <input type="button" value="Apply Gift Certificate" id="button-boucher" class="btn btn-secondary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="cart-amount-wrapper">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-4 offset-md-8">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>Sub-Total:</strong></td>
                                                                    <td><?php echo $sp['Gia']?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Total:</strong></td>
                                                                    <td><span class="primary-color">$<?php echo $tien?></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                                <a href="shop-list.html" class="btn btn-secondary">Continue Shopping</a>
                                                <a href="checkout.html" class="btn btn-secondary align-self-end">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of shopping-cart -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Shopping Cart Wrapper -->
	<?php
	include("newletter.php");
	?>
</main>	
<?php
include("footer.php");
?> 