<!DOCTYPE html>
<?php
require 'connect.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Wallpapers</title>
  </head>
  <body>

    <div class = "container">
      <h1>WALLPAPER WORLD!</h1>
      <h2>4K WALLPAPERS!</h2>
      <h4>Free To download ----> Just Click Download Button<--------- </h4>
      <div class="btn-group">
        <button onclick="window.location.href = 'index.php'">1K wallpapers</button>
        <button onclick="window.location.href = '2k.php'">2k Wallpapers</button>
        <button onclick="window.location.href = '4k.php'">4k wallpapers</button>
      </div>
    </div>
    <div class="row">
      <?php
          $sql = "SELECT * from wallpaper_table where resolution = '3'";
          $result = $conn->query($sql);
          while($row =$result->fetch_assoc()) {
            $img_link = $row["imagePath"];
            ?>
        <div class="column">
        <img src="img/<?php echo $img_link ?>" alt="" style="width:100%"/>
        <a href="img/<?php echo $img_link ?>" download <button class="button button3">Download Wallpaper</button></a>

       </div>
       <?php
        }
        ?>

     </div>

  </body>
</html>
