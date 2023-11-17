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
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: rgba(0, 0, 0, 0.8); /* Cor de fundo com transparência */
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

        .boneco, .lupa{
            width: 25px;
        }
        .lupa{
            margin-left: 10px;
        }
        .power{
            width: 100%;
            height: 100%;  
        }
        .artistas-video{
            width: 100%;
            height: 100%;
        }

        .artistas-container {
            display: flex;
            justify-content: center;
        }

        .artista {
            flex: 0 0 calc(33.33% - 20px); /* 3 artistas por linha com espaçamento */
            margin: 10px;
            background-image: url(img/fundo.png);
            background-size: cover;
            background-position: top;
            width: 500px;  
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra */
            text-align: center;
            cursor: pointer;
        }

        .imagem-artista img {
            max-width: 250px; /* A imagem do artista não ultrapassa o contêiner */
            border-radius: 50%; /* Imagem com bordas arredondadas */
        }

        .info {
            text-align: center;
            margin-top: 10px;
        }

        .info h1 {
            font-size: 24px; /* Tamanho da fonte do nome do artista */
            color: #5F489D; /* Cor do texto */
            font-family: 'Font';
        }
        .artistas{
            display: flex;
            justify-content: center;
        }
        .meio{
                background-image: url(img/rodape.png);
                background-size: cover;
                background-position: top; 
                display: flex;
                flex-direction: row-reverse;
                align-items: center;
                margin-top: -5px;
                height: 300px;
        }
        .imagem-centro{
                width: 300px;
                margin-left: 160px;
                margin-right: 30px;
                margin-top: 10px;
        }
            
        .texto-centro{
                color: #ffffff;
                font-family: 'Font';
                font-size: 30px;
                margin-right: 750px;

        }
        .conteudo-centro{
                color: #ffffff;
                font-family: 'Font';
                font-size: 19px;
                width: 700px;
                margin-top: 10px;
        }
        .imagem-centro{
            width: 250px;
        }
        .linha-footer, .sobre-footer {
                font-family: 'Font';
                color: #ffffff;
                font-size: 20px;
                text-decoration: none;
            }
            .nav-footer{
                display: flex;
            flex-direction: column;
                align-items: center;
                justify-content: center;
                padding-top: 50px;
                padding-right: 120px;
                list-style: none;
            }
            .footer{
                background-image: url(img/rodape.png);
                background-size: cover;
                background-position: top;    
            }
            .imagem-footer{
                display: flex;
                justify-content: left;
                margin-right: 20px;
            }
            .inverso{
                max-width: 200px;
                margin-left: 800px;
                margin-top: -90px;
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
        :root {
    --text-color: white;
    --white: white;
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
}

body {
    font-size: 16px;
    font-family: 'Inter', 
        sans-serif;

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
    background-color: var(
        --primary);
    border-radius: 8px;
    color: var(--white);
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
    background-image: url(img/rodape.png);
    background-size: cover;
    background-position: top;
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
    color: var(--text-heading-gray);
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
}

.footer-bottom > small {
    font-size: 16px;
    margin: 0 4px;
}

.footer-headline > h2 {
    margin: 0px;
    color: var(--text-primary);
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

.sections{
    display:flex;
    flex-wrap:nowrap;
}
.btn-contato-2, .btn-carrinho-2{
    display:none;
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
        margin-right: 0px;
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
    .texto-centro {
        font-size: 24px; /* Defina o tamanho de fonte desejado */ /* Ajuste cedonforme necessário */
        margin-left: 200px;
        margin-right: 0px;
        width: 100px;
    }
    .conteudo-centro {
        font-size: 14px; /* Defina o tamanho de fonte desejado */
        margin-top: 10px; /* Ajuste conforme necessário */
        width: 260px;
        margin-right: 50px; /* Ocupar a largura total */
    }
    .conteudo-centro{
        margin-left: 170px;
    }
    .imagem-centro{
        display: none;
    }
    .artistas{
        display: flex;
        flex-direction: column;
    }
    .artista{
        width: 300px;
    }
    .inverso{
        margin-left:0px;
        margin-left: 160px;
        margin-top: -100px;
        width: 100px;
        height: auto;
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
.nav-cont{
    margin-left:0;
}
.artistas-video{
    margin-top:15px;
}
.btn-carrinho-2{
    margin-top:-5px;
}
.btn-carrinho{
    display:none;
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
    .btn-contato-2, .btn-carrinho-2{
    display:flex;
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
                echo "<img class='recebido' sr  c='$imagem'></img>";
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
            </div>
        </ul>
    </div>

    <div class="video-meio">
        <div class="video">
            <video class="artistas-video" src="videos/Artistas.mp4" autoplay loop muted></video>
        </div>
    </div>

    <div class="meio">
       
        <div class="texto-meio">
            <h1 class="texto-centro">Artistas</h1>
            <p class="conteudo-centro">Michael Instrumentos está sendo representada por músicos talentosos e carismáticos. Ter artistas que compartilham uma conexão genuína com a marca e seus instrumentos é valioso para ambas as partes. Essa parceria pode fortalecer a presença da Michael no cenário musical e inspirar músicos aspirantes a explorar os produtos da marca.
            </p>
        </div>

        <div class="imagem-meio">
            <img class="imagem-centro" src="img/inverso.png" alt="">
        
    </div>
    </div>

    <div class="fundo-centro">
       <div class="artistas-centro">
        <div class="artistas">

            <!-- Artista-1 -->
            <div class="artista">
                <div class="imagem-artista">
                    <img src="img/artista-1.png" alt="">
                </div>
                <div class="info">
                    <h1>Alan Rosa</h1>
                </div>
            </div>

       <!-- Artista-2 -->
       <div class="artista">
        <div class="imagem-artista">
            <img src="img/artista-2.png" alt="">
        </div>
        <div class="info">
            <h1>Gabriel Faro</h1>
        </div>
    </div>

     <!-- Artista-3 -->
     <div class="artista">
        <div class="imagem-artista">
            <img src="img/artista-3.png" alt="">
        </div>
        <div class="info">
            <h1>Marlon Marquis</h1>
        </div>
    </div>

        </div>
       </div>
    </div>

        <div class="fundo-centro">
       <div class="artistas-centro">
        <div class="artistas">

            <!-- Artista-4 -->
            <div class="artista">
                <div class="imagem-artista">
                    <img src="img/artista-4.png" alt="">
                </div>
                <div class="info">
                    <h1>Claudio Infante</h1>
                </div>
            </div>

       <!-- Artista-5 -->
       <div class="artista">
        <div class="imagem-artista">
            <img src="img/artista-5.png" alt="">
        </div>
        <div class="info">
            <h1>Alexandre Magno</h1>
        </div>
    </div>

     <!-- Artista-6 -->
     <div class="artista">
        <div class="imagem-artista">
            <img src="img/artista-6.png" alt="">
        </div>
        <div class="info">
            <h1>Daniel Victor</h1>
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
                                    <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>                      
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Linkedin" class="redes-footer">
                                    <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                    
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Twitter" class="redes-footer">
                                    <i class="fa-brands fa-twitter" style="color: #ffffff;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Youtube" class="redes-footer">
                                    <i class="fa-brands fa-youtube" style="color: #ffffff;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="GitHub" class="redes-footer">
                                    <i class="fa-brands fa-github" style="color: #ffffff;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
              
                <div class="footer-columns">
                    <div class="footer-links">
                        <div class="footer-logo">
                            <img class="img-footer" src="img/inverso.png" alt="">
                        </div>
                        <div class="sections">
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
    const container = document.querySelector(".container");
    if (container.style.display === 'flex' || container.style.display === '') {
        container.style.display = 'none';
    } else {
        container.style.display = 'flex';
    }
}
document.getElementById("year").innerHTML = new Date().getFullYear();  
    </script>
</body>
</html>