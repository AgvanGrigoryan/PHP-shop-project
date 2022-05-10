<?php
include 'includes/db.php';
?>
<?php
    $request = $_GET['search_field'];
    if($request == '' or $request ==' '){
        echo 'barev';
    }
    $res = mysqli_query($connection,"SELECT * FROM `product` WHERE `title` LIKE('%{$request}%')");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/search_res.css">
</head>
<body>
    <div class="h1">
        <h1>Your request: '<?php echo $request; ?>' .</h1>
    </div>
    <hr>

    <div class="result">
        <div class="container">
            <div class="result__inner">
                <div class="prod__items">
                <?php
                    if(mysqli_num_rows($res)==0){
                        echo '<p>Results for your request: 0</p>';
                    }else{
                        echo '<p>Results for your request: ' . mysqli_num_rows($res) . '</p><br>';
                        while($search_res = mysqli_fetch_assoc($res)){
                            ?>

                            <div class="prod">
                                <a href="product.php?id=<?php echo $search_res['id']; ?>" >
                                    <div class="prod__img-box">
                                        <img class="prod__img" src="images/products/<?php echo $search_res['image']; ?>_200x200.jpg" alt="">
                                    </div>
                                    <div class="prod__info">
                                        <h2 class="prod__title"><?php echo $search_res['title']; ?></h2>
                                        <?php
                                        $prod_cat = false; 
                                        foreach($categories as $cat){
                                            if( $cat['id']== $search_res['categorie_id']){
                                                $prod_cat = $cat;
                                                break;
                                            }
                                        }
                                    
                                        ?>
                                        <a href="category.php?id=<?php echo $prod_cat['id']; ?>" class="prod__category"><?php echo $prod_cat['title'];?></a>
                                        <p class="prod__price"><?php echo $search_res['price'];?> &#x58f</p>
                                    </div>
                                </a>
                            </div>
                        <?php
                        };
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
    <script src="script/script.js"></script>
</body>
</html>