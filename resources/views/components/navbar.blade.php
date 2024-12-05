<div>

  <nav class="navbar navbar-expand-lg" style="background: #245fa3; box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);">

    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">Navbar</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#">Início</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" href="#">Link</a>
          </li>
        </ul>

        <li class="nav-item dropdown d-flex">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Conta
          </a>

          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="{{ route('profile.edit') }}">
                Editar Perfil
              </a>
            </li>
    
            <li>
              <hr class="dropdown-divider">
            </li>
    
            <!-- Logout com formulário -->
            <li>

              <form class="d-flex" method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="dropdown-item" type="submit">
                  Sair
                </button>

              </form>

            </li>

          </ul>

        </li>
        
      </div>
    </div>
  </nav>
</div>