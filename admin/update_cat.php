<?php

include '../includes/db.php';

?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM `product_categories` WHERE `id`=$id";
$result = mysqli_query($connection,$query);
	
while( $this_row = mysqli_fetch_assoc($result) )
{
?>
<form method='POST'>
	<input type="id" name="id" value="<?php echo $this_row['id']; ?>">
	<input type="text" name="title" value="<?php echo $this_row['title']; ?>">
	<input type="text" name="image" value="<?php echo $this_row['image']; ?>">
	<input type="submit" name="send" value="Send">
</form>
<?php
};


if( isset($_POST['send']) )
{
	$upId = $_POST['id'];
	$title = $_POST['title'];
	$image = $_POST['image'];
	$query = "UPDATE `product_categories` SET `title`='$title',  `image`='$image' WHERE `id`=$upId" ;
	$result = mysqli_query($connection,$query);
	if($result){
		echo 'Values updated';
		header("Location: admin_panel.php");
	}
}

?>