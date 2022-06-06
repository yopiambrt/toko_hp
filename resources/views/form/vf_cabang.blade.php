@extends('layout.v_template')
@section('title','Cabang')


@Section('content')

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cabang Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/cabang/tambah">
              @csrf
              <div class="box-body">
                @foreach ($textForm as $field)
                  <div class="form-group">
                    <label for="{{ $field['name'] }}">{{ $field['title'] }}</label>
                    <input name="{{ $field['name'] }}" value="{{ old($field['name']) }}" type="text" class="form-control @error($field['name']) is-invalid @enderror" id="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}">
                    
                    @error($field['name'])
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                @endforeach
                <div class="form-group">
                  <label>Manajer</label>
                    <select name="manajer" class="form-control select2 @error('manajer') is-invalid @enderror" style="width: 100%;">
                        <option value='' selected="selected" disabled></option>
                        @foreach ($manajer as $row)
                          <option value={{ $row->ktp }}>{{ $row->nama }} - {{ $row->ktp }}</option>
                        @endforeach
                    </select>
                    @error('manajer')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->  

        </div>


    </section>

@endsection