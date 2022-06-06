@extends('layout.v_template')
@section('title','Karyawan')


@Section('content')

<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Karyawan</h3>
        </div>
        @if($alert != null)
              <div class="alert alert-danger">
                <h3>Gagal menambahkan karyawan baru!</h3>
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

        <form role="form" method="post" action="/karyawan/tambah">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="ktp">Nomor KTP </label>
              <input name="ktp" value="{{ old('ktp') }}"  type="text" class="form-control @error('ktp') is-invalid @enderror" id="ktp" placeholder="Nomor ktp">
              
              @error('ktp')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input name="username" value="{{ old('username') }}"  type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username">
              
              @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input name="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalie @enderror" id="email" placeholder="Enter Email">

              @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label>Cabang</label>
                <select name="cabang" class="form-control select2 @error('cabang') is-invalid @enderror" style="width: 100%;">
                    <option value='' selected="selected" disabled></option>
                    @foreach ($cabang as $row)
                      <option value={{ $row->id }}>{{ $row->nama }} - {{ $row->id }}</option>
                    @endforeach
                </select>
                @error('cabang')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
              <label for="nama">Nama Karyawan</label>
              <input name="nama" value="{{ old('nama') }}"  type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Karyawan">
              
              @error('nama')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="telp">Nomor Telepon</label>
              <input name="telp" value="{{ old('telp') }}"  type="text" class="form-control @error('telp') is-invalid @enderror" id="nomor" placeholder="Nomor Telepon">
              
              @error('telp')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input name="alamat" value="{{ old('alamat') }}"  type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat">
              
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