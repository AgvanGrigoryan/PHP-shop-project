<?php
    include 'includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php $result = mysqli_query($connection,'SELECT `title` FROM `product` WHERE `id`=3'); if($name=mysqli_fetch_assoc($result)){ echo ($name['title']);};?></title> -->
    <title>php Product name</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
        include 'includes/header.php';
    ?>
    <script src="script/script.js"></script>
</body>
</html>
