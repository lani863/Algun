<?php
include 'includes/db_connect.php'; // Koneksi ke database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Interaktif</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1>Selamat Datang di Website Interaktif!</h1>
    <form method="POST" action="">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Kirim</button>
    </form>
    <div id="response"></div>

    <script src="scripts/script.js"></script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    echo "<script>document.getElementById('response').innerHTML = 'Halo, $name!';</script>";
}
?>
