
    <?= $this->include('layout/header') ?>

    
    <!-- CONTENT -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Data Terbaru</h3>
					</div>
					<table>
						<thead>
							<tr>
                                <th>No</th>
								<th>Jenis Koleksi</th>
								<th>Nama Koleksi</th>
								<th>Kondisi</th>
								<th>Umur Geologi (Tahun)</th>
								<th>Ditemukan</th>
							</tr>
						</thead>
                        <tbody>
                        <?php $no = 1;
                        foreach ($getUser as $user) { ?>
                            <tr>
                                <td>
									<p> <?= $no; ?> </p>
								</td>

								<td>
									<p><?= $user['jeniskoleksi']; ?> </p>
								</td>

								<td>
									<p><?= $user['namakoleksi']; ?> </p>
								</td>

								<td>
									<p><?= $user['kondisi']; ?> </p>
								</td>

                                <td>
									<p><?= $user['umur']; ?> </p>
								</td>

                                <td>
									<p><?= $user['ditemukan']; ?></p>
							</td>
							<td>
							<a href="<?= base_url('home/edit/' . $user['id']); ?>" class="btn btn-success">
                                        Edit</a>

                            <a href="<?= base_url('home/hapus/' . $user['id']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">
                                        Hapus</a>
                                </td>
                                <?php $no++;
                        } ?>
                        </tbody>
					</table>
				</div>
			</div>
		</main>
	</section>
    </div>
</div>
</body>