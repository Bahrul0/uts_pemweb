<?php 
    session_start();
    if ($_SESSION['role'] != 'admin') {
        echo "
        <script>
        alert('Halaman ini hanya bisa di akses oleh admin');
        window.location = '../profile.php';
        </script>
        ";
    }

    require_once("../config/db.php");
    global $db_connect;
    $base_url = "http://localhost/pemweb-otorisasi-main/upload";
    $products = mysqli_query($db_connect, "SELECT * FROM products");
    $row = mysqli_fetch_assoc($products);
    $id = $row['id'];
    $data = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
    $row = mysqli_fetch_assoc($data);

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_FILES['image']['name'];
        $tempImage = $_FILES['image']['tmp_name'];
        $imageInfo = getimagesize($tempImage);
        if ($imageInfo === false) {
            echo "
            <script>
            alert('File yang diunggah bukan file gambar');
            window.location = '../pages/show.php';
            </script>
            ";
            exit;
        }
        $randomFilename = time() . '-' . md5(rand()) . '-' . $image;
        $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/UTS/upload/' . $randomFilename;
        $upload = move_uploaded_file($tempImage, $uploadPath);
        if ($upload) {
            $updateQuery = "UPDATE products SET 
            name = '$name', 
            price = '$price', 
            image = '/UTS/upload/$randomFilename'
            WHERE id = $id";

            if (mysqli_query($db_connect, $updateQuery)) {
                echo "
                <script>
                alert('Data berhasil diubah');
                window.location = '../pages/show.php';
                </script>
                ";
            } else {
                echo "
                <script>
                alert('Data gagal diubah. Error: " . mysqli_error($db_connect) . "');
                window.location = '../pages/show.php';
                </script>
                ";
            }
        } else {
            echo "
            <script>
            alert('Gagal mengunggah file');
            window.location = '../pages/show.php';
            </script>
            ";
        }
    }
?>