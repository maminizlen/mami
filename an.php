<!doctype html>
<?php
include("admin/baglanti.php");?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.18.3/dist/css/uikit.min.css" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <style>


<!--denemea-->



<!--2-->
 /* Slick kart stilleri */
 /* Kart içeriği stilleri */
 .custom-card-content {
      padding: 20px;
    }
      

    /* Kart altındaki boşluğu kaldır */
    .card {
    }

    /* Slayt kartları ortala */
    .slick-carousel {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      width: 100%;
    }

.slick-slide {
      margin-right: 10px; /* Kartlar arası boşluk */
    }











    
    .slider-container {
      width: 95%;
      margin: 0 auto;
      margin-bottom: 50px;
      overflow-x: auto;
    }
    .uk-slider-items {
      display: flex;
      flex-wrap: nowrap;
      scroll-snap-type: x mandatory;
    }
    .uk-slider-items li {
      flex: 0 0 auto;
      width: 300px;
      margin-right: 20px;
      scroll-snap-align: start;
    }
    .uk-slider-items li:last-child {
      margin-right: 0;
    }
    .card {
      width: 300px;
      margin: 20px;
      border: none;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      transition: box-shadow 0.3s ease;
    }
    .card:hover {
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
    .card-body {
      padding: 20px;
    }
      .card-body h5{
          color: black;
      }
      .uk-slider-items li {
  flex: 0 0 auto;
  width: 300px;
  margin-right: 5px; /* Kartlar arasında yatay boşluk */
  scroll-snap-align: start;
}
.downButton {
    font-size: 16px;
    color: black;
    border: none;
    cursor: pointer;
    background: rgba(0,0,0.0,0)
}
      .downButton1 {
    font-size: 16px;
    color: black;
    border: none;
    cursor: pointer;
    background: rgba(0,0,0.0,0)
}
      .downButton2 {
    font-size: 16px;
    color: black;
    border: none;
    cursor: pointer;
    background: rgba(0,0,0.0,0)
}
.uk-slider-items li:first-child {
  margin-left: 5px; /* İlk kartın solunda boşluk */
}

.uk-slider-items li:last-child {
  margin-right: 0; /* Son kartın sağında boşluk yok */
}

  </style>
    <style>
        .card-text{
            color: black;
        }
    /* Özel sınıflar */
    .my-container {
      padding: 20px;
    }
    .my-content {
      max-width: 100%;
      height: auto;
    }
    .my-carousel-container {
      display: flex;
      justify-content: center;
    }
    .my-carousel-item {
      display: flex;
      align-items: center;
    }
    .my-carousel-item .my-col-md-6 {
      flex: 1;
    }
    .my-carousel-control-prev,
    .my-carousel-control-next {
      font-size: 2rem; /* Boyutu ayarlayın */
    }
    .son{
      font-family: "Righteous", sans-serif;
      font-weight: 600;
      font-style: normal;
    }
    .son p{
      color:black;
    }
        .card-title{
            color: black;
        }
    .icerik1 img{
      object-fit: cover;
      object-position: center;
      height: 500px;
    }
  </style>
    <style>
    .carousel-caption {
      background-color: rgba(0, 0, 0, 0.7);
      padding: 20px;
      border-radius: 10px;
      color: #fff;
    }
    .carousel-caption h1, .carousel-caption p {
      margin: 0;
      animation-duration: 1s;
      animation-name: slideInDown;
    }
    @keyframes slideInDown {
      from {
        transform: translateY(-50px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }
        .carousel-item img {
  max-width: 100%;
  height: auto;
}
        
  </style>
      <style>
    .carousel-item img {
    max-width: 70%; 
    max-height: 70%;
    width: 500px;
    height: 400px;
    object-fit:cover;
}

    .carousel-item p {
        word-wrap: break-word;
        font-size:18px;
        padding:10px;
    }
    .carousel-item h2{
      text-align:center;
      font-size:24px;
    }
</style>
</head>
<body>

<nav class="uk-navbar-container">
  <div class="backccc">
    <div class="uk-container">
      <div uk-navbar>
        <div class="uk-navbar-center">
          <div class="uk-navbar-left">
            <button class="uk-button uk-button-default uk-hidden@m" type="button" uk-toggle="target: #offcanvas-flip">☰</button>
          </div>
          <a class="uk-active" href="ilk.html"><img width="60" src="logo1.png"></a>
          <div class="uk-navbar-right uk-visible@m">
            <ul class="uk-navbar-nav">
                 <li class="uk-active"><a href="#">Anasayfa</a></li>
                <li>
                <a href="#">ÜRÜNLERİMİZ</a>
                <div class="uk-navbar-dropdown">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li class="uk-active "><button id="downButton" class="downButton">Tiny House</button></li>
                    <li><button id="downButton1" class="downButton1">Ahşap Evler</button></li>
                    <li><button id="downButton2" class="downButton2">Haoute Courte</button></li>
                  </ul>
                </div>
              </li>
             
              
              <li><a href="#">Projelerimiz</a></li>
              <li><a href="#">İletişim</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- Offcanvas menu -->
<div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <ul class="uk-nav uk-nav-default">
      <li class="uk-active"><a href="#">Anasayfa</a></li>
      <li class="uk-parent">
        <a href="#">Hakkımızda</a>
        <ul class="uk-nav-sub">
          <li><a href="#">Vizyonumuz</a></li>
          <li><a href="#">Misyonumuz</a></li>
        </ul>
      </li>
      <li><a href="#">Projelerimiz</a></li>
      <li><a href="#">İletişim</a></li>
    </ul>
  </div>
</div>

<br>
<?php
$sql = "SELECT baslik, aciklama, resim FROM tiny_house";
$result = $baglanti->query($sql); ?>
<!--Haoute Courte Mobilya-->
<!-- Bootstrap Carousel -->
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Her bir slide için HTML kodunu oluşturalım
        echo '<div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex" style="object-position: center; object-fit: cover; background-image: url(\'tiny/' . $row["resim"] . '\');">
                <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                    <h1 class="uk-animation-slide-top-medium" style="animation-duration: 3s;">' . $row["baslik"] . '</h1>
                    <p class="uk-animation-slide-top-medium" style="animation-duration: 3s;">' . $row["aciklama"] . '</p>
                </div>
            </div>';
    }
} else {
    // Eğer veri yoksa, bir uyarı mesajı gösterelim
    echo "Hiçbir kayıt bulunamadı.";
} ?>
<br><br>
<h3 align="center">Tiny Houselerimiz</h3>
<div class="my-carousel-container">
  <!-- Yön tuşları -->
  <div style="margin-right: auto;"></div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-width: 100%;">
    <ol class="carousel-indicators">
      <?php
      // Veritabanı bağlantısı
      include "admin/baglanti.php";

      // Veritabanından verileri al
      $sql = "SELECT * FROM tiny_houseiki";
      $result = $baglanti->query($sql);

      // Veritabanı sorgusu başarılı mı diye kontrol et
      if ($result === false) {
          echo "Veritabanı sorgusu hatası: " . $baglanti->error;
      } else {
          // Veritabanından gelen verileri işle
          $index = 0;
          while($row = $result->fetch_assoc()) {
              // Carousel indicator'larını oluştur
              echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$index.'" class="'.($index == 0 ? 'active' : '').'"></li>';
              $index++;
          }
      }
      ?>
    </ol>
    <div class="carousel-inner">
      <?php
      // Veritabanından gelen verileri kullanarak slaytları oluştur
      $result->data_seek(0); // Veri setini sıfırlayalım
      $firstSlide = true;
      while($row = $result->fetch_assoc()) {
          // Carousel item'ı oluştur
          echo '<div class="carousel-item '.($firstSlide ? 'active' : '').'">';
          echo '<div class="container">';
          echo '<div class="row">';
          echo '<div class="col-md-6">';
          echo '<div style="padding: 20px;">';
          echo '<h2>'.$row["baslik"].'</h2>';
          echo '<p>'.$row["aciklama"].'</p>';
          echo '</div>';
          echo '</div>';
          echo '<div class="col-md-6">';
          echo '<div style="padding: 20px;">';
          echo '<img src="tiny/'.$row["resim"].'" width="400px" alt="'.$row["baslik"].'" class="my-content">';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';

          $firstSlide = false;
      }
      ?>
    </div>
  </div>
  <div style="margin-left: auto;"></div>

</div>


    <br>
    <div id="uniqueSection">
    <h3 align="center">Tiny House Ürünlerimiz</h3>
    </div>

<div class="container">
  <div class="row">
    <div class="col">
      <div align="center" class="slick-carousel">
        <?php
        // Bağlantıyı dahil et
        include 'baglanti.php';

        // SQL sorgusu
        $sql = "SELECT * FROM tiny_houseurun";
        $result = $baglan->query($sql);

        if ($result->num_rows > 0) {
            // Her bir sonuç için işlemleri yapın
            while($row = $result->fetch_assoc()) {
        ?>
        <div class="custom-card">
          <div class="custom-card-content">
            <div class="card">
              <img src="tiny/<?php echo $row["uresim"]; ?>" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $row["ubaslik"]; ?></h5>
                <p class="card-text"><?php echo $row["uaciklama"]; ?></p>
                <div uk-grid>
                  <div class="uk-width">
                    <button class="uk-button uk-button-default" type="button" uk-toggle="target: #product-modal<?php echo $row["id"]; ?>" style="background-color: #007bff; color: #fff;">Ürünü Göster</button>
                  </div>
                </div>
                <div id="product-modal<?php echo $row["id"]; ?>" uk-modal>
                  <div class="uk-modal-dialog uk-modal-body">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <h2 class="uk-modal-title">Ürün Detayları</h2>
                    <div class="uk-child-width-1-2@m" uk-grid>
                      <div>
                        <img src="tiny/<?php echo $row["uresim"]; ?>" alt="<?php echo $row["ubaslik"]; ?>">
                      </div>
                      <div>
                        <h3>Ürün Özellikleri</h3>
                        <ul class="uk-list uk-list-bullet">
                          <li><?php echo $row["uicerik"]; ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
            }
        } else {
            echo "Hiç sonuç bulunamadı.";
        }

        // Bağlantıyı kapat
        $baglan->close();
        ?>
        <!-- Diğer kartlar buraya eklenebilir -->
      </div>
    </div>
  </div>
</div>



    
    
    
    
    
    
    <!--2-->
    
    
    
    
    
    
    
    
    
    
   
<br>

<!--Ahsap Ev-->
<!-- Bootstrap Carousel -->
<?php
$sql = "SELECT baslik, aciklama, resim FROM ahsap_evslide";
$result = $baglanti->query($sql); ?>
<!--Ahsap Ev-->
<!-- Bootstrap Carousel -->
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Her bir slide için HTML kodunu oluşturalım
        echo '<div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex" style="object-position: center; object-fit: cover; background-image: url(\'ahsap/' . $row["resim"] . '\');">
                <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                    <h1 class="uk-animation-slide-top-medium" style="animation-duration: 3s;">' . $row["baslik"] . '</h1>
                    <p class="uk-animation-slide-top-medium" style="animation-duration: 3s;">' . $row["aciklama"] . '</p>
                </div>
            </div>';
    }
} else {
    // Eğer veri yoksa, bir uyarı mesajı gösterelim
    echo "Hiçbir kayıt bulunamadı.";
} ?>
<br><br>
<h3 align="center">Ahsap Evlerimiz</h3>

