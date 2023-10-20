<?php 
include_once 'header.php';
?>


<div class="container" id="customer_login">
        <div class="container" id="login_page_form">
            <form action="includes/signup.inc.php" method="post">
                <h2>Sign Up</h2>
                <div class="login_form">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Mario Fernando">
                </div>
                <div class="login_form">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="mariof@gmail.com">
                </div>
                <div class="login_form">
                    <label>Username</label>
                    <input type="text" name="uid" placeholder="mariof">
                </div>
                <div class="login_form">
                    <label>Password</label>
                    <input type="password" name="pwd" placeholder="fm$29%hg5l0">
                </div>
                <div class="login_form">
                    <label>Repeat</label>
                    <input type="password" name="pwdrepeat" placeholder="fm$29%hg5l0">
                </div>
                <div class="adminpage_submitbtn">
                    <button type="submit" id="login_page_submit_btn">Register</button>
                </div>
            </form>
        </div>
        <p class="reg_link_p">Already Registered? <a href="login.php">Go Back!</a></p>
    </div>



<?php 
include_once 'footer.php';
?>