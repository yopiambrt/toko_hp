@extends('layout.v_template')
@section('title','Order Stok')


@Section('content')

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Order Stok Form</h3>
            </div>

            <form role="form" method="post" action="/order/tambah">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label>Karyawan</label>
                  <select name="karyawanKtp" class="form-control select2 @error('karyawanKtp') is-invalid @enderror" style="width: 100%;">
                      <option value='' selected="selected" disabled></option>
                      @foreach ($karyawan as $row)
                        <option value={{ $row->ktp }}>{{ $row->nama }}</option>
                      @endforeach
                  </select>
                  @error('karyawanKtp')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Admin</label>
                  <select name="adminKtp" class="form-control select2 @error('adminKtp') is-invalid @enderror" style="width: 100%;">
                      <option value='' selected="selected" disabled></option>
                      @foreach ($admin as $row)
                        <option value={{ $row->ktp }}>{{ $row->nama }}</option>
                      @endforeach
                  </select>
                  @error('adminKtp')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div> 
                <div class="form-group">
                  <label>Produk</label>
                  <select name="produkId" class="form-control select2 @error('produkId') is-invalid @enderror" style="width: 100%;">
                      <option value='' selected="selected" disabled></option>
                      @foreach ($produk as $row)
                        <option value={{ $row->id }}>{{ $row->nama }}</option>
                      @endforeach
                  </select>
                  @error('produkId')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputKeterangan">Keterangan</label>
                  <input name="keterangan" type="text" value="{{ $update != null ? $data->keterangan : old('keterangan') }}" class="form-control @error('keterangan') is-invalid @enderror" id="exampleInputKeterangan" placeholder="Keterangan">

                  @error('keterangan')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                 <div class="form-group">
                  <label for="exampleInputJumlah">Jumlah</label>
                  <input name="jumlahItem" type="text" value="{{ $update != null ? $data->jumlah_item : old('keterangan')}}" class="form-control @error('jumlahItem') is-invalid @enderror" id="exampleInputJumlah" placeholder="Jumlah">

                  @error('jumlahItem')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                 <div class="form-group">
                  <label for="exampleInputHarga">Harga</label>
                  <input name="hargaItem" type="text" value="{{ $update != null ? $data->harga_item : old('keterangan') }}" class="form-control @error('hargaItem') is-invalid @enderror" id="exampleInputHarga" placeholder="Harga">

                  @error('hargaItem')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


        </div>

    </section>
    
@endsection