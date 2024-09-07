<?php
    include('config.php');

    // التحقق من وجود id في $_GET
    if (isset($_GET['id'])) 
    {
        // تطهير قيمة id لتجنب SQL Injection
        $ID = mysqli_real_escape_string($conn, $_GET['id']);

        // تنفيذ استعلام SQL للحصول على البيانات
        $up = mysqli_query($conn, "SELECT * FROM prod WHERE id ='$ID'");
    
        // التحقق من نجاح الاستعلام
        if ($up && mysqli_num_rows($up) > 0) {
            // جلب البيانات
            $data = mysqli_fetch_array($up);
        } else {
            echo "No data found for this ID.";
        }
    } else {
        echo "No ID provided.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> تاكيد شراء المنتج </title>
    <link rel="stylesheet" href="/images/3bb40a178883205.64efa93f5a341.png">
    <link rel="stylesheet" href="css/index.css" class="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    input{
        display: none;
    }
    .main{
        width: 30%;
        padding: 20px;
        box-shadow: 1px 1px 10px silver;
        margin-top: 50px;
    }
</style>

</head> 
<body>
  <center>
    <div class="main">
    <form action="insert_card.php" method="post" enctype="multipart/form-data">
        <h2>هل فعلا تريد شراء المنتج</h2>
        <input type="text" name="id" placeholder="id" value="<?php echo $data['id']; ?>">
        <input type="text" name="name" placeholder="name" value="<?php echo $data['name']; ?>">
        <input type="text" name="price" placeholder="price" value="<?php echo $data['price']; ?>">
        <button name="add" type="submit" class="btn btn-warning">تاكيد اضافة المنتج الي العربة</button>
        <br>
        <a href="shop.php">الرجوع لصفحة المنتجات</a>
    </form>
    </div>
  </center> 
</body>
</html>