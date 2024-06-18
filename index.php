<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jooogs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet">
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class=" container-fluid">
        <a class="navbar-brand" href="#">
          <img class="" src="imgs/logo-tryhard.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#">jogos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">quem somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">seja um tryhard</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
        <?php
        //imprimir o conteudo do array do GET
        //print_r($_GET);

        //recuperar variavel pagina
        $pages = $_GET["pages"] ?? "home";

        //paginas home php
        $paginas = "pages/{$pages}.php";


        //verificar se o arquivo exite
        if (file_exists($paginas)) {
            include $paginas;
        } else {
            include "pages/erro.php";
        }
        ?>

    </main>

  <footer>
      <section class="d-flex justify-content-around" style="height: 100px; background-color:black;">
          <div clas="d-flex">
              <h3 style="color: white;">Redes Sociais </h3>
              <a href="mailto:vitorgiese@hotmail.com?subject=Duvidas" style="width: 30px;"><i class="fa-solid fa-envelope"></i></a>

              <a href="https://wa.me/5544991583564"><i class="fa-solid fa-phone"></i></a>

              <a href="https://www.instagram.com/vistorgiese/"><i class="fa-brands fa-instagram"></i></a>

          </div>
          <div class="creditos">
            <P style="color: white;">Desenvolvido por <br> Vitor Giese &copy;</P>
        </div>
      </section>
      
    
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>