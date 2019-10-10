<!-- Carousel -->
<div id="homeCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#homeCarousel" data-slide-to="1"></li>
        <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="height:500px">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/img/carousel.svg') ?>" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/carousel.svg') ?>" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/carousel.svg') ?>" class="d-block w-100 img-fluid" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- /Carousel -->
<hr>
<!-- Berita -->
<div class="row">
    <div class="col-md-12">
        <div class="d-flex align-items-center mb-2">
            <div class="mr-auto p-2">
                <h3 class="m-0">Berita Himpaudi</h3>
            </div>
            <div class="p-2">
                <a href="<?= base_url('berita'); ?>">Lihat Berita Lainnya &rarr;</a>
            </div>
        </div>
        <div class="card-deck">
            <?php foreach (array_slice($berita, 0, 3) as $b) : ?>
                <div class="card">
                    <img src="<?= base_url('assets/img/empty.svg') ?>" class="card-img-top p-3 h-50" alt="...">
                    <div class="card-body">
                        <h6 class="card-title h5"><?= $b['judul']; ?></h6>
                        <p class="card-text"><small class="text-muted"><?= date('d F Y', $b['tgl_masuk']); ?></small></p>
                        <p class="card-text text-3-line"><?= $b['headline']; ?></p>

                    </div>
                    <div class="card-footer text-muted">
                        <a href="<?= base_url('berita/detail/' . $b['id']) ?>">Baca selengkapnya &rarr;</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- /Berita -->
<hr>
<!-- About -->
<div class="row">
    <div class="col-md-12">
        <div class="d-flex align-items-center flex-column">
            <div class="m-auto p-2">
                <h1 class="font-italic" style="letter-spacing:1.2px;">Himpaudi Bekasi</h1>
            </div>
            <div class="m-auto p-2 text-center">
                <p class="px-5 m-0 font-italic" style="line-height:200%; letter-spacing:1.2px;">Kami adalah wadah komunikasi independen, profesional dan terbuka antar Pendidik dan tenaga kependidikan untuk praktisi PAUD khususnya dan juga lembaga baik yang bersifat perorangan atau lembaga dalam rangka untuk bertukar informasi.</p>
            </div>
            <div class="m-auto p-2 text-center">
                <a href="#">Tentang Himpaudi Bekasi &rarr;</a>
            </div>
        </div>
    </div>
</div>
<!-- /About -->
<hr>
<!-- Agenda -->
<div class="row my-4">
    <div class="col-md-12">
        <div class="d-flex align-items-center mb-2">
            <div class="mr-auto p-2">
                <h3 class="m-0">Agenda Himpaudi</h3>
            </div>
            <div class="p-2">
                <a href="<?= base_url('agenda') ?>">Lihat Agenda Lainnya &rarr;</a>
            </div>
        </div>
        <div class="row">
            <?php foreach (array_slice($agenda, 0, 4) as $a) : ?>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-fw fa-calendar-day"></i> <?= date('d F Y', $a['tanggal']) ?></h5>
                            <p class="card-text text-2-line text-font-line" title="<?= $a['nama']; ?>"><?= $a['nama']; ?></p>
                            <a href="<?= base_url('agenda/detail/' . $a['id']) ?>" title="<?= $a['nama']; ?>">Baca selengkapnya &rarr;</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- /Agenda -->