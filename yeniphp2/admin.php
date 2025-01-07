
<?php
include("baglanti.php");

if (!$baglan) {
    die("Veritabanı bağlantı işlemi başarısız: " . mysqli_connect_error());
}

if (isset($_GET['approve'])) {
    $id = $_GET['approve'];
    $sql = "UPDATE fotograf SET status='approved' WHERE id=$id";
    if ($baglan->query($sql) === TRUE) {
        echo "Fotoğraf onaylandı.";
    } else {
        echo "Fotoğraf onaylanırken bir hata oluştu: " . $baglan->error;
    }
}

if (isset($_GET['reject'])) {
    $id = $_GET['reject'];
    $sql = "UPDATE fotograf SET status='rejected' WHERE id=$id";
    if (mysqli_query($baglan, $sql)) {
        echo "Fotoğraf reddedildi.";
    } else {
        echo "Fotoğraf reddedilirken bir hata oluştu: " . mysqli_error($baglan);
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotoğraf Yönetimi</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Onay Bekleyen Fotoğraflar</h1>
    <?php
    // Onay bekleyen fotoğrafları listele
    $sql = "SELECT * FROM fotograf WHERE status='pending'";
    $result = mysqli_query($baglan, $sql);
    
    if (mysqli_num_rows($result) > 0) {//sonuçlarda en az bir satır olup olmadığı
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='photo' id='photo_" . $row['id'] . "'>";
            echo "<img src='ormanyukle/" . $row['dosyaAdı'] . "' alt='" . $row['dosyaAdı'] . "' width='100'>";
            echo "<a href='admin.php?approve=" . $row['id'] . "' class='approve-btn'>Onayla</a>";
            echo "<a href='admin.php?reject=" . $row['id'] . "' class='reject-btn'>Reddet</a>";
            echo "</div>";
        }
    } else {
        echo "Onay bekleyen fotoğraf bulunmamaktadır.";
    }
    ?>
    
    <h1>Reddedilen Fotoğraflar</h1>
    <?php
    // Reddedilen fotoğrafları listele
    $sql = "SELECT * FROM fotograf WHERE status='rejected'";
    $result = mysqli_query($baglan, $sql);
    
    if (mysqli_num_rows($result) > 0) {//sonuçlarda en az bir satır olup olmadığı
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='photo' id='photo_" . $row['id'] . "'>";
            echo "<img src='ormanyukle/" . $row['dosyaAdı'] . "' alt='" . $row['dosyaAdı'] . "' width='100'>";
            echo "<form action='kabuledilen.php' method='POST'>";
            echo "<input type='hidden' name='photo_id' value='" . $row['id'] . "'>";
            echo "<button type='submit' name='approve' class='approve-btn'>Onayla</button>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "Reddedilen fotoğraf bulunmamaktadır.";
    }

    mysqli_close($baglan);
    ?>
</body>
</html>
