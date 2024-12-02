<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assetssss/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assetssss/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assetssss/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assetssss/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetssss/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assetssss/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetssss/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assetssss/css/style.css') }}">
    <!-- endinject -->
    @yield('style') <!-- Custom styles specific to the page -->
    <link rel="shortcut icon" href="{{ asset('assetssss/images/favicon.png') }}" />
</head>
<body>
    <!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Cyber <br />
            <span class="text-primary">Campus Unair </span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Slogan "HEBAT" memiliki makna mendalam, yaitu bahwa mahasiswa harus mengikuti aturan yang telah ditetapkan dalam menjunjung harkat, martabat, moral, dan tata susila.
            UNAIR juga memiliki motto "Excellence with Morality". Motto ini memiliki arti bahwa mahasiswa harus menjunjung tinggi nilai luhur ajaran agama dan budaya bangsanya dan memiliki pemikiran yang kritis untuk mengetahui ilmu pengetahuan yang tidak ada batasnya.
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <div class="card-body">
                <h2 class="card-title">Login</h2>
                <form class="forms-sample" action="{{ route('login') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div>
                    @endif
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="remember" name="remember">
                      <label class="form-check-label text-muted" for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button><br>
                    <div class="form-check">
                      <a href="/register">Belum Punya Akun? Register here</a>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!-- Javascript Global -->
<script src="{{ asset('assetssss/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('assetssss/vendors/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assetssss/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assetssss/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assetssss/js/dataTables.select.min.js') }}"></script>
<!-- Custom js for this page-->
<script src="{{ asset('assetssss/js/jquery.cookie.js') }}"></script>
<script src="{{ asset('assetssss/js/dashboard.js') }}"></script>
@yield('scripts') <!-- Page-specific scripts -->
</body>
</html>
