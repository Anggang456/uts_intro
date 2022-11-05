<?php 
$sumber = 'https://berita-indo-api.vercel.app/v1/cnn-news';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
//var_dump($data);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="css/styles.css" rel="stylesheet" />
    <title>Api Berita</title>
  </head>
  <body id="page-top">
        <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">CNN News</h5>
          <span class="text-muted">Belajar API</span>
        </div>
      </div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Berita Hari Ini</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="mb-5">
                <!-- Masthead Subheading-->
            </div>
        </header>
       
    <div class="container">
        <div class="row">
          <?php foreach ($data['data'] as $row) {
          ?>
            <div class="col-4 mt-5">
                <div class="card shadow" style="width: 18rem;">
                    <img src=" <?php  echo $row['image']['large'] ?> " class="card-img-top" alt="...">
                    <div class="card-body">
                      <h3><?php  echo $row['title'] ?></h3>
                      <p class="card-text"><?php  echo $row['contentSnippet'] ?></p>
                      <a href="<?php echo $row['link'] ?>[">Masuk ke dalam web</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