<div class="my-carousel-container">
  <!-- Yön tuşları -->
  <div style="margin-right: auto;"></div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-width: 100%;">
    <ol class="carousel-indicators">
      <?php
      // Veritabanı bağlantısı
      include "admin/baglanti.php";

      // Veritabanından verileri al
      $sql = "SELECT * FROM ahsap_eviki";
      $result = $baglanti->query($sql);

      // Veritabanı sorgusu başarılı mı diye kontrol et
      if ($result === false) {
          echo "Veritabanı sorgusu hatası: " . $baglanti->error;
      } else {
          // Veritabanından gelen verileri işle
          $index = 0;
          while($row = $result->fetch_assoc()) {
              // Carousel indicator'larını oluştur
              echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$index.'" class="'.($index == 0 ? 'active' : '').'"></li>';
              $index++;
          }
      }
      ?>
    </ol>
    <div class="carousel-inner">
      <?php
      // Veritabanından gelen verileri kullanarak slaytları oluştur
      $result->data_seek(0); // Veri setini sıfırlayalım
      $firstSlide = true;
      while($row = $result->fetch_assoc()) {
          // Carousel item'ı oluştur
          echo '<div class="carousel-item '.($firstSlide ? 'active' : '').'">';
          echo '<div class="container">';
          echo '<div class="row">';
          echo '<div class="col-md-6">';
          echo '<div style="padding: 20px;">';
          echo '<h2>'.$row["baslik"].'</h2>';
          echo '<p>'.$row["aciklama"].'</p>';
          echo '</div>';
          echo '</div>';
          echo '<div class="col-md-6">';
          echo '<div style="padding: 20px;">';
          echo '<img src="tiny/'.$row["resim"].'" width="400px" alt="'.$row["baslik"].'" class="my-content">';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';

          $firstSlide = false;
      }
      ?>
    </div>
  </div>
  <div style="margin-left: auto;"></div>

