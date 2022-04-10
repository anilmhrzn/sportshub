<?php
session_start();
$error_message = '';
if (isset($_POST['login'])) {
    include './../../includes/db_config.php';
    $username = mysqli_real_escape_string($conn, $_POST['username-for-login']);
    $password = mysqli_real_escape_string($conn, $_POST['password-for-login']);
    echo $username;
    echo $password;

    $sql = "SELECT id , username , password FROM customers where username='$username' && password='$password'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {

        // output data of each row
        if ($row = $result->fetch_assoc()) {

            // session_unset();
            //for unseting session used in activation link
            $_SESSION['USER_ID'] = $row['id'];
            $_SESSION['USER_NAME'] = $row['username'];
            // $error_message = 'sucessful';
            header('location:./../main-page.php');
        }
    } else {
        $error_message = "please enter valid <br> username and password";
        // $error_message ='sucessful';
    }
}
?>
<div>

    <div class="companyNameCenter">
        <a id="companyname" class="company-name"> Sports Hub </a>
    </div>
    <div class="whole-page">
        <form action="" id="for-form" method="POST">
            <h1 class="text-align-center"> login form</h1>
            <p>
                <label for="email">
                    Username:

                </label>
                <br> <input type="text" name="username-for-login" id="username-for-login" class="login-error">
            </p>
            <p>
                <label for="password">
                    Password:
                </label>
                <br> <input type="password" name="password-for-login" id="password-for-login" class="login-error">
            </p>
            <p id="error-message">
                <?php echo $error_message; ?>
            </p>
            <p class="text-align-center">

                <input type="submit" name="login" value="login">
            </p>
            </p>
        </form>

    </div>
    <p>
        <a href="http:\\localhost\FoodOrdering\for-login-register\registration-form.php">Create A New Account</a>
        <br>
        <span>
            <?= (isset($_SESSION['notice'])) ?  $_SESSION['notice'] : ''; ?>
            <?= (isset($_SESSION['eMsg'])) ? $_SESSION['eMsg'] : '' ?>
        </span>
    </p>
</div>