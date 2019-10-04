<div class="container">

    <div class="card o-hidden border-0 shadow-lg mx-auto my-5 col-lg-7">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <a href="<?= base_url('home') ?>">
                                <img src="<?= base_url('assets/img/himgo.png'); ?>" alt="Logo Himpaudi" style="height:100px;">
                            </a>
                        </div>
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun Anda!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                            <div class="form-group">
                                <div class="mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="e.g. John Doe" autocomplete="off" value="<?= set_value('nama') ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="contoh@mail.com" autocomplete="off" value="<?= set_value('email') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar Akun
                            </button>
                            <hr>
                        </form>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Lupa Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Sudah punya akun? Masuk sekarang!</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>