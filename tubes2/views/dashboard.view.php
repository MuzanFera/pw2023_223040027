<div class="container mt-3">
  <a href="../tambah.php" class="btn btn-secondary">Tambah Akun Admin</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
      </tr>
    </thead>
    <tbody>
      <?php $i =1; ?>
      <?php foreach ($admin as $admin) : ?>
      <tr>
      <th scope="row"><?= $i++;  ?></th>  
      <td>
        <img src="../img/<?= $admin['gambar'];  ?>"
        width="50">
      </td>
      <td><?= $admin['username'];  ?></td>
      <td><?= $admin['email'];  ?></td>
      <td><?= $admin['password'];  ?></td>
      <td>
        <a href="../ubah.php?id=<?= $admin['id'];  ?>" class="badge text-bg-warning">Ubah</a> |
        <a href="../hapus.php?id=<?= $admin['id'];  ?>" class="badge text-bg-danger" onclick="return confirm('Yakin Ingin Menghapus?');">hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>