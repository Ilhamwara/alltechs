<?php 

include 'php/control/koneksi.php';
$page = $_GET['page'];

if ($page == 'member') {
	?>
	<div class="container-fluid">
		<div class="widget-box">			
			<h3 style="padding: 10px;"><b>Member</b></h3>
			<br>			
			<div class="widget-content">
				<table class="table table-hover">
					<tr>
						<th>No</th>								
						<th>Nama</th>
						<th>Username</th>								
						<th>Alamat</th>
						<th>Phone</th>
						<th>E-mail</th>																
					</tr>

					<!-- DATA KOSONG -->
					<?php 
					$per_page = 100;

					$page_query = mysql_query("SELECT COUNT(*) FROM barang");
					$pages = ceil(mysql_result($page_query, 0) / $per_page);

					$hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
					$start = ($hal - 1) * $per_page;

							// $show = mysql_query("SELECT * FROM pemesanan LIMIT $start, $per_page");
					$show = mysql_query("SELECT * FROM member LIMIT $start, $per_page");

					$row = mysql_num_rows($show);
					if ($row == 0) {
						?>						
						<tr>
							<td colspan="7" class="bg-red"><b>DATA KOSONG</b></td>
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
								<td style="text-align:center;"><?php echo $cek['nama']; ?></td>
								<td style="text-align:center;"><?php echo $cek['username']; ?></td>
								<td style="text-align:center;"><?php echo $cek['alamat']; ?></td>
								<td style="text-align:center;"><?php echo $cek['phone']; ?></td>
								<td style="text-align:center;"><?php echo $cek['email']; ?></td>	
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
	?>