<?php

include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kronika</title>
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="odeszli.css">
</head>
<body>
  <?php
    include 'navbar.php';
  ?>
  <main>
    <span class="text">Odeszli na wieczną wartę</span>
    <div class="arrow-box">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </main>
  <?php

    $wynik = $conn->query("SELECT * FROM odeszli");

    while($row = $wynik->fetch_assoc()){
  
  ?>
  <container>
    <section class="about">
      <div class="main-img">
        <img src="<?php echo $row["obraz"];?>" alt="foto">
      </div>
      <div class="main-text">
        <h1><?php echo $row["imie"];?> <?php echo $row["nazwisko"];?></h1>
        <hr>
        <p><?php echo $row["opis"];?></p>
      </div>
    </section>
  </container>

  <?php } $conn -> close(); ?>
  <script src="main.js"></script>
</body>
</html>