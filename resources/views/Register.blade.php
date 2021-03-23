
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
    
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
    
      <title>Register</title>
    
      <!-- Custom fonts for this template-->
      <link href="{{ asset('vendor') }}/bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
      <!-- Custom styles for this template-->
      <link href="{{ asset('vendor') }}/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
    
    </head>
    
    <body class="bg-gradient-primary">
    
      <div class="container">
    
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-12">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-3 d-none d-lg-block bg-register-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><b>Register Account!!</b> </h1>
                    <h6><b>Sekala Hita</b></h6>
                  </div>
                  <br>
                  <form class="user" method="POST" action="/daftar">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Masukkan nama lengkap">
                    </div>                            
                    <div class="form-group">
                        <input type="username" class="form-control" name="username" placeholder="Buat username">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Masukkan email aktif">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Buat password">
                    </div>
                        <a href="/auth">
                            <button type="button" class="btn btn-danger">Cancel</button>
                        </a>
                        <button type="submit" class="btn btn-primary">Submit</button>  
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="/auth">Sudah punya akun? LOGIN!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
      </div>
    
      <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('vendor') }}/bootstrap/vendor/jquery/jquery.min.js"></script>
      <script src="{{ asset('vendor') }}/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
      <!-- Core plugin JavaScript-->
      <script src="{{ asset('vendor') }}/bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
    
      <!-- Custom scripts for all pages-->
      <script src="{{ asset('vendor') }}/bootstrap/js/sb-admin-2.min.js"></script>
    
    </body>
    
    </html>
    