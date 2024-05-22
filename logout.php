<?php 
include __DIR__ . "/partials/functions.php";
new_session();
session_destroy();

header("Location: ./index.php");