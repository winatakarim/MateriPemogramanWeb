<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
  <div class="container">
  <!-- Content here -->
  <form action="hasil.php" method="post">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Mahasiswa</label>
    <input type="text" name="namaMahasiswa" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nilai Mahasiswa</label>
    <input type="number" name="nilaiMahasiswa" class="form-control" name="nilaiMahasiswa" required>
  </div>
  <button type="submit" class="btn btn-primary">Proses Perhitungan</button>
  <button type="reset" class="btn btn-danger">Bersihkan</button>
</form>
</div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>