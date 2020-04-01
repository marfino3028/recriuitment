@extends('layouts.index')
@section('content')
@php
//array scalar
//ambil master data
$ar_companies = App\Companies::paginate(5);
$ar_employees = App\Employees::paginate(5);
@endphp
<form method="POST" action="{{route('employees.store')}}"
      enctype="multipart/form-data">
  @csrf

  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Employees</label>
    <div class="col-8">
      <input id="nama" name="nama" type="text"
      class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" />
      @error('nama')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Company</label>
    <div class="col-8">
      <select id="company_id" name="company_id"
      class="company_id custom-select @error('company_id') is-invalid @enderror">
        <option value="">-- Pilih Company --</option>
        @foreach ($ar_companies as $div)
        <option value="{{ $div['id'] }}"> {{ $div['nama'] }} </option>
        @endforeach
      </select>
      @error('company_id')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>

<div class="form-group row">
        <label class="col-4 col-form-label">Email</label>
        <div class="col-8">
          <input name="email" id="email" type="email"
        class="form-control @error('email') is-invalid @enderror" {{ old('email') }}/>
        @error('email')
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
