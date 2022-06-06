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
              <h3 class="box-title">Kategori Form</h3>
            </div>
            <form role="form" method="post" action="/kategori/tambah">
              @csrf
              <div class="box-body">
              <div class="form-group">
                <!--
                <div class="form-group">
                  <label for="exampleInputIdKategori">ID Kategori</label>
                  <input type="text" class="form-control" id="exampleInputIdKategori" placeholder="Enter ID Kategori">
                </div> -->

                <div class="form-group">
                  <label for="exampleInputNamaProduk">Nama Kategori</label>
                  <input name="nama" type="text" value="{{ old('nama') }}" id="exampleInputNamaProduk" placeholder="Nama kategori" class="form-control @error('nama') is-invalid @enderror">

                  @error('nama')
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