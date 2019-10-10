<div class="mb-3 d-flex align-item-center">
    <span class="badge badge-dark text-uppercase px-3">Berita Terkini</span>
</div>
<?php foreach ($berita as $b) : ?>
    <a href="<?= base_url('berita/detail/' . $b['id']); ?>" class="card-hover text-decoration-none">
        <div class="card mb-3 border-0">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex align-item-center p-2">
                    <img src="<?= base_url('assets/img/' . $b['gambar']); ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body p-3">
                        <h5 class="card-title text-3-line text-font-line"><?= $b['judul']; ?></h5>
                        <p class="card-text"><small class="text-muted"><?= date('d F Y', $b['tgl_masuk']); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </a>
<?php endforeach; ?>