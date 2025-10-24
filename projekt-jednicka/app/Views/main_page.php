<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
   
   <h1>Hlavní nadpis</h1> 
    <?= anchor("page2", "Druhá strana"); ?> 
    <?php
    $imageProperties = array(
      'src' => 'images/p.webp',
      'class' => 'img-fluid'
    );
    echo img($imageProperties);
    img('images/p.webp')?>
   
    
    <?= $this->endSection(); ?>
