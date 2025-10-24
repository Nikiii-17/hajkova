
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

      <div class="col">
        <div class="card h-100">
          <div class="row g-0 h-100">
            <div class="col-6 position-relative">
              <img src="images/krosna.jpg" class="img-fluid h-100 w-100" alt="Francie" style="object-fit: cover;">
              <span class="fi fi-fr position-absolute top-0 start-0 m-2"></span>
            </div>
            <div class="col-6 d-flex flex-column text-center p-3">
              <h5 class="card-title">Francie</h5>
              <p class="card-text">Croissant plněný čokoládou.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <div class="row g-0 h-100">
            <div class="col-6 position-relative">
              <img src="images/fokacia.webp" class="img-fluid h-100 w-100" alt="Itálie" style="object-fit: cover;">
              <span class="fi fi-it position-absolute top-0 start-0 m-2"></span>
            </div>
            <div class="col-6 d-flex flex-column text-center p-3">
              <h5 class="card-title">Itálie</h5>
              <p class="card-text">Focaccia.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <div class="row g-0 h-100">
            <div class="col-6 position-relative">
              <img src="images/preclik.webp" class="img-fluid h-100 w-100" alt="Německo" style="object-fit: cover;">
              <span class="fi fi-de position-absolute top-0 start-0 m-2"></span>
            </div>
            <div class="col-6 d-flex flex-column text-center p-3">
              <h5 class="card-title">Německo</h5>
              <p class="card-text">Preclík.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <div class="row g-0 h-100">
            <div class="col-6 position-relative">
              <img src="images/vanocka.webp" class="img-fluid h-100 w-100" alt="Česko" style="object-fit: cover;">
              <span class="fi fi-cz position-absolute top-0 start-0 m-2"></span>
            </div>
            <div class="col-6 d-flex flex-column text-center p-3">
              <h5 class="card-title">Česko</h5>
              <p class="card-text">Vánočka.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <div class="row g-0 h-100">
            <div class="col-6 position-relative">
              <img src="images/strudl.webp" class="img-fluid h-100 w-100" alt="Rakousko" style="object-fit: cover;">
              <span class="fi fi-at position-absolute top-0 start-0 m-2"></span>
            </div>
            <div class="col-6 d-flex flex-column text-center p-3">
              <h5 class="card-title">Rakousko</h5>
              <p class="card-text">Štrůdl.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <div class="row g-0 h-100">
            <div class="col-6 position-relative">
              <img src="images/sejra.jpg" class="img-fluid h-100 w-100" alt="Švýcarsko" style="object-fit: cover;">
              <span class="fi fi-ch position-absolute top-0 start-0 m-2"></span>
            </div>
            <div class="col-6 d-flex flex-column text-center p-3">
              <h5 class="card-title">Švýcarsko</h5>
              <p class="card-text">Chleba se sýrem.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <?= $this->endSection(); ?>
