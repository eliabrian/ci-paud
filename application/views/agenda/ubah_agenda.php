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
                            <h3 class="m-0">Ubah Agenda</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" value="<?= $agenda['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="datePicker">Tanggal</label>
                                    <div class="input-group date align-items-center" data-provide="datepicker" id="datePicker">
                                        <input type="text" name="tanggal" class="form-control" autocomplete="off" value="<?= date('m/d/Y', $agenda['tanggal']) ?>">
                                        <div class="input-group-addon px-2">
                                            <span class="fas fa-fw fa-calendar"></span>
                                        </div>
                                    </div>
                                    <small class="form-text text-danger"><?= form_error('tanggal') ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="myEditor">Deskripsi</label>
                            <textarea name="editor_content" id="myEditor"><?= $agenda['deskripsi']; ?></textarea>
                        </div>
                        <small class="form-text text-danger"><?= form_error('editor_content') ?></small>
                        <button type="submit" class="btn btn-primary float-right">Ubah</button>
                        <a href="<?= base_url(); ?>/agenda" class="btn btn-outline-primary float-right mr-2">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->