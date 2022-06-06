
<?php $__env->startSection('title','Cabang'); ?>


<?php $__env->startSection('content'); ?>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cabang Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputMan-Ktp">Manajer - KTP</label>
                  <input type="text" class="form-control" id="exampleInputManKtp" placeholder="Manajer - ktp">
                </div>
                <div class="form-group">
                  <label for="exampleInputNamaCabang">Nama Cabang</label>
                  <input type="text" class="form-control" id="exampleInputNamaCabang" placeholder="Nama cabang">
                </div>
                <div class="form-group">
                  <label for="exampleInputTelp">No. Telp </label>
                  <input type="text" class="form-control" id="exampleInputTelp" placeholder="No. Telp">
                </div>
                <div class="form-group">
                  <label for="exampleInputAlamat">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Alamat">
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->  

        </div>


    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SisterTubes\frontend\project_sister\resources\views/form/vf_cabang.blade.php ENDPATH**/ ?>