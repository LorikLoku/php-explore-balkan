<?php
    include "php/fetchAlbaniaContent.php";
    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albania</title>
    <link href="https://fonts.googleapis.com/css?family=Syncopate:700" rel="stylesheet">
    <link rel="stylesheet" href="../IW/css/country.css">
    <link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css'>

</head>


<body>

    <video src="../IW/video/Albania from drone 4K.mp4" autoplay loop playsinline muted></video>

    <header class="viewport-header">
        <h1>
            <?php echo $row['countryTitle1']; ?>
            <span><?php echo $row['countryTitle2']; ?></span>
        </h1>
    </header>
    <div class="music">
        <audio controls>
                <source src="../IW/audio/Muzik dhe valle Shqiptare   Albanian Traditional Music & Dances.mp3" type="audio/mpeg">
                <?php echo $row['audioError']; ?>
            </audio>
    </div>


    <main class="container">

        <p><?php echo $row['countryText1']; ?></p>
        <p><?php echo $row['countryText2']; ?></p>
        <p><?php echo $row['countryText3']; ?></p>

        <br>

        <section class="card" data-aos="fade-right">
            <img src=<?php echo $row['cardImg1']; ?> onerror="this.onerror=null; this.src='../IW/img/komani.jpg'">
            <div>
                <h3><?php echo $row['cardTitle1']; ?></h3>
                <p><?php echo $row['cardText1']; ?></p>

            </div>
        </section>

        <section class="card" data-aos="fade-left">
            <img src=<?php echo $row['cardImg2']; ?> onerror="this.onerror=null; this.src='../IW/img/butrinti.jpg'">
            <div>
                <h3><?php echo $row['cardTitle2']; ?></h3>
                <p><?php echo $row['cardText2']; ?></p>
            </div>
        </section>

        <section class="card" data-aos="fade-right">
            <img src=<?php echo $row['cardImg3']; ?> onerror="this.onerror=null; this.src='../IW/img/thethi.jpg'">
            <div>
                <h3><?php echo $row['cardTitle3']; ?></h3>
                <p><?php echo $row['cardText3']; ?></p>

            </div>
        </section>

        <section class="card" data-aos="fade-left">
            <img src=<?php echo $row['cardImg4']; ?> onerror="this.onerror=null; this.src='../IW/img/ksamil.jpg'">
            <div>
                <h3><?php echo $row['cardTitle4']; ?></h3>
                <p><?php echo $row['cardText4']; ?></p>

            </div>
        </section>

        <section class="card" data-aos="fade-right">
            <img src=<?php echo $row['cardImg5']; ?> onerror="this.onerror=null; this.src='../IW/img/tiranaa.jpg'">
            <div>
                <h3><?php echo $row['cardTitle5']; ?></h3>
                <p><?php echo $row['cardText5']; ?></p>

            </div>
        </section>
    </main>
    <script src='https://unpkg.com/aos@next/dist/aos.js'></script>
    <script src="../IW/js/AOS.js"></script>


</body>

</html>