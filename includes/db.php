<?php
require 'config.php';
?>
<?php

 $connection = mysqli_connect(
     $config['db']['server'],
     $config['db']['username'],
     $config['db']['password'],
     $config['db']['name']
 );
 if($connection == false){
   echo 'Не удалось подключиться к базе данных!<br>';
   echo mysqli_connect_error();
   exit();
 }
 $categories = mysqli_query($connection,"SELECT * FROM `product_categories`")
?>