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
    <link rel="icon" href="img/m.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
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

.linha,
.sobre {
    font-family: 'Font';
    color: #5F489D;
    font-size: 20px;
    text-decoration: none;
}

.linha-footer,
.sobre-footer {
    font-family: 'Font';
    color: #ffffff;
    font-size: 20px;
    text-decoration: none;
}

.nav-cont li {
    margin-right: 130px;
}

.carrossel {
    width: 100%;
    overflow: hidden;
    position: relative;
}

.carrossel-container {
    display: flex;
    transition: transform 0.3s ease-in-out;
}

.video {
    flex: 0 0 100%;
    max-width: 100%;
}

.power {
    width: 100%;
    height: 100%;
}

.bolinhas {
    display: flex;
    justify-content: center;
    margin-top: 240px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.bolinha {
    display: inline-block;
    width: 10px;
    height: 10px;
    background-color: #999;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
    width: 20px;
    height: 20px;
}

.bolinha.ativa {
    background-color: #5F489D;
}

.saiba {
    position: absolute;
    z-index: 999;
    top: 280px;
    left: 2550px;
    opacity: 1;
    border: 1px solid white;
    background-color: #5F489D;
    /* Fundo transparente */
    color: #ffffff;
    font-family: 'Font';
    width: 100px;
    height: 50px;
    border-radius: 20px;
    cursor: pointer;
    display: block;
    line-height: 50px;
    text-align: center;
}

.saiba:hover {
    color: #5F489D;
    background-color: #ffffff;
    transition: 1s;
}

.boneco,
.lupa {
    width: 25px;
}


.lupa {
    margin-left: 10px;
}

.meio {
    background-image: url(img/fundo.png);
    background-size: cover;
    background-position: top;
}

.meio1,
.meio2 {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-direction: row-reverse;
}

.meio2 {
    flex-direction: row;
}

.imagem-centro {
    width: 300px;
    margin-left: 160px;
    margin-right: 30px;
    margin-top: 10px;
}

.texto-centro {
    color: #5F489D;
    font-family: 'Font';
    font-size: 30px;
    margin-right: 500px;
    margin-top: 50px;
}

.texto-centro2 {
    color: #5F489D;
    font-family: 'Font';
    font-size: 30px;
    margin-left: 50px;
    margin-top: 40px;
}

.conteudo-centro {
    color: black;
    font-family: 'Font';
    font-size: 19px;
    width: 700px;
    margin-top: 10px;
}

.conteudo-centro2 {
    color: black;
    font-family: 'Font';
    font-size: 19px;
    margin-top: 10px;
    margin-left: 50px;
    width: 700px;
}

.texto-meio {
    margin-right: 100px;
}

.imagem-meio {
    margin-left: 100px;
}

.imagem-centro2 {
    width: 700px;
    margin-right: 68px;
    margin-top: -10px;
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


.logo {
    max-width: 100px;
    /* Tamanho do logotipo */
}

.nav-footer {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding-top: 50px;
    padding-right: 120px;
    list-style: none;
}

.footer {
    background-image: url(img/rodape.png);
    background-size: cover;
    background-position: top;
}

.imagem-footer {
    display: flex;
    justify-content: left;
    margin-right: 20px;
}

.inverso {
    max-width: 200px;
    margin-left: 800px;
    margin-top: -90px;
}

/* Estilo do menu de produtos */
#produtos-container {
    position: relative;
    z-index: 2;
    /* Coloca o menu de produtos acima do carrossel */
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
    list-style: none;
}

#produtos-menu ul{
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
    z-index: 1;
    /* Coloca o carrossel abaixo do menu de produtos */
    width: 100%;
    overflow: hidden;
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

.nav-cont li a:hover:after {
    width: 100%;
}

.container i {
    display: none;
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

        .icones{
            display:none;
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
     }
    #produtos-menu ul li{
        list-style: none;
    }
    #produtos-menu a {
        color: #fff;
    } 
    .imagem-centro, .imagem-centro2{
        display: none;
    }
    .texto-centro {
        font-size: 24px; /* Defina o tamanho de fonte desejado */ /* Ajuste conforme necessário */
        margin-left: 370px;
    }
    
    .texto-centro2 {
        font-size: 24px; /* Defina o tamanho de fonte desejado */
        margin-left: 50px; /* Ajuste conforme necessário */
        margin-top: 30px; /* Ajuste conforme necessário */
        width: 200px;
    }
    
    .conteudo-centro,
    .conteudo-centro2 {
        font-size: 14px; /* Defina o tamanho de fonte desejado */
        margin-top: 10px; /* Ajuste conforme necessário */
        width: 260px; /* Ocupar a largura total */
    }
    .conteudo-centro{
        margin-left: 370px;
    }
    .conteudo-centro2{
        margin-right: 70px;
    }
    .meio{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .meio2{
        margin-bottom: 20px;
    }
    .inverso{
        margin-left:0px;
        margin-left: 160px;
        margin-top: -100px;
        width: 100px;
        height: auto;
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
.btn-lupa{
    display:none;
}
.btn-carrinho-2{
    margin-top:-5px;
}
.btn-carrinho{
    display:none;
}
.btn-contato{
    display:none;
}
.btn-contato-2{
    display:flex;
    margin-top:-5px;
}
.bars{
    display:flex;
    margin-top:10px;
}
#buscar{
    margin-top:5px;
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
    
    <div class="bars">
    <button class="botao-bars" onclick="OpenMenu()">
        <button class="botao-bars" onclick="OpenMenu()">
            <i class="fa-solid fa-bars" id="bars"></i>
        </button>
    </div>
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
                
            </div>
       
</div>
            
            
        </ul>
    </div>

    <!-- Carrrossel -->
    <div class="carrossel">
        <div class="carrossel-container">
            <video class="video" autoplay muted loop>
                <source src="videos/Michael Instrumentos.mp4" type="video/mp4">
            </video>

            <a href="power.php"><button class="saiba">Saiba Mais</button></a>
            <img class="power" src="img/Power Gate.png" alt="">



            <!-- <button class="saber">Saiba Mais</button> -->
            <video class="video" autoplay muted loop>
                <source src="videos/Bateria.mp4" type="video/mp4">
            </video>
            <!-- Adicione mais vídeos aqui -->
        </div>
        <!-- Bolinhas Carrossel -->
        <div class="bolinhas">
            <span class="bolinha ativa" data-index="0"></span>
            <span class="bolinha" data-index="1"></span>
            <span class="bolinha" data-index="2"></span>
        </div>
    </div>

    <!-- Sobre Nós -->
    <div class="meio">
        <div class="meio1">
            <div class="texto-meio">
                <h1 class="texto-centro">Sobre a Michael Instrumentos</h1>
                <p class="conteudo-centro">Bem-vindo ao mundo apaixonante da Michael Instrumentos, onde a música é mais
                    do que apenas notas e acordes. Desde a nossa fundação, nos dedicamos a criar e fornecer instrumentos
                    musicais de alta qualidade que inspiram músicos de todas as idades a explorar seu potencial criativo
                    e a aprofundar seu amor pela música.Nossa jornada começou com um compromisso inabalável com a
                    excelência e a inovação. Ao longo dos anos, conquistamos a confiança e o respeito de músicos
                    profissionais, educadores de música e entusiastas da música em todo o Brasil. Nossos instrumentos
                    são cuidadosamente projetados, construídos com artesanato de qualidade e testados exaustivamente
                    para garantir um som excepcional e durabilidade.
                </p>
            </div>
            <div class="imagem-meio">
                <img class="imagem-centro" src="img/m.png" alt="">


                
            </div>
        </div>
        <div class="meio2">
            <div class="texto-meio2">
                <h1 class="texto-centro2">Compromisso com a Qualidade</h1>
                <p class="conteudo-centro2">
                    Na Michael Instrumentos, nossa paixão pela música é inigualável, e um dos pilares fundamentais de
                    nossa marca é o compromisso inabalável com a qualidade. Acreditamos que a qualidade de um
                    instrumento musical é a chave para desbloquear o verdadeiro potencial de um músico. É por isso que
                    dedicamos nosso tempo e esforço para oferecer instrumentos que são um reflexo de nossa busca
                    incessante por excelência.Artesanato de Qualidade: Cada instrumento que sai de nossas instalações é
                    uma obra-prima de artesanato. Nossos luthiers altamente experientes trazem anos de conhecimento e
                    habilidade para cada instrumento que criam. A madeira é selecionada com cuidado, as técnicas
                    tradicionais são honradas e a atenção aos detalhes é incansável. O resultado é um som rico, uma
                    aparência excepcional e uma sensação de qualidade em cada instrumento.
                </p>
            </div>
            <div class="imagem-meio2">
                <img class="imagem-centro2" src="img/Guitarra1.png" alt="" class="imagemcentro">
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
window.addEventListener("load", function () {
    setTimeout(function () {
        document.querySelector(".loading-screen").style.opacity = "0";
        setTimeout(function () {
            document.querySelector(".loading-screen").style.display = "none";
        }, 100); // Tempo de transição (500 ms)
    }, 400); // Tempo de exibição (5000 ms)
});

// Quando todo o conteúdo da página é carregado
window.addEventListener("load", function () {
    esconderTelaDeCarregamento();
});

const produtosLink = document.getElementById("produtos-link");
const produtosMenu = document.getElementById("produtos-menu");

produtosLink.addEventListener("mouseover", function () {
    produtosMenu.style.display = "block";
});

produtosLink.addEventListener("mouseout", function () {
    produtosMenu.style.display = "none";
});

const carrosselContainer = document.querySelector(".carrossel-container");
const bolinhas = document.querySelectorAll('.bolinha');
let currentIndex = 0;
let timer;


function nextImage() {
    currentIndex++;
    if (currentIndex >= carrosselContainer.children.length - 1) {
        currentIndex = 0;
    }
    updateCarousel();
}

function updateCarousel() {
    const imageWidth = carrosselContainer.children[0].offsetWidth;
    carrosselContainer.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
    updateBolinhas();
}

function updateBolinhas() {
    bolinhas.forEach((bolinha, index) => {
        if (index === currentIndex) {
            bolinha.classList.add('ativa');
        } else {
            bolinha.classList.remove('ativa');
        }
    });
}

// Função para clicar nas bolinhas
bolinhas.forEach((bolinha, index) => {
    bolinha.addEventListener('click', () => {
        currentIndex = index;
        updateCarousel();
    });
});

function startAutoAdvance() {
    timer = setInterval(nextImage, 7000);
}


// Inicie o temporizador para avançar automaticamente
startAutoAdvance();


function OpenMenu() {
    const menu = document.getElementById("container")
    if (menu.style.display == 'flex') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'flex';
    }
}

document.getElementById("year").innerHTML = new Date().getFullYear();   

    </script>


</body>

</html>