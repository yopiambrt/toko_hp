@extends('layout.v_template')
@section('title','Tabel Cabang')


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
          <h3 class="box-title">Tabel Cabang</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Cabang</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Nama Manager</th>
                <th>Nomor KTP Manager</th>
              </tr>
            </thead>
            <tbody>
              @foreach($rows as $row)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $row->cabangNama }}</td>
                <td>{{ $row->cabangTelp }} </td>
                <td>{{ $row->cabangAlamat }}</td>
                <td>{{ $row->manajerNama }}</td>
                <td>{{ $row->manajerKtp }}</td>
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