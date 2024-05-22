<?php
function check_email() {
    $result = "";
    if (isset($_POST["email"]) && $_POST["email"] !== "") {
        if (str_contains($_POST["email"], ".") && str_contains($_POST["email"], "@")) {
            $result = "Email corretta!";
        } else {
            $result = "Email non valida!";
        }
    } elseif (isset($_POST["email"]) &&  empty($_POST["email"])) {
        $result = "La tua mail non può essere vuota!";
    }

    return $result;
}
