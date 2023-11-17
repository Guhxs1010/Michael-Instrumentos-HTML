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
            outline:none;
            
        }
        .upload{
            display: flex; 
            background-color: #5F489D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            margin-top: -20px;
            cursor: pointer;
            border-radius: 3px;
            margin-left: 140px;
        }
        .confirmar, .google, .facebook, .github{
            background-color: #5F489D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            margin-top: 40px;
            cursor: pointer;
            border-radius: 3px;
            margin-left: 260px;
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
        .img-perfil{
            display: flex;
            justify-content: center;
        }
        .perfil{
            width: 400px;
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
        .container i {
    display: none;
}
.add {
  border: none;
  display: flex;
  padding: 0.75rem 1.5rem;
  background-color: #488aec;
  color: #ffffff;
  font-size: 0.75rem;
  line-height: 1rem;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  vertical-align: middle;
  align-items: center;
  border-radius: 0.5rem;
  user-select: none;
  gap: 0.75rem;
  box-shadow: 0 4px 6px -1px #488aec31, 0 2px 4px -1px #488aec17;
  transition: all .6s ease;
}

.add:hover {
  box-shadow: 0 10px 15px -3px #488aec4f, 0 4px 6px -2px #488aec17;
}

.add:focus,button:active {
  opacity: .85;
  box-shadow: none;
}
.add svg {
  width: 1.25rem;
  height: 1.25rem;
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
     }
    #produtos-menu ul li{
        list-style: none;
    }
    #produtos-menu a {
        color: #fff;
    } 
    .sub-caixa{
        width: 300px;
    }
    .confirmar{
        margin-left: 0px;
        margin-left: 170px;
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
                <form enctype="multipart/form-data" action="processaimg.php" method="post" id="perfil-form">
                    <h1 class="texto1">Perfil</h1>
                    <div class="img-perfil">
                        <img class="perfil" id="perfil-img" src="img/perfil.png" alt="">
                    </div>
                    
                    <!-- Adicionando o campo de seleção de imagem -->
                    <label for="file">Escolha uma imagem:</label>
                    <input type="file" name="file" id="file" accept="image/*" onchange="updateProfileImage()">
                    
                    <input type="hidden" name='email' value=<?php echo $email?>>
                    
                    <!-- Adicionando o botão de confirmação -->
                    <button class="confirmar" type="submit">Confirmar</button>
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
        function OpenMenu() {
    const menu = document.querySelector(".nav-cont");
    if (menu.style.display === 'flex') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'flex';
    }

}
const image= document.querySelector('.perfil');
const input = document.querySelector('#file');


input.addEventListener('change',(e) =>{
    image.src = URL.createObjectURL(e.target.file[0]);
})
function updateProfileImage() {
            const image = document.getElementById("perfil-img");
            const input = document.getElementById("file");

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    image.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>