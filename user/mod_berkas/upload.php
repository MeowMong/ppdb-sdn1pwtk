<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<div class="section-header">
    <div class="section-header-back">
        <a href="." class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Berkas PPDB Online</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href='.'>Dashboard</a></div>
        <div class="breadcrumb-item active">Upload</a></div>

    </div>
</div>

<td>
    <div class="section-body">

        <h2 class="section-title">Fitur Upload Berkas</h2>
        <p class="section-lead">
            Berkas yang di Upload Wajib Berbentuk Gambar/Foto (png, jpg, jpeg) atau PDF
        </p>

</td>

<form id="form-berkas">
    <div class="card" id="berkas-card">

        <div class="card-body">

            <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right required">Kartu Keluarga</label>
                <div class="col-sm-6 col-md-9">

                    <div class="custom-file">
                        <input type="file" name="kk" class="custom-file-input" accept="application/pdf, image/png, image/jpeg, image/jpg" id="site-kk">
                        <label class="custom-file-label">Pilih Berkas</label>
                    </div>
                    <div class="form-text text-muted">Berkas harus berukuran dibawah 25MB</div>
                </div>

            </div>
            <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Preview</label>
                <div class="col-sm-6 col-md-9">
                    <!-- <img src="../<?= $siswa['kk'] ?>" class="img-thumbnail" width="50%"> -->
                    <object data="../<?= $siswa['kk'] ?>" width="100%" height="500px" style="object-fit:contain;">
                        <p>Tidak dapat menampilkan file, <a href="../<?= $siswa['kk'] ?>">Lihat & Unduh</a> berkas</p>
                    </object>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right required">Akta Kelahiran</label>
                <div class="col-sm-6 col-md-9">

                    <div class="custom-file">
                        <input type="file" name="akta" class="custom-file-input" accept="application/pdf, image/png, image/jpeg, image/jpg" id="site-akta">
                        <label class="custom-file-label">Pilih Berkas</label>
                    </div>
                    <div class="form-text text-muted">Berkas harus berukuran dibawah 25MB</div>
                </div>

            </div>
            <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Preview</label>
                <div class="col-sm-6 col-md-9">
                    <object data="../<?= $siswa['akta'] ?>" width="100%" height="500px" style="object-fit:contain;">
                        <p>Tidak dapat menampilkan file, <a href="../<?= $siswa['akta'] ?>">Lihat & Unduh</a> berkas</p>
                        <img src="http://goo.gl/ijai22" />
                    </object>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Surat Tanda Tamat Belajar (STTB) TK/Sederajat</label>
                <div class="col-sm-6 col-md-9">

                    <div class="custom-file">
                        <input type="file" accept="application/pdf, image/png, image/jpeg, image/jpg" name="ijazah" class="custom-file-input" id="site-ijazah">
                        <label class="custom-file-label">Pilih Berkas</label>
                    </div>
                    <div class="form-text text-muted">Berkas harus berukuran dibawah 25MB</div>
                </div>

            </div>
            <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Preview</label>
                <div class="col-sm-6 col-md-9">
                    <object data="../<?= $siswa['ijazah'] ?>" width="100%" height="500px" style="object-fit:contain;" class="placeholder">
                        <p>Tidak dapat menampilkan file, <a href="../<?= $siswa['ijazah'] ?>">Lihat & Unduh</a> berkas</p>
                    </object>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Kartu Indonesia Pintar</label>
                <div class="col-sm-6 col-md-9">

                    <div class="custom-file">
                        <input type="file" accept="application/pdf, image/png, image/jpeg, image/jpg" name="kip" class="custom-file-input" id="site-kip">
                        <label class="custom-file-label">Pilih Berkas</label>
                    </div>
                    <div class="form-text text-muted">Berkas harus berukuran dibawah 25MB</div>
                </div>

            </div>
            <div class="form-group row align-items-center">
                <label class="form-control-label col-sm-3 text-md-right">Preview</label>
                <div class="col-sm-6 col-md-9">
                    <object data="../<?= $siswa['kip'] ?>" width="100%" height="500px" style="object-fit:contain;">
                        <p>Tidak dapat menampilkan file, <a href="../<?= $siswa['kip'] ?>">Lihat & Unduh</a> berkas</p>
                    </object>
                </div>
            </div>


        </div>
        <div class="card-footer bg-whitesmoke text-md-right">
            <button type="submit" class="btn btn-primary" id="save-btn">Simpan Perubahan</button>
            <button class="btn btn-secondary" type="button">Reset</button>
        </div>
    </div>
</form>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-berkas').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Mantap!',
                    message: data,
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-kk').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Mantap! ',
                    message: 'Data berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-akta').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Mantap! ',
                    message: 'Data berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-ijazah').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Mantap! ',
                    message: 'Data berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-kip').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Mantap! ',
                    message: 'Data berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>