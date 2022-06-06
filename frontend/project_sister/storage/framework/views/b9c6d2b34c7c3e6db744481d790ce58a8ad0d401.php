
<?php $__env->startSection('title','Produk'); ?>


<?php $__env->startSection('content'); ?>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Produk Form</h3>
            </div>

            <form role="form">
              <div class="box-body">
              <div class="form-group">
                <label>ID Kategori</label>
                  <select class="form-control select2" style="width: 100%;">
                      <option selected="selected"> </option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                  </select>

              <!-- </div>
                <div class="form-group">
                  <label for="exampleInputIdKategori">ID Kategori</label>
                  <input type="text" class="form-control" id="exampleInputIdKategori" placeholder="Enter ID Kategori">
                </div> -->

                <div class="form-group">
                  <label for="exampleInputNamaProduk">Nama Produk </label>
                  <input type="text" class="form-control" id="exampleInputNamaProduk" placeholder="Nama produk">
                </div> 
                <div class="form-group">
                  <label for="exampleInputTelp">Stok </label>
                  <input type="text" class="form-control" id="exampleInputStok" placeholder="Stok">
                </div>
                <div class="form-group">
                  <label for="exampleInputHarga">Harga</label>
                  <input type="text" class="form-control" id="exampleInputHarga" placeholder="Harga">
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


        </div>

    </section>

    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SisterTubes\frontend\project_sister\resources\views/form/vf_produk.blade.php ENDPATH**/ ?>