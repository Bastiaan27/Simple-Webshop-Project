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
        <form action="newconsole" method="post">
            <h1 class="h3 mb-3 fw-normal text-light">New Console</h1>

            <div class="form-floating">
                <label for="consoleName" class="form-label">Console Name</label>
                <input type="text" name="consoleName" class="form-control" placeholder="Console Name" required autofocus>
            </div>
            <div class="form-floating">
                <label for="consoleDescription" class="form-label">Console Description</label>
                <input type="text" name="consoleDescription" class="form-control" placeholder="Console Description" required>
            </div>
            <div class="form-floating">
                <label for="consolePrice" class="form-label">Console Price</label>
                <input type="number" name="consolePrice" class="form-control" placeholder="Console Price" required>
            </div>
            <div class="form-floating">
                <label for="consoleAmount" class="form-label">Console Amount</label>
                <input type="number" name="consoleAmount" class="form-control" placeholder="Console Amount" required>
            </div>
            <div class="form-floating">
                <label for="consolePhotos" class="form-label">Console Photo Link</label>
                <input type="text" name="consolePhotos" class="form-control" placeholder="Console Photo Link" required>
            </div>
            <div class="form-floating">
                <label for="consoleRegion" class="form-label">Console Region</label>
                <input type="text" name="consoleRegion" class="form-control" placeholder="Console Region" required>
            </div>
            <button class="btn btn-success" name="add-console" type="submit">Add Console</button>
        </form>
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