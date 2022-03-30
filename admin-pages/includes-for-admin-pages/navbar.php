<body>
    <nav class="display-grid">
        <ul class="company-logo remove-list-style">
            <li class="first-part">
                Sports
            </li>
            <li class="second-part">
                Hub
            </li>
        </ul>
        <ul class="remove-list-style  options-navbar">
            <li>
                <span>
                    Home
                </span>
            </li>
            <li class="for-products">
                <span>
                    Category
                </span>
                <!-- <ul class="dropdown-block remove-list-style">
                    <li>Football</li>
                    <li>Cricket</li>
                    <li>BasketBall</li>
                    <li>Table Tennis</li>
                    <li>Volley Ball</li>
                    <li>Badminton</li>

                </ul> -->
                <ul class="dropdown-block remove-list-style">
                    <?php
                    include './../../includes/db_config.php';
                    $sql = 'SELECT name FROM categories';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                            <li onclick="show_certain_page('<?= $row['name'] ?>');">
                                <?= $row['name'] ?>
                            </li>
                    <?php
                        }
                    } else {
                        echo 'no records to show.';
                    }
                    ?>
                    <!-- <li onclick="show_certain_page('football-page.php');">Football</li>
                        <li onclick="show_certain_page('cricket-page.php');">Cricket
                        </li>
                        <li onclick="show_certain_page('basketball-page.php');">BasketBall
                        </li>
                        <li onclick="show_certain_page('tabletennis-page.php');">Table Tennis
                        </li>
                        <li onclick="show_certain_page('volleyball-page.php');">Volleyball
                        </li>
                        <li onclick="show_certain_page('badminton-page.php');">Badminton
                        </li> -->
                </ul>
            </li>
            <li class="for-products">
                <span>
                    Customers
                </span>
                <ul class="dropdown-block remove-list-style">
                    <li>View</li>
                    <li>Add</li>
                    <li>Remove</li>
                    <li>block</li>
                </ul>
            </li>
        </ul>
    </nav>
    