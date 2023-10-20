<?php 
 include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="The Best Restaurant..">
  
  <title>Signature Cuisine</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="mediaquaries.css">
</head>
<body>  

<div class="container" id="login_page_background">
        <div class="container" id="login_page_form">
            <form action="home.php" method="POST">
                <h2>LOGIN</h2>
                <div class="login_form">
                    <label>User Name</label>
                    <input type="text" name="user" placeholder="User Name">
                </div>
                <div class="login_form">
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="Password">
                </div>
                <div class="adminpage_submitbtn">
                    <button type="submit" id="login_page_submit_btn">Login</button>
                </div>
            </form>
        </div>
    </div>


<?php 
include_once 'footer.php';
?>