@extends('layouts.index')
@section('content')
<center>
<div class="card shadow mb-4">
    @foreach ($ar_employees as $employees)
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{{ $employees->nama }}</h6>
    </div>
    <div class="card-body">
      <div class="alert alert-dismissable alert-primary">

          Nama : {{ $employees->nama }} <br/>
          Company : {{ $employees->company }} <br/>
          Email : {{ $employees->email }}
      </div>
      @endforeach
    <a rel="nofollow" href="{{ url('/employees') }}"
       class="btn btn-primary btn-md">
        Kembali</a>
    </div>
  </div>
</center>
@endsection
