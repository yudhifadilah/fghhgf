<?= $this->include('layout/header') ?>

<main>
			<div class="head-title">
				<div class="left">
					<h1>Edit Koleksi</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="/home/index">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="" href="#">Edit Data</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Silahkan Edit Data Koleksi</h3>
					</div>
                    <table>
						<thead>
							<tr>
            <div class="card">
                </div>
                    <div class="card-body">
                    <form method="post" action="<?= base_url('home/update'); ?>">
                <div class="form-group">
                    <label for="">Jenis Koleksi</label>
                    <input type="text" value="<?= $user->jeniskoleksi; ?>" name="jeniskoleksi" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Koleksi</label>
                    <input type="text" value="<?= $user->namakoleksi; ?>" name="namakoleksi" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Kondisi Koleksi</label>
                    <input type="text" value="<?= $user->kondisi; ?>" name="kondisi" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Umur Koleksi Geologi (Tahun)</label>
                    <input type="text" value="<?= $user->umur; ?>" name="umur" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Koleksi Ditemukan</label>
                    <input type="text" value="<?= $user->ditemukan; ?>" name="ditemukan" required class="form-control">
                </div>

                <input type="hidden" value="<?= $user->id; ?>" name="id">
                <div class="text-right">
                    <button class="btn btn-success">Edit</button>
                </div>
            </form>

        </div>
    </div>
</div>
</tr>
</thead>
</div>
</div>
</main>
</section>

