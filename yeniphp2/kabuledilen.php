
<?php
include("baglanti.php");

if (!$baglan) {
    die("Veritabanı bağlantı işlemi başarısız: " . mysqli_connect_error());
}

if (isset($_POST['approve'])) {
    $id = $_POST['photo_id'];
    $sql = "UPDATE fotograf SET status='approved' WHERE id=$id";
    if (mysqli_query($baglan, $sql)) {
        echo "Fotoğraf başarıyla onaylandı.";
    } else {
        echo "Fotoğraf onaylanırken bir hata oluştu: " . mysqli_error($baglan);
    }
}

mysqli_close($baglan);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotoğraf Onaylama</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <a href="admin.php" class="back-button">Geri Dön</a>
</body>
</html>