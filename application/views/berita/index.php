<main>
    <div class="row">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 border-bottom">Berita Himpaudi</h3>

            <?php foreach (array_slice($berita, 0, 10) as $b) : ?>
                <a href="<?= base_url('berita/detail/' . $b['id']) ?>" class="btn btn-light mb-3 p-0 text-left">
                    <div class="card" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/img/' . $b['gambar']);  ?>" class="card-img p-3" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title text-2-line"><strong><?= $b['judul']; ?></strong></h4>
                                    <hr>
                                    <p class="card-text text-3-line"><?= $b['headline']; ?></p>
                                    <p class="card-text m-0"><small class="text-muted">Oleh <?= $b['penulis']; ?><br><?= date('d F Y', $b['tgl_masuk']); ?></small> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="col-md-4">
            <?php $this->load->view($agenda_aside); ?>
        </div>

    </div>
</main>