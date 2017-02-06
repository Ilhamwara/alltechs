		<style type="text/css">
			.width50{
				width: 50%;
			}
		</style>
		<?php 

		include 'php/control/koneksi.php';
		$page = $_GET['page'];

		if ($page == 'stok-barang') {
			?>
			<div class="container-fluid">
				<div class="widget-box">			
					<h3 style="padding: 10px;"><b>Stock Barang</b></h3>
					<div class="widget-content">
						<a href="main.php?page=tambah-barang" class="btn btn-primary" data-toggle="tooltip" title="Add Product"><i class="fa fa-cart-plus"></i></a>
						<br><br>
						<table class="table table-hover" style="text-align:center;">					
							<tr>
								<th>No</th>								
								<th>Nama</th>
								<th>Kategori</th>								
								<th>Tersedia</th>
								<th>Deskripsi</th>
								<th>Harga</th>
								<th>Foto</th>															
								<th style="text-align:center; width: 20%;">Action</th>
							</tr>

							<!-- DATA KOSONG -->
							<?php 
							$per_page = 100;

							$page_query = mysql_query("SELECT COUNT(*) FROM barang");
							$pages = ceil(mysql_result($page_query, 0) / $per_page);

							$hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
							$start = ($hal - 1) * $per_page;

							// $show = mysql_query("SELECT * FROM pemesanan LIMIT $start, $per_page");
							$show = mysql_query("SELECT * FROM barang ORDER BY tanggal DESC LIMIT $start, $per_page");

							$row = mysql_num_rows($show);
							if ($row == 0) {
								?>						
								<tr>
									<td colspan="8" class="bg-red"><b>DATA KOSONG</b></td>
								</tr>
								<?php } ?>
								<!-- DATA KOSONG -->

								<!-- SHOW DATA -->

								<?php 
								$no=1;
								while ($cek = mysql_fetch_array($show)) { 
									?>
									<tr>
										<td style="text-align:center;"><b><?php echo $no; ?></b></td>
										<td style="text-align:center;"><?php echo $cek['nama_barang']; ?></td>
										<td style="text-align:center;"><?php echo $cek['kategori']; ?></td>
										<td style="text-align:center;">
											<?php
											if ($cek['total'] <= 0) { ?>
											<div class="btn btn-danger">
												Stock Barang Habis
											</div>
											<?php
										}
										else{ 
											echo $cek['total'];
										}
										?>	
									</td>
									<td style="text-align:center;"><?php echo $cek['deskripsi']; ?></td>
									<td style="text-align:center;"><?php echo $cek['harga']; ?></td>
									<td style="text-align:center;"><img src="../img/produk/<?php echo $cek['foto']; ?>" width="120" height="120" /></td>
									<td style="text-align:center;">										
										<a href="main.php?page=update-barang&&key=<?php echo $cek['id']; ?>" class="btn btn-warning" data-toggle="tooltip" title="Update"><i class="fa fa-pencil-square-o"></i></a> 
										<a onclick="return confirm('Apa Anda yakin ingin menghapus barang ini ?');" href="php/control/delete.php?page=delete-barang&&key=<?php echo $cek['id']; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>									
									</td>
								</tr>
								<?php 
								$no++;
							} 

							?>
							<!-- SHOW DATA -->
						</table>		
						<div class="pagination alternate" style="text-align:center;">
							<ul class="pagination">
								<?php
								if($pages >= 1 && $hal <= $pages)
								{
									for($x=1; $x<=$pages; $x++)
									{
                                          //echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
										if($x == $hal){
											echo '  <li class="active"><a href="?page=stok-barang&&hal='.$x.'">'.$x.'</a></li> ';
										}
										else{
											echo ' <li><a href="?page=stok-barang&&hal='.$x.'">'.$x.'</a></li>';
										}
									}
								}
								?>
							</ul>
						</div> 
					</div>
				</div>
			</div>
			<?php
		}
		elseif (($page == 'tambah-barang')) { 
			?>
			<div class="container-fluid">
				<div class="widget-box">			
					<h3 style="padding: 10px;"><b>Stock Barang</b></h3>
					<br>
					<div class="widget-content">					
						<form class="form-horizontal" action="php/control/control.php?page=tambah-barang" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-2 control-label">Nama Barang</label>
								<div class="controls">
									<input type="text" class="form-control width50" placeholder="Nama Barang" name="nama" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Kategori</label>
								<div class="controls">
									<select class="form-control width50" name="kategori" required>
										<option>-- Pilih Kategori --</option>
										<option value="Access-Control">Access Control</option>
										<option value="auto-attendant">Auto Attendant</option>
										<option value="facsimile">Facsimile</option>
										<option value="telephone">Telephone System</option>
										<option value="cctv">CCTV</option>											
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Quantity</label>
								<div class="controls">
									<input type="number" class="form-control width50" name="qty" required> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Harga</label>
								<div class="controls">
									<input type="text" class="form-control width50" name="harga" required> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Deskripsi Barang</label>
								<div class="controls">
									<textarea  class="form-control width50" name="desk" required></textarea> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Foto</label>
								<div class="controls">
									<input type="file" class="form-control width50" name="foto" required style="padding: 0px;"> <br>
									<span style="color: red;">Foto ukuran 400 x 400</span>
								</div>
							</div>
							<div class="form-group">
								<div class="controls">
									<button class="btn btn-primary">Tambah</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php 
		}
		elseif (($page == 'update-barang')) { 
			if(isset($_GET['key'])){
				$id = $_GET['key'];
				$query = mysql_query("SELECT * FROM barang WHERE id = $id");
				$cek = mysql_fetch_array($query);
				?>
				<div class="container-fluid">
					<div class="widget-box">			
						<h3 style="padding: 10px;"><b>Stock Barang</b></h3>
						<br>
						<div class="widget-content">					
							<form class="form-horizontal" action="php/control/control.php?page=update-barang&&key=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-2 control-label">Nama Barang</label>
									<div class="controls">
										<input type="text" class="form-control width50" value="<?php  echo $cek['nama_barang']; ?>" name="nama">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Kategori</label>
									<div class="controls">
										<select class="form-control width50" name="kategori">
											<option value="<?php echo $cek['kategori']; ?>">-- Pilih Kategori --</option>
											<option value="Access-Control">Access Control</option>
											<option value="auto-attendant">Auto Attendant</option>
											<option value="facsimile">Facsimile</option>
											<option value="telephone">Telephone System</option>
											<option value="cctv">CCTV</option>	
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Quantity</label>
									<div class="controls">
										<input type="number" class="form-control width50" value="<?php echo $cek['total']; ?>" name="qty"> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Harga</label>
									<div class="controls">
										<input type="text" class="form-control width50" value="<?php echo $cek['harga']; ?>" name="harga"> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Deskripsi Barang</label>
									<div class="controls">
										<textarea  class="form-control width50" value="<?php echo $cek['deskripsi']; ?>" name="desk"></textarea> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Foto</label>
									<div class="controls">
										<input type="file" class="form-control width50" value="<?php echo $cek['foto']; ?>" name="foto"> 
									</div>
								</div>
								<div class="form-group">
									<div class="controls">
										<button class="btn btn-primary">Update</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<?php
			}
		}
		?>