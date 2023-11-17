<?php
session_start();
if(isset($_SESSION['email']['Imagem'])){
    $imagem = $_SESSION['email']['Imagem'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Michael</title>
    <link rel="icon" href="img/m.png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: 0;
        }

        @font-face {
            font-family: 'Font';
            src: url(fonts/Roboto-Medium.ttf);
        }
/* tela de carregamento */
.loading-screen {
    /* position: fixed; */
    position: absolute;
            width: 100%;
            height: 100%;
            z-index: 9999;
           
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transition: opacity 0.5s;
}

.video-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
  

        .loading-content {
            text-align: center;
            color: white; /* Cor do texto */
            font-size: 24px; /* Tamanho da fonte */
        }

        .logo {
            max-width: 100px; /* Tamanho do logotipo */
        }
        .container {
            display: flex; 
            align-items: center; 
        }

        .logo {
            width: 100px;
            margin-left: 80px;
        }

        .nav-cont {
            display: flex; 
            list-style: none; 
            margin-left: 110px;
        }

        a {
            font-family: 'Font';
            color: #5F489D;
            font-size: 20px;
            text-decoration: none;
        }
        .nav-cont li {
            margin-right: 130px;
        }
        .boneco, .lupa{
            width: 25px;
            border: none; /* Removendo as bordas dos ícones */
        }
        .lupa{
            margin-left: 10px;
        }
        .power{
            width: 100%;
            height: 100%;  
        }
        .caixa {
            background-color: #ffffff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .texto1{
            color: #5F489D;
            margin-bottom: 20px;
            font-family: 'Font';
        }

        label {
            display: block;
            text-align: left;
            margin-top: 10px;
            font-family: 'Font';
            color: #5F489D;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .confirmar, .google, .facebook, .github{
            background-color: #5F489D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 3px;
        }
        .login{
            background-color: #5F489D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 3px;
            
        }

        button:hover {
            background-color: #423377;
        }
        .fundo-cadastro {
            background-image: url(img/rodape.png);
            background-size: cover;
            background-position: top;
            width: 100%;
            height: 650px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .img-google {
            width: 40px;
        }
        .img-google:hover {
            width: 47px;
            background-color: white;
            transition: 0.5s;
        }
        .google {
            background-color: white;
        }
        .google:hover {
            background-color: white;
        }
        .img-github {
            width: 40px;
        }
        .img-github:hover {
            width: 47px;
            background-color: white;
            transition: 0.5s;
        }
        .github {
            background-color: white;
        }
        .github:hover {
            background-color: white;
        }
        .img-facebook {
            width: 40px;
        }
        .img-facebook:hover {
            width: 47px;
            background-color: white;
            transition: 0.5s;
        }
        .facebook {
            background-color: white;
        }
        .facebook:hover {
            background-color: white;
        }
        .redes {
            display: flex;
            justify-content: center;
            margin-top: -20px;
        }
        .container {
                display: flex; 
                align-items: center; 
            }

            .logo {
                width: 100px;
                margin-left: 80px;
            }

            .nav-cont {
                display: flex; 
                list-style: none; 
                margin-left: 110px;
            }
            .linha, .sobre {
                font-family: 'Font';
                color: #5F489D;
                font-size: 20px;
                text-decoration: none;
            }
            .nav-cont li {
                margin-right: 130px;
            }
 /* Estilo do menu de produtos */
       #produtos-container {
            position: relative;
            z-index: 2; /* Coloca o menu de produtos acima do carrossel */
        }

        #produtos-link {
            position: relative;
            cursor: pointer;
        }

        #produtos-link a {
            text-decoration: none;
            color: #5F489D;
            font-family: 'Font';
            font-size: 18px;
            display: block;
        }

        #produtos-menu {
            display: none;
            position: absolute;
            background-color: white;
            width: 100px;
            border: 1px solid #ccc;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }

        #produtos-menu ul {
            list-style: none;
        }

        #produtos-menu li {
            padding: 10px 0;
        }

        #produtos-menu a {
            text-decoration: none;
            color: #555;
            font-family: 'Font';
            font-size: 16px;
            padding: 5px 20px;
            display: block;
            transition: background-color 0.2s;
        }

        #produtos-menu a:hover {
            background-color: #eee;
        }

        #produtos-menu li:last-child a {
            border-top: 1px solid #ccc;
        }

        /* Estilo do carrossel */
        .carrossel {
            position: relative;
            z-index: 1; /* Coloca o carrossel abaixo do menu de produtos */
            width: 100%;
            overflow: hidden;
        }

        .carrossel-container {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }

        .video {
            flex: 0 0 100%;
            max-width: 100%;
        }
                /* Adicionei os estilos para os links do menu aqui */
        .nav-cont li a {
            text-decoration: none;
            color: #5F489D;
            font-size: 20px;
            position: relative;
            transition: color 0.4s;
        }

        .nav-cont li a::after {
            content: '';
            width: 0;
            height: 2px;
            background: #5F489D;
            position: absolute;
            left: 0;
            bottom: -3px;
            transition: width 0.3s;
        }

        .nav-cont li a:hover {
            color: #5F489D;
        }

        .nav-cont li a:hover::after {
            width: 100%;
        }
        i {
    color: #5F489D;
    float: right;
    display: none;
}