</div>

    <div id="uniqueSection1">
    <h3 align="center">Ahşap Ev Ürünlerimiz</h3>
    </div>

<div class="container">
  <div class="row">
    <div class="col">
      <div align="center" class="slick-carousel">
        <?php
        // Bağlantıyı dahil et
        include 'baglanti.php';

        // SQL sorgusu
        $sql = "SELECT * FROM ahsap_evurun";
        $result = $baglan->query($sql);

        if ($result->num_rows > 0) {
            // Her bir sonuç için işlemleri yapın
            while($row = $result->fetch_assoc()) {
        ?>
        <div class="custom-card">
          <div class="custom-card-content">
            <div class="card">
              <img src="ahsap/<?php echo $row["uresim"]; ?>" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $row["ubaslik"]; ?></h5>
                <p class="card-text"><?php echo $row["uaciklama"]; ?></p>
                <div uk-grid>
                  <div class="uk-width">
                    <button class="uk-button uk-button-default" type="button" uk-toggle="target: #product-modal<?php echo $row["id"]; ?>" style="background-color: #007bff; color: #fff;">Ürünü Göster</button>
                  </div>
                </div>
                <div id="product-modal<?php echo $row["id"]; ?>" uk-modal>
                  <div class="uk-modal-dialog uk-modal-body">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <h2 class="uk-modal-title">Ürün Detayları</h2>
                    <div class="uk-child-width-1-2@m" uk-grid>
                      <div>
                        <img src="ahsap/<?php echo $row["uresim"]; ?>" alt="<?php echo $row["ubaslik"]; ?>">
                      </div>
                      <div>
                        <h3>Ürün Özellikleri</h3>
                        <ul class="uk-list uk-list-bullet">
                          <li><?php echo $row["uicerik"]; ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
            }
        } else {
            echo "Hiç sonuç bulunamadı.";
        }

        // Bağlantıyı kapat
        $baglan->close();
        ?>
        <!-- Diğer kartlar buraya eklenebilir -->
      </div>
    </div>
  </div>
