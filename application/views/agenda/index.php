<main>
    <div class="row">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 border-bottom">Agenda Himpaudi</h3>

            <?php foreach (array_slice($agenda, 0, 10) as $a) : ?>
                <a href="<?= base_url('agenda/detail/' . $a['id']) ?>" class="btn btn-light mb-3 p-0 text-left">
                    <div class="card" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/img/' . $a['gambar']);  ?>" class="card-img p-3" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title"><strong><?= date('d F Y', $a['tanggal']); ?></strong></h4>
                                    <hr>
                                    <p class="card-text"><?= $a['nama']; ?></p>
                                    <p class="card-text m-0"><small class="text-muted">Oleh <?= $a['penulis']; ?><br><?= date('d F Y', $a['tanggal_masuk']); ?></small> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>
        <div class="col-md-4">
            <?php $this->load->view($berita_aside); ?>
        </div>
    </div>
</main>