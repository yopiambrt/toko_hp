
<?php $__env->startSection('title','Tabel Cabang'); ?>


<?php $__env->startSection('content'); ?>
<h1>Ini Halaman Tabel Cabang</h1>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Cabang</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>KTP (Manager)</th>
                <th>Nama Cabang</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>KTP (Manager)</th>
                <th>Nama Cabang</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SisterTubes\frontend\project_sister\resources\views/v_tabelcabang.blade.php ENDPATH**/ ?>