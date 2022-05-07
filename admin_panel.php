<?php
include 'includes/db.php';
?>
<?php
if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $count = mysqli_query($connection, "SELECT * FROM `admins` WHERE `login`= '$login' AND `password`= '$password'");
    if(mysqli_num_rows($count) == 0){
        echo 'You are not registred';
    }else {
        echo 'Hello, ' . $login . '!';
    }
    // header( 'Location: /PHP%20shop%20project/', true, 307 ); 
}
?>
