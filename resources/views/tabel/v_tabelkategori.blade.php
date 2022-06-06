@extends('layout.v_template')
@section('title','Tabel Produk')


@section('content')

<section class="content">
  @if ($inputSuccess == 'success')
  <div class="alert alert-success" role="alert">
    <strong>Data berhasil dimasukkan!</strong>
  </div>
  @elseif ($inputSuccess == 'failed')
  <div class="alert alert-success" role="alert">
    <strong>Data gagal dimasukkan!</strong>
  </div>
  @endif
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Kategori</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th width="50px">No</th>
                <th>Kategori</th>
              </tr>
            </thead>
            <tbody>
              @foreach($rows as $row)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $row->nama }}</td>
              </tr>
              @endforeach

          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->


      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
@endsection