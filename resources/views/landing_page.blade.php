
<!doctype html>
<html lang="PT-BR">

<head>
  <title>RememBrainMe</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/') }}/Style_c.css">

  <!--Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="mt-5"> 
  <header class="mb-5">
    <nav class="navbar bg-dark fixed-top py-0">
      <div class="container-fluid">
        <a class="navbar-brand-light" href="/"> <img src="imagens/Logotipo.png" width="100" id="logo" alt="logotipo" > RememBrainMe</a>
        <!-- Search -->
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <!-- Botão Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <a class="navbar-brand" href="login"> <img src="imagens/paciente.png" width="30px" id="logo" alt="logotipo" >Login</a>
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


  <main class="">
    <section id="intro" class="Intro d-md-flex"  >
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs justify-content-center">
            <li class="nav-item px-5">
              <a class="nav-link active" aria-current="true" href="#"><img src="imagens/remedio.png"  width="40px" alt="remédio"> <br> Meus Remédios</a>
            </li>
            <li class="nav-item px-5">
              <a class="nav-link" href="#"><img src="imagens/receita.png"  width="40px" alt="remédio"> <br>Bulas</a>
            </li>
            <li class="nav-item px-5">
              <a class="nav-link"><img src="imagens/doutores.png"  width="40px" alt="remédio"> <br>Próximas</a>
            </li>
          </ul>
        </div>
        <div class="card-body "  >
          <h5 class="card-title mb-5">Nunca mais esqueça de tomar seus medicamentos e não deixe-os acabar</h5>
          <p class="card-text mb-5">Cadastre seus medicamentos aqui</p>
          <a href="#" class="btn btn-dark">Cadastre seus medicamentos</a>
        </div>
      </div>
    </section>

    <!-- botões remedios -->
    <section id="botoes" role="group" class="botoes p-5 d-md-flex justify-content-md-between align-items-center align-self-strech  " >
        <a href="Medicamentos.html" class="btn btn-ciano flex-fill"><img src="imagens/remedio.png" class="w-25"   alt="Medicamentos"> <h2>Nunca mais esqueça de tomar seus medicamentos e não deixe-os acabar</h2>
          <p>Muitas vezes, você que faz tratamento continuo com algum medicamento esquece de tomar no horári ou comprar quando está acabando, e pensando nisso a RemaimBrainMe veio para solucionar esse problema </p></a>
        <a href="bulas.html" class="btn btn-ciano flex-fill"><img src="imagens/receita.png" class="w-25"   alt="Receita médica"> <h2>Jamais tome medicamentos sem ler a bula.</h2>
          <p>Quantas vezes você toma o remédio sem ler a bula, sem saber os possíveis efeitos colaterais </p></a>
        <a href="Farmácias.html" class="btn btn-ciano flex-fill"><img src="imagens/hospital.png" class="w-25"     alt="Medicamentos"> <h2>Encontre o hospital mais próximo de você em qualquer lugar que esteja</h2>
          <p>Sempre que você precisar o RemainBrainMe vai te ajudar a encontrar o hospital mais próximo de você e sem transito, se possível. </p> </a>
    </section>

    <!-- imagem cruz vermelha -->
    <section id="vermelho" class="vermelho d-md-flex ">
      <div class="card text-center " >
        <div class="card-body">
          <h5 class="card-title ">Não deixe sua Saúde em segundo plano!</h5>
          <p class="card-text mb-5">Nunca mais esqueça de tomar seus medicamentos</p>
          <a href="#" class="btn btn-dark mt-5 ">Cadastre seus medicamentos</a>
        </div>
      </div>
    </section>

  <!-- hospitais -->
    <div class="pt-5 pb-1 ps-5 d-md-flex cor">
      <h2>Preocupados com a sua saúde, onde você estiver</h2>
    </div>
    <section id="hospitais"  class="hospitais col-md-8 offset-md-2 p-5 d-md-flex justify-content-md-between">
      <div class="card col-md-5 border border-0">
        <img src="imagens/Albert_eisten.jpg" class="card-img-top " alt="...">
          <div class="card-body">
            <h2 class="card-text"> Sua saúde é nossa prioridade </h2> 
            <p>Com todos os recursos da RemaimbrainMe, nós disponibilizamos todos os hospitais mais próximos a você. Em caso de emergência você já sabe em qual ir!</p>
            <a href="#" class="btn text-decoration-underline btn-link-dark">Ache os Hospitais Mais Próximos a mim</a>
          </div>
      </div>
      <div class="card col-md-5 border border-0">
        <img src="imagens/2c5dfa7cc0db7f8cb76ef79ea01173b0.jpg" class="card-img-top border-border-0 " alt="...">
          <div class="card-body">
            <h2 class="card-text"> Sua saúde é nossa prioridade </h2> 
            <p>Não só hospitais como clinicas de tratamento especializado, e profissionais de áreas específicas.</p>
            <a href="#" class="btn text-decoration-underline btn-link-dark">Ache as Clínicas mais próximas a mim</a>
          </div>
      </div>
    </section>

    <!--Botões avulsos-->

    <section id="botoes-2" role="group" class="botoes p-5 d-md-flex justify-content-md-between align-items-center align-self-strech w-75" >
      <a href="Clinicas.html" class="btn btn-ciano flex-fill"><img src="imagens/doutores.png" class="w-25"   alt="M"> <h3>Clínicas especializadas Próximas</h3></a>   
      <a href="Farmácias.html" class="btn btn-ciano flex-fill"><img src="imagens/loja.png" class="w-25"     alt="Farmácias Próximas"> <h3>Farmácias Cadastradas Próximas</H3> </a>
    </section>
   


    <!-- //Botões remédios -->

    <!-- <div id="botoes" class="d-flex mt-4" style="margin-top: 41px;">
      <a href="Medicamentos.html" class="btn btn-ciano"><img src="imagens/remedio.png" class="w-75"   alt="Medicamentos"> <H1>Nunca mais esqueça de tomar seus medicamentos e não deixe-os acabar</H1>
        <p>Muitas vezes, você que faz tratamento continuo com algum medicamento esquece de tomar no horári ou comprar quando está acabando, e pensando nisso a RemaimBrainMe veio para solucionar esse problema </p></a>
      <a href="bulas.html" class="btn btn-ciano"><img src="imagens/receita.png" class="w-75"   alt="Receita médica"> <H1>Jamais tome medicamentos sem ler a bula.</H1>
        <p>Quantas vezes você toma o remédio sem ler a bula, sem saber os possíveis efeitos colaterais </p></a>
      <a href="Farmácias.html" class="btn btn-ciano"><img src="imagens/hospital.png" class="w-75"     alt="Medicamentos"> <H1>Encontre o hospital mais próximo de você em qualquer lugar que esteja</H1>
        <p>Sempre que você precisar o RemainBrainMe vai te ajudar a encontrar o hospital mais próximo de você e sem transito, se possível. </p> </a>
    </div> -->




  </main>


  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
            <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
            <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
            <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
            <li><a href="http://scanfcode.com/category/android/">Android</a></li>
            <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/about/">About Us</a></li>
            <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
            <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
            <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
            <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
       <a href="#">Scanfcode</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>

  <script src="JS/Code.js"></script>
</body>

</html>




