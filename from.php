<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["New_user"])) {
        echo "تم النقر على زر 'New user'";
    } elseif (isset($_POST["Have_an_account"])) {
        echo "تم النقر على زر 'Have an account'";
    }
}

?>
















</body>
</html>