</div>

    
    <!--3-->


<br>

<!--hourte-->
<!-- Bootstrap Carousel -->
<?php
$sql = "SELECT baslik, aciklama, resim FROM hourte_slide";
$result = $baglanti->query($sql); ?>
<!--Ahsap Ev-->
<!-- Bootstrap Carousel -->
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Her bir slide için HTML kodunu oluşturalım
        echo '<div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex" style="object-position: center; object-fit: cover; background-image: url(\'hourte/' . $row["resim"] . '\');">
                <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                    <h1 class="uk-animation-slide-top-medium" style="animation-duration: 3s;">' . $row["baslik"] . '</h1>
                    <p class="uk-animation-slide-top-medium" style="animation-duration: 3s;">' . $row["aciklama"] . '</p>
                </div>
            </div>';
    }
} else {
    // Eğer veri yoksa, bir uyarı mesajı gösterelim
    echo "Hiçbir kayıt bulunamadı.";
} ?>
<br><br>
<h3 align="center">Haoute Courte Mobilyalerimiz</h3>

<div class="my-carousel-container">
  <!-- Yön tuşları -->
  <div style="margin-right: auto;"></div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-width: 100%;">
    <ol class="carousel-indicators">
      <?php
      // Veritabanı bağlantısı
      include "admin/baglanti.php";

      // Veritabanından verileri al
      $sql = "SELECT * FROM hourte_iki";
      $result = $baglanti->query($sql);

      // Veritabanı sorgusu başarılı mı diye kontrol et
      if ($result === false) {
          echo "Veritabanı sorgusu hatası: " . $baglanti->error;
      } else {
          // Veritabanından gelen verileri işle
          $index = 0;
          while($row = $result->fetch_assoc()) {
              // Carousel indicator'larını oluştur
              echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$index.'" class="'.($index == 0 ? 'active' : '').'"></li>';
              $index++;
          }
      }
      ?>
    </ol>
    <div class="carousel-inner">
      <?php
      // Veritabanından gelen verileri kullanarak slaytları oluştur
      $result->data_seek(0); // Veri setini sıfırlayalım
      $firstSlide = true;
      while($row = $result->fetch_assoc()) {
          // Carousel item'ı oluştur
          echo '<div class="carousel-item '.($firstSlide ? 'active' : '').'">';
          echo '<div class="container">';
          echo '<div class="row">';
          echo '<div class="col-md-6">';
          echo '<div style="padding: 20px;">';
          echo '<h2>'.$row["baslik"].'</h2>';
          echo '<p>'.$row["aciklama"].'</p>';
          echo '</div>';
          echo '</div>';
          echo '<div class="col-md-6">';
          echo '<div style="padding: 20px;">';
          echo '<img src="hourte/'.$row["resim"].'" width="400px" alt="'.$row["baslik"].'" class="my-content">';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';

          $firstSlide = false;
      }
      ?>
    </div>
  </div>
  <div style="margin-left: auto;"></div>

