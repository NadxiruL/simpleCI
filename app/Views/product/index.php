<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container" mt-3>
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Add Product</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ; ?>
    <?php foreach ($book as $bk) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $bk['name']; ?></td>
      <td><?= $bk['writer']; ?></td>
      <td><a href="/book/<?= $bk['book_id']; ?>" class="btn btn-success">Detail</a></td>
    </tr>
 <?php endforeach; ?>
  </tbody>
</table>
          

        </div>
    </div>
</div>

<?= $this->endSection(); ?>