<div class="container">
	<div class="row">
		<div class="col-md-3"> </div>
		<div class="col-md-6">
			<h1 class="mb-4 mt-4">Data Produk</h1>
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row mt-4">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form class="" action="" method="post">
				<div class="input-group">
					<input type="text" name="keyword" class="form-control" placeholder="Cari Data Produk">
					<div class="input-group-append">
						<button type="submit" class="btn btn-primary" name="button">Cari</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row mt-4">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<table class="table" style="text-align:center;">
				<tr>
					<th>Nama Barang</th>
					<th>Kode Barang</th>
					<th>Jumlah Barang</th>
					<th>Tanggal</th>
					<th>Aksi</th>
				</tr>
				<?php
				function date_indo($date)
				{
					$month = [
						1   => 'Januari',
						2   => 'Februari',
						3   => 'Maret',
						4   => 'April',
						5   => 'Mei',
						6   => 'Juni',
						7   => 'Juli',
						8   => 'Agustus',
						9   => 'September',
						10  => 'Oktober',
						11  => 'November',
						12  => 'Desember'
					];
					$separate = explode('-', $date);
					return $separate[2] . ' ' . $month[(int)$separate[1]] . ' ' . $separate[0];
				}
				foreach ($produk as $p) :
				?>
					<tr>
						<td><?= $p['nama_barang']; ?></td>
						<td><?= $p['kode_barang']; ?></td>
						<td><?= $p['jumlah_barang']; ?></td>
						<td><?= date_indo($p['tanggal']); ?></td>
						<td>
							<a class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?')" href="<?php echo base_url('delete/') . $p['id'] ?>">Hapus</a>
							<a class="btn btn-primary" href="<?php echo base_url('update/') . $p['id'] ?>">Edit</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row mt-4 mb-4">
		<div class="col-md-3"></div>
		<div class="col-md-6"> <a href="<?= base_url('add'); ?>" class="btn btn-primary">Tambah Data</a> </div>
		<div class="col-md-3"></div>
	</div>
</div>
