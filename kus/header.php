<!DOCTYPE html>
<html lang="en">
<head>
  <title>Birds</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body>
<!--Menü-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
  
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php bloginfo('url') ?>">Anasayfa</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url') ?>/galeri">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url') ?>/category/blogtemplate/">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url') ?>/hakkimizda">Hakkımda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url') ?>/iletisim">İletişim</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>