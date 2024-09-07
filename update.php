<!DOCTYPE html>
<html lang="ar">
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
    <link rel="stylesheet" href="/images/3bb40a178883205.64efa93f5a341.png">
    <link rel="stylesheet" href="css/index.css" class="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head> <!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
    <link rel="stylesheet" href="/images/3bb40a178883205.64efa93f5a341.png">
    <link rel="stylesheet" href="css/index.css" class="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head> 
<body>

<?php
    include('config.php');

    // التحقق من وجود id في $_GET
    if (isset($_GET['id'])) {
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
    <center>
     <div class="main" grid text-center>
        <form action="up.php" method="post" enctype="multipart/form-data">
            <h2> Update Products</h2>
            <input type="text" name="id" placeholder="id" value="<?php echo $data['id']; ?>">
            <br>
            <input type="text" name="name" placeholder="name" value="<?php echo $data['name']; ?>">
            <br>
            <input type="text" name="price" placeholder="price" value="<?php echo $data['price']; ?>">
            <br>
            <input type="file" id="file" name="image"  placeholder="image" >
            <br>
            <label for="file">تحديث صورة المنتج </label>
            <button name="update" type="submit"> Edit is submit</button>
            <br><br>
            <a href="product.php">عرض كل المنتجات</a>
        </form>
        </div>
        <p>Developer By Ahmed Ezz</p>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
</body>
</html>
