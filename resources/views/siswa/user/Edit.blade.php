@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
    <div class="card-title w-100 d-flex justify-content-between">
        <h3>Edit Siswa </h3>
          <a class="btn btn-danger" href="{{ route ('usersiswa') }}">
          <i class="fas fa-times-circle"></i>
            Batal
          </a>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <div class="card shadow mb-4">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
          @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
          @endforeach
        </ul>
        </div>
      @endif
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DATA BARU</h6>
        </div>
        <form action="{{ route ('update-usersiswa', $siswa->id) }}" method="POST" enctype="multipart/form-data">
          @csrf

        <div class="card-body">
        <div class="row">
           <div class="col-12 d-flex justify-content-center" >
            <div class="mb-3">
            <label for="photo" class="form-label">photo :</label>
            <br>
             <img class="img-thumbnail" width="300px" src="{{asset('/storage/'.$siswa->photo)}}">
             </div>
          </div>
          <div class="col-6">
            <div class="mb-8">
              <label for="NIS" class="form-label required"> NIS  </label>
              <input type="number" name="NIS" id="NIS" placeholder="NIS"
                class="form-control" required autoComplete="off" value="{{ $siswa -> NIS }}" />
            </div>
          </div>
          <div class="col-6">
              <div class="mb-8">
                  <label for="nm_siswa" class="form-label required"> Name Siswa  </label>
                  <input type="text" name="nm_siswa" id="nm_siswa" placeholder="Name Siswa"
                  class="form-control" required autoComplete="off" value="{{ $siswa -> nm_siswa }}" />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-8">
                    <label for="alamat" class="form-label required"> Alamat  </label>
                    <input type="text" name="alamat" id="alamat"   placeholder="Alamat"
                    class="form-control" required autoComplete="off"  value="{{ $siswa -> alamat }}" />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-8">
                    <label for="NISN" class="form-label required"> NISN  </label>
                    <input type="number" name="NISN" id="NISN" placeholder="NISN"
                    class="form-control" required autoComplete="off" value="{{ $siswa -> NISN }}"  />
                </div>
            </div>
            <div class="col-12">
                <div class="mb-8">
                    <label for="gender" class="form-label required"> Gender  </label>
                <select class="form-control" name="gender" required
                placeholder="Pilih" value="{{ $siswa -> gender }}" selected>
                <option value="" >Pilih</option>
                <option value="laki-laki" selected>Laki Laki</option>
                <option value="perempuan" selected>Perempuan</option>
            </select>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-8">
            <label for="no_telpon" class="form-label required"> No Telepon  </label>
            <input type="number" name="no_telpon" id="no_telpon" value="{{ $siswa -> no_telpon }}" placeholder="No Telepon"
            class="form-control" required autoComplete="off"  />
        </div>
    </div>
          <div class="col-12">
            <div class="mb-8">
              <label  for="jurusan" class="form-label required">Jurusan</label>
              <select class="form-control" name="jurusan" required
              placeholder="Pilih"  value="{{ $siswa -> jurusan }}" selected>
                          <option value="" >Pilih</option>
                          <option value="Perhotelan" selected>Perhotelan</option>
                          <option value="PSPT" selected>PSPT</option>
                          <option value="OTKP" selected>OTKP</option></option>
                          <option value="BDP" selected>BDP</option>
                          <option value="MULTIMEDIA" selected>MULTIMEDIA</option>
                          <option value="DKV" selected>DKV</option>
                          <option value="AKL" selected>AKL</option>
                          <option value="TKJ" selected>TKJ</option>
                          <option value="RPL" selected>RPL</option>
                          <option value="MANEJEMEN LOGISTIC" selected>MANEJEMEN LOGISTIC</option>
                    </select>
                </div>
              </div>
          <div class="col-12">
            <br>
            <button type="submit" class="btn btn-primary btn-sm ms-auto mt-8 d-block">
              <i class="fas fa-save"></i>
              Simpan
          </button>
          </div>
        </div>
        </form>

        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
@endsection
