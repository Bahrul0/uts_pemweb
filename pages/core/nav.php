<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar">
  <div class="navbar-brand">
    <h1 class="navbar-item is-primary" style="font-weight:bold; font-size: 2rem; color:#00d1b2; " >Halaman Admin</h1>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="admin">
        Home
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Data Produk
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="create">
            Input 
          </a>
          <a class="navbar-item" href="show">
            Tampilkan
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
            <a class="button is-primary" href="./../backend/logout.php" >
              <strong>Logout</strong>
            </a>
      </div>
    </div>
  </div>
</nav>