.botao-bars {
    background: none;
}
.logo-1{
    display: none;
}
#produtos-menu{
    width: 200px;
    display: none;
    flex-direction: column;
    list-style: none;
}
.botao-bars{
    display: none;
}
.recebido{
    width:100px;
    height:50px;
    border-radius:100%;
}
.btn-sair {
    text-decoration: none;
    background: none;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    color: #5F489D;
    font-family: 'Font';
    font-size: 20px;
    margin-left: 10px;
}

.btn-sair:hover {
    color: #5F489D;
}

.btn-sair .lupa {
    margin-left: 5px; /* Adicione um espaçamento entre o texto e o ícone, se necessário */
}
.boneco,
.lupa {
    width: 25px;
}

.wrapper {
            width: 280px;
            height: 480px;
            perspective: 800px;
            position: relative;
            margin: 0 170px 0 0;
        }

#buscar {
            display: flex;
            align-items: center;
            margin: 20px;
            border: 3px solid #5F489D;
            border-radius: 20px;
            overflow: hidden;
            margin-top:-10px;
        }

        .btn-lupa {
            text-decoration: none;
            position: relative;
            display: flex;
            align-items: center;
            padding: 8px;
            background-color: #f9f9f9;
        }

        .lupa {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }

        #buscar-input {
            padding: 8px;
            border: none;
            border-radius: 4px;
            flex: 1;
            outline:none;
        }

        .card {
  width: fit-content;
  height: fit-content;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 25px 25px;
  gap: 20px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.055);
}

/* for all social containers*/
.socialContainer {
  width: 52px;
  height: 52px;
  background-color:#5F489D;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  transition-duration: .3s;
}
/* instagram*/
.containerOne:hover {
  background-color: #d62976;
  transition-duration: .3s;
}
/* twitter*/
.containerTwo:hover {
  background-color: #00acee;
  transition-duration: .3s;
}
/* linkdin*/
.containerThree:hover {
  background-color: #0072b1;
  transition-duration: .3s;
}
/* Whatsapp*/
.containerFour:hover {
  background-color: #128C7E;
  transition-duration: .3s;
}

.socialContainer:active {
  transform: scale(0.9);
  transition-duration: .3s;
}

.socialSvg {
  width: 17px;
}

.socialSvg path {
  fill: rgb(255, 255, 255);
}

.socialContainer:hover .socialSvg {
  animation: slide-in-top 0.3s both;
}

@keyframes slide-in-top {
  0% {
    transform: translateY(-50px);
    opacity: 0;
  }

  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

.lupa {
    margin-left: 10px;
}
img.carrinho{
    width:35px;
}
.btn-carrinho{
    margin-top:-5px;
    margin-right:5px;
}

@media (max-width:780px) {
    .container{
        display: none;
        background-color: #5F489D;
        margin-top:10px;
    }
    .container li {
        padding: 10px;
    }
    i {
        display: flex;
        cursor: pointer;
        font-size: 30px;
    }
    .botao-bars{
        display: flex;
    }

    .carrossel {
        width: 320px;
        display: flex;
        margin-top: 20px;
    }
    ul{
        display: flex;
        flex-direction: column;
    }
    .btn-contato, .btn-lupa{
        display: none;
    }
    .logo{
        display: none;
    }   
    .logo-michael-1{
        display: flex;
        justify-content: center;
    }
    .logo-1{
        display: flex;
        width: 50px;
        margin-top: -30px;
    }
    #bao{
        color: white;
    }
    #produtos-link #bao{
        color: white;
    }
    #produtos-menu {
        display: none;
        position: relative;
        background-color: #5F489D;
        border:none;
        width: 200px;
        list-style: none;
     }
    #produtos-menu ul li{
        list-style: none;
    }
    #produtos-menu a {
        color: #fff;
    } 
    }
    </style>
