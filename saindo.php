<?php
        session_start();
        unset($_SESSION['Nome']);
        unset($_SESSION['CPF']);
        header('Location: login.php');
?>