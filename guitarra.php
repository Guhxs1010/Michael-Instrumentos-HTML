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
    <link rel="icon" href="img/m.png">
    <title>Michael</title>
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
            body {
            margin: 0; /* Remova as margens padrão */
            padding: 0; /* Remova o preenchimento padrão */
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
        .video-guita{
            width: 100%;
            height: 100%;
        }
        .img-wrapper img {
            width: 300px;
        }

        *:before, *:after {
            box-sizing: border-box;
            -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
            outline: 1px solid transparent;
        }

        .wrapper {
            width: 280px;
            height: 480px;
            perspective: 800px;
            position: relative;
            margin: 0 170px 0 0;
        }

        .card {
            width: 320px;
            height: 450px;
            position: relative;
            transform-style: preserve-3d;
            transform: translateZ(-140px);
            transition: transform 420ms cubic-bezier(0.390, 0.575, 0.565, 1.000);
            cursor: pointer;
        }

        .card > div {
            position: absolute;
            width: 320px;
            height: 450px;
            padding: 34px 21px;
            transition: all 350ms cubic-bezier(0.390, 0.575, 0.565, 1.000);
        }

        .front {
            background-image: linear-gradient(180deg, #7850e5 0%, #5f489D 100%);
            transform: rotateY(0deg) translateZ(160px);
            border-radius: 10px;
        }

        .right {
            background-image: linear-gradient(0deg, #5F489D 0%, #7850e5 100%);
            opacity: 0.08;
            transform: rotateY(90deg) translateZ(160px);
            border-radius: 10px;
        }

        .card:hover {
            transform: translateZ(-160px) rotateY(-90deg);
        }

        .card:hover .front {
            opacity: 0;
        }

        .card:hover .right {
            opacity: 1;
        }

        h1, h2 {
            margin: 0;
            font-size: 38px;
            letter-spacing: -.25px;
            font-family: 'Font';
            font-weight: 700;
        }

        h2 {
            font-size: 21px;
        }

        p {
            margin: 0;
            font-weight: 300;
            font-size: 16px;
        }

        span {
            margin-left: 13px;
            opacity: .55;
        }

        img {
            transform-origin: top right;
            transition: transform 300ms cubic-bezier(0.390, 0.575, 0.565, 1.000);
            transition-delay: 100ms;
        }

        .img-wrapper {
            animation: float 4s cubic-bezier(0.390, 0.575, 0.565, 1.000) infinite alternate;
            position: absolute;
            top: 50%;
            right: 15%;
            backface-visibility: hidden;
        }

        @keyframes float {
            0% {
                transform: translateZ(20px);
            }

            100% {
                transform: translateY(-21px) translateX(-13px) translateZ(30px);
            }
        }

        .card:hover ~ .img-wrapper img {
            transform: scale(0.9) translateX(10%) translateY(0.5%) rotateZ(10deg);
            width: 400px;
        }

        ul {
            margin-left: 21px;
            padding: 0;
            font-size: 16px;
            font-weight: 300;
            list-style: none;
        }

        .lii {
            padding-bottom: 8px;
            position: relative;
            font-family: 'Font';
        }

        .lii:before {
            content: 'x';
            position: absolute;
            left: -21px;
            opacity: .55;
        }

        .comprar{
            position: absolute;
            right: 21px;
            bottom: 34px;
            border: none;
            box-shadow: none;
            background: none;
            color: inherit;
            font-family: 'Font';
            font-weight: 300;
            font-size: 15px;
            letter-spacing: -.25px;
            font-weight: 700;
            padding: 13px 34px;
            border-radius: 55px 55px 21px 55px;
            background-color: #7850e5;
            background-size: 125% 100%;
            background-position: right;
            cursor: pointer;
            box-shadow: 8px 5px 13px rgba(34, 34, 34, .08);
            transform: scale(0) skewY(13deg);
            transition: all 150ms cubic-bezier(0.390, 0.575, 0.565, 1.000);
            transform-origin: right bottom;
        }

        .card:hover button {
            transform: scale(1) skewY(0);
        }

        .card:not(:hover) button {
            opacity: 0;
        }

        button:hover {
            background-position: left;
        }

        .price {
            position: absolute;
            bottom: 34px;
            left: 21px;
            font-size: 34px;
            font-family: 'Font';
        }



        .fundo-caixas{
          background-image: url(img/rodape.png);
          background-size: cover;
          background-position: top; 
        }
        .container-caixas {
            color: white;
            display: flex;
            margin-left: 60px;
            margin: 10px;
            padding: 10px;
        }
        .mover-caixas{
          display: flex;
          justify-content: center;
          margin-top:-10px;
        }
        .sub-caixas{
          display: flex;
          justify-content: flex-start;
          /* margib: 90px 90px 0; */
          width: 80vw;
          margin-top: 90px;
        }
            .boneco,
.lupa {
    width: 25px;
}


.lupa {
    margin-left: 10px;
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
img.carrinho{
    width:35px;
}
.btn-carrinho{
    margin-top:-5px;
    margin-right:5px;
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
        .icones{
            display:none;
        }
        :root {
    --text-color: #5F489D;
    --white: #5F489D;
    --text-gray: #FEFEFE;
    --text-heading-gray: #D0D0F7;
    --background: #EDF0F9;
    --border: #aabfff;
}

/*? footer reset */
*, *::after, *::before {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    /* color: #5F489D; */
}

body {
    font-size: 16px;
    font-family: 'Inter', 
        sans-serif;
        color: var(--text-color);
}

.subscription-section {
    margin: 0 auto;
    margin-top: auto;
    padding: 48px 16px;
    max-width: 1024px;
    width: 100%;
}

/*? subscribe section */
.subscription-wrapper {
    margin: 0 auto;
    border-radius: 16px;
    padding: 24px;
    display: flex;
    min-height: 180px;
    gap: 32px;
    color: var(--primary);
    background-color: var(--background);
    flex-wrap: wrap;
    justify-content: start;
    align-items: center;
    justify-content: space-between;
}

.subscription__description {
    display: flex;
    flex-direction: column;
    gap: 12px;
    flex-grow: 1;
}

.subscribe-form {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    flex-grow: 1;
}

.subscribe-form > input {
    border: 1px solid var(
        --button-border);
    color: var(--primary);
    outline: none;
    min-height: 48px;
    background-color: var(
        --white);
    font-size: 1.2rem;
    flex-grow: 3;
    padding: 8px 12px;
    border-radius: 8px;
}

.subscribe-form > input:focus {
    border: 1px solid var(
        --primary);
}

.subscribe-form > 
input::placeholder {
    color: var(--text-heading-gray);
}

.subscribe-form > button {
    cursor: pointer;
    background-color:#5F489D;
    border-radius: 8px;
    color:#5F489D;
    font-size: 1.25rem;
    min-height: 48px;
    flex-grow: 1;
    white-space: nowrap;
    padding: 8px 12px;
    border: 0px;
    outline: none;
    border: 1px solid var(
        --button-border);
}

/*? footer containers */
.footer {
    bottom: 0px;
    background-color: var(
        --primary);
    width: 100%;
    min-width: 300px;
    bottom: 0px;
    display: flex;
    align-items: center;
    flex-direction: column;
    background-image: url(img/fundo.png);
    background-size: cover;
    background-position: top;
    color: var(--text-color);
}
.footer-wrapper {
    display: flex;
    flex-direction: column;
    max-width: 1024px;
    width: 100%;
    padding: 16px;
}
.redes-footer{
    font-size: 20px;
    margin-right: 20px;
    color: #000;
}
.footer-links {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    flex-grow: 4;
    gap: 48px 16px;
}

.footer-columns {
    display: flex;
    flex-wrap: wrap;
    padding: 24px 8px 36px 8px;
}

.footer-columns section, 
.footer-columns .footer-logo {
    display: flex;
    flex-direction: column;
    flex: 1 0 160px;
    max-width: 160px;
}
 
.footer-columns ul {
    display: flex;
    gap: 12px;
    list-style-type: none;
    padding: 0;
    margin: 0;
    flex-direction: column;
    font-weight: 600;
}

.footer-columns ul a {
    color: var(--text-color);
    text-decoration: none;
}

.footer-columns ul a:hover{
    text-decoration: underline;
}

.footer-columns h3 {
    opacity: 0.6;
    margin-top: 0;
    margin-bottom: 16px;
    font-size: 1rem;
}

.footer-logo {
    display: flex;
    gap: 16px;
    flex-grow: 1;
    max-width: 160px;
    margin-bottom: 48px;
}

.footer-logo svg {
    stroke: var(--text-color);
    stroke-width: 8px;
    width: 50px;
    height: 50px;
}

/*? Footer bottom */
.footer-bottom {
    margin-top: 48px;
    display: flex;
    align-items: end;
    width: 100%;
    gap: 16px;
    padding: 16px 0px;
    flex-wrap: wrap;
    justify-content: space-between;
    color: var(--text-color);
    border-top: 1px solid var(
        --border);
        color: var(--text-color);
}

.footer-bottom > small {
    font-size: 16px;
    margin: 0 4px;
}

.footer-headline > h2 {
    margin: 0px;
    color: var(--text-color);
}

.footer-headline > p {
   color: var(--text-color);
    margin: 4px 0px 20px 0px;
}

.footer-description {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.footer-description h3 {
    margin-bottom: 8px;
    color: var(--text-color);
}

/*? socials */

.social-wrapper {
    display: flex;
    width: 100%;
    gap: 8px;
    padding: 8px 0px;
    justify-content: end;
    margin-bottom: 16px;
    align-items: center;
    color: var(--text-color);
}

.social-links {
    display: flex;
    gap: 8px;
    margin-right: 100px;
    color: #000;
}

.social-links img {
    width: 24px;
    height: 24px;
    transition: all 0.2s ease-in-out;
}

.social-links img:hover {
    transform: scale(1.1);
}

.social-links ul {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    list-style-type: none;
}

.social-links ul li a i{
    fill: #000;
}
.social-links ul {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    list-style-type: none;  
}


/*? mobile */
@media (min-width: 926px) {
    .footer-logo {
        margin-right: auto;
    }
}

@media (max-width: 800px) {
    .footer-top {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 16px 8px 32px 8px;
    }

    .footer-bottom {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        text-align: center;
    }

    .social-wrapper {
        justify-content: center;
    }
}
.sections{
    display:flex;
    flex-wrap:nowrap;
}
.burguer{
    display:flex;
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
        margin-top:-30px;
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
     }
    #produtos-menu ul li{
        list-style: none;
    }
    #produtos-menu a {
        color: #fff;
    } 
    .card > div{
        width:250px;
    }
    .img-wrapper img{
        width:270px;
    }
    .sub-caixas{
        display:flex;
        flex-direction:column;
    }
    .inverso{
        margin-left:0;
        margin-left:190px;
        width:100px;
    }
    #buscar{
        width:200px;
        border:0;
    }
    .icones{
        display:flex;
        justify-content: end;
        margin-top:-40px;
        width:
    }
    .img-carrinho, .boneco, .lupa{
        width:25px;
    }
    .icones{
        display:flex;
        justify-content: end;
        margin-top:-40px;
        width:
    }
    .btn-contato-2{
       display:flex;
       margin-top:-5px;
    }
    .btn-contato{
        display:none;
    }
    #buscar{
        margin-top:5px;
    }
    .video-guita{
        margin-top:10px;
    }
    .nav-cont{
    margin-left:0;
}
.btn-carrinho{
    display:none;
}
.img-footer{
    width:100px;
    margin-left:85px;
    margin-top:10px;
}
.social-wrapper{
    display:none;
}
.footer-columns section, .footer-columns .footer-logo{
    margin-top:-30px;
}
.footer-bottom{
    margin-top:-20px;
} 
.sections{
    display:flex;
    flex-wrap:wrap;

}
.sections section{
    width:150px;
    margin-right:40px;
    margin-bottom:40px;

}
.footer-columns section{
    flex:0;
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
    
        <div class="icones">
            <a class="btn-carrinho-2" href="#"><img class="carrinho" src="img/Carinho.png" alt=""><button></button></a>
            <?php if(isset($_SESSION['email'])){
                echo "<img class='recebido' src='$imagem'></img>";
                echo "<a class='btn-sair' href='sair.php'><button>Sair</button></a>";
            }else{
                echo "<a class='btn-contato-2' href='cadastro.php'><img class='boneco' src='svg/boneco.svg'
                    alt=''><button></button></a>";
            }  
            ?>                  
        </div>
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

    <div class="video-inicio">
        <video class="video-guita" src="videos/Guitarra-banner.mp4" alt="" autoplay loop muted>
    </div>

        <!-- Caixa 1  -->
        <div class="fundo-caixas">
            <div class="mover-caixas">
              <div class="container-caixas">
                <div class="sub-caixas">
                <div class="caixa-1">
                  <div class="wrapper">
                      <div class="card">
                        <div class="front">
                          <h1>GUITARRA MICHAEL JAZZ </h1>
                          <p>Michael</p>
                          <p class="price">R$ 1500.00</p>
                        </div>
                        <div class="right">
                          <h2>GUITARRA</h2>
                          <ul>
                            <li class="lii">JAZZ ACTION</li>
                            <li class="lii">GM1159N MBK (METALLIC BLACK)</li>
                          </ul>
                          <button class="comprar">Comprar</button>
                        </div>
                      </div>
                      <div class="img-wrapper">
                           <img src='img/guitarra-1.png' alt=''>    
                      </div>
                    </div> 
                  </div>
                
                  <!-- Caixa 2 -->
                  <div class="caixa-2">
                    <div class="wrapper">
                      <div class="card">
                        <div class="front">
                          <h1>GUITARRA MICHAEL</h1>
                          <p>Michael</p>
                          <p class="price">R$ 500.00</p>
                        </div>
                        <div class="right">
                          <h2>GUITARRA</h2>
                          <ul>
                            <li class="lii">GM217N</li>
                            <li class="lii">STANDARD</li>
                            <li class="lii">MBA (METALLIC ALL BLACK)</li>
                          </ul>
                          <button class="comprar">Comprar</button>
                        </div>
                      </div>
                      <div class="img-wrapper">
                           <img src='img/guitarra-2.png' alt=''>    
                      </div>
                    </div> 
                  </div>
                 
                  <!-- Caixa 3 -->
                  <div class="caixa-3">
                    <div class="wrapper">
                      <div class="card">
                        <div class="front">
                          <h1>GUITARRA MICHAEL</h1>
                          <p>Michael</p>
                          <p class="price">R$ 1800.00</p>
                        </div>
                        <div class="right">
                          <h2>GUITARRA</h2>
                          <ul>
                            <li class="lii">GM730N</li>
                            <li class="lii">LP</li>
                            <li class="lii">GM730N GD (GOLD TOP)</li>
                          </ul>
                          <button class="comprar">Comprar</button>
                        </div>
                      </div>
                      <div class="img-wrapper">
                           <img src='img/guitarra-3.png' alt=''>    
                      </div>
                    </div> 
                  </div>
                  </div>
              </div>
          </div>
          
          
            <div class="mover-caixas">
              <div class="container-caixas">
                <div class="sub-caixas">
                <div class="caixa-4">
                  <div class="wrapper">
                      <div class="card">
                        <div class="front">
                          <h1>GUITARRA MICHAEL ROCKER </h1>
                          <p>Michael</p>
                          <p class="price">R$ 700.00</p>
                        </div>
                        <div class="right">
                          <h2>GUITARRA</h2>
                          <ul>
                            <li class="lii">ROCKER</li>
                            <li class="lii">GMS250</li>
                            <li class="lii">VS (VINTAGE SUNBURST)</li>
                          </ul>
                          <button class="comprar">Comprar</button>
                        </div>
                      </div>
                      <div class="img-wrapper">
                           <img src='img/guitarra-4.png' alt=''>    
                      </div>
                    </div> 
                  </div>
                
                  <!-- Caixa 2 -->
                  <div class="caixa-5">
                    <div class="wrapper">
                      <div class="card">
                        <div class="front">
                          <h1>GUITARRA MICHAEL</h1>
                          <p>Michael</p>
                          <p class="price">R$ 1300.00</p>
                        </div>
                        <div class="right">
                          <h2>GUITARRA</h2>
                          <ul>
                            <li class="lii">GML300</li>
                            <li class="lii">LP SPECIAL</li>
                          </ul>
                          <button class="comprar">Comprar</button>
                        </div>
                      </div>
                      <div class="img-wrapper">
                           <img src='img/GUITARRA-5.png' alt=''>    
                      </div>
                    </div> 
                  </div>
                 
                  <!-- Caixa 3 -->
                  <div class="caixa-6">
                    <div class="wrapper">
                      <div class="card">
                        <div class="front">
                          <h1>GUITARRA MICHAEL TL SLIDE</h1>
                          <p>Michael</p>
                          <p class="price">R$ 500.00</p>
                        </div>
                        <div class="right">
                          <h2>GUITARRA</h2>
                          <ul>
                            <li class="lii">TL SLIDE</li>
                            <li class="lii"> GM385N RD (RED)</li>
                          </ul>
                          <button class="comprar">Comprar</button>
                        </div>
                      </div>
                      <div class="img-wrapper">
                           <img src='img/guitarra-6.png' alt=''>    
                      </div>
                    </div> 
                  </div>
                  </div>
              </div>
          </div>
           </div>
          
           <footer class="footer">
            <div class="footer-wrapper">
                <div class="social-wrapper">
                    <div class='social-links'>
                        <ul>
                            <li>
                                <a href="#" title="Instagram" class="redes-footer">
                                    <i class="fa-brands fa-instagram" style="color: #5F489D;"></i>                      
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Linkedin" class="redes-footer">
                                    <i class="fa-brands fa-linkedin-in" style="color: #5F489D;"></i>
                                    
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Twitter" class="redes-footer">
                                    <i class="fa-brands fa-twitter" style="color: #5F489D;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Youtube" class="redes-footer">
                                    <i class="fa-brands fa-youtube" style="color: #5F489D;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="GitHub" class="redes-footer">
                                    <i class="fa-brands fa-github" style="color: #5F489D;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
              
                <div class="footer-columns">
                    <div class="footer-links">
                        <div class="footer-logo">
                            <img src="img/m.png" alt="">
                        </div>
                        <section>
                            <h3>Produtos</h3>
                            <ul>
                                <li>
                                    <a href="guitarra.php" title="API">Guitarra</a>
                                </li>
                                <li>
                                    <a href="baixo.php" title="Pricing">Baixo</a>
                                </li>
                                <li>
                                    <a href="ukulele.php" title="Documentation">Ukulele</a>
                                </li>
                                <li>
                                    <a href="bateria.php" title="Release Notes">Bateria</a>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h3>Resources</h3>
                            <ul>
                                <li>
                                    <a href="#" title="Support">Support</a>
                                </li>
                                <li>
                                    <a href="#" title="Sitemap">Sitemap</a>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h3>Company</h3>
                            <ul>
                                <li>
                                    <a href="#" title="About Us">About Us</a>
                                </li>
                                <li>
                                    <a href="#" title="Blog">Blog</a>
                                </li>
                                <li>
                                    <a href="#" title="Contact">Contact</a>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h3>Legal</h3>
                            <ul>
                                <li>
                                    <a href="#" title="Terms and services">
                                        Terms
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Privacy Policy">
                                        Privacy
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Cookies">
                                        Cookies
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Licenses">
                                        Licenses
                                    </a>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </section>
                    </div>
                   
                </div>
                <div class="footer-bottom">
                    <div class="footer-description">
                        <h3>The World of Music is an Invaluable Gift.</h3>
                        <p>Music<p>
                    </div>
                    <small>© Michael Instrumentos <span id="year"></span>, All rights reserved</small>
                </div>
            </div>
        </footer>

     
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
        function OpenMenu() {
    const menu = document.getElementById("container")
    if (menu.style.display === 'flex') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'flex';
    }
}
function buscarProduto() {
    const buscarInput = document.getElementById("buscar-input").value.toLowerCase();
    const produtos = document.querySelectorAll(".wrapper");
    const videoGuita = document.querySelector(".video-guita");

    produtos.forEach(produto => {
        const produtoNome = produto.querySelector("h1").innerText.toLowerCase();

        if (produtoNome.includes(buscarInput)) {
            produto.style.display = "block";
            if (videoGuita) {
                videoGuita.style.display = "none";
            }
        } else {
            produto.style.display = "none";
        }
    });
}

// Adiciona um evento ao campo de busca para detectar quando o usuário limpar o campo
document.getElementById("buscar-input").addEventListener("input", function () {
    if (this.value === "") {
        const produtos = document.querySelectorAll(".wrapper");
        const videoGuita = document.querySelector(".video-guita");

        produtos.forEach(produto => {
            produto.style.display = "block";
        });

        if (videoGuita) {
            videoGuita.style.display = "block";
        }
    }
});
document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
</body>
</html>