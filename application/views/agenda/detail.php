<main>
    <div class="row">
        <div class="col-md-8">

            <h3 class=""><?= $agenda['nama']; ?></h3>
            <small class="text-muted">Oleh <strong><?= $agenda['penulis']; ?></strong> - <?= date('d F Y', $agenda['tanggal_masuk']); ?></small>
            <hr>

            <div class="d-flex mb-5">
                <img src="<?= base_url('assets/img/' . $agenda['gambar']); ?>" class="mx-auto mw-100" style="max-height:427px;">
            </div>
            <div class="mb-4">
                <h5 class=" pb-2">Keterangan</h5>
                <p><strong>Tanggal :</strong> <?= date('d F Y', $agenda['tanggal']); ?></p>
            </div>
            <hr>
            <h5 class="pb-2">Deksripsi</h5>
            <div class="text-justify">
                <?= html_entity_decode($agenda['deskripsi']); ?>
            </div>
            <hr>
        </div>
        <div class="col-md-4">
            <div class="mb-3 d-flex align-item-center">
                <span class="badge badge-dark text-uppercase px-3">Agenda Lainnya</span>
            </div>
            <?php foreach (array_slice($agenda_lain, 0, 4) as $al) : ?>
                <a href="" class="text-decoration-none">
                    <div class="card mw-100 shadow-sm mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-dark"><?= date('d F Y', $al['tanggal']); ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted text-truncate"><?= $al['nama']; ?></h6>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
            <hr>
        </div>
    </div>
</main>