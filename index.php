<?php
include_once __DIR__ . '/models/pet_1.php';
include_once __DIR__ . '/models/pet_2.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GC Gatti & Cani</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <!-- PRIMA SEZIONE (cani) -->
        <h1 class="text-center mt-5">Acquista i prodotti per il tuo cucciolo!</h1>
        <div class="row">
            <?php foreach ($products_dog as $product) : ?>
                <div class="col-3 my-4">
                    <div class="card pb-3" style="width: 18rem;">
                        <img src="<?= $product->poster ?>" class="card-img-top border" alt="">
                        <div class="card-body text-center">
                            <h2 class="card-title fs-3"><?= $product->name ?></h2>
                            <p class="card-text"><?= $product->price ?>€</p>
                            <p class="card-text">Prodotto per <?= $product->type ?></p>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- SECONDA SEZIONE (gatti) -->
        <div class="row">
            <?php foreach ($products_cat as $product) : ?>
                <div class="col-3 my-4">
                    <div class="card pb-3" style="width: 18rem;">
                        <img src="<?= $product->poster ?>" class="card-img-top border" alt="">
                        <div class="card-body text-center">
                            <h2 class="card-title fs-3"><?= $product->name ?></h2>
                            <p class="card-text"><?= $product->price ?>€</p>
                            <p class="card-text">Prodotto per <?= $product->type ?></p>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>