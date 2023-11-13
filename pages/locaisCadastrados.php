<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local</title>
    <link rel="stylesheet" href="../css/locaisCadastrados.css">
</head>
<body>

    <?php $nomengc = include('../database/todosLocais.php'); ?>

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
    
</body>
</html>