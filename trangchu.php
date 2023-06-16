

<meta charset="utf-8">

<!DOCTYPE html>
<html>
<head>
  <title>Trang chủ - Laptop Store</title>
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
    
  
  <section id="banner">
      <h2 style="color: blue">Chào mừng đến với Laptop Store</h2>
    <img src="https://cdn.trangcongnghe.vn/uploads/posts/2017-10/moi-ban-doc-tai-bo-anh-nen-ngan-ha-tuyet-dep-danh-cho-may-tinh-va-iphone_1.jpg" alt="alt"/>
    <p>Chúng tôi cung cấp các dòng laptop chất lượng với giá cả hợp lý.</p>
    <a href="sanpham.php" class="btn">Xem sản phẩm</a>
  </section>
    <h1>Các sản phẩm nổi bật:</h1><br>
  <section id="product-details">
   <div class="product">
  <img src="https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/uploads/images/tin-tuc/131863/Originals/EVsFtjHXkAAmAhq.jpg" alt="Laptop 1">
  <h2>Laptop 1</h2>
  <p class="price">$999</p>
  <p class="description">Mô tả sản phẩm 1</p>
  <a href="#" class="btn" onclick="addToCart('Laptop 1', 999)">Thêm vào giỏ hàng</a>
</div>
       <div class="product">
  <img src="data:image/jpeg;base64,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" alt="Laptop 2">
  <h2>Laptop 2</h2>
  <p class="price">$1999</p>
  <p class="description">Mô tả sản phẩm 2</p>
  <a href="#" class="btn" onclick="addToCart('Laptop 2', 1999)">Thêm vào giỏ hàng</a>
</div>
       <div class="product">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmy16iiq29zJM2rktJMh6gkO6iA-zG9TAkmQ&usqp=CAU" alt="Laptop 3">
  <h2>Laptop 3</h2>
  <p class="price">$899</p>
  <p class="description">Mô tả sản phẩm 1</p>
  <a href="#" class="btn" onclick="addToCart('Laptop 3', 899)">Thêm vào giỏ hàng</a>
</div>
       <div class="product">
  <img src="https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/uploads/images/tin-tuc/131863/Originals/EVsFtjHXkAAmAhq.jpg" alt="Laptop 4">
  <h2>Laptop 4</h2>
  <p class="price">$599</p>
  <p class="description">Mô tả sản phẩm 4</p>
  <a href="#" class="btn" onclick="addToCart('Laptop 1', 599)">Thêm vào giỏ hàng</a>
</div>
  
  <footer>
    <p>&copy; 2023 Laptop Store. All rights reserved.</p>
  </footer>
 <script>
   function addToCart(productName, productPrice) {
  // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng hay chưa
  var cartItems = localStorage.getItem("cartItems");
  
  if (cartItems) {
    cartItems = JSON.parse(cartItems);
    
    // Kiểm tra từng sản phẩm trong giỏ hàng
    var isProductInCart = cartItems.some(function(item) {
      return item.name === productName;
    });
    
    if (isProductInCart) {
      // Sản phẩm đã tồn tại trong giỏ hàng, hiển thị thông báo
      alert("Sản phẩm đã có trong giỏ hàng");
      return; // Dừng xử lý thêm vào giỏ hàng
    }
    
    // Sản phẩm chưa tồn tại, thêm vào giỏ hàng
    cartItems.push({ name: productName, price: productPrice });
    localStorage.setItem("cartItems", JSON.stringify(cartItems));
  } else {
    // Giỏ hàng chưa tồn tại, tạo mới và thêm sản phẩm vào
    cartItems = [{ name: productName, price: productPrice }];
    localStorage.setItem("cartItems", JSON.stringify(cartItems));
  }
  
  // Thông báo thành công
  alert("Sản phẩm đã được thêm vào giỏ hàng");
}
  </script>
</body>
</html>

