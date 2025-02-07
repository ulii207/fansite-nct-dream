<?php
require "koneksi.php" ;
$artikel = tampil('SELECT * FROM table_articel') ;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <title>DreamVerse</title>
    <link rel="stylesheet" href="home1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <h2 class="web-title">NCT DREAM</h2>
        <div class="navbar">
            <a href="#">Home</a>
            <a href="profil.php">Profil</a>
            <a href="sejarah.php">Sejarah</a>
            <a href="musik.php">Musik</a>
            <a href="login.php">Login</a>
            
        </div>
    </header>

    <main>
        <img src="backg.png" alt="">
    </main>

    <main class="containerr">
        <?php foreach($artikel as $a) : ?>
        <div class="container">
            <div class="title">
                <h2><?= $a['judul'] ; ?></h2>
                <p class="date"><?= $a['tanggal'] ;?></p>
            </div>
            <img src="foto/<?= $a['gambar'] ;?>">
            <p>
                <?= $a['deskripsi'] ; ?>
            </p>
        </div>
        <?php endforeach ;?>
    </main>

    <div class="footer">
        <div class="footer-page">
            <div class="location-page">
                <h2>Location</h2>
                <p>
                    Korea Selatan<br>Seoul
                </p>
            </div>
            <div class="icon-page">
                <a href="https://www.instagram.com/nct_dream/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/@NCTDREAM"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://twitter.com/NCTsmtown_DREAM"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://open.spotify.com/artist/1gBUSTR3TyDdTVFIaQnc02"><i class="fa-brands fa-spotify"></i></a> 
            </div>
            <div class="number-page">
                <h2>SM ENTERTAIMENT</h2>
                <P>085374230224</P>
                <P>yuliadhitaashari@gmail.com</P>
            </div>
        </div>
    </div>
</body>
</html>