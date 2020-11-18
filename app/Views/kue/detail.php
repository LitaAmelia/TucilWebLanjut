<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Detail Informasi Kue</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $kue['referensi']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $kue['nama_kue']; ?></h5>
                            <p class="card-text"><?= $kue['deskripsi']; ?></p>
                            <p class="card-text"><small class="text-muted">Rp <?= $kue['harga']; ?></small></p>

                            <a href="/kue">Kembali ke daftar kue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>