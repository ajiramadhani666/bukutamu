<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Buku Tamu</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('/frontend/login/assets/css/login.css')}}">
</head>
<body>
  
  
  
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      
      <div class="card login-card ">
        <div class="row no-gutters">
          
          <div class="col-md-5">
            <img src="{{asset('/frontend/login/assets/images/sbsn.jpeg')}}" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="">
                <img src="{{asset('/frontend/login/assets/images/logomin2.png')}}" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Buku Tamu MIN 2 Kota Malang</p>
              @if (session('status'))
                <div class="alert alert-success">
                   {{ session('status') }}
                     </div>
                @endif
              <form action="/simpan" method="POST">
                @csrf
              <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label for="notlp">Nomer Telphone</label>
                    <input type="number" name="notlp" id="notlp" class="form-control" placeholder="Masukan Nomor Telphone">
                  </div>
                  <div class="form-group mb-4">
                    <label for="tujuan">Keperluan</label>
                    <input type="text" name="tujuan" id="tujuan" class="form-control" placeholder="Keperluan">
                  </div>
                  <div class="form-group mb-4">
                    <label for="pesan">Pesan / Saran</label>
                    <input type="text" name="pesan" id="pesan" class="form-control" placeholder="Berikan Tanggapan Anda">
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Kirim">
                </form>
                
                <p><a href="/dashboard">Dashboard</a></p>
               
               
            </div>
          </div>
        </div>
      
      </div>
   
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
