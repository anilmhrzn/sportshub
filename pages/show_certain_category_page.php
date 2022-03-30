<p class="bgColorForCategory">
    <?= $_GET['categoryName'];?>
</p>
<ul class="remove-list-style  sub_catergories" >

    <?php
    include './../includes/db_config.php';
    $sql = 'SELECT name FROM sub_categories';
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>

            <li onclick="showProductsOfGivenSubcategories('<?= $_GET['categoryName'];?>','<?= $row['name'] ?>')">
                <?= $row['name'] ?>
            </li>
    <?php
        }
    } else {
        echo 'no records to show.';
    }
    ?>
</ul>
<!-- <br>
<br> -->
<!-- <hr> -->
<div id='products'>

</div>