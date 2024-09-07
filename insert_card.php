<?php

include('config.php');

if (isset($_POST['add'])) {
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];

    // مكان الصورة المؤقت في الخادم
    $image_location = $_FILES['image']['tmp_name'];
    // اسم الصورة
    $image_name = $_FILES['image']['name'];
    // مسار رفع الصورة النهائي
    $image_up = "images/" . $image_name;

    // إدخال البيانات في قاعدة البيانات
    $insert = "INSERT INTO addcard (name, price) VALUES ('$NAME', '$PRICE')";
    mysqli_query($conn, $insert);

    // نقل الصورة من المكان المؤقت إلى المجلد النهائي
    if (move_uploaded_file($image_location, $image_up)) {
        echo "<script>alert('تم رفع الصورة بنجاح')</script>";
    } else {    
        echo "<script>alert('هناك مشكلة في رفع الصورة')</script>";
    }
}
header('location: card.php');
?> 