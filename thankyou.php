<?php 
    include __DIR__ . "/partials/functions.php";

    new_session();
    check_auth();
?>

<?php include_once __DIR__ . "/partials/template/head.php" ?>
<div class="container mt-5">
    <div class="row align-items-center  flex-column">
        <div class="col-6 text-center">
            <div class="alert alert-success ?>">
                <h2>Benvenuto!</h2>
                <h4><?php echo $_SESSION["email"] ?></h4>
            </div>
        </div>

        <div class="col text-center">
            <a class="btn btn-danger" href="index.php">LOGOUT</a>
        </div>
    </div>
</div>
<?php include_once __DIR__ . "/partials/template/footer.php" ?>