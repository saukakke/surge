<?php
    session_start();

    session_unset($_SESSION['user']);
    session_destroy($_SESSION['user']);

    header("Location: ../index.html");
?>