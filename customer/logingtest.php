<?php 
include_once 'header.php';
?>


<div class="container" id="customer_login">
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