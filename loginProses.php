<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$query = "select * from user where username = '$username' and password='$password'";
$result = mysqli_query($connect, $query);
$rowcount = mysqli_num_rows($result);
if ($rowcount > 0) {
    echo "Anda berhasil login ";
    echo "<a href='adminDashboard.php'>Admin</a>";
} else {
    echo "Anda gagal login ";
    echo " <a href='loginForm.php'>Login Form</a>";
    mysqli_close($connect);
}
