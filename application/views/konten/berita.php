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
                            <h3 class="m-0">Tabel Berita</h3>
                        </div>
                        <div>
                            <a href="<?= base_url('konten/tambahberita') ?>" class="btn btn-primary">Tambah Berita Baru</a>
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
                                    <th>Judul</th>
                                    <th>Headline</th>
                                    <th>Gambar</th>
                                    <th>Masuk</th>
                                    <th>Penulis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($berita as $b) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $b['judul']; ?></td>
                                        <td class="text-truncate">
                                            <span class="d-inline-block text-truncate" style="max-width: 250px;">
                                                <?= $b['headline']; ?>
                                            </span>
                                        </td>
                                        <td><?= $b['gambar']; ?></td>
                                        <td><?= date('d F y', $b['tgl_masuk']); ?></td>
                                        <td><?= $b['penulis']; ?></td>
                                        <td>
                                            <a href="<?= base_url('konten/ubahberita/') . $b['id']; ?>" class="badge badge-success">
                                                ubah
                                            </a>
                                            <a href="<?= base_url('konten/hapusberita/') . $b['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?');">
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