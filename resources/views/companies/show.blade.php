@extends('layouts.index')
@section('content')
<div class="card shadow mb-4">
    @foreach ($ar_companies as $companies)
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{{ $companies->nama }}</h6>
    </div>
    <div class="card-body">
      <div class="text-center">
        @if(!empty($companies->logo))
          <img id="poto" class="img-fluid img-thumbnail" src="{{asset('company/'.$companies->logo)}}">
        @else
          <img id="poto" class="img-fluid img-thumbnail" src="{{asset('company/no-photo.png')}}" >
        @endif
      </div>
      <div class="alert alert-dismissable alert-primary">
          Nama : {{ $companies->nama }} <br/>
          Email : {{ $companies->email }}<br>
          Website : {{ $companies->email }}
      </div>
      @endforeach
    <a rel="nofollow" href="{{ url('/companies') }}"
       class="btn btn-primary btn-md">
        Kembali</a>
    </div>
  </div>
@endsection
