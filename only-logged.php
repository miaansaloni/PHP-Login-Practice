<?php
include_once __DIR__ . '/includes/init.php';
if (!$user_from_db) header('Location: /PHP-Login-Practice/login.php');

include_once __DIR__ . '/includes/initial.php';
?>
    <h1>Sono solo per utenti loggati</h1>

<?php
include __DIR__ . '/includes/end.php';
