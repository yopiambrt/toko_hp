@extends('layout.v_template')
@section('title','Manajer')


@Section('content')

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Manajer Form</h3>
            </div>
            @if($alert != null)
              <div class="alert alert-danger">
                <h3>Gagal menambahkan manajer baru!</h3>
                <hr>
                <ul>
                  @if ($alert != null && $alert['ktp'])
                    <li>Nomor KTP sudah dipakai pengguna lain</li>
                  @endif
                  @if ($alert != null && $alert['username'])
                    <li>Username sudah dipakai pengguna lain</li>
                  @endif
                  @if ($alert != null && $alert['email'])
                    <li>Email sudah dipakai pengguna lain</li>
                  @endif
                </ul>
              </div>
            @endif

            <form role="form" method="post" action="/manajer/tambah">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputIdUser">KTP</label>
                  <input name="ktp" value="{{ old('ktp') }}" type="text" class="form-control @error('ktp') is-invalid @enderror" id="exampleInputIdUser" placeholder="Enter KTP">
                  
                  @error('ktp')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputIdUser">Username</label>
                  <input name="username" value="{{ old('username') }}" type="text" class="form-control" id="exampleInputIdUser" placeholder="Enter Username">

                  @error('username')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputIdUser">Email</label>
                  <input name="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalie @enderror" id="exampleInputIdUser" placeholder="Enter Email">

                  @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputNama">Nama </label>
                  <input name="nama" value="{{ old('nama') }}" type="text" class="form-control @error('nama') is-invalie @enderror" id="exampleInputNama" placeholder="Nama">
                  
                  @error('nama')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div> 
                <div class="form-group">
                  <label for="exampleInputTelp">No. Telp </label>
                  <input name="telp" value="{{ old('telp') }}" type="text" class="form-control @error('telp') is-invalie @enderror" id="exampleInputTelp" placeholder="No. Telp">
                  
                  @error('telp')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputAlamat">Alamat</label>
                  <input name="alamat" value="{{ old('alamat') }}" type="text" class="form-control @error('alamat') is-invalie @enderror" id="exampleInputAlamat" placeholder="Alamat">
                  
                  @error('alamat')
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