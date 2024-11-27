<?= $this->extend('layout'); ?>
<?= $this->section('home-content'); ?>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="row row-cols-1 row-cols-2 row-cols-3 row-cols-4">
                    <?php foreach ($arrayPeserta as $peserta): ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader mb-2">Peserta Kicau Mania</div>
                                </div>
                                <div class="h1 mb-2"><?= esc($peserta['nama_pemilik']) ?></div>
                                <div class="d-flex mb-1">
                                    <div class="p">Burung <?= esc($peserta['nama_burung']) ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>