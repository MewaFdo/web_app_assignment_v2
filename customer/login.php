<?php 
include_once 'header.php';
?>


<div class="container" id="customer_login">
        <div class="container" id="login_page_form">
            <form action="includes/login.inc.php" method="post">
                <h2>LOGIN</h2>
                <div class="login_form">
                    <label>User Name</label>
                    <input type="text" name="uid" placeholder="Email / User Name">
                </div>
                <div class="login_form">
                    <label>Password</label>
                    <input type="password" name="pdw" placeholder="Password">
                </div>
                <div class="adminpage_submitbtn">
                    <button name="cx-login-btn" type="submit" id="login_page_submit_btn">Login</button>
                </div>
            </form>

        </div>
        <p class="reg_link_p">New Here? <a href="signup.php">Register!</a></p>
    </div>

<?php 
include_once 'footer.php';
?>