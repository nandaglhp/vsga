<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$query = "select * from user where username = '$username' and
password='$password'";
$result = mysqli_query($connect, $query);
$fechResult = mysqli_fetch_assoc($result);
if ($fechResult['role'] == 'admin') {
    echo "Anda berhasil login ";
    echo "<a href='adminDasboard.html'>Admin</a>";
} elseif ($fechResult['role'] == 'user') {
    echo "Anda berhasil login ";
    echo "<a href='userDashboard.html'>User Dasboard</a>";
} else {
    echo "Anda gagal login ";
    echo "<a href='loginForm.php'>Login Form</a>";
}
mysqli_close($connect);
