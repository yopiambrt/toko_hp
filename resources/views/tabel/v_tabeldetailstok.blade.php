@extends('layout.v_template')
@section('title','Tabel Stock')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Detail Order Stock</h3>
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
                <th>Keterangan</th>
                <th>Jumlah</th>
                <th>Harga</th>
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
                <td>{{ $row->keterangan }}</td>
                <td>{{ $row->jumlah_item }}</td>
                <td>Rp {{ number_format($row->harga_item, 2, ',', '.') }}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Karyawan</th>
                <th>Admin</th>
                <th>Produk</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Jumlah</th>
                <th>Harga</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>
@endsection