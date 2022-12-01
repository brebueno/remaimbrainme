<!doctype html>
<html lang="PT-BR">

<head>
  <title>
      Cadastro
  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

 <!--Css Da pag -->
 <link rel="stylesheet" href="{{ url('/cadastro') }}/Style_c.css">

</head>

<body class="cadastro">
  <header class="header_cadastro mb-5">
    <nav class="navbar bg-dark fixed-top py-0">
        <div class="container-fluid">
          <a class="navbar-brand-light" href="index.html"> <img src="imagens/Logotipo.png" width="100" id="logo" alt="logotipo" > RememBrainMe</a>
          <!-- Search -->
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <!-- Botão Modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <a class="navbar-brand" href="login.blade.php"> <img src="imagens/paciente.png" width="30px" id="logo" alt="logotipo" >Login</a>
          </button>
          <!-- Botão off canvas -->
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
             
            </div>
          </div>
        </div>
      </nav>
  </header>
  <main class="main_cadastro mt-5 pt-5">
    <h2 class="text-center pt-3">
      Nunca mais passe aperto com seus medicamentos
    </h2>
    <section class="mt-5 justify-center ">
      <div class="card" style="margin-left: 400px; margin-right: 400px">
        <div class="card-body">
          <h5 class="card-title">Insira aqui seu medicamento!</h5>

          <label for="exampleFormControlInput1" class="form-label">Nome do Medicamento</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do Medicamento*">

          <label for="exampleFormControlInput1" class="form-label">Dosagem</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Dosagem*">

          <label for="exampleFormControlInput1" class="form-label">Inicio do Tratamento</label>
          <input type="Date" class="form-control" id="exampleFormControlInput1" placeholder="Inicio do tratamento">

          <label for="exampleFormControlInput1" class="form-label">Fim do tratamento</label>
          <input type="Date" class="form-control" id="exampleFormControlInput1" placeholder="Fim do tratamento">

          <label for="exampleFormControlInput1" class="form-label">Horario do Remédo</label>
          <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="Horario do Remédio">

          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">É de Uso continuo ?</label>

          
        <Div class="flex items-center justify-end mt-4">
          <x-jet-button class="ml-4 btn btn-primary">
            {{ __('Cadastre !') }}
          </x-jet-button>
        </div>
        </div>

      

      </div>
    </section>
   
  </main>


  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>