<?php
include '../includes/db.php';

?>
<?php
$query = 'SELECT * FROM product';
$result = mysqli_query( $connection,$query );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../style/admin_panel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    

<div class="products">
<h2>Products</h2>
<table>
    <tr class="thead">
        <th>Delete</th>
        <th>Update</th>
        <th>id</th>
        <th>title</th>
        <th>price</th>
        <th>weight</th>
        <th>categorie_id</th>
        <th>image</th>
    </tr>
    <?php
    while ( $res = mysqli_fetch_assoc($result) ) 
    {
    ?>
        <tr>
            <td><a href="delete.php?table=product&id=<?php echo $res['id'] ?>">Delete</a></td>
            <td><a href="update_prod.php?table=product&id=<?php echo $res['id'] ?>">Update</a></td>
            <td><?php echo $res['id'] ?></td>
            <td><?php echo $res['title'] ?></td>
            <td><?php echo $res['price'] ?></td>
            <td><?php echo $res['weight'] ?></td>
            <td><?php echo $res['categorie_id'] ?></td>
            <td><?php echo $res['image'] ?></td>
        </tr>
    <?php	
    }
?>
<tr><th colspan="9"><a href="insert.php?table=product">INSERT</a></th></tr>
</table>
</div>
<div class="categories">
    <h2>Categories</h2>
    <table>
    <tr class="thead">
        <th>Delete</th>
        <th>Update</th>
        <th>id</th>
        <th>title</th>
        <th>image</th>
    </tr>
    <?php
    while ( $cats = mysqli_fetch_assoc($categories) ) 
    {
    ?>
        <tr>
            <td><a href="delete.php?table=product_categories&id=<?php echo $cats['id'] ?>">Delete</a></td>
            <td><a href="update_cat.php?table=product_categories&id=<?php echo $cats['id'] ?>">Update</a></td>
            <td><?php echo $cats['id'] ?></td>
            <td><?php echo $cats['title'] ?></td>
            <td><?php echo $cats['image'] ?></td>
        </tr>
    <?php	
    }
?>
<tr><th colspan="5"><a href="insert.php?table=product_categories">INSERT</a></th></tr>
</table>
</div>
</body>
</html>