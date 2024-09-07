<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> اضافة منتجات | Online Shop</title>
    <link rel="stylesheet" href="/admin/images/3bb40a178883205.64efa93f5a341.png">
    <link rel="stylesheet" href="css/index.css" class="">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head> 
<body>
    <center>
     <div class="main" grid text-center >
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <h2>موقع تسويق اونلاين </h2>
            <img src="images/3bb40a178883205.64efa93f5a341.png"  width="450px">
            <input type="text" name="name" grid text-center>
            <br>
            <input type="text" name="price" >
            <br>
            <input type="file" id="file" name="image">
            <br>
            <label for="file">اختيار صورة المنتج </label>
            <button name="upload"> رفع المنتج</button>
            <br><br>
            <a href="product.php">عرض كل المنتجات</a>

        </form>
        </div>
        <p>Developer By Ahmed Ezz</p>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>
