
<?php
include '../includes/db.php';
?>

<?php
if (isset($_GET['id'])) {
    $tableName = $_GET['table'];
    $query = "DELETE FROM $tableName WHERE id= ".$_GET['id'];
    $result = mysqli_query($connection,$query);
    header("Location: admin_panel.php");
};

?>