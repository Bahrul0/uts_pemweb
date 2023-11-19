<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds) . $ds;
require_once("{$base_dir}core{$ds}nav.php");
?>
<!-- Menampilkan Data Produk -->
<h1 class="m-4" style="font-weight:bold;">Data produk</h1>
<table border="1" class="table is-fullwidth m-4">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>gambar produk</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require './../config/db.php';
            $products = mysqli_query($db_connect, "SELECT * FROM products");
            $no = 1;
            while ($row = mysqli_fetch_assoc($products)) {
        ?>


            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $row['name']; ?>
                </td>
                <td>
                    <?= $row['price']; ?>
                </td>
                <!-- <td><img src="<?= $row['image']; ?>" width="100"></td> -->
                <td><a href="<?= $row['image']; ?>" target="_blank">unduh</a></td>
                <td>
                    <!-- <a href="../backend/edit? id=<?= $row['id']; ?>" class = "button is-warning is-light" data-target = "#modal">Edit</a> -->
                    <button onclick="openModal();" class="button is-warning is-light">Edit</button>
                    <a href="../backend/delete? id=<?= $row['id']; ?>" class="button is-danger is-light">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<div class="container">
    <div class="modal" id="modal1">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Edit Data</p>
    
            </header>
            <section class="modal-card-body">
                <form method="post" action="./../backend/edit" enctype="multipart/form-data">

                        <label for="Name" class="form-label">Nama</label>
                        <input class="input is-primary" type="text" name="name" id="Name" required>
                   
                        <label for="Price" class="form-label">Harga</label>
                        <input class="input is-primary" type="number" name="price" id="Price" required>
                    
    
                        <label for="Image" class="form-label">Image</label>
                        <input type="file" name="image" id="Image" required>
                        <div class="container">
                            <input type="submit" name="update"  class="button is-primary mt-4" value="Edit">
                            <a class="button is-danger mt-4" href="show">Cancel</a>
                         </div>
                    
                </form>
            </section>
        </div>
    </div>
</div>
<script>
    function openModal() {
        document.getElementById("modal1").classList.add("is-active");
    }
    document.querySelectorAll(
        ".modal-background, .modal-close," +
        ".modal-card-head .delete,.modal-card-foot .button"
    )
        .forEach(($el) => {
            const $modal = $el.closest(".modal");

            $el.addEventListener("click", () => {

                $modal.classList.remove("is-active");
            });
        }); 
</script>
</body>
</body>