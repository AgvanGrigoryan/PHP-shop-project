<?php
include '../includes/db.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login as Admin</title>
    <link rel="stylesheet" href="../style/phpmyadmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="admin__login">
            <form action="index.php" method="GET">
                <input type="text" name="login" placeholder="login" >
                <input type="password" name="password" placeholder="password" >
                <input type="submit" value="Send" name="submit">
            </form>
        </div>
    </div>
</body>

<?php
if (isset($_GET['submit'])) {
    $login = $_GET['login'];
    $password = $_GET['password'];
    $query = "SELECT * FROM `admins` WHERE `login`= '$login' AND `password`= '" . md5($password)."'";
    $count = mysqli_query($connection, $query);
    if(mysqli_num_rows($count) == 0){
        echo '<div>blabla</div>';
    }else {
        header( 'Location: admin_panel.php', true, 307 ); 
    }
    
}
?>


