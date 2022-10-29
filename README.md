# uts_intro
# KElOMPOK 4
# 1. M. Toyyibal Ardani
# 2. Rio Anugrah Putra
# 3. Galuh Ayu Oktaviani
# 4. Jeni Novitasari
# 5. Imam Wardana
<?php 
$sumber = 'https://berita-indo-api.vercel.app/v1/cnn-news';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
//var_dump($data);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>Api Berita</title>
  </head>
  <body>
    <h1 class="text-center mt-3">Galeri Berita</h1>
    <div class="container">
        <div class="row">
          <?php foreach ($data['data'] as $row) {
            # code...
          ?>
            <div class="col-4 mt-3">
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    -->
  </body>
</html>
