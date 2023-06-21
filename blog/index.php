<!DOCTYPE html>
<html>
<head>
  <title>Ana Sayfa</title>
  <link rel="stylesheet" href="styles.css">
  <style>

    html, body {
      height: 100%;
    }

    video {
      position: fixed;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      z-index: -1;
    }
  </style>
</head>
<body>
  <video autoplay loop muted>
    <source src="video.mp4" type="video/mp4">
    
  </video>

  <nav class="panel">
    <div class="panel-item">
      <h2>Kitaplarımız</h2>
      <ul class="dropdown-menu">
        <li><a href="#">Roman</a></li>
        <li><a href="#">Dünya Klasikleri</a></li>
        <li><a href="#">Edebiyat</a></li>
        <li><a href="#">Şiir</a></li>
      </ul>
    </div>

    <div class="panel-item">
      <h2>Filmlerimiz</h2>
      <ul class = "dropdown-menu">
        <li><a href="#">Korku</a></li>
        <li><a href="#">Komedi</a></li>
        <li><a href="#">Aksiyon</a></li>
        <li><a href="#">Bilim Kurgu</a></li>
        <li><a href="#">Dram</a></li>
        <li><a href="#">Romantik</a></li>
        <li><a href="#">Belgesel</a></li>
        <li><a href="#">Macera</a></li>
        <li><a href="#">Gerilim</a></li>
      </ul>
    </div>

    <div class="panel-item">
      <h2>İletişim</h2>
      <ul class="dropdown-menu">
        <li><a href="contact.php">İletişim</a></li>
        <li><a href="about.php">Hakkımızda</a></li>
      </ul>
    </div>
  </nav>

  <h1 style="text-align: center;">Benim Dünyam</h1>

  <p style="text-align: center; font-family: 'Times New Roman', Times, serif; font-size: 20px;">Kitap ve film önerileri için doğru adrestesiniz.</p>
  <p style="text-align: center; font-family: 'Times New Roman', Times, serif; font-size: 20px;">Sitemizdeki kitap ve filmler hakkında yorum yapabilir, puan verebilirsiniz.</p>
  
</body>
</html>
