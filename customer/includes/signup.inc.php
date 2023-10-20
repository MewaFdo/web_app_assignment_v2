<?php

// Check if the user has submitted the form.
if (isset($_POST["submit"])) {

    // Get the form data.
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    // Validate the form data.
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat)) {
        header("Location: signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username)) {
        header("Location: signup.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email)) {
        header("Location: signup.php?error=invalidemail");
        exit();
    }

    if (pwdMathch($pwd, $pwdRepeat)) {
        header("Location: signup.php?error=pwdnomatch");
        exit();
    }

    // Check if the username or email already exists in the database.
    require_once 'functions.inc.php';
    if (uidExists($username, $email)) {
        header("Location: signup.php?error=usertaken");
        exit();
    }

    // Create the user in the database.
    createUser($name, $email, $username, $pwd);

    // Redirect the user to the login page.
    header("Location: login.php");
    exit();
}
