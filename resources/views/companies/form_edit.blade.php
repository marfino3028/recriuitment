@extends('layouts.index')
@section('content')
@php
$ar_companies = App\Companies::paginate(5);
@endphp
@foreach ($data as $edit)

<form method="POST" action="{{route('companies.update',$edit->id)}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Companies</label>
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ $edit->nama }}" />
      @error('nama')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label>
    <div class="col-8">
      <input id="email" name="email" value="{{ $edit->email }}" type="email" class="form-control @error('email') is-invalid @enderror">
      @error('email')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
  </div>

  <div class="form-group row">
    <label for="logo" class="col-4 col-form-label">Logo</label>
    <div class="col-8">
      <input value="{{ $edit->logo }}" name="logo" type="file" class="form-control-file  @error('logo') is-invalid @enderror">
      @error('logo')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="website" class="col-4 col-form-label">Website</label>
    <div class="col-8">
      <input id="website" name="website" value="{{ $edit->website }}" type="text" class="form-control  @error('website') is-invalid @enderror">
      @error('website')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
  </div>
       <button name="proses" type="submit" class="btn btn-secondary"
      value="ubah"><i class="fas fa-pen"></i>&nbsp;Ubah</button>&nbsp;&nbsp;&nbsp;
    <a rel="nofollow" href="{{ url('/companies') }}"
       class="btn btn-primary btn-md">
        Kembali</a>
    </div>
  </div>
</form>
@endforeach
@endsection
