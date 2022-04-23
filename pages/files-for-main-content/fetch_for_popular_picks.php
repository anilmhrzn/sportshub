<?php
$currentPage = $_GET['currentPage'];


$conn = mysqli_connect('localhost', 'root', '', 'sportshub_db');
if ($conn->connect_error) {
    die('connection failed' . $conn->connect_error);
}
$fetchPopularTrue = "SELECT * from products where popular=1 limit $currentPage,1";
$result = mysqli_query($conn, $fetchPopularTrue);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="inside-popular-picks-grid">
<img src="<?= $row['image_address'] ?>" alt="image not available" class="product-image"><br>
                <p >
                    R.s.
                    <?= $row['price'] ?>
                </p>
                <p>
                    <?= $row['name'] ?>                </p>
                <!-- <p>
                    <?= $row['description'] ?>
                </p> -->
                
                <input type="number" id="productQunatity" name="qunatity" placeholder="Quantity"> <br>
                <button class="add_to_cart" name="add_to_cart" onclick="add_to_cart(<?= $row['id'] ?>,'<?= $row['image_address'] ?>','<?= $row['name'] ?>','<?= $row['price'] ?>');">Add To Cart</button>
</div>

<?php
    }
} else {
    echo 'no records to fetch';
}

?>