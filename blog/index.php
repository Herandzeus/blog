<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ana Sayfa</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Ana Sayfa</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="booksDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kitaplarımız
            </a>
            <div class="dropdown-menu" aria-labelledby="booksDropdown">
              <a class="dropdown-item" href="#">Roman</a>
              <a class="dropdown-item" href="#">Dünya Klasikleri</a>
              <a class="dropdown-item" href="#">Edebiyat</a>
              <a class="dropdown-item" href="#">Şiir</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="moviesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Filmlerimiz
            </a>
            <div class="dropdown-menu" aria-labelledby="moviesDropdown">
              <a class="dropdown-item" href="#">Korku</a>
              <a class="dropdown-item" href="#">Komedi</a>
              <a class="dropdown-item" href="#">Aksiyon</a>
              <a class="dropdown-item" href="#">Bilim Kurgu</a>
              <a class="dropdown-item" href="#">Dram</a>
              <a class="dropdown-item" href="#">Romantik</a>
              <a class="dropdown-item" href="#">Belgesel</a>
              <a class="dropdown-item" href="#">Macera</a>
              <a class="dropdown-item" href="#">Gerilim</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">İletişim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Hakkımızda</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h1 class="text-center">Benim Dünyam</h1>
    <p class="text-center">Kitap ve film önerileri için doğru adrestesiniz.</p>
    <p class="text-center">Sitemizdeki kitap ve filmler hakkında yorum yapabilir, puan verebilirsiniz.</p>

    <div class="text-center">
      <a href="login.php" class="btn btn-primary">Giriş Yap</a>
      <a href="register.php" class="btn btn-secondary">Kayıt Ol</a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
