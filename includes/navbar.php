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
        <ul class="remove-list-style  options-navbar" >
            <li onclick="loadHomePage();" id="home_navbar_options">  

                <span>Home</span>

            </li>
            <li class="for-products" id="Categories_navbar_options">
                <span>
                    Categories
                </span>
                <ul class="dropdown-block remove-list-style">
                <?php include './../pages/for-dropdown-contents/for_list_of_categories.php'; ?>
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
            <i class="fa-solid fa-cart-shopping cartIcon" onclick="viewCart()"></i>
            <li class="for-login-dropdown">
                <span>
                    <i class="login-icon fab fa-solid fa-right-to-bracket">
                    </i>
                </span>
                <?php if (!isset($_SESSION['USER_ID']) && !isset($_SESSION['USER_NAME'])) {

                ?>
                    <ul class="dropdown-blocks remove-list-style" >
                        <li onclick="window.location.href='./../pages/files-for-main-content/customer-login.php'">
                            <span>Login</span>
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
                            <span>Logout</span>
                        </li>
                        <li>
                            <span>Change Password</span>
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