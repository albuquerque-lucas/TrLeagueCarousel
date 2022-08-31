<?php

require 'connection.php';
include 'class/Patrocinadores.php';
$imgPath = 'img/';
$controleImagemAtiva = 2;

$patrocinio = new Patrocinadores($mysql);
$patrocinadores = $patrocinio->listaPatrocinio();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>


    <div class="carousel-container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

            <?php foreach($patrocinadores as $parceiro):

                if($controleImagemAtiva == 2){ ?>

                <div class="carousel-item active">
                    <img src="<?= $imgPath.$parceiro['imagem_nome']?>" class="d-block w-100" alt="...">
                </div>

                <?php $controleImagemAtiva = 1; } else{?>

                    <div class="carousel-item ">
                        <img src="<?= $imgPath.$parceiro['imagem_nome']?>" class="d-block w-100" alt="...">
                    </div>

                <?php } ?>

            <?php endforeach;?>

            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>