<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = $_POST['old-password'];
$old_pass = mysqli_real_escape_string($con, $old_pass);


$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);


$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);

$email=$_SESSION['email'];
$query = "SELECT email, password FROM users WHERE email = '$email'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];
if ($new_pass != $new_pass1) {
    header('location: settings.php?error="The two passwords do not match"');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '$email'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?message=Password Updated');
    } else
        header('location: settings.php?error=Wrong Old Password');
}
?>