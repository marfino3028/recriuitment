@extends('layouts.index')
@section('content')
@php
//array scalar

//ambil master data
$ar_companies = App\Companies::all();
$ar_employees = App\Employees::all();
@endphp
@foreach ($data as $edit)

<form method="POST" action="{{route('employees.update',$edit->id)}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Employees</label>
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ $edit->nama }}" />
      @error('nama')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Company</label>
    <div class="col-8">
      <select name="company_id" id="company_id" class="company_id custom-select @error('company_id') is-invalid @enderror">
        <option value="">-- Pilih Company --</option>
        @foreach ($ar_companies as $div)
        {{ $cell = ($div['id'] == $edit->company_id) ? 'selected' : '' }}
        <option value="{{ $div['id'] }}" {{ $cell }}> {{ $div['nama'] }} </option>
        @endforeach
      </select>
      @error('company_id')
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

       <button name="proses" type="submit" class="btn btn-secondary"
      value="ubah"><i class="fas fa-pen"></i>&nbsp;Ubah</button>&nbsp;&nbsp;&nbsp;
    <a rel="nofollow" href="{{ url('/employees') }}"
       class="btn btn-primary btn-md">
        Kembali</a>
    </div>
  </div>
</form>
@endforeach
@endsection
