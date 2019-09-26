<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Himpaudi Bekasi | <?= $judul ?></title>
</head>

<body>
    <div class="container">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/himgo.png'); ?>" alt="Logo" width="120px" height="56px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= base_url(); ?>">Home</a>
                    <div class="dropdown">
                        <a class="nav-item nav-link dropdown-toggle" id="dropDownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Organisasi</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Profil</a>
                            <a class="dropdown-item" href="#">Sejarah</a>
                            <a class="dropdown-item" href="#">Visi Misi</a>
                            <a class="dropdown-item" href="#">Logo</a>
                        </div>
                    </div>

                    <a class="nav-item nav-link" href="#">Pengurus</a>
                    <a class="nav-item nav-link" href="#">Download</a>
                    <a class="nav-item nav-link" href="<?= base_url('auth'); ?>">Masuk</a>

                </div>
            </div>
        </nav>