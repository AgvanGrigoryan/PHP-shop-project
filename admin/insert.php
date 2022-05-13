<?php

include '../includes/db.php';

?>
<?php
$table = $_GET['table'];
$query = "SHOW COLUMNS FROM $table";
$result = mysqli_query($connection,$query);

if($table == 'product')
{
    while( $row = mysqli_fetch_assoc($result) )
    {
    ?>
    <form method='GET'>  
        <input type="id" name="<?php echo $row['Field']; ?>" placeholder="<?php echo $row['Field']; ?>">
        <input type="submit" name="send" value="Send">
    </form>
    <?php
    break;
    };


    if( isset($_GET['send']) )
    {
        $insertId = $_GET['id'];
        $title = $_GET['title'];
        $price = $_GET['price'];
        $weight = $_GET['weight'];
        $image = $_GET['image'];
        $categorie_id = $_GET['categorie_id'];
        $sales = $_GET['sales'];
        $query = "INSERT INTO `product`(`title`, `price`, `weight`, `image`, `categorie_id`, `sales`) VALUES ('$title',$price,$weight,'$image',$categorie_id,$sales)" ;
        $result = mysqli_query($connection,$query);
        if($result){
            echo 'Values Inserted';
            header("Location: admin_panel.php");
        }
    }
}
elseif($table == 'product_categories'){
    while( $row = mysqli_fetch_assoc($result) )
    {
    ?>
    <form method='GET'>
        <input type="id" name="<?php echo $row['Field']; ?>" placeholder="<?php echo $row['Field']; ?>">
        <input type="submit" name="send" value="Send">
    </form>
    <?php
    };


    if( isset($_GET['send']) )
    {
        $insertId = $_GET['id'];
        $title = $_GET['title'];
        $image = $_GET['image'];
        $query = "INSERT INTO `product_categories`(`title`,`image`) VALUES ('$title','$image')";
        $result = mysqli_query($connection,$query);
        if($result){
            echo 'Values Inserted';
            header("Location: admin_panel.php");
        }
    } 
}
?>