<html>
	<!-- <head><center><h3><b>Master Data Bahan Baku</b></h3></center></head>
	<hr> -->
	<body>
		<div class="x_panel">
 	<div class="x_title">
    	<h3 class="panel-title"><b>Daftar peminjam</b></h3>
  	</div>
  	
  	<div class="x_content">
  	 	<a href = "<?php echo site_url()."c_transaksi/form_pinjaman"?>" class="btn btn-info" role="button"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>

  	 	 <table id="datatable" class="table table-striped table-bordered table-hover jambo_table">
		 	<thead>
				<tr class="headings">
					<th style="width: 2px;">No</th>
					<th>Nama Peminjam</th>
					<th>Simpanan</th>
					<th>Biaya</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<?php $no = 1;?>
			<tbody>
			</tbody>
		</table>
	</body>
</html>