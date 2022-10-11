<?php
session_start();
unset($_SESSION['login_uzytkownika']);
session_destroy();

echo '<h3>Wylogowanno cie z systemu</h3>';
echo '<a href="loguj.php">Zaloguj sie ponownie</a>';
?>
