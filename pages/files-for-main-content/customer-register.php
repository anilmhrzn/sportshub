<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration bg-dark text-light" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                            <form>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control form-control-lg" />
                                            <label class="form-label" for="firstName">Full Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control form-control-lg" />
                                            <label class="form-label" for="lastName">Address</label>
                                        </div>

                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-md-6 mb-4 ">

                                        <div class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                                            <label for="birthdayDate" class="form-label">Phone Number</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="email" id="emailAddress" class="form-control form-control-lg" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 ">
                                        <div class="form-outline">
                                            <input type="text" class="form-control form-control-lg" id="birthdayDate" />

                                            <label class="form-label" for="phoneNumber">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 ">
                                        <div class="form-outline">
                                            <input type="password" id="emailAddress" class="form-control form-control-lg" />
                                            <label class="form-label" for="emailAddress">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 ">
                                        <div class="form-outline">
                                            <input type="password" id="phoneNumber" class="form-control form-control-lg" />
                                            <label class="form-label" for="phoneNumber">Re-enter Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 ">
                                        <div class=" form-outline">
                                            <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                        </div>

                                    </div>
                                </div>




                            </form>
                            <div>
                <p class="mb-0">Already have an account? <a href="http://localhost/sportshub/pages/files-for-main-content/customer-login.php" class="text-white-50 fw-bold">login</a>
                </p>
                
              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>