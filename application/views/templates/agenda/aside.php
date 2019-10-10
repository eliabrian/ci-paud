<div class="mb-3 d-flex align-item-center">
    <span class="badge badge-dark text-uppercase px-3">Agenda Lainnya</span>
</div>
<?php foreach (array_slice($agenda, 0, 4) as $a) : ?>
    <a href="<?= base_url('agenda/detail/' . $a['id']); ?>" class="card-hover text-decoration-none" title="<?= $a['nama']; ?>">
        <div class="card mw-100 shadow-sm mb-3">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-fw fa-calendar-day"></i> <?= date('d F Y', $a['tanggal']); ?></h5>
                <h6 class="card-subtitle text-muted text-2-line text-font-line"><?= $a['nama']; ?></h6>
            </div>
        </div>
    </a>
<?php endforeach; ?>