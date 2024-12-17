<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/js/fontawesome.js"></script>
  <script src="/js/js/solid.js"></script>
</head>
<body>
  <!-- Navbar -->
  <nav>
        <div class="d-flex justify-content-center mt-3">

                <!-- <a href="/pegawai"
                    class="btn {{ request()->is('pegawai*') ? 'btn-primary' : 'btn-secondary' }} me-2">
                    Data Pegawai
                </a>
                <a href="/pensil"
                    class="btn {{ request()->is('welcome*') ? 'btn-primary' : 'btn-secondary' }} me-2">
                    Data Pensil
                </a>
                <a href="/"
                    class="btn {{ request()->is('kertashvs*') ? 'btn-primary' : 'btn-secondary' }}">
                    EAS
                </a> -->
            
        </div>
    </nav>

<div class="container mt-4 border">
    <!-- <h2>Muhammad Afaf - 5026221157</h2>
    <h3>@yield('tulisan1')</h3> -->

@yield('link1')

<br/>
<br/>

@yield('konten')

</div>

</body>
</html>