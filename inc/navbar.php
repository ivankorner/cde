<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php?vista=home">
      <img src="./img/logo.png" alt="Bootstrap" width="75" height="27">
    </a>




    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?vista=user_new">Nuevo</a></li>
            <li><a class="dropdown-item" href="index.php?vista=user_list">Listado</a></li>
            <li><a class="dropdown-item" href="index.php?vista=user_search">Buscar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorías
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Nueva</a></li>
            <li><a class="dropdown-item" href="#">Listado</a></li>
            <li><a class="dropdown-item" href="#">Buscar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Nuevo</a></li>
            <li><a class="dropdown-item" href="#">Listado</a></li>
            <li><a class="dropdown-item" href="#">Categorías</a></li>
            <li><a class="dropdown-item" href="#">Buscar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Expedientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../vistas/expediente_nuevo.php">Nuevo</a></li>
            <li><a class="dropdown-item" href="#">Listado</a></li>
            <li><a class="dropdown-item" href="#">Categorías</a></li>
            <li><a class="dropdown-item" href="#">Buscar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Instrumento
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../vistas/instrumento_nuevo.php">Nuevo</a></li>
            <li><a class="dropdown-item" href="#">Listado</a></li>
            <li><a class="dropdown-item" href="#">Categorías</a></li>
            <li><a class="dropdown-item" href="#">Buscar</a></li>
          </ul>
        </li>



        <li class="nav-item dropdown">




          <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <img
              src="./img/profile.webp"
              class="rounded-circle"
              height="22"
              alt="
            "loading="lazy"
              
            /> Mi Cuenta</button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Datos personales</a></li>
            <li><a class="dropdown-item text-danger" href="#">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>