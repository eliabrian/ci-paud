<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="m-0">Tabel Agenda</h3>
                        </div>
                        <div>
                            <a href="<?= base_url('agenda/tambah') ?>" class="btn btn-primary">Tambah Agenda Baru</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal</th>
                                    <th>Masuk</th>
                                    <th>Penulis</th>
                                    <th>Aktif</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($agenda as $a) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $a['nama']; ?></td>
                                        <td><?= $a['gambar']; ?></td>
                                        <td><?= $a['deskripsi']; ?></td>
                                        <td><?= date('d F y', $a['tanggal']); ?></td>
                                        <td><?= date('d F y', $a['tanggal_masuk']); ?></td>
                                        <td><?= $a['penulis']; ?></td>
                                        <td><?= $a['aktif']; ?></td>
                                        <td>
                                            <a href="<?= base_url('agenda/ubah'); ?>/<?= $a['id']; ?>" class="badge badge-success">
                                                ubah
                                            </a>
                                            <a href="<?= base_url('agenda/hapus'); ?>/<?= $a['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');">
                                                hapus
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->