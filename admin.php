<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Admin</h1>
    <ul>
        <li>Username : <?= $_POST["username"]; ?></li>
        <li>Password : <?= $_POST["password"]; ?></li>
        <li>Kode : <?= $_POST["kode"]; ?></li>
        <li>Pernyataan : <?= $_POST["tanya"]; ?></li>
    </ul>
    <h3><a href="form.php">Logout</a></h3>
</body>
</html>