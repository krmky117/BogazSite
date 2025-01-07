<?php


include("baglanti.php");  // Veritabanı bağlantısını sağlayın


if (!$baglan) {
    die("Veritabanı bağlantı işlemi başarısız: " . mysqli_connect_error());
}

// Fotoğraf yükleme işlemi
if (isset($_POST['upload'])) {
    $photo = $_FILES['photo'];
    $photoName = $photo['name'];
    $photoTmp = $photo['tmp_name'];
    $photoError = $photo['error'];
    
    if ($photoError === 0) {
        // Fotoğrafın zaten yüklenip yüklenmediğini kontrol et
        $sql_check = "SELECT * FROM fotograf WHERE dosyaAdı='$photoName'";
        $result_check = mysqli_query($baglan, $sql_check);

        if (mysqli_num_rows($result_check) == 0) {
            $photoDest = 'ormanyukle/' . $photoName;
            if (is_dir('ormanyukle') && is_writable('ormanyukle')) {
                move_uploaded_file($photoTmp, $photoDest);
            } else {
                echo "Hedef dizin mevcut değil veya yazılabilir değil.";
            }
            
            // Fotoğraf veritabanına ekleme
            $sql = "INSERT INTO fotograf (dosyaAdı, status) VALUES ('$photoName', 'pending')";
            if (mysqli_query($baglan, $sql)) {
                echo "Fotoğraf başarıyla yüklendi. Onay için bekleniyor.";
            } else {
                echo "Fotoğraf yüklenirken hata oluştu.";
            }
        } else {
            echo "Bu fotoğraf zaten yüklenmiş.";
        }
    } else {
        echo "Fotoğraf yüklenirken bir sorun oluştu.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotoğraf Galerisi</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="gallery-container">
        <h1>Longoz Ormanı Fotoğraf Galerisi</h1>
        
        <!-- Fotoğraf Yükleme Formu -->
        <div class="upload-section">
            <h2>Yeni Fotoğraf Yükle</h2>
            <form action="galeri.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="photo" accept="image/*" required>
                <button type="submit" name="upload">Yükle</button>
            </form>
        </div>
        
        <!-- Galeri Alanı -->
        <h2>Onaylı Fotoğraflar</h2>
        <div class="gallery">
            <?php
            // Sadece onaylı fotoğrafları getiren SQL sorgusu
            $sql = "SELECT * FROM fotograf WHERE status = 'approved'";  // Sadece 'approved' olanları listele
            $result = mysqli_query($baglan, $sql);

            // Fotoğrafları listele
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='gallery-item'>";
                    echo "<img src='ormanyukle/" . $row['dosyaAdı'] . "' alt='" . $row['dosyaAdı'] . "' class='gallery-img' onclick='openModal(this)'>";
                    echo "</div>";
                }
            } else {
                echo "<p>Henüz onaylı fotoğraf bulunmamaktadır.</p>";
            }

            mysqli_close($baglan);
            ?>
        </div>
        
        <a href="index.php" class="back-button">Geri Dön</a>
    </div>

    <!-- Modal Büyütme Görüntüsü -->
    <div id="imageModal" class="modal" onclick="closeModal()">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImg">
    </div>

    <script>
        // Modal açma fonksiyonu
        function openModal(img) {
            var modal = document.getElementById("imageModal");
            var modalImg = document.getElementById("modalImg");
            modal.style.display = "block";
            modalImg.src = img.src;
        }

        // Modal kapama fonksiyonu
        function closeModal() {
            var modal = document.getElementById("imageModal");
            modal.style.display = "none";
        }
    </script>
</body>
</html>
