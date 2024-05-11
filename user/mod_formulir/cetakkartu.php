<?php require "fungsi.php"; ?>
<div class="row">
    <div class="col-12 col-sm-8 col-lg-12">
        <div class="card author-box card-primary">
            <div class="card-header">
                <h4>Cetak Bukti Pendaftaran</h4>
                <div class="card-header-action">
                </div>
            </div>
            <div class="card-body">
                <div class="author-box-left">
                    <img alt="Foto Siswa 3x4" src="../<?= $siswa['foto'] ?>" class="rounded-circle author-box-picture">
                    <div class="clearfix"></div>
                    <br>
                    <div class="author-box-job">Status Pendaftaran</div>
                    <?php if ($siswa['status'] == 1) { ?>
                        <span class="badge badge-success">Diterima</span>
                    <?php } elseif ($siswa['status'] == 2) { ?>
                        <span class="badge badge-danger">Cadangan</span>
                    <?php } else { ?>
                        <span class="badge badge-info">Diverifikasi</span>
                    <?php } ?>
                </div>
		
                <div class="author-box-details">

                    
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                            <form id="form-datadiri">
								<div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Pendaftaran</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="no" class="form-control" value="<?= $siswa['no_daftar'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="nama" class="form-control" value="<?= $siswa['nama'] ?>"disabled >
                                    </div>
                                </div>
								<div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" min="0" minlength="16" maxlength="16" name="nik" class="form-control" value="<?= $siswa['nik'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat dan Tanggal Lahir</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="tempat" class="form-control" value="<?= $siswa['tempat_lahir'] ?>, <?= $siswa['tgl_lahir'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                    <a target="_blank" href="mod_formulir/print_daftar.php?id=<?= enkripsi($siswa['id_daftar']) ?>" type="button" class="badge badge-primary"><i class="fas fa-download    "></i> Cetak Bukti Pendaftaran</a>
                                    </div>
                                </div>
								
                            </form>
                        </div>

                    </div>


                </div>
            </div>
			
			<?php if ($siswa['konfirmasi'] != 0) { ?>
			<div class="alert alert-success alert-dismissable">
				<!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
				Terimakasih !!!<br />
				Data Anda Telah Berhasil <button class="badge badge-info"> Diperiksa Pada Tanggal  <?= $siswa['tgl_konfirmasi'] ?></button>
				<br /><br />Download Bukti Pendaftaran  <a target="_blank" href="mod_formulir/print_daftar.php?id=<?= enkripsi($siswa['id_daftar']) ?>" type="button" class="badge badge-danger"><i class="fas fa-download    "></i> Download</a>
			</div>
		<?php } ?>
		</div>
		
    </div>

</div>

<script>
    document.querySelectorAll('input[type="number"]').forEach(input =>{
        input.oninput = () =>{
            if(input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
            if(input.value.length < input.minLength) {
                // Tambahkan notifikasi atau peringatan di sini
                // Misalnya, Anda dapat menambahkan pesan error di bawah input field
                input.nextElementSibling.textContent = `Minimal ${input.minLength} digit diperlukan.`;
                input.nextElementSibling.classList.add('error');
            } else {
                // Jika input sudah mencukupi, hapus pesan error jika ada
                input.nextElementSibling.textContent = '';
                input.nextElementSibling.classList.remove('error');
            }
        };
    });
</script>