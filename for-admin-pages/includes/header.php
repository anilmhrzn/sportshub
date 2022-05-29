<?php
session_start();
if(!isset($_SESSION['ADMIN_USER_ID'] ) && !isset($_SESSION['ADMIN_USER_NAME']))
{
    header('location:./../for-admin-pages/includes/admin-login.php');
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="./../../../bootstrap-4.1.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./../../../fontawesome-free-6.1.1-web/css/all.min.css">
<link rel="stylesheet" href="./../../../fontawesome-free-6.1.1-web/css/fontawesome.min.css">
</head>