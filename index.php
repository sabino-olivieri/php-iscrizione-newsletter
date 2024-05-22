<?php
    include __DIR__ . "/partials/functions.php";
    new_session();
    $message = check_email();

?>


<?php include_once __DIR__ . "/partials/template/head.php" ?>

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

<?php include_once __DIR__ . "/partials/template/footer.php" ?>