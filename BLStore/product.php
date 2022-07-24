<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>BLStore</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              BLStore
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">TRANG CHỦ</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="product.php"> SẢN PHẨM<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""> VỀ CHÚNG TÔI </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">LIÊN HỆ</a>
              </li>
            </ul>
            <div class="user_option-box">
              <a href="">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          SẢN PHẨM
        </h2>
      </div>
      <div class="add-product">
          <button>
            <a class="add-product-link" href="add.php" role="button">Thêm Sản Phẩm</a>
          </button>
        </div>
      <div class="row">
        <?php
              require('connect.php');
              $sql = 'SELECT * FROM `sanpham`';
              
              $result = mysqli_query($conn, $sql);
              
              if(!$result) {
                  die('Query error: [' . $db->error . ']');
              }
              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
          ?>
        <div class="col-md-6 ">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/<?php echo $row['hinh']; ?>" alt="">
              </div>
              <div class="detail-box">
                <h6>
                <?php echo $row['tensanpham']; ?>
                <a onclick="return window.confirm('Bạn muốn xóa không');" href="delete.php?masanpham=<?php echo $row['masanpham']; ?>" class="btn btn-danger delete" style="color:white;"role="button">Xóa</a>
                      
                     
                      <a class="btn btn-primary subbmit" href="edit.php?masanpham=<?php echo $row['masanpham']; ?>" style="color:white;" role="button">Sửa</a>
                </h6>
                <h6>
                  Price:
                  <span>
                  <?php echo $row['gia']; ?>
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                <?php echo $row['ghichu']; ?>
                
                </span>
              </div>
            </a>
          </div>
          
                         
                      
                 
        </div>
        <?php endwhile; ?>
      </div>

     
    </div>
  </section>

  <!-- end shop section -->

 <!-- footer section -->
 <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_detail">
            <h4>
            Thông Tin Liên Hệ
            </h4>
            <p>
            Địa Chỉ: 282 Nơ Trang Long, Phường 12, Quận Bình Thạnh, TP. HCM
            <br>
Họ Tên: Trương Bảo Long
<br>
Email: 187IT20961@vanlanguni.vn
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
            Chính Sách
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                Chính Sách Bảo Mật
                </span>
              </a>
              <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                FAQ
                </span>
              </a>
              <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                Chính Sách Thẻ Thành Viên
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Subscribe
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> Copyright © 2022 TBL Station.
          <a href="#">Powered by K24IT</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>