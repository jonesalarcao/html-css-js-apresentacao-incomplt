<?php include ('config.php'); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="discription" content="Descrição">
  <title>Projeto 01</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
  <link <?php INCLUDE_PATH; ?> rel="stylesheet" href="estilo/style.css">
  <script src="<?php INCLUDE_PATH; ?>https://kit.fontawesome.com/fe4ccc4a65.js" crossorigin="anonymous"></script>
  <script src="<?php INCLUDE_PATH; ?>js/jquery.js"></script>
  <script src="<?php INCLUDE_PATH; ?>js/script.js"></script>
</head>
<body>
    <header>
      <div class="center">
      <div class="logo left">Logomarca</div>
      <nav class="desktop right">
        <ul>
          <li><a href="<?php INCLUDE_PATH; ?>"></a>Home</li>
          <li><a href="<?php INCLUDE_PATH; ?>sobre"></a>Sobre</li>
          <li><a href="<?php INCLUDE_PATH; ?>servicos"></a>Serviços</li>
          <li><a href="<?php INCLUDE_PATH; ?>contato"></a>Contato</li>
        </ul>
      </nav>
      <nav class="mobile right">
        <div class="botao-menu-mobile">
          <i class="fa-solid fa-bars"></i>
        </div>
        <ul>
          <li><a href="<?php INCLUDE_PATH; ?>"></a>Home</li>
          <li><a href="<?php INCLUDE_PATH; ?>sobre"></a>Sobre</li>
          <li><a href="<?php INCLUDE_PATH; ?>servicos"></a>Serviços</li>
          <li><a href="<?php INCLUDE_PATH; ?>contato"></a>Contato</li>
        </ul>
      </nav>
      <div class="clear"></div>
</div>
    </header>
    <section class="banner-principal">
      <div class="overlay"></div>
      <div class="center">
        <form>
          <h2>Qual seu melhor e-mail?</h2>
          <input type="email" name="email" required>
          <input type="submit" name="acao" value="Cadastrar">
        </form>
      </div>
    </section>

    <section class="descricao-autor">
      <div class="center">
        <div class="w50 left">
          <h2>João Antonio</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="w50 left">
          <img class="foto-perfil right" src="<?php INCLUDE_PATH; ?>images/foto-fb2.jpg">
        </div>
        <div class="clear"></div>
      </div>
      </section>
    <section class="especialidades">
      <div class="center">
        <h2 class="title">Especialidades</h2>
          <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-css3-alt"></i></h3>
            <h4>CSS3</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          </div>
           <div class="w33 left box-especialidade">
           <h3><i class="fa-brands fa-html5"></i></h3>
            <h4>HTML5</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          </div>
           <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-square-js"></i></h3>
            <h4>JavaScript</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          </div>
          <div class="clear"></div>
      </div>
    </section>

    <section class="extras">
      <div class="center">
      <div class="w50 left depoimentos-container">
        <h2 class="title">Depoimentos de nossos clientes</h2>
        <div class="depoimento-single">
          <p class="depoimento-descricao">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
          <p class="nome-autor">Lorem Ipsum</p>
        </div>
        <div class="depoimento-single">
          <p class="depoimento-descricao">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
          <p class="nome-autor">Lorem Ipsum</p>
        </div>
        <div class="depoimento-single">
          <p class="depoimento-descricao">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
          <p class="nome-autor">Lorem Ipsum</p>
        </div>
      </div>
      <div class="w50 left servicos-container">
        <h2 class="title">Serviços</h2>
        <div class="servicos">
          <ul>
            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
          </ul>
        </div>
</div>
        <div class="clear"></div>
      </div>
      </div>
    </section>

    <!-- <?php
      $url = isset($_GET['url']) ? $_GET['url'] : 'home';
      if (file_exists('pages/'.$url.'.php')) {
        include('pages/'.$url.'.php');
      }else{
        include('pages/404.php');
      }
    ?> -->
    
    <footer>
      <div class="center">
        <p>Todos os direitos reservados!</p>
      </div>
    </footer>
</body>
</html>
