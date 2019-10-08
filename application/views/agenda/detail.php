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
            <?php $this->load->view($agenda_aside); ?>
            <hr>
            <?php $this->load->view($berita_aside); ?>

        </div>
    </div>
</main>