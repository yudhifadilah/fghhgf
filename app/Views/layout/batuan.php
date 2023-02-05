	
    <?= $this->include('layout/header'); ?>
	<?= $this->include('layout/navbar'); ?>


    <!-- CONTENT -->

    <main>
			<div class="head-title">
				<div class="left">
					<h1>Koleksi Batuan</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="/home/index">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="" href="#">Input Batuan</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Tambahkan Koleksi Batuan</h3>
					</div>
					<div class="card">
                </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('home/add'); ?>">

					<div class="form-group">
					<label for="">Jenis Koleksi</label>
                    <input type="text" value="Batuan" name="jeniskoleksi" readonly class="form-control">
				    </div>

                    <div class="form-group">
                    <label for="">Nama Koleksi</label>
                    <input type="text" value="" name="namakoleksi" required class="form-control">
                    </div>

                        <div class="form-group">
                    <label for="">Kondisi Koleksi</label>
                    <input type="text" value="" name="kondisi" required class="form-control">
                             </div>

							 <div class="form-group">
							 <label for="">Umur Koleksi</label>
                    <input type="text" value="" name="umur" required class="form-control">
                                     </div>

								<div class="form-group">
							 <label for="">Koleksi Ditemukan</label>
							 <select class="form-control" name="ditemukan">
 							 <option>Luar Negri</option>
							  <option>Dalam Negri</option>
								</select>

				<br>
                <input type="hidden" value="" name="id">
                <div class="text-left">
                <button class="btn btn-success">Input</button>
                </div>
            </form>

        </div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
