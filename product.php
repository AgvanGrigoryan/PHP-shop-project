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
    <title>Barev</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include 'includes/header.php';
    ?>
    <?php
    $id = $_GET['id'];
    $result = mysqli_query($connection,"SELECT * FROM `product` WHERE `id`='$id'");
        if(mysqli_num_rows($result) == 0){
            echo 'Product as id=' . $id . ' not found in database';
        }else{
            while( $this_prod = mysqli_fetch_assoc($result) ) {
                ?>
                <div class="product">
                    <div class="product__img-box">
                        <img class="prod__img" src="images/products/<?php echo $this_prod['image'] ?>_764x600.jpg" alt="product image">
                    </div>
                    <hr>
                    <div class="prod__info">
                        <div class="points"><p>Title: </p><h2 class="prod__title title"><?php echo $this_prod['title']; ?></h2></div>
                        <div class="points"><p>Pcs\Kg: </p><h2 class="prod__weight title"><?php echo $this_prod['weight']; ?></h2></div>
                        <div class="points"><p>Sales: </p><h2 class="prod__sales title"><?php echo $this_prod['sales']; ?></h2></div>
                        <?php
                        $prod_cat = false; 
                        foreach($categories as $cat){
                            if( $cat['id']== $this_prod['categorie_id']){
                                $prod_cat = $cat;
                                break;
                            }
                        }
                        ?>
                        <div class="points">
                            <p>Category: </p>
                            <a href="category.php?id=<?php echo $prod_cat['id']; ?>" class="prod__category title"><?php echo $prod_cat['title'];?></a>
                        </div>
                        <div class="points"><p>Price: </p><p class="prod__price title"><?php echo $this_prod['price'];?> &#x58f</p></div>
                        <div class="product__bottom-box">
                            <button type="submit" class="product__buy-btn">BUY</button>
                        </div>
                        
                    </div>
                                
                </div>
            <?php
                
            }
        }
    ?>
    <div class="comment__box">
        <h2 class="title">Comments</h2>
        <div class="comment__box-inner">Comming soon</div>
    </div>
    
    <script src="script/script.js"></script>
</body>
</html>
