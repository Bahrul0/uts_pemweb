<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Register</h1>
    <form action="./backend/register.php" method="post">
        <label>Nama</label>    
        <input class="form-control" type="text" name="name" placeholder="masukkan nama anda">
        <label>Email</label>
        <input class="form-control" type="email" name="email" placeholder="masukkan email anda">
        <label>Password</label>
        <input class="form-control" type="password" name="password" placeholder="masukkan password anda">
        <label>Konfirmasi Password</label>
        <input class="form-control" type="password" name="confirm" placeholder="masukkan konfirmasi password anda">
        <input class="btn btn-success mt-4" type="submit" value="Register" name="submit">
    </form>

</body>
</html>