@extends('layouts.index')
@section('content')
@php
$ar_companies = App\Companies::paginate(5);

@endphp
<form method="POST" action="{{route('companies.store')}}"
      enctype="multipart/form-data">
  @csrf

  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Companies</label>
    <div class="col-8">
      <input id="nama" name="nama" type="text"
      class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" />
      @error('nama')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label>
    <div class="col-8">
      <input id="email" name="email" type="email"
      class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" />
      @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <label for="logo" class="col-4 col-form-label">Logo</label>
    <div class="col-8">
      <input id="logo" name="logo" type="file"
      class="file @error('logo') is-invalid @enderror" value="{{ old('logo') }}" />
      @error('logo')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Website</label>
    <div class="col-8">
      <input id="website" name="website" type="text"
      class="form-control @error('website') is-invalid @enderror" value="{{ old('website') }}" />
      @error('website')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary"
      value="simpan">Simpan</button>
    </div>
  </div>
</form>

@endsection
