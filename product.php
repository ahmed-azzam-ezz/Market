  <!DOCTYPE html>
  <html lang="ar">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>  منتجات |  Products </title>
      <link rel="stylesheet" href="CSS/index.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>
  <style>
    p {
font-family: 'Cairo', sans-serif;
font-weight: bold;
}
#zz{
  text-align: center;
}
</style>
  <center>
    <p>جميع المنتجات</p>
</center>

<div class="container">
  <div class="row">
    <?php
    include('config.php');
    $reslult = mysqli_query($conn, "SELECT * FROM prod");
    while ($row = mysqli_fetch_array($reslult)) {
        echo "
        <div class='col-md-4'>
          <div class='card' style='width: 18rem;'>
            <img src='images/$row[image]' class='card-img-top'>
            <div class='card-body'>
              <h5 class='card-title'>$row[name]</h5>
              <p class='card-text'>$row[price]</p>
              <a href='delete.php?id=$row[id]' class='btn btn-danger'>حذف منتج</a>
              <a href='update.php?id=$row[id]' class='btn btn-primary'>تعديل منتج</a>
            </div>  
          </div>
        </div>
        ";
    }
    ?>
  </div>
  <a name=zz href="index.php">Back</a>
</div>
    </div>
  </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>
