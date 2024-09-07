
<?php
include('config.php');

// التحقق من وجود id في $_POST أو $_GET
if (isset($_POST['id']) && isset($_POST['name'])) {
    // تطهير المدخلات لتجنب SQL Injection
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);


    // إعداد استعلام التحديث
    // إعداد استعلام التحديث ليشمل كل من name و price
    $update = "UPDATE prod SET name = '$name', price = '$price' WHERE id = '$id'";


    // التحقق من أن الاستعلام غير فارغ
    if (!empty($update)) {
        // تنفيذ استعلام التحديث
        if (mysqli_query($conn, $update)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        echo "Update query is empty.";
    }
} else {
    echo "ID or Name is missing.";
}
mysqli_query($conn, $update);
        if (move_uploaded_file($image_location, 'images/' . $image_name)) {
                echo "<script>alert('Done')</script>";
        } else {
                echo "<script>alert('problem')</script>";
        }


// إغلاق الاتصال
mysqli_close($conn);
header('location: index.php');
?>