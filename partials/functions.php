<?php
function check_email() {
    $result = [
        "text" => "",
        "result" => ""
    ];
    if (isset($_POST["email"]) && $_POST["email"] !== "") {
        if (str_contains($_POST["email"], ".") && str_contains($_POST["email"], "@")) {
            $result["text"] = "Email corretta!";
            $result["result"] = "alert-success";
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
