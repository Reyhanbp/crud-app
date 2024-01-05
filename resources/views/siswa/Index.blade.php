@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
      <div class="card-title w-100 d-flex justify-content-between">
        <h3>Siswa </h3>
          <a class="btn btn-primary" href="{{ route ('tambahsiswa') }}">
          <i class="fas fa-plus"></i>
             Tambah baru
          </a>
      </div>
    </div>
     <!-- Begin Page Content -->
    <div class="container-fluid mt-3">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
        </div>

        <div class="card-body">

            @if (Session::has('message'))
                <div class="alert alert-danger">
                        {{Session::get('message')}}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomer</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>NISN</th>
                            <th>Gender</th>
                            <th>Jurusan</th>
                            <th>NO Telpon</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    @foreach ($data as $master_siswas)

                    <tbody>
                        <tr>
                            <td>{{$loop->iteration }}</td>
                            <td>{{$master_siswas -> NIS }}</td>
                            <td>{{$master_siswas -> nm_siswa }}</td>
                            <td>{{$master_siswas -> alamat }}</td>
                            <td>{{$master_siswas -> NISN }}</td>
                            <td>{{$master_siswas -> gender }}</td>
                            <td>{{$master_siswas -> jurusan }}</td>
                            <td>{{$master_siswas -> no_telpon }}</td>
                            <td>
                                <img src="{{ asset('storage/'.$master_siswas->photo) }}" alt="test"
                                width="50px" >
                            </td>
                            <td>

                            <form action="{{ route('delete-siswa', $master_siswas->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-warning" role="button"  href="{{ route ('edit-siswa', $master_siswas->id) }}">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                 </a>
                                <button id="deleteButton" class="btn btn-danger"  role="button">
                                <i class="fas fa-trash"></i>
                                    Delete
                                </button>
                            </form>
                            </td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>

    </div>
@endsection
