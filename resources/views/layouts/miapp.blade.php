<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <title>Mi Aplicación</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-bg-body-tertiary ">
      <div class="container-fluid">
        <a class="navbar-brand btn btn-primary text-light" href="#"><i class="bi bi-apple"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('usuarios.index') }}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('usuarios.create') }}">Crear usuario</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Cambiar modo
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown-item " data-bs-theme-value="light">
                <span class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Tema Claro</span>
                </li>
                <li class="dropdown-item " data-bs-theme-value="dark">
                <span class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Tema Oscuro</span>
                </li>
              </ul>
            </li>
          </ul>
          </li>
          </ul>
          <form class="d-flex" role="search" method="GET" action="{{ route('usuarios.search') }}">
            <input class="form-control me-2" id="search" name="search" type="search" placeholder="Buscar por nombre"
              aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12">
          @yield('content')
        </div>
      </div>
    </div>
  </main>
  <footer>
    <script src="{{ asset('boot.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
  </footer>
</body>
</html>