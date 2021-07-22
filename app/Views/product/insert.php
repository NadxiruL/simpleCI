<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Insert Data</h2>

            <form action="/product/save" method="post">
            <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : '' ; ?>" id="name" name="name" autofocus value="<?= old('name'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
      <?= $validation->getError('name'); ?>
    </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="writer" class="col-sm-2 col-form-label">Writer</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="writer" name="writer" value="<?= old('writer'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="publisher" name="publisher" value="<?= old('publisher'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="photo" name="photo" value="<?= old('photo'); ?>">
                    </div>
                </div>
            
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>

</div>

<?= $this->endSection(); ?>