<!-- Login -->

<?php

session_start();
include 'auth/conn.php';
error_reporting();



if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $sql = mysqli_query($conn, "SELECT * FROM user WHERE uname= '$uname' AND pass= '$pass'");

    if ($sql->num_rows > 0) {

        $row = mysqli_fetch_assoc($sql);

        $_SESSION['uname'] = $row['uname'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];

        header("Location: ./admin/index.php?page=home");
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "You logged in successfully!";
        $_SESSION['icon'] = "success";
    } else {

        header("Location:index.php?error=Incorrect Username / Password");
    }
}
?>