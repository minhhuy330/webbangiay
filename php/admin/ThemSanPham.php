<?php
include("header.php");
include("ketnoidb.php");
function message_box($title,$msgtype,$time)
{
	$rs="
	<script>
	alertify.notify('".$title."', '".$msgtype."', ".$time.");
	</script>";
	return $rs;
}
function to_slug($str) {
    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '-', $str);
    return $str;
}
if(isset($_POST['submit']))
{
	//Cho Bảng Product
	$product_name = trim($_POST['product_name']);
	$slug = to_slug($product_name);
	
	$image = $slug.".".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
	$target_dir = "upload/";//Đường dẩn đến thư mục uploads hình
	$file_tmp = $_FILES['image']['tmp_name'];
	$target_file = $target_dir.$image;//Thư mục + tên hình
	move_uploaded_file($file_tmp,$target_file);
	
	$quantity = trim($_POST['quantity']);
	$description = trim($_POST['description']);
	$price = trim($_POST['price']);
	$discount = trim($_POST['discount']);
	$id_type = trim($_POST['name_type']);
	
	$sql = "INSERT INTO `sanpham`(`Id`, `parentID`, `TenSP`, `IdLoaiSP`, `HinhAnh`, `SoLuong`, `Gia`, `Size`, `MoTa`, `GiamGia`, `TrangThai`, `SLUG`, `IdDacTinh`) VALUES ('$product_name','$slug','$image',$quantity,'$description',$price,$discount,$id_type)";
	
	$result = $conn->query($sql);
	if($result)
		echo message_box("Thêm Product Thành Công","success",2); 
	else
		echo message_box("Thêm Product Thất Bại","error",2);
	
	//Cho Bảng Image_Product
	$caulenh = "SELECT * FROM products";
	$kq = $conn->query($caulenh);
	$id_product = $kq->num_rows;
	$name_image = $_FILES['name_image']['name'];
	
	$file_tmp = $_FILES['name_image']['tmp_name'];
	for($i=0; $i<=count($file_tmp); $i++)
	{
		if(!empty($file_tmp[$i]))
		{	
			// $strlen = strlen($name);//Lấy độ dài của chuổi
			// $tenanh = substr( $name,  0,$strlen-4);//lấy chuổi từ vị trí này đến vị trí kia -4 là trừ cho .jpg
			// $slug = to_slug($name_image[$i]);
			$name=$slug."-".$i.".".pathinfo($name_image[$i], PATHINFO_EXTENSION);//Lấy tên của từng hình ảnh
			$tmp_name=$file_tmp[$i];
			
			
			$sql = "INSERT INTO `image_product`(`id_product`, `slug`, `name_image`) VALUES($id_product,'$slug','$name')";
			$rs= $conn->query($sql);
			
			$target_dir = "../upload/";//Đường dẩn đến thư mục uploads hình
			$target_file = $target_dir.$name;//Thư mục + tên hình
			if($rs)
			{
				echo message_box("Thêm Image Product Thành Công","success",2);
				if(move_uploaded_file($tmp_name,$target_file))//Di chuyển file hình
					echo message_box("Di Chuyển Ảnh Thành Công","success",2); 
				else
					echo message_box("Di Chuyển Ảnh Thất Bại","error",2);
			}
				 
			else
				echo message_box("Thêm Image Product Thất Bại","error",2);
		}
	}
}	


?>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="active"><a href="products.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></svg>  Product</a></li>
			
			<li><a href="listproduct.php"><svg class="glyph stroked line-graph"></svg> Danh Sách Sản Phẩm</a></li>
			<li><a href="LoaiSanPham.php"><svg class="glyph stroked line-graph"></svg> Danh Sách Loại Sản Phẩm</a></li>
			<li><a href="ThemSanPham.php"><svg class="glyph stroked line-graph"></svg> Thêm Sản Phẩm</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>
		<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
<div id="page-wrapper">

 <div class="row
                <div class="col-lg-3">
                    <h1 class="page-header">Add Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12" style="padding: inherit;">   
                    <div class="panel panel-default">
						<!-- /.panel-heading -->
						<div class="panel-body">
						  <div class="row">
                                <div class="col-lg-12">	

                                    <form enctype="multipart/form-data" method ="POST">
									 <div class="form-group">
                                            <label>Hình Ảnh Cha</label>
                                            <input  name="image" type="file">
                                        </div>
										<div class="form-group">
                                            <label>Hình Ảnh Con</label>
                                            <input  name="name_image[]" type="file" multiple="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Tên Sản Phẩm</label>
                                            <input name="product_name" class="form-control" placeholder="Nhập tên sản phẩm">
                                        </div>
										<div class="form-group">
											<label>Loại Sản Phẩm</label>  
											<select class="form-control" name="name_type">
												<?php
													$truyvan = "SELECT * FROM loaisanpham";
													$rs = $conn->query($truyvan);
													if($rs->num_rows > 0)
													{
														while($row=$rs->fetch_assoc())
														{?>
															<option value="<?php=$row['id']?>"><?php=$row['type_name']?></option>
														<?php
														}
													}
												?>
											</select>
                                        </div>
                                       
										<div class="form-group">
                                            <label>Số Lượng</label>
                                            <input  name="quantity" class="form-control" placeholder="Nhập số lượng">
                                        </div>
										<div class="form-group">
                                            <label>Giá</label>
                                            <input name="price" class="form-control" placeholder="Nhập giá">
                                        </div>
										<div class="form-group">
                                            <label>Giảm Giá</label>
                                            <input name="discount" class="form-control" placeholder="Nhập giảm giá">
                                        </div>
                                        <div class="form-group">
                                            <label>Mô Tả</label>
                                            <textarea name="description"  class="form-control"  placeholder="Nhập mô tả" id="description" rows="10" cols="150"></textarea>
											<script>
												// Thay thế <textarea id="description"> với CKEditor
												CKEDITOR.replace( 'description',{uiColor: '#337abd'});// tham số là biến name của textarea
											</script>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-success" value="Submit"/>
                                    </form> 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
								</tbody>
							</table>		
							</div>
							<!-- /.table-responsive -->
						</div>
						<!-- /.panel-body -->
						</div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->All Type Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
