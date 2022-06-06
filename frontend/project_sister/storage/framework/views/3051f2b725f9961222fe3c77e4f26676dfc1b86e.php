
<?php $__env->startSection('title','Tabel Produk'); ?>


<?php $__env->startSection('content'); ?>
<h1>Ini Halaman Tabel Produk</h1>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Produk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Kategori</th>
                  <th>Nama Produk</th>
                  <th>Stock</th>
                  <th>Harga</th>
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
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>ID Kategori</th>
                  <th>Nama Produk</th>
                  <th>Stock</th>
                  <th>Harga</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Produk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Stock</th>
                  <th>Harga</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                </tr>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Stock</th>
                  <th>Harga</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SisterTubes\frontend\project_sister\resources\views/v_tabelproduk.blade.php ENDPATH**/ ?>