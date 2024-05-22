<?php
    include __DIR__ . "/partials/functions.php";

    $message = check_email();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="container mt-5">
        <form action="index.php" method="post">
            <div class="row row-cols-2">
                <div class="col-10">
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Inserisci la tua mail" aria-label="Inserisci la tua mail" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">es: pippo@gmail.com</span>
                    </div>
                </div>

                <div class="col-2 text-end">
                    <input type="submit" class="btn btn-outline-light">
                </div>

                <?php if(!empty($message["text"])) { ?>
                <div class="col-12">
                    <div class="alert <?php echo $message["result"] ?>">
                        <?php echo $message["text"]; ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </form>
    </div>
</body>

</html>