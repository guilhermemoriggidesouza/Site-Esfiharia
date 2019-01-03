<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Galeria de Imagens</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="style.css?id=2">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="javascript/funcoes_imagens.js?id=2"></script>
    <script src="javascript/funcoes_js.js?id=2"></script>
</head>
    <body>
    <nav class="navbar navbar-expand-md back mb-0 navbar-light fixed-top" id="nav">
            <div class="container">
                <a href="#"><img src="imagens/logo1.png" class = "img-fluid" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapso">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="colapso">
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item text-light ml-3"><a class="nav-link text-light" href="#">HOME</a></li>
                        <li class="nav-item text-light ml-3"><a class="nav-link text-light" href="#sobre">SOBRE NÓS</a></li>
                        <li class="nav-item text-light ml-3"><a class="nav-link text-light" href="#contato">CONTATO</a></li>
                        <li class="nav-item text-light ml-3"><a class="nav-link text-light" href="cardapio.php">CARDÁPIO</a></li>
                        <li class="nav-item text-light ml-3"><a class="nav-link text-light" href="imagens.php">MÍDIA</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto mr-5">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggler text-light" data-toggle="dropdown" id="navDrop">Redes Sociais</a>
                            <div class="dropdown-menu back">
                                <a href="https://www.facebook.com/abuh.esfihas.7" class="nav-link text-light">Facebook <img alt="fotoAbuh" src="imagens/facebook.png" width="20%"></a><br>
                                <a href="https://www.instagram.com/abuhesfihas/" class="nav-link text-light">Instagram <img alt="fotoAbuh" src="imagens/insta.png" width="20%"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="abuh"></div>
        <span class="key"></span>
        <div>
            <div class="text-center my-5">
                <h2>Nossas Mídias</h2>
                <p class="lead">Confira algumas fotos de nossas esfihas</p>
            </div>
            
            <div class="container">
                <div class="row">
                    <div id="fotosGeral"></div>
                </div>
            </div>
        </div>
        <footer class="bg-dark">
           <br>
           <div class="container">
               <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-3 col-sm-3 bg-dark">
                        <p class="lead text-light">Menu</p>
                        <ul class="nav flex-column text-light">
                            <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Mídia</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">cardápio</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Sobre Nós</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <p class="lead text-light">Redes Sociais</p>
                        <ul class="text-light nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/abuh.esfihas.7">Facebook <img alt="fotoAbuh" src="imagens/facebook.png" width="10%"></a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/abuhesfihas/">Instagram <img alt="fotoAbuh" src="imagens/insta.png" width="10%" ></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 img-fluid ">
                        <img alt="fotoAbuh" src="imagens/abuh_logo" class="img-fluid">
                    </div>
                </div>
                <p class="text-light text-center">todos os direitos reservados a <img alt="fotoAbuh" src="imagens/copyrights.ico">Abuh Esfiharia</p>
                
            </div>
            <p class="text-light float-right"><a href="https://www.facebook.com/profile.php?id=100007441428815" class="eu">desenvolvido por Guilherme Moriggi de Souza</a></p>
            <br>
            <br>
       </footer>
        <div class="modal fade" role="dialog" id="meuModal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Visualizador de Fotos</h5>
                        <button type="button" class="close" data-dismiss="modal">x</button>
                    </div>

                    <div class="modal-body text-center fundo">
                        <span><button type="button" class="out-line btn btn-outline-warning mb-1" onclick="setBack();">Back</button></span>
                        <span class="next"><button type="button" class="out-line btn btn-outline-warning mb-1" onclick="setNext();">Next</button></span>
                        <span id="fotoModal"></span>
                        <span ><button type="button" class="out-line btn btn-outline-warning mt-1" onclick="setBack();">Back</button></span>
                        <span class="next"><button type="button" class="out-line btn btn-outline-warning mt-1" onclick="setNext();">Next</button></span>
                    </div>
                </div>
            </div>
        </div>


         <!-- Bootstrap Javascript-->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>