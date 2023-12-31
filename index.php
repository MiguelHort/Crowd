<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Crowd</title>
  <link rel="stylesheet" href="css/index.css" />
  <link rel="icon" href="img/logo-2.png">
</head>

<body>
  <header>
    <nav>
      <a class="logo1" href="/"><img src="img/logo.png" alt=""></a>
      <div id="junto">
        <a class="logo2" href="/"><img src="img/logo-2.png" alt=""></a>
        <hr>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </div>
      <ul class="nav-list">
        <li><a href="#">Curtidos</a></li>
        <li><a href="#">Sobre Nós</a></li>
        <li><a href="#">Ajude-nos</a></li>
      </ul>
      <div id="login">
        <a id="entrar" href="html/login-cadastro.html" >
          <img src="img/entrar.png" alt="entrar">
          <p>ENTRAR</p>
        </a>
        <a href="html/login-cadastro.html">
        <button id="criar-conta">CRIAR CONTA</button>
      </a>
      </div>
    </nav>
  </header>

  <div id="imagem-principal">
    <input type="text" placeholder="Vamos aonde?">
  </div>

  <section id="populares">
    <div id="container-populares">
      <div id="titulo-populares">
        <h1>De pessoas para pessoas, os lugares <br><span style="color: #F2B203;"> mais
            populares</span> da sua cidade.</h1>
      </div>

      <?php $nomengc = include('database/maisPopulares.php'); ?>

      <div id="imagens-populares">
        <div class="local">
          <!-- <a href=""><img src="<?php echo $nomengc['imagem1']; ?>" alt="alexandria"></a> -->
          <a href=""><img src="img/fotos/Alexandria/alexandria (1).jpg" alt="alexandria"></a>
          <p><?php echo $nomengc['nomengc1']; ?></p>
        </div>
        <div class="local">
          <a href=""><img src="img/fotos/Gutbrau/gutbrau (1).jpg" alt="alexandria"></a>
          <p><?php echo $nomengc['nomengc2']; ?></p>
        </div>
        <div class="local">
          <a href=""><img src="img/fotos/Level Café/levelcafe (1).jpg" alt="alexandria"></a>
          <p><?php echo $nomengc['nomengc3']; ?></p>
        </div>
        <div class="local">
          <a href=""><img src="img/fotos/Unalome/unalome (1).png" alt="alexandria"></a>
          <p><?php echo $nomengc['nomengc4']; ?></p>
        </div>
      </div>
    </div>

  </section>

  <section id="slide">

    <div id="cadastro-local">
      <div id="texto">
        <h1>Ajude a dar mais visibilidade<br>para pequenos negócios.</h1>
        <br>
        <h3>Agora o seu sonho pode pode começar<br>com o pé direito!</h2>
          <br>
          <h3>Cadastre sua loja no nosso site e anuncie<br>conosco, seu estabelecimento em primeiro<br>lugar para as
            pessoas.</h3>
          <a href=""><button>Cadastrar</button></a>
      </div>
      <div id="pessoas">
        <img id="pessoas1" src="img/pessoas.png" alt="">
        <img id="pessoas2" src="img/pessoas-2.png" alt="">
      </div>
    </div>
  </section>


  <!-- categorias -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

  <section class="hero-section">
    <div class="card-grid">
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(https://drywashlavanderia.com.br/wp-content/uploads/2023/03/Como-se-vestir-para-uma-festa-a-noite-1080x675.jpg)">
        </div>
        <div class="card__content">
          <h3 class="card__heading">Casas noturnas</h3>
          <p class="card__category">Curta a sua noite</p>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(https://t2.uc.ltmcdn.com/pt/posts/7/8/2/como_jogar_boliche_9287_600.webp)"></div>
        <div class="card__content">
          <h3 class="card__heading">Diversão</h3>
          <p class="card__category">Venha se divertir!</p>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(https://up.sigvaris.com.br/wp-content/uploads/2021/06/Conheca-alguns-lugares-abertos-para-praticar-atividades-fisicas-em-SP.jpg)">
        </div>
        <div class="card__content">
          <h3 class="card__heading">Esportes/<br>Reacreação</h3>
          <p class="card__category">Em busca da qualidade de<br> vida</p>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(https:/img.freepik.com/fotos-gratis/jovem-beija-seu-homem-lindo-enquanto-jantar-romantico_171337-19116.jpg?w=360&t=st=1686572101~exp=1686572701~hmac=0f05366d1d2d746a1bc35db87ff0925386a289292566d1721108ccf67a781bdc   )">
        </div>
        <div class="card__content">
          <h3 class="card__heading">Encontros</h3>
          <p class="card__category">O amor está no ar!</p>
        </div>
      </a>
      <a class="card" href="cafes.html">
        <div class="card__background" style="background-image: url(https:/img.freepik.com/fotos-gratis/vapores-de-cafe-fresco-na-mesa-de-madeira-fecham-a-ia-generativa_188544-8923.jpg?w=996&t=st=1688213414~exp=1688214014~hmac=70da40012676b3fa38fcd2435a0b06fcbcd7d4ceff73c3300cfccd394ad532f7)">
        </div>
        <div class="card__content">
          <h3 class="card__heading">Cafés</h3>
          <p class="card__category">Aquele café quentinho</p>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(https:/img.freepik.com/fotos-gratis/bela-praia-tropical-mar-e-mar-com-palmeira-de-coco-na-hora-do-nascer-do-sol_74190-7454.jpg?w=826&t=st=1688213542~exp=1688214142~hmac=a712a5718216bd22b1f87606d3a42157d9ede813ce745a0a8fa05a1f2cac02c6)">
        </div>
        <div class="card__content">
          <h3 class="card__heading">Praias</h3>
          <p class="card__category">Vamos a la playa</p>
        </div>
      </a>
  </section>
 

</body>

</html>