@extends('layout.v_template')
@section('title','Produk')


@Section('content')

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Produk Form</h3>
            </div>

            <form role="form" method="post" action="/produk/tambah">
              @csrf
              <div class="box-body">
              <div class="form-group">
                <label>ID Kategori</label>
                  <select name="kategori" class="form-control select2 @error('kategori') is-invalid @enderror" style="width: 100%;">
                      <option value='' selected="selected" disabled></option>
                      @foreach ($rows as $row)
                        <option value={{ $row->id }}>{{ $row->nama }}</option>
                      @endforeach
                  </select>
                  @error('kategori')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  

              </div>
                <!--
                <div class="form-group">
                  <label for="exampleInputIdKategori">ID Kategori</label>
                  <input type="text" class="form-control" id="exampleInputIdKategori" placeholder="Enter ID Kategori">
                </div> -->

                <div class="form-group">
                  <label for="exampleInputNamaProduk">Nama Produk </label>
                  <input name="nama" type="text" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" id="exampleInputNamaProduk" placeholder="Nama produk">
                  
                  @error('nama')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputTelp">Stok </label>
                  <input name="stok" type="text" value="{{ old('stok') }}" class="form-control @error('stok') is-invalid @enderror" id="exampleInputStok" placeholder="Stok">

                  @error('stok')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputHarga">Harga</label>
                  <input name="harga" type="text" value="{{ old('harga') }}" class="form-control @error('harga') is-invalid @enderror" id="exampleInputHarga" placeholder="Harga">
                  
                  @error('harga')
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

    </section>
@endsection