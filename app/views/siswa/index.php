<div class="container">
  <h3 class="mb-3 text-capitalize">Daftar Siswa <?= $data['nama'] ?></h3>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Rombel</th>
        <th scope="col">Rayon</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($data['data'] as $sw) {
      ?>
        <tr>
          <th scope="row"><?= $no++ ?></th>
          <td><?= $sw['nama'] ?></td>
          <td><?= $sw['rombel'] ?></td>
          <td><?= $sw['rayon'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>