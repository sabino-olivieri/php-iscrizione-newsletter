<?php
function check_email() {
    $result = [
        "text" => "",
        "result" => ""
    ];

    if (isset($_POST["email"]) && $_POST["email"] !== "") {
        if (str_contains($_POST["email"], ".") && str_contains($_POST["email"], "@")) {
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["auth"] = true;
            header("Location: ./thankyou.php");
        } else {
            $result["text"] = "Email non valida!";
            $result["result"] = "alert-danger";
        }
    } elseif (isset($_POST["email"]) &&  empty($_POST["email"])) {

        $result["text"] = "La tua mail non può essere vuota!";
        $result["result"] = "alert-danger";
    }

    return $result;
}


function new_session() {
    if(!isset($_SESSION)) {
        session_start();
    }

}

function check_auth() {
    if (!isset($_SESSION["auth"]) || $_SESSION["auth"] !== true) {
        header("Location: ./index.php");
    }
}