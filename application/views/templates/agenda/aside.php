<div class="mb-3 d-flex align-item-center">
    <span class="badge badge-dark text-uppercase px-3">Agenda Lainnya</span>
</div>
<?php foreach (array_slice($agenda_lain, 0, 4) as $al) : ?>
    <a href="<?= base_url('agenda/detail/' . $al['id']); ?>" class="text-decoration-none" title="<?= $al['nama']; ?>">
        <div class="card mw-100 shadow-sm mb-3">
            <div class="card-body">
                <h5 class="card-title text-dark"><?= date('d F Y', $al['tanggal']); ?></h5>
                <h6 class="card-subtitle text-muted text-2-line"><?= $al['nama']; ?></h6>
            </div>
        </div>
    </a>
<?php endforeach; ?>