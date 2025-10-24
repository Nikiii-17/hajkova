
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-4">
    <table class="table table-bordered">
      <colgroup>
        <col style="width: 20%;">
        <col style="width: 10%;">
        <col style="width: 70%;">
      </colgroup>
      <thead class="table-light">
        <tr>
          <th>Země</th>
          <th>Vlajka</th>
          <th>Typ pečiva</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Francie</td>
          <td><span class="fi fi-fr fs-4"></span></td>
          <td>Croissant – máslové vrstvené těsto, ideální ke kávě.</td>
        </tr>
        <tr>
          <td>Itálie</td>
          <td><span class="fi fi-it fs-4"></span></td>
          <td>Focaccia – olivový olej, rozmarýn, měkká struktura.</td>
        </tr>
        <tr>
          <td>Česko</td>
          <td><span class="fi fi-cz fs-4"></span></td>
          <td>Chléb – kváskový, hutný, ideální k sádlu a cibuli.</td>
        </tr>
      </tbody>
    </table>
  </div>
  <?= $this->endSection(); ?>
