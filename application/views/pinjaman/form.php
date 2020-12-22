<html>
	<head>
		<title>Master Data Pinjaman</title>
	</head>
	<!-- <center><h3><b>Master Data Produk</h3></b></center>
	<hr> -->
	<div class="x_panel">
 		<div class="x_title">
    	<h3 class="panel-title"><b>Form Pinjaman</b></h3>
  	</div>
  	 
  	<div class="x_content">
		<body>
			<form method = "POST" action = "<?php echo site_url('c_transaksi/simpan_pinjaman');?>">

				<div class="form-group">
				  <label>Kode Pinjaman</label>
				  <input type = "text" name = "kode_simpanan" class = "form-control" value="<?php echo $id?>" readonly>
				</div>

				<div class="form-group">
				  <label>Anggota</label>
				  <select name="peternak" class="form-control" id="anggota">
				  	<option value="" >Pilih Anggota</option>
				  	<?php foreach ($anggota as $data) { ?>
				  		<option value="<?= $data->no_peternak?>"><?= $data->nama_peternak?></option>
				  	<?php }?>
				  </select>
				  <?php echo form_error('simpanan'); ?>
				</div>

				<div class="form-group">
				  <label>Nominal pinjaman</label>
				  <input type = "number" min="0" name ="biaya" class = "form-control" id="biaya" placeholder="Isi pinjaman">
				  <?php echo form_error('biaya'); ?>
				</div>
				
				<hr>
				<button type="submit" id="btn-simpan" class="btn btn-default btn-primary">Simpan</button>

				<a href = "<?php echo site_url()."/c_masterdata/simpanan"?>" type="button" class="btn btn-default">Kembali</a>
			</form>
		</body>
	</div>
</html>

<script type="text/javascript">
	$("#biaya").prop("readonly", true);
	$("#btn-simpan").prop("disabled", true);

	$("#anggota").change(function () {

		var id_peternak = $("#anggota").val()
		$.ajax({
            url : "<?php echo site_url('c_transaksi/syarat');?>",
            method : "POST",
            data : {id_peternak: id_peternak},
            async : true,
            dataType : 'json',
            success: function(data){

            	// var anggota = data.no_peternak;
            	// var total_setor = data.total_setor;
            	if (data == null) {
            		$("#biaya").prop("readonly", true);
            		$("#btn-simpan").prop("disabled", true);
            	} else {
            		$("#biaya").prop("readonly", false);
            		$("#btn-simpan").prop("disabled", false);
            	}
            	console.log(data)
            }
        });
        return false;
	});
</script>