<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-5 text-center">
      <h1>Prohlédněte si naši nabídku!</h1>
      <br>
      <br>
</div>

<div class="container">
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
<br>
<br>

    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="row">
          <div class="col-6">
        <img src="images/chleb.webp" class="d-block w-100" alt="chleb" style="height: 400px; object-fit: cover;">
      </div>
      <div class="col-6 d-flex align-items-center justify-content-center">
        <div class="text-center">
          <h3>Moc dobrý rohlík</h3>
    </div>
  </div>
</div>
</div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-6">
        <img src="images/rohlik.jpg" class="d-block w-100" alt="rohlik" style="height: 400px; object-fit: cover;">
      </div>
      <div class="col-6 d-flex align-items-center justify-content-center">
        <div class="text-center">
          <h3>Moc dobrý chleba</h3>
    </div>
  </div>
    </div>
  </div>
</div>

    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>

   
    <div class="carousel-indicators position-static mt-3 text-center">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>

  </div>
</div>
<?= $this->endSection(); ?>
