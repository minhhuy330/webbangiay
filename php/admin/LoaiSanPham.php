<?php
include("header.php");
include("ketnoidb.php");
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
                    <h1 class="page-header">All Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12" style="padding: inherit;">   
                    <div class="panel panel-default">
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="table-responsive">
							<table id="table_id" class="display">
								<thead>
									<tr>
										<th>Tên Loại Sản Phẩm</th>
										<!--<th>Trạng Thái</th>--->
										<th>Sửa</th>
										<th>Xóa</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$sql = "SELECT * FROM loaisanpham ";
										$result = $conn->query($sql);
										if($result->num_rows > 0)
										{
											while($rows = $result->fetch_assoc())
											{?>
												<tr>
													<td><?=$rows['TenLoai']?></td>
													
												</td>
													
													</td>
													<td><a href="editproduct.php?id_product=<?=$rows['IdLoai']?>" class='status bg-blue'><i class="fa fa-edit white"></i></a></td>
													<td><a href="#" class='status bg-red'><i class="fa fa-trash white"></i></a></td>
												</tr>
											<?php
											}
										}
									?>								
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
