<?php
require __DIR__.'/Models/classes.php';
require __DIR__.'/instances.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>
    <!-- importo bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- importo fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($prodotti as $prodotto){ ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mt-5">
                        <img src="<?php echo $prodotto->image; ?>" class="img-fluid" alt="test">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->nome; ?></h5>
                            <p class="card-text">
                                <span>Categoria: </span> 
                                <?php echo $prodotto->categoria->nomeCategoria; ?>
                                <i class="<?php echo $prodotto->categoria->icon; ?>"></i>
                            </p>
                            <p class="card-text">
                                <span>Categoria: </span> 
                                <?php echo $prodotto->tipologia->type; ?>
                                <i class="<?php echo $prodotto->tipologia->icon; ?>"></i>
                            </p>
                            <p class="card-text">
                                <span>Prezzo: </span>
                                <?php echo $prodotto->prezzo?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>

