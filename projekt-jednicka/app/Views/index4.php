<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-4">
        <div class="row g-3">
      
          
          <div class="col-12 col-md-6">
            <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">
              <div class="position-absolute top-0 start-0 w-100 h-100"
                   style="background-image: url('images/lenda.jpg'); background-size: cover; background-position: center;">
              </div>
              <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                          d-flex flex-column justify-content-center align-items-start text-white p-3">
                <a href="article/croissant" class="mt-auto fw-bold fs-2 text-white text-decoration-none">
                  Haf haf
                </a>
                <div class="mt-3 fs-4"> ;D</div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <div class="row row-cols-2 g-3">
      
             
              <div class="col">
                <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">
                  <div class="position-absolute top-0 start-0 w-100 h-100"
                       style="background-image: url('images/fokacia.webp'); background-size: cover; background-position: center;">
                  </div>
                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                              d-flex flex-column justify-content-center align-items-start text-white p-2">
                    <h6 class="fw-bold mt-auto fw-bold fs-2 text-white text-decoration-none">Fokaccia</h6>
                    <small>Italský bylinkový chléb s křupavou kůrkou.</small>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">
                  <div class="position-absolute top-0 start-0 w-100 h-100"
                       style="background-image: url('images/krosna.jpg'); background-size: cover; background-position: center;">
                  </div>
                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                              d-flex flex-column justify-content-center align-items-start text-white p-2">
                    <h6 class="fw-bold mt-auto fw-bold fs-2 text-white text-decoration-none">Croissant</h6>
                    <small>Máslové pečivo s nadýchanými vrstvami.</small>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">
                  <div class="position-absolute top-0 start-0 w-100 h-100"
                       style="background-image: url('images/preclik.webp'); background-size: cover; background-position: center;">
                  </div>
                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                              d-flex flex-column justify-content-center align-items-start text-white p-2">
                    <h6 class="fw-bold mt-auto fw-bold fs-2 text-white text-decoration-none">Preclík</h6>
                    <small>Slaný uzlík plný chuti a křupavosti.</small>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="ratio ratio-1x1 position-relative overflow-hidden rounded">
                  <div class="position-absolute top-0 start-0 w-100 h-100"
                       style="background-image: url('images/strudl.webp'); background-size: cover; background-position: center;">
                  </div>
                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                              d-flex flex-column justify-content-center align-items-start text-white p-2">
                    <h6 class="fw-bold mt-auto fw-bold fs-2 text-white text-decoration-none">Štrůdl</h6>
                    <small>Sladký závitek s jablky a skořicí.</small>
                  </div>
                </div>
              </div>
              <?= $this->endSection(); ?>