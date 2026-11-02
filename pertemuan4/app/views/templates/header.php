<!-- PERTEMUAN 4 - BELAJAR ASSET -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman <?= $data['title']; ?></title>
        <link href="<?= BASE_URL ?>/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                <a class="navbar-brand text-white" href="<?= BASE_URL ?>">PHP MVC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active text-white" aria-current="page" href="<?= BASE_URL ?>/home">Home</a>
                        <a class="nav-link text-white" href="<?= BASE_URL ?>/about">About</a>
                    </div>
                </div>
            </div>
        </nav>