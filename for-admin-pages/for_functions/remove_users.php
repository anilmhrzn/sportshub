<?php 
$id=$_GET['id'];
include './../../includes/db_config.php';
$query="UPDATE `customers` SET `status` = '0' WHERE `customers`.`id` = $id;";
if ($conn->query($query) === TRUE) {
    echo "Customer Removed Sucessfully";
  } else {
    echo "Error Removing customer: " . $conn->error;
  }
  
  $conn->close();
?>