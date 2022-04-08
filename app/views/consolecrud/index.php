<?php
include __DIR__ . '/../navbar.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Homepage</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <div class="row">
    <div class="col-2"></div>

    <div class="col-8">
        <div class="row">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <form action="consolecrud" method="post"><button type="submit" name="refresh-page" class="btn save-btn text-dark btn-lg">Refresh</button></form>
                </div>
                <h4 class="text-light">Consoles</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead class="usr-tab-head">
                        <tr class="text-light">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th>Photo Link</th>
                            <th>Region</th>
                        </tr>
                        </thead>
                        <tbody class="usr-tab-bod">
                        <?php foreach ($consoles as $console) { ?>
                            <tr>
                                <form function="consoletable" method="post">
                                    <td><input name="id-console" class="idcol" type="number" value="<?= $console->getId() ?>" readonly></td>
                                    <td><input name="name-console" class="namecol" type="text" value="<?= $console->getName() ?>"></td>
                                    <td><input name="description-console" class="descriptioncol" type="text" value="<?= $console->getDescription() ?>"></td>
                                    <td><input name="price-console" class="pricecol" type="number" value="<?= $console->getPrice() ?>"></td>
                                    <td><input name="amount-console" class="amountcol" type="number" value="<?= $console->getAmount() ?>"></td>
                                    <td><input name="photos-console" class="photoscol" type="text" value="<?= $console->getPhotos() ?>"></td>
                                    <td><input name="region-console" class="regioncol" type="text" value="<?= $console->getRegion() ?>"></td>
                                    <td><button class="btn save-btn text-dark" name="save-console" type="submit">Save</button></td>
                                    <td><button class="btn btn-danger text-light" name="del-console" type="submit">Delete</button></td>
                                </form>
                            </tr>
                        <? } ?>
                        </tbody>
                    </table>
                    <button class="btn btn-success"><a href="newconsole" class="text-light">New Console</a></button>
                    <div class="alert alert-danger" role="alert"><?= $error ?></div>
                    <div class="alert alert-success" role="alert"><?= $confirmation ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-2"></div>
    </div>

    <!-- Custom JS for loading in the products -->
    <script src="js/productpage.js"></script>
    </body>

    </html>

<?php
include __DIR__ . '/../footer.php';
?>