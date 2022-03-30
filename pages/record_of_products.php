<div class="grid-four">
    <?php
$sub_categories_name=$_GET['sub_categories_name'];
$categoryName=$_GET['categoryName'];
include './../includes/db_config.php';
$sql="SELECT products.name,products.description,products.image_address FROM `products` WHERE 
category_id IN(SELECT `categories`.`id` FROM `categories` WHERE `categories`.`name`='$categoryName' ) 
AND products.sub_categories_id IN(SELECT `sub_categories`.`id` FROM `sub_categories`  WHERE `sub_categories`.`name`='$sub_categories_name' )";  
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        ?>

            <p>
                <img src="<?=$row['image_address']?>" alt="image not available" class="product-image"><br>
                <?=$row['name']?>
                <br>
                <?=$row['description']?><br>
                <input type="button" value="order-now">
            </p>
            <?php
    }
    
}
else {
    echo 'no records to show.';
}

?>
</div>
