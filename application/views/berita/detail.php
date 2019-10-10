<main>
    <div class="row">
        <div class="col-md-8">

            <h3 class=""><?= $detail_berita['judul']; ?></h3>
            <small class="text-muted">Oleh <strong><?= $detail_berita['penulis']; ?></strong> - <?= date('d F Y', $detail_berita['tgl_masuk']); ?></small>
            <hr>

            <div class="d-flex mb-5">
                <img src="<?= base_url('assets/img/' . $detail_berita['gambar']); ?>" class="mx-auto mw-100" style="max-height:427px;">
            </div>
            <div class="mb-4">
                <p class="text-justify"><?= $detail_berita['headline']; ?></p>
            </div>
            <div class="text-justify">
                <?= html_entity_decode($detail_berita['deskripsi']); ?>
            </div>
            <hr>
        </div>
    </div>
</main>