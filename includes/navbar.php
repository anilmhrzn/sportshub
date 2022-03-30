<?php
session_start();
?>

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
            <li onclick="loadHomePage();">

                <span>Home</span>

            </li>
            <li class="for-products">
                <span>
                    Category
                </span>
                <ul class="dropdown-block remove-list-style">
                <?php
include './../includes/db_config.php';
$sql='SELECT name FROM categories';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
?>
    
    <li onclick="show_certain_page('<?=$row['name']?>');">
        <?=$row['name']?>
    </li>
<?php
    }
}
else{
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
            <li class="for-feedback">
                <span>
                    Feedback
                </span>
                <ul class="remove-list-style feedback-class">
                    <li>
                        <textarea name="feedback" id="" cols="30" rows="10" placeholder="Enter your feedback here............."></textarea>
                    </li>
                    <li><input type="submit" value="submit"></li>
                </ul>
            </li>
        </ul>
        <ul class="remove-list-style flex-justify-space-between searcbar-login-logout">
            <li><input type="search" name="itemSearch" id="itemSearch"><input type="submit" name="" id=""></li>
            <i class="fa-solid fa-cart-shopping"></i>
            <li class="for-login-dropdown">
                <span>
                    <i class="login-icon fab fa-solid fa-right-to-bracket">
                    </i>
                </span>
                <?php if (!isset($_SESSION['USER_ID']) && !isset($_SESSION['USER_NAME'])) {

                ?>
                    <ul class="dropdown-blocks remove-list-style" onclick="window.location.href='./../pages/files-for-main-content/customer-login.php'">
                        <li>
                            <span>login</span>
                        </li>
                        <li>
                            <span>Register</span>
                        </li>
                    </ul>

                <?php
                } else {
                ?>
                    <ul class="dropdown-blocks remove-list-style">
                        <li onclick="logout_function()">
                            <span>logout</span>
                        </li>
                        <li>
                            <span>change password</span>
                        </li>
                    </ul>
                <?php
                }
                ?>
            </li>
        </ul>
    </nav>
    <script>
        function logout_function() {
            var request = new XMLHttpRequest();
            request.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    location.reload();
                }
            };
            request.open("GET", "./../pages/files-for-main-content/logout.php", true);
            request.send();
        }
    </script>