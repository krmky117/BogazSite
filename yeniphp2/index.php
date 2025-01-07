<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">




    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

<!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>


    
    <script src="https://kit.fontawesome.com/461d318d3b.js" crossorigin="anonymous"></script>
    <title>Anasayfa | Boğaz</title>



</head>
<body>
  

    <section id="menu">

        <div id="logo">Boğaz</div>
        
        <nav>
            <a href=""><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
            <a href="#hakkimizda"><i class="fa-solid fa-info ikon"></i>Hakkımızda</a>
            <a href="tarihce.html"><i class="fa-solid fa-book ikon"></i>Tarihçe</a>
            <a href="#galeri"><i class="fa-solid fa-image ikon"></i>Galeri</a>
            <a href="#iletisim"><i class="fa-solid fa-map-pin ikon"></i>İletişim</a>
        </nav>
        
    </section>

    <section id="anasayfa">
        <div id="black">

        </div>

        <div id="icerik">
            <h2>Boğaz</h2>
            <hr width="300" align="left">
            <p>Çoğunlukla Boğaz Bölgesinin Fotoğraflarının Ve Kültürel Etkinliklerin Paylaşıldığı Çok Amaçlı Fotoğrafçılık Sitesi</p>
        </div>
    </section>

    <section id="hakkimizda">
        <h3>Hakkımızda</h3>

        <div class="container">
            <div id="sol">
                <h5 id="h5sol">
                    Bölge ile ilgili fotoğrafları ve Boğazköy halkının paylaşımlarını içeren özel bir web sitesidir.
                </h5>
            </div>
            <div id="sag">
                <span>B</span>
                <p id="psag">
                    oğazköy'de yaşayan gürcü çoğunluklu halkın kültürel ve diğer farkı etkinliklerinin paylaşılacağı sitemize bölgede çekip paylaşmak istediğiniz fotoğrafları yükleyebilirsiniz
                </p>
            </div>
            <img src="img/köy.jpg" alt="" class="img-fluid mt100">
            <p id="pson">Boğazköy Bursa'ya 90 km, bağlı bulunduğu Karacabey'e 24 km uzaklıktadır. Mudanya Dağları'nın batı uzantısı olan Karadağ'ın eteklerinde kuruludur.

            </p>
        </div>
    </section>

    <section id="galeri">
        <div class="container">
            <h3>Galeriler</h3>
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge="1.5">
                    <img src="img/anasayfa.jpg" alt="" class="img-fluid" onclick="navigateToGallery()">
                    <h5 class="baslikcard">Longoz Galerisi</h5>
                    <p class="cardp">Longoz Ormanları Fotoğraf Galerisi</p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="img/anasayfa.jpg" alt="" class="img-fluid" onclick="navigateToGallery()">
                    <h5 class="baslikcard">Köy Galerisi</h5>
                    <p class="cardp">Köy İçi Etkinlikler ve Diğer Fotoğraflar</p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="img/anasayfa.jpg" alt="" class="img-fluid" onclick="navigateToGallery()">
                    <h5 class="baslikcard">Karadağ Galerisi</h5>
                    <p class="cardp">Karadağ Ormanı Fotoğraf Galerisi.</p>
                </div>
               



                
            </div>
        </div>
    </section>
    <script> function navigateToGallery() { window.location.href = 'galeri.php'; } </script>
    

    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">ekip</h3>
            <div class="sutun-sol-sag">
                <img src="img/ekip.jpg" alt="" merge=1.5 class="img-fluid oval" >
                <h4 class="ekipisim">Eyüp Berke</h4>
                <p class="ekipp">Site Admini</p>

                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-google social"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter social"></i></a>
                </div>
            </div>

            <div class="sutun">
                <img src="img/ekip.jpg" alt="" merge=1.5 class="img-fluid oval" >
                <h4 class="ekipisim">Kerem Kaya</h4>
                <p class="ekipp">Site Admini.</p>

                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-google social"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter social"></i></a>
                </div>
            </div>

            <div class="sutun-sol-sag">
                <img src="img/ekip.jpg" alt="" merge=1.5 class="img-fluid oval" >
                <h4 class="ekipisim">Ömer Bülbül</h4>
                <p class="ekipp">Doğa Fotoğrafçısı</p>

                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-google social"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter social"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim</h3>

            <form action="index.php" method="post">
            <div id="iletisimopak">
                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                    </div>
                    <div id="sagform">
                        <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                    </div>

                    <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>
                    <input type="submit" value="Gönder">
                </div>

                <div id="adres">
                    <h4 id="adresbaslik">Adres :</h4>
                    <p class="adresp">Boğaz Mahallesi</p>
                    <p class="adresp">Boğaz Sokak</p>
                    <p class="adresp">0520 520 0000</p>
                    <p class="adresp">Email :Krmky227@gmail.com</p>

                </div>

            </div>
            </form>
            
            <footer id="altfooter">
                <div id="weather">

                </div>
                <div class="container1">
                <div id="copyright"> 2025 | Tüm Hakları Saklıdır</div>

<div id="socialfooter">
    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
    <a href="#"><i class="fa-brands fa-google social"></i></a>
    <a href="#"><i class="fa-brands fa-x-twitter social"></i></a>
</div>

<a href="#menu"><i class="fa-solid fa-angle-up" id="up"></i></a>
                </div>
                
            </footer>


        </div>
    </section>

    <script
  src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
  integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
  crossorigin="anonymous"></script>

    <script src="owl/script.js"></script>
    <script src="owl/owl.carousel.js"></script>
    <script src="havadurumu.js"></script>
</body>
</html>

<?php
include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."' ,'".$telefon."' ,'".$email."' ,'".$konu."' ,'".$mesaj."')";

    if($baglan->query($ekle)===TRUE)
    {
        echo "<script>alert('Mesajınız Başarı İle Gönderilmiştir.')</script>";
    }
    else{
        echo "<script>alert('Mesajınız Gönderilirken hata oluştu.')</script>";
    }
}
?>