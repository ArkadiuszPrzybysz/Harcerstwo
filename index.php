<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kronika</title>
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <?php
    include 'navbar.php';
  ?>
  <main>
  <span id = "text1" class="text">Rada przyjaciół harcerstwa</span>
  <img id="forest1" src="parallax.png"  alt="obraz1">
  <img id = "forest2" src="parallax2.png" style= "z-index: 2" alt="obraz2">
  </main>
  <section>
     <div class="main-info">
      <div class="main-logo">
        <img src="logo.png" alt="">
      </div>
      <div class="info-names">
        <h1>Zarząd</h1>
        <p>Emilia Agata Majewicz - przewodnicząca zarządu</p>
        <p>Dorota Romualda Piechota - zastępca przewodniczącego zarządu</p>
        <p>Ewa Maria Wojtanowska - sekretarz zarządu</p>
      </div>
      <div class="info-names">
        <h1>Komisja rewizyjna</h1>
        <p>Agnieszka Kańduła</p>
        <p>Maria Urszula Stunżo</p>
        <p>Henryka Teresa Tomaszuk</p>
      </div>
    </div>
  </section>
  <script src="forest.js"></script>
</body>
</html>