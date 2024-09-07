<!DOCTYPE html>
  <html lang="ar">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>  My Card </title>
      
      <link rel="stylesheet" href="/images/3bb40a178883205.64efa93f5a341.png">
      <link rel="stylesheet" href="/css/index.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>
  <style>
    p {
      font-family: 'Cairo', sans-serif;
      font-weight: bold;

      }
      /* تصميم الجدول بالكامل */
/* ضبط محاذاة النص أفقيًا وعموديًا */
table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
  font-size: 18px;
  text-align: center; /* محاذاة النص أفقيًا في المنتصف */
}

th, td {
  padding: 12px 15px;
  border: 1px solid #ddd;
  vertical-align: middle; /* محاذاة النص عموديًا في المنتصف */
}

/* تنسيق إضافي */
th {
  background-color: rgba(68, 1, 255, 0.1);;
  color: #333;
    
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #f1f1f1;
}


/* تصميم الصفوف الفردية والزوجية */
tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:nth-child(odd) {
  background-color: #fff;
}

/* تأثير عند مرور الماوس على الصف */
tr:hover {
  background-color: #f1f1f1;
  transition: background-color 0.3s;
}

/* إضافة ظل خفيف للجدول */
table {
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* جعل النص غامق في رأس الجدول */
th {
  font-weight: bold;
}
.btn-danger {
  background-color: #ff4d4d; /* يمكنك تعديل اللون */
  border: none;
  font-size: 16px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

/* تأثير عند مرور الماوس */
.btn-danger:hover {
  background-color: #e60000;
}

</style>
  <center>
    <h3>منتجاتك المحجوزة</h3>
</center>
<div class="container">
  <div class="row">
    <?php
    include('config.php');
    $reslult = mysqli_query($conn, "SELECT * FROM addcard");
    while ($row = mysqli_fetch_array($reslult)) {
        echo "
        <center>
          <main>
            <table classs='table'>
              <thead>
                <tr>
                  <th scope='col'>Product Name</th>
                  <th scope='col'>Product Price</th>
                  <th scope='col'>Delete Product</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>$row[name]</td>
                  <td>$row[price]</td>
                  <td><a href='del_card.php?id=$row[id]' class='btn btn-danger'> Delete Product </a></td>
                </tr>
              </tbody>
        </table>
        </center>
        ";
    }
    ?>
    <center>
      <a href="shop.php">Back to product page </a>
    </center>
  </div>
</div>