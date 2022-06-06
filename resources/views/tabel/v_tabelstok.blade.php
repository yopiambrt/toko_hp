@extends('layout.v_template')
@section('title','Tabel Stock')


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

  @if ($deleteSuccess == 'success')
  <div class="alert alert-success" role="alert">
    <strong>Data berhasil dihapus!</strong>
  </div>
  @elseif ($deleteSuccess == 'failed')
  <div class="alert alert-success" role="alert">
    <strong>Data gagal dihapus!</strong>
  </div>
  @endif

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Order Stock</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Karyawan</th>
                <th>Admin</th>
                <th>Produk</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              @foreach($rows as $row)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $row->karyawan_nama }}</td>
                <td>{{ $row->admin_nama }}</td>
                <td>{{ $row->produk_nama}}</td>
                <td>{{ $row->tanggal }}</td>
                <td>
                  <a href="/order/{{$row->id}}">
                    <button type="button" class="btn btn-block btn-info btn-sm">Detail</button>
                  </a>
                  <a href="/order/update/{{$row->id}}">
                    <button type="button" class="btn btn-block btn-success btn-sm">Edit</button>
                  </a>
                  <a href="/order/delete/{{$row->id}}" onClick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                    <button type="button" class="btn btn-block btn-danger btn-sm">Delete</button>
                  </a>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>
@endsection