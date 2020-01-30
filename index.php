<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Permainan Warna</title>

    <style>
    body {
        background-color: lightgreen;
    }

    .container {
        width: 960px;
        margin: auto;
        border: 3px black solid;
        border-radius: 50px;
        padding: 30px;
    }

    .judul {
        font-style: bold;
        text-align: center;
        margin-bottom: 70px;
    }

    p {
        text-align: left;
        margin: 5px;
    }
    </style>

</head>
<body>

    <div class="container">

        <h1 class="judul">Nama</h1>

        <?php

            $nama = "Rahmat Wahyuma Akbar";
            $kelas = "X-RPL 1";
            $absen = "31";

        ?>

        <p>Halo!. Perkenalkan nama saya <?= $nama ?></p>

        <p>Saya kelas <?= $kelas ?></p>

        <p>Nomor absen saya di Kelas, nomor <?= $absen ?></p>

        <br>
        <hr>
        <br>

        <h3 class="judul" >Mari Bermain Warna</h3>

        <hr>

        <h3 class="judul">Pilih Warna Background.</h3>

            <?php 
                if(!empty($_GET["pick-color1"])) {
                    ?> 
                    
                    <style>
                        .container{
                            Background: linear-gradient(<?= $_GET["pick-color1"]; ?>, <?= $_GET["pick-color2"]; ?>);
                        }
                    </style>
                    
                    <?php
                }
            ?>

            <div style="border: 2px black solid; display: inline-block; text-align: center; margin-left: 35%; padding: 10px;">

                <form action="" method="get">
                    <label for="pick-color1">Pilih kombinasi warna untuk background<br></label>
                    <input type="color" name="pick-color1"> <input type="color" name="pick-color2">
                    <br>
                    <button type="submit">Terapkan</button><br><br>
                </form>
            </div>

    </div>
    
</body>
</html>