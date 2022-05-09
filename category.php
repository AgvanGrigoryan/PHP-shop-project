<?php
include 'includes/db.php';

$cat_id = $_GET['id'];

foreach($categories as $current_cat){
    if($current_cat['id'] == $cat_id){
        $this_cat = $current_cat;
        break;
    }
}

echo $this_cat['id'] . " " . $this_cat['title'];


echo '<br>it is categorys page';


?>