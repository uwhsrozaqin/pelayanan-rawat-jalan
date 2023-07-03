<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pasien Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
    <form id="daftar" method="post" action="<?php echo base_url(); ?>pasien/daftarSimpan">
      <h1>Tambah Pasien Baru</h1>
      <div class="mb-3">
        <label for="namaPasien" class="form-label">Nama Pasien</label>
        <input type="text" class="form-control" name="namaPasien" id="namaPasien" placeholder="Nama Pasien">
      </div>
      <div class="mb-3">
        <label for="alamatPasien" class="form-label">Alamat Pasien</label>
        <textarea class="form-control" name="alamatPasien" id="alamatPasien" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-select" id="jenisKelamin" name="jenisKelamin">
          <option value="1">Laki-Laki</option>
          <option value="2">Perempuan</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="poliKlinik" class="form-label">Poli Klinik</label>
        <select class="form-select" id="poliKlinik" name="poliKlinik">
          <?php for ($i=0; $i <count($listPoliklinik) ; $i++) { ?>
            <option value="<?php echo $listPoliklinik[$i]['idPoliklinik'] ?>"><?php echo $listPoliklinik[$i]['namaPoliklinik'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="mb-3 d-grid ">
        <button type="submit" class="btn btn-primary">Daftar</button>
      </div>
    </form>
     
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>