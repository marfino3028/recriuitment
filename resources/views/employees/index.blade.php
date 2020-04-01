@extends('layouts.index')
@section('content')
@php
 $ar_judul = ['No','Nama','Company','Email','Action'];
$no = 1;
@endphp

<a href="{{ route('employees.create') }}"
  class="btn btn-primary btn-md">
<i class="fas fa-user-plus"></i>&nbsp;Tambah Data
</a>&nbsp;&nbsp;
<a href="{{ url('employees-pdf') }}"
  class="btn btn-danger btn-md">
 <i class="fas fa-file-pdf"></i>&nbsp;Data Employees
</a>&nbsp;&nbsp;
<br/><br/>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Employees</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            @foreach($ar_judul as $jdl)
                <th>{{ $jdl }}</th>
            @endforeach
            </tr>
          </thead>
          <tbody>
          @foreach ($ar_employees as $employees)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $employees->nama }}</td>
        <td>{{ $employees->company }}</td>
        <td>{{ $employees->email }}</td>

                <td>
                  <form action="{{  route('employees.destroy', $employees->id) }}" method="POST">
                   <a href="{{ route('employees.show', $employees->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                   <a href="{{ route('employees.edit', $employees->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>

                  @if(Auth::user()->role == 'administrator')
                    @csrf
                    @method('DELETE')
                     <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data?')"><i class="fas fa-trash"></i></button>
                    </button>
                  @endif
                 </form>
                </td>
            </tr>
          @endforeach
          </tbody>

        </table>
      </div>
    </div>
  </div>
@endsection
