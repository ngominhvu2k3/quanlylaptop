<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlysinhvien";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Kết nối không thành công: " . mysqli_connect_error());
}

// Lấy dữ liệu từ form đăng nhập
$username = $_POST['username'];
$password = $_POST['password'];

// Kiểm tra tài khoản trong cơ sở dữ liệu
$query = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
if ($count == 1) {
  // Đăng nhập thành công
  // Chuyển hướng về trang chủ
  header("Location: trangchu.php");
  exit();
} else {
  // Đăng nhập thất bại
  echo "Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập.";
}

mysqli_close($conn);
?>
