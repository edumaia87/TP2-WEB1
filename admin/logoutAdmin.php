<?php

session_start();

unset($_SESSION['id']);

header('Location: ../views/login.php');
exit();