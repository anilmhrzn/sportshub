<?php
session_start();
$error_message = '';
if (isset($_POST['login'])) {
    include './../../includes/db_config.php';
    $username = mysqli_real_escape_string($conn, $_POST['username-for-login']);
    $password = mysqli_real_escape_string($conn, $_POST['password-for-login']);

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
            header('location:./../index.php');
        }
    } else {
        $error_message = "please enter valid <br> username and password";
        // $error_message ='sucessful';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>
<section class="vh-100 ">
  <div class="container py-4 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-4 text-center" style="height: 90vh;">

            <form action="" id="for-form" method="POST" class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="text" class="form-control form-control-lg" name="username-for-login" />
                <label class="form-label" for="typeEmailX">Username</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password-for-login" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p id="error-message" class="small mb-5 pb-lg-2 text-danger">
                <?php echo $error_message; ?>
            </p>
              <button class="btn btn-outline-light btn-lg px-5" name="login" type="submit" id="login">Login</button>
              <div>
                <p class="mb-0">Don't have an account? <a href="http://localhost/sportshub/pages/files-for-main-content/customer-register.php" class="text-white-50 fw-bold">Register</a>
                </p>
              </div>
</form>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--     
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
</div> -->
</body>
</html>