</div>
    <div id="uniqueSection2">
    <h3 align="center">Haoute Courte Mobilya Ürünlerimiz</h3>
    </div>

<!-- Bootstrap JS ve jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.18.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.18.3/dist/js/uikit-icons.min.js"></script>
<!-- Eşsiz Js kodlarım-->
    <script>
document.getElementById('downButton').addEventListener('click', function() {
    document.getElementById('uniqueSection').scrollIntoView({ behavior: 'smooth' });
});
</script>
    <script>
document.getElementById('downButton1').addEventListener('click', function() {
    document.getElementById('uniqueSection1').scrollIntoView({ behavior: 'smooth' });
});
</script>
    <script>
document.getElementById('downButton2').addEventListener('click', function() {
    document.getElementById('uniqueSection2').scrollIntoView({ behavior: 'smooth' });
});
</script>
<!-- Bootstrap JS (jQuery gerekli) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




<div class="container">
  <div class="row">
    <div class="col">
      <div align="center" class="slick-carousel">
        <?php
        // Bağlantıyı dahil et
        include 'baglanti.php';

        // SQL sorgusu
        $sql = "SELECT * FROM hourte_urun";
        $result = $baglan->query($sql);

        if ($result->num_rows > 0) {
            // Her bir sonuç için işlemleri yapın
            while($row = $result->fetch_assoc()) {
        ?>
        <div class="custom-card">
          <div class="custom-card-content">
            <div class="card">
              <img src="hourte/<?php echo $row["huresim"]; ?>" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $row["hubaslik"]; ?></h5>
                <p class="card-text"><?php echo $row["huaciklama"]; ?></p>
                <div uk-grid>
                  <div class="uk-width">
                    <button class="uk-button uk-button-default" type="button" uk-toggle="target: #product-modal<?php echo $row["hid"]; ?>" style="background-color: #007bff; color: #fff;">Ürünü Göster</button>
                  </div>
                </div>
                <div id="product-modal<?php echo $row["hid"]; ?>" uk-modal>
                  <div class="uk-modal-dialog uk-modal-body">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <h2 class="uk-modal-title">Ürün Detayları</h2>
                    <div class="uk-child-width-1-2@m" uk-grid>
                      <div>
                        <img src="hourte/<?php echo $row["huresim"]; ?>" alt="<?php echo $row["hubaslik"]; ?>">
                      </div>
                      <div>
                        <h3>Ürün Özellikleri</h3>
                        <ul class="uk-list uk-list-bullet">
                          <li><?php echo $row["huicerik"]; ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
            }
        } else {
            echo "Hiç sonuç bulunamadı.";
        }

        // Bağlantıyı kapat
        $baglan->close();
        ?>
        <!-- Diğer kartlar buraya eklenebilir -->
      </div>
    </div>
  </div>
</div>




<!-- Slick JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- Custom JS -->
<script>
$(document).ready(function(){
  function calculateCenterPadding() {
    var windowWidth = $(window).width();
    var slideCount = $('.slick-slide').length;
    var totalWidth = 0;
    $('.slick-slide').each(function() {
      totalWidth += $(this).outerWidth(true);
    });
    var centerPaddingPercentage = 5; // Slayt genişliğinin yüzde 5'i olarak ayarlayalım
    var centerPadding = (windowWidth - totalWidth) * centerPaddingPercentage / 100;
    return centerPadding;
  }

  // Slayt gösterisi ayarları
  $('.slick-carousel').slick({
    centerMode: true,
    centerPadding: calculateCenterPadding() + 'px',
    slidesToShow: 3,
    prevArrow: false,
    nextArrow: false,
    responsive: [
      {
        breakpoint: 768, // Tablet ve küçük ekranlar için breakpoint
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '0px', // Küçük ekranlarda padding'i sıfırla
          slidesToShow: 1
        }
      },
      {
        breakpoint: 1200, // PC için breakpoint
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: calculateCenterPadding() + 'px', // PC ekranlarında centerPadding'i hesapla
          slidesToShow: 3, // PC ekranlarında 3 slayt göster
          // Ek olarak, eğer slayt sayısı 3'ten azsa iç içe geçmeyi önle
          variableWidth: true
        }
      }
    ]
  });
});
</script>





</body>
</html>
