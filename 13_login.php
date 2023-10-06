<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $uid = $_POST['userid'];
    $pw = $_POST['password'];
    if($uid == "admin" && $pw == "admin")
    {
        session_start();
        $_SESSION['sid'] = $uid;
        echo "Logged in successfully";
    }
    ?>
</body>
</html>
