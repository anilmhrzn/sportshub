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
    <div>
        <img src="<?= $row['image_address'] ?>" height="200vh">
    </div>
    <div><?= $row['name'] ?><br></div>
    <div class="center-center"><button>order now1</button></div>
</div>

<?php
    }
} else {
    echo 'hey';
}

?>