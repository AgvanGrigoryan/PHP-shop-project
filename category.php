<?php
include 'includes/db.php';

$cat_id = $_GET['id'];
$res = mysqli_query($connection,"SELECT * FROM `product` WHERE `categorie_id`='$cat_id'");
foreach($categories as $current_cat){
    if($current_cat['id'] == $cat_id){
        $this_cat = $current_cat;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/search_res.css">
</head>
<body>
    <div class="h1">
        <h1>Categorie: '<?php echo $this_cat['title']; ?>' .</h1>
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
