<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pasien Rawat Jalan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
     
     <div class="row">
      
       <!-- Diguntakan untuk bagian 1 -->
       <div class="col-12 mb-4 mt-4">
          <img src="https://placehold.co/600x150" class="d-block w-100" alt="">
       </div>

              <!-- Digunakan untuk bagian 2 -->
              <div class="col-6 text-center">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                  <h2>Pasien Baru</h2>
                  <p>Pendaftaran Pasien Baru</p>
                  <button class="btn btn-outline-light" type="button" onclick="location.href='<?php echo base_url('pasien/daftar')?>'" >Daftar</button>
                </div>
              </div>
              <div class="col-6 text-center">
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                  <h2>Pasien Lama</h2>
                  <p>Pasien Lama</p>
                  <button class="btn btn-outline-secondary" type="button" onclick="location.href='<?php echo base_url('pasien/lama')?>'">Lanjut</button>
                </div>
              </div>
        

     </div>

     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>