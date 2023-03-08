<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <!-- Link Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <!-- Header -->
  <h1 align="center" class="text-dark">Toko Sumber Berkah</h1>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container text-center justify-content-center">
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="history.php">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transaksi.php">Transaksi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Soal No 2 -->
  <h2 class="text-dark" align="center">Form Login Kasir</h2><br>
  <form method="POST" action="transaksi.php" align="center" >
    <label>Username:</label>
    <input type="text" name="username"><br><br>
    <label>Password:</label>
    <input type="password" name="password"><br><br>
    <button type="submit" value="Login" name="login">Submit</button>
  </form>
  <!-- footer -->
  <footer align="center" class="p-1 m-2 text-dark">
    <p>&copy; 2023 Rizal Ahmad Sugawa</p>
  </footer>
  <!-- Link Boostrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>