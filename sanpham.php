<!DOCTYPE html>
<html>
<head>
  <title>Sản phẩm - Laptop Store</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Laptop Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="trangchu.php">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sanpham.php">Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="giohang.php">Giỏ hàng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Đăng xuất</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
  <section id="product-details" class="container">
    <div class="row">
      <?php
        $conn = new mysqli("localhost", "root", "", "quanlysinhvien");
        if ($conn->connect_error) {
          die("Kết nối database thất bại: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM laptops";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $tenlaptop = $row["tenlaptop"];
            $gia = $row["gia"];
            $anh = $row["anh"];
            $mota = $row["mota"];
            
            echo '<div class="col-md-4">
                    <div class="card mb-4">
                      <img src="'.$anh.'" class="card-img-top" alt="'.$tenlaptop.'">
                      <div class="card-body">
                        <h5 class="card-title">'.$tenlaptop.'</h5>
                        <p class="card-text">'.$mota.'</p>
                        <a href="#" class="btn btn-primary" onclick="addToCart(\''.$tenlaptop.'\', '.$gia.')">Thêm vào giỏ hàng</a>
                      </div>
                    </div>
                  </div>';
          }
        } else {
          echo '<div class="col">
                  <p class="text-center">Không có sản phẩm.</p>
                </div>';
        }
        
        $conn->close();
      ?>
    </div>
  </section>
  
  <footer >
    <p>&copy; 2023 Laptop Store. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function addToCart(productName, productPrice) {
      var cartItems = localStorage.getItem("cartItems");
      
      if (cartItems) {
        cartItems = JSON.parse(cartItems);
        
        var isProductInCart = cartItems.some(function(item) {
          return item.name === productName;
        });
        
        if (isProductInCart) {
          alert("Sản phẩm đã có trong giỏ hàng");
          return;
        }
        
        cartItems.push({ name: productName, price: productPrice });
        localStorage.setItem("cartItems", JSON.stringify(cartItems));
      } else {
        cartItems = [{ name: productName, price: productPrice }];
        localStorage.setItem("cartItems", JSON.stringify(cartItems));
      }
      
      alert("Sản phẩm đã được thêm vào giỏ hàng");
    }
  </script>
</body>
</html>
