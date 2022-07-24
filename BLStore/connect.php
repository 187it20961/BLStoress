<?php
    $conn = mysqli_connect("localhost","root","","banhang");

    mysqli_set_charset($conn, "utf8");
    
    if(!$conn){
        die("Kết Nối Thất Bại" . mysqli_connect_error());
    }
?>