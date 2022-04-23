
<button type="button" class="btn btn-dark m-5" id="backFromEditUsers" onclick="showUser();">Back</button><span>Adding new product</span>
<section>
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration bg-dark text-light" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <!-- <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3> -->
                        <!-- <form action="" method="POST" enctype="multipart/form-data"> -->

                        <div>

                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <input type="text" id="nameOfProduct" name="nameOfProduct" class="form-control form-control-lg" />
                                        <!-- value="<?= $row['name'] ?>" -->
                                        <label class="form-label" for="nameOfProduct">Name of the product</label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4 ">
                                    <div class="form-outline">
                                        <input type="number" class="form-control form-control-lg" id="username" name="username" />

                                        <label class="form-label" for="username">Price</label>
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <select class="form-select">
                                            <option selected>Select the category</option>
                                            <option value="1">Football</option>
                                            <option value="2">Cricket</option>
                                            <option value="3">BasketBall</option>
                                            <option value="4">Table Tennis</option>
                                            <option value="5">Volleyball</option>
                                            <option value="6">Badmintion</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <select class="form-select">
                                            <option selected>Select the sub-category</option>
                                            <option value="1">T-shirt</option>
                                            <option value="2">Shorts</option>
                                            <option value="3">Gloves</option>
                                            <option value="4">Shocks</option>
                                            <option value="5">Caps</option>
                                            <option value="6">Tools</option>
                                            <option value="7">Gaurds</option>
                                            <option value="8">Shoes</option>
                                        </select>
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input class="form-control" type="file" id="formFile">
                                        <label for="formFile" class="form-label  ">Default file input example</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 ">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea" style="color: black;">Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6 mb-4 ">
                                    <div class="form-outline">
                                        <input class="btn btn-primary btn-lg" type="submit" value="Add" onclick="sendData()"/>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                        <!-- </form> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>