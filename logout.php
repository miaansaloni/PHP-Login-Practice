<?php
session_start();
session_destroy();
header('Location: /PHP-Login-Practice/login.php');
