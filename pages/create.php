<?php
  $ds = DIRECTORY_SEPARATOR;
  $base_dir = realpath(dirname(__FILE__)  . $ds) . $ds;
  require_once("{$base_dir}core{$ds}nav.php");
?>
    <h1 style="font-size:2rem; font-weight:bold;">Tambah Produk</h1>
    <!-- <a href="show.php">Lihat data produk</a> -->
    <form action="./../backend/create.php" method="post" enctype="multipart/form-data">
      <div class="container m2">
        <input class="input mb-2" type="text" name="name" placeholder="input nama produk">
        <input class="input mb-2" type="number" name="price" placeholder="input harga produk">
        <input type="file" name="image" >
        <div class="container">
          <input class ="button is-primary mt-2" type="submit" value="simpan" name="submit">
        </div>
      </div>
        
        
    </form>
</body>
</html>