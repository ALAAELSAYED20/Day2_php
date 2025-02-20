<?php
session_start();

function registerUser() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

        if (isset($_POST['user_name'], $_POST['password'], $_POST['email'])) { 
            $_SESSION['user_name'] = $_POST['user_name'];
            $_SESSION['password']   = $_POST['password'];
            $_SESSION['email']      = $_POST['email'];
            
            echo "<h3>Registered Successfully!</h3>";
            echo "Username: " . $_SESSION['user_name'] . "<br>";
            echo "Email: " . $_SESSION['email'] . "<br>";
        }
    }
}


function loginUser() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
        if (isset($_POST['login_email'], $_POST['login_password'])) {
            $login_email    = $_POST['login_email'];
            $login_password = $_POST['login_password'];
            
            if (isset($_SESSION['email'], $_SESSION['password']) && 
                $login_email == $_SESSION['email'] && $login_password == $_SESSION['password']) {
                
                echo "<h3>Login Successful!</h3>";
                echo "Email: " . $_SESSION['email'] . "<br>";
            } else {
                echo "Password or email not correct";
            }
        }
    }
}

if (isset($_POST['register'])) {
    registerUser();
} elseif (isset($_POST['login'])) {
    loginUser();
}
?>
