<?php include_once('./partials/header.php'); ?>

<?php
$produtos = [
  array('id' => 1, 'nome' => 'Notebook', 'valor' => 1535.50, 'imagem' => 'produto01.jpg', 'Descrição' => 'Original skyloong gk61 sk61 teclado mecânico pbt keycap com fio gateron interruptor óptico rgb
  gaming pc desktop portátil usb jogo'),
  array('id' => 2, 'nome' => 'TV 43 pol', 'valor' => 2450.23, 'imagem' => 'produto02.jpg', 'Descrição' => 'Original skyloong gk61 sk61 teclado mecânico pbt keycap com fio gateron interruptor óptico rgb
  gaming pc desktop portátil usb jogo'),
  array('id' => 3, 'nome' => 'Máquina de lavar', 'valor' => 73430.00, 'imagem' => 'produto03.jpg', 'Descrição' => 'Original skyloong gk61 sk61 teclado mecânico pbt keycap com fio gateron interruptor óptico rgb
  gaming pc desktop portátil usb jogo'),
  array('id' => 4, 'nome' => 'Alexa geração 5', 'valor' => 430.00, 'imagem' => 'produto04.jpg', 'Descrição' => 'Original skyloong gk61 sk61 teclado mecânico pbt keycap com fio gateron interruptor óptico rgb
  gaming pc desktop portátil usb jogo'),
  array('id' => 5, 'nome' => 'Brinquedo de dinossauro', 'valor' => 65.00, 'imagem' => 'produto05.jpg', 'Descrição' => 'Original skyloong gk61 sk61 teclado mecânico pbt keycap com fio gateron interruptor óptico rgb
  gaming pc desktop portátil usb jogo'),
  array('id' => 1, 'nome' => 'Notebook', 'valor' => 1535.50, 'imagem' => 'produto01.jpg', 'Descrição' => 'Original skyloong gk61 sk61 teclado mecânico pbt keycap com fio gateron interruptor óptico rgb
  gaming pc desktop portátil usb jogo'),
  array('id' => 2, 'nome' => 'TV 43 pol', 'valor' => 2450.23, 'imagem' => 'produto02.jpg', 'Descrição' => 'Original skyloong gk61 sk61 teclado mecânico pbt keycap com fio gateron interruptor óptico rgb
  gaming pc desktop portátil usb jogo'),
  array('id' => 3, 'nome' => 'Máquina de lavar', 'valor' => 73430.00, 'imagem' => 'produto03.jpg', 'Descrição' => 'Original skyloong gk61 sk61 teclado mecânico pbt keycap com fio gateron interruptor óptico rgb
  gaming pc desktop portátil usb jogo'),
  array('id' => 4, 'nome' => 'Alexa geração 5', 'valor' => 430.00, 'imagem' => 'produto04.jpg', 'Descrição' => 'Original skyloong gk61 sk61 teclado mecânico pbt keycap com fio gateron interruptor óptico rgb
  gaming pc desktop portátil usb jogo'),
  array('id' => 5, 'nome' => 'Brinquedo de dinossauro', 'valor' => 65.00, 'imagem' => 'produto05.jpg', 'Descrição' => 'Original skyloong gk61 sk61 teclado mecânico pbt keycap com fio gateron interruptor óptico rgb
  gaming pc desktop portátil usb jogo'),
  array('id' => 1, 'nome' => 'Notebook', 'valor' => 1535.50, 'imagem' => 'produto01.jpg', 'Descrição' => 'Original skyloong gk61 sk61 teclado mecânico pbt keycap com fio gateron interruptor óptico rgb
  gaming pc desktop portátil usb jogo'),
  array('id' => 2, 'nome' => 'TV 43 pol', 'valor' => 2450.23, 'imagem' => 'produto02.jpg', 'Descrição' => 'Original skyloong gk61 sk61 teclado mecânico pbt keycap com fio gateron interruptor óptico rgb
  gaming pc desktop portátil usb jogo'),
];
?>

<?php ?>
<div class='container mb-5 pb-5 mb-md-0'>
  <?php include('./partials/search.php') ?>

  <div class='row g-3'>
    <?php foreach ($produtos as $item) :  ?>
      <div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch'>
        <div class='card text-center bg-light'>
          <img src="./assets/<?= $item['imagem']; ?>" class="card-img-top" alt="...">
          <div class="card-header">
            <p class='my-0'>R$ <?= $item['valor']; ?></p>
          </div>

          <div class='card-body'>
            <h5><p class='my-0'><?= $item['nome']; ?></p></h5>
            <p class="card-text truncate-3l ">
              <?= $item['Descrição'];?>                            
            </p>
          </div>

          <div class='card-footer py-3 g-3'>
                <button class='btn btn-primary'>carrinho</button>                
                <button class='btn btn-secondary'>detalhes</button>      
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php include('./partials/footer.php') ?>