</head>
<body>
    <div class="loading-screen">
        <video class="video-bg" autoplay muted loop>
            <source src="videos/logotipo (2).mp4" type="video/mp4">
        </video>
    </div>

    <button class="botao-bars" onclick="OpenMenu()">
            <i class="fa-solid fa-bars" id="bars"></i>
        </button>
        <a class="logo-michael-1" href="index.php">
            <img class="logo-1" src="img/m.png" alt="logo">
        </a>
    
    <!-- Menu -->
    <div class="container" id="container">
    <a class="logo-michael" href="index.php">
            <img class="logo" src="img/m.png" alt="logo">
        </a>
        <ul class="nav-cont" id="produtos-container">
            <li class="li" id="produtos-link">
                <a id="bao" class="linha" href="#">Produtos</a>
                <ul class="nav-produtos" id="produtos-menu">
                    <li><a href="guitarra.php">Guitarra</a></li>
                    <li><a href="baixo.php">Baixo</a></li>
                    <li><a href="ukulele.php">Ukulele</a></li>
                    <li><a href="bateria.php">Bateria</a></li>
                </ul>
            </li>
            <li class="li"><a id="bao" class="linha" href="infantis.php">Infantis</a></li>
            <li class="li"><a id="bao" class="linha" href="artistas.php">Artistas</a></li>
            <li class="li"><a id="bao" class="sobre" href="index.php">Sobre a Michael</a></li>
            <a class="btn-carrinho" href="#"><img class="carrinho" src="img/Carinho.png" alt=""><button></button></a>
            <?php if(isset($_SESSION['email'])){
                echo "<img class='recebido' src='$imagem'></img>";
                echo "<a class='btn-sair' href='sair.php'><button>Sair</button></a>";
            }else{
                echo "<a class='btn-contato' href='cadastro.php'><img class='boneco' src='svg/boneco.svg'
                    alt=''><button></button></a>";
            }  
            ?>
                                    <div id="buscar">
            <a class="btn-lupa" href="#"><img class="lupa" src="svg/lupa.svg" alt=""><button></button></a>
                <input type="text" id="buscar-input" placeholder="Pesquisar Produto" oninput="buscarProduto()">
                <button onclick="buscarSite()"></button>
            </div>
        </ul>
    </div>

    <!-- Formulário de cadastro -->
    <div class="fundo-cadastro">
        <div class="sub-caixa">
    <div class="caixa">
     
    
    <?php
    if(isset($_GET['fail']) && $_GET['fail'] == 1) {
        echo 'erro ao cadastrar,usuario ou senha incorretos';
    } elseif(isset($_GET['fail']) && $_GET['fail'] == 0){
        echo 'usuario cadastrado com sucesso';
    }

 
    ?>

        <form action="processar.php" method="post">
            <h1 class="texto1">Cadastro</h1>
       
            <div class="card">
  <a href="#" class="socialContainer containerOne">
    <svg class="socialSvg instagramSvg" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path> </svg>
  </a>
  
  <a href="#" class="socialContainer containerTwo">
    <svg class="socialSvg twitterSvg" viewBox="0 0 16 16"> <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path> </svg>              </a>
    
  <a href="#" class="socialContainer containerThree">
    <svg class="socialSvg linkdinSvg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
  </a>
  
  <a href="#" class="socialContainer containerFour">
    <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path> </svg>
  </a>
</div>  

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email">

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" >

            <label for="confirmarSenha">Confirmar Senha:</label>
            <input type="password" id="confirmarSenha" name="confirmarSenha">
            <button class="confirmar" type="submit">Cadastrar</button>
            <button class="login" type="submit">Login</button>
        </form>
    </div>
</div>
</div>
    <script>
       // Quando todo o conteúdo da página é carregado
window.addEventListener("load", function() {
    setTimeout(function() {
        document.querySelector(".loading-screen").style.opacity = "0";
        setTimeout(function() {
            document.querySelector(".loading-screen").style.display = "none";
        }, 100); // Tempo de transição (500 ms)
    }, 400); // Tempo de exibição (5000 ms)
});


const produtosLink = document.getElementById("produtos-link");
        const produtosMenu = document.getElementById("produtos-menu");

        produtosLink.addEventListener("mouseover", function() {
            produtosMenu.style.display = "block";
        });

        produtosLink.addEventListener("mouseout", function() {
            produtosMenu.style.display = "none";
        });
function google(){
    window.location.href="https://accounts.google.com/v3/signin/identifier?hl=pt-br&ifkv=AVQVeyy2NIkrMRrJddw0XmYzlIGJ05rbhrSzQ2wY0SdNUHqa5JqGIN8pTxxeOUqugW1m1RB_vnCmMA&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S705250434%3A1698427290290364&theme=glif"
}
function github2(){
    window.location.href="https://github.com/login"
}
function facebook2(){
    window.location.href="https://pt-br.facebook.com/"
}
function OpenMenu() {
    const menu = document.getElementById("container")
    if (menu.style.display == 'flex') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'flex';
    }
}
    </script>
</body>
</html>