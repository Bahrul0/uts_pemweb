<?php 
    session_start();
    if($_SESSION['role']!= 'admin'){
        session_destroy();
        header('Location:index.php');
    }

?>
<?php
  $ds = DIRECTORY_SEPARATOR;
  $base_dir = realpath(dirname(__FILE__)  . $ds) . $ds;
  require_once("{$base_dir}core{$ds}nav.php");
?>
    <h1 style="font-size:2rem;" >Selamat datang Administrator: <?php echo $_SESSION['name'];?></h1>
    <!-- <a href="./backend/logout.php" >Logout</a> -->
</body>
</html>