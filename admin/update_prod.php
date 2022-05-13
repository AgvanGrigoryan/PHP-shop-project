<?php

include '../includes/db.php';

?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM `product` WHERE `id`=$id";
$result = mysqli_query($connection,$query);
	
while( $this_row = mysqli_fetch_assoc($result) )
{
?>
<form method='POST'>
	<input type="id" name="id" value="<?php echo $this_row['id']; ?>">
	<input type="text" name="title" value="<?php echo $this_row['title']; ?>">
	<input type="text" name="price" value="<?php echo $this_row['price']; ?>">
	<input type="text" name="weight" value="<?php echo $this_row['weight']; ?>">
	<input type="text" name="categorie_id" value="<?php echo $this_row['categorie_id']; ?>">
	<input type="text" name="image" value="<?php echo $this_row['image']; ?>">
	<input type="submit" name="send" value="Send">
</form>
<?php
};


if( isset($_POST['send']) )
{
	$upId = $_POST['id'];
	$title = $_POST['title'];
	$price = $_POST['price'];
	$weight = $_POST['weight'];
	$categorie_id = $_POST['categorie_id'];
	$image = $_POST['image'];
	$query = "UPDATE `product` SET `title`='$title',  `price`=$price, `weight`=$weight, `categorie_id`=$categorie_id, `image`='$image' WHERE `id`=$upId" ;
	$result = mysqli_query($connection,$query);
	if($result){
		echo 'Values updated';
		header("Location: admin_panel.php");
	}
}

?>