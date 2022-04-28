<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    {{-- my style --}}
    <link rel="stylesheet" href="css/style.css">

    <title>Sistem Sederhana | {{ $title }}</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
          <img class="mb-1" src="images/r-logo.png" alt="" height="50">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="/landing" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  CRUD
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/landing">Students</a></li>
                  <li><a class="dropdown-item" href="/create">Create Student</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/math">Matemathics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/nestif">Nested If</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/nestloop">Nested Loop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/other">Other</a>
              </li>
              @endauth
            </ul>

            <ul class="navbar-nav ms-auto">
                  @auth
                    <li class="nav-item dropdown active">
                      <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome, {{ auth()->user()->name }}
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                          <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                          </form>
                        </li>
                      </ul>
                    </li>
                      @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link active"><i class="bi bi-box-arrow-right"></i> Login</a>
                    </li>
                  @endauth
                </ul>
          </div>
        </div>
    </nav>

    <div class="container">
        @yield('container')
    </div>

    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img class="mb-1" src="images/r-logo.png" alt="" height="24">
          </a>
          <span class="text-muted">&copy; 2022 ahmedr, Inc</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-cart-plus"></i></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-whatsapp"></i></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-envelope"></i></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-twitter"></i></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
        </ul>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
