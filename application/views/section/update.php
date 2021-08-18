<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card my-4">
				<div class="card-header"> <b>Ubah Data Produk</b> </div>
				<?php if (validation_errors()) : ?>
					<div class="alert alert-danger" role="alert"><br>
						<?= validation_errors(); ?>
					</div>
				<?php endif; ?>
				<div class="card-body">
					<form class="" action="" method="post">
						<div class="form-group">
							<label for="namaBarang">Nama Barang</label>
							<input type="text" class="form-control" id="namaBarang" placeholder="Masukkan Nama Barang" name="nama_barang" value="<?= $data['nama_barang'] ?>">
						</div>
						<div class="form-group">
							<label for="kodeBarang">Kode Barang</label>
							<input type="text" class="form-control" id="kodeBarang" placeholder="Masukkan Kode Barang" name="kode_barang" value="<?= $data['kode_barang'] ?>">
						</div>
						<div class="form-group">
							<label for="jumlahBarang">Jumlah Barang</label>
							<input type="number" class="form-control" id="jumlahBarang" placeholder="Masukkan Jumlah Barang" name="jumlah_barang" value="<?= $data['jumlah_barang'] ?>">
						</div>
						<div class="form-group">
							<label for="tanggal">Tanggal</label>
							<input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal" name="tanggal" value="<?= $data['tanggal'] ?>">
						</div>
						<button type="submit" name="add" class="btn btn-primary"> Ubah</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
