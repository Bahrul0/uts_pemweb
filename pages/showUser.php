<?php
    $ds = DIRECTORY_SEPARATOR;
    $base_dir = realpath(dirname(__FILE__) . $ds) . $ds;
    require_once("{$base_dir}core{$ds}navUser.php");
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
                <td>
                    <a href="<?= $row['image']; ?>" target="_blank">unduh</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</body>