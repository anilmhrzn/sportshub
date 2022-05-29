TODO: do change password remove html head tags
<?php
// session_start();
// if(isset($_SESSION['USER_ID']) && isset($_SESSION['USER_NAME']))
// {
// if($_POST){

// include './includes/db_config.php';
// $query="select password from customers where username=".$_SESSION['USER_NAME'] ."AND where id=".$_SESSION['USER_ID'];
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
   while($row=mysqli_fetch_assoc($result)){
       $password=$row['password'];

   } 
}else{
    echo "error. Please try again later or call us at +997-9823673702.";
}
// }
?>

    <div class="d-flex justify-content-center">
        <form  class="my-5 w-50">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name">
                message for old password
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
                message for new password
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
                message for new password
            </div>
        </div>
        <div class="my-5 d-flex justify-content-center">
            <button type="button" class="btn btn-success">Success</button>
        </div>
    </form>
</div>
<?php
// }
?>