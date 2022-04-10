<div class="grid-four">
    <?php
    $sub_categories_name = $_GET['sub_categories_name'];
    $categoryName = $_GET['categoryName'];
    include './../includes/db_config.php';
    $sql = "SELECT products.id,products.name,products.description,products.image_address,products.price FROM `products` WHERE 
category_id IN(SELECT `categories`.`id` FROM `categories` WHERE `categories`.`name`='$categoryName' ) 
AND products.sub_categories_id IN(SELECT `sub_categories`.`id` FROM `sub_categories`  WHERE `sub_categories`.`name`='$sub_categories_name' )";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <div>

                <img src="<?= $row['image_address'] ?>" alt="image not available" class="product-image"><br>
                <p >
                    R.s.
                    <?= $row['price'] ?>
                </p>
                <p>
                    <?= $row['name'] ?>                </p>
                <p>
                    <?= $row['description'] ?>
                </p>
                
                <input type="number" id="productQunatity" name="qunatity" placeholder="Quantity">
                <button class="add_to_cart" name="add_to_cart" onclick="add_to_cart(<?= $row['id'] ?>,'<?= $row['image_address'] ?>','<?= $row['name'] ?>','<?= $row['price'] ?>');">Add To Cart</button>
            </div>
    <?php
        }
    } else {
        echo 'no records to show.';
    }

    ?>
</div>