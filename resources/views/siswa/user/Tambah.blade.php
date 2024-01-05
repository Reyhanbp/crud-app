@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
    <div class="card-title w-100 d-flex justify-content-between">
        <h3>Tambah Siswa </h3>
          <a class="btn btn-danger"  href="{{ route ('usersiswa') }}">
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
        <form action="{{ route ('send-siswa')}}" method="POST" enctype="multipart/form-data">
          @csrf

        <div class="card-body">
        <div class="row">
          <div class="col-6">
            <div class="mb-8">
              <label for="NIS" class="form-label required"> NIS  </label>
              <input type="number" name="NIS" id="NIS" placeholder="NIS"
                class="form-control" required autoComplete="off"  />
            </div>
          </div>
          <div class="col-6">
              <div class="mb-8">
                  <label for="nm_siswa" class="form-label required"> Name Siswa  </label>
                  <input type="text" name="nm_siswa" id="nm_siswa" placeholder="Name Siswa"
                  class="form-control" required autoComplete="off"  />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-8">
                    <label for="alamat" class="form-label required"> Alamat  </label>
                    <input type="text" name="alamat" id="alamat"   placeholder="Alamat"
                    class="form-control" required autoComplete="off"  />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-8">
                    <label for="NISN" class="form-label required"> NISN  </label>
                    <input type="number" name="NISN" id="NISN" placeholder="NISN"
                    class="form-control" required autoComplete="off"  />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-8">
                    <label for="gender" class="form-label required"> Gender  </label>
                <select class="form-control" name="gender" required
                placeholder="Pilih" selected>
                <option value="" >Pilih</option>
                <option value="laki-laki">Laki Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="col-6">
        <div class="mb-8">
            <label  for="jurusan" class="form-label required">Jurusan</label>
            <select class="form-control" name="jurusan" required
                placeholder="Pilih">
                <option value="" >Pilih</option>
                <option value="Perhotelan" >Perhotelan</option>
                <option value="PSPT" >PSPT</option>
                <option value="OTKP" >OTKP</option></option>
                <option value="BDP" >BDP</option>
                <option value="MULTIMEDIA" >MULTIMEDIA</option>
                <option value="DKV" >DKV</option>
                <option value="AKL" >AKL</option>
                <option value="TKJ" >TKJ</option>
                <option value="RPL" >RPL</option>
        </select>
    </div>
</div>
<div class="col-12">
    <div class="mb-8">
        <label for="no_telpon" class="form-label required"> No Telepon  </label>
        <input type="number" name="no_telpon" id="no_telpon"   placeholder="No Telepon"
        class="form-control" required autoComplete="off"  />
    </div>
</div>
<div class="col-12">
              <div class="mb-8">
                <label for="Photo" class="form-label">Photo</label>
                <input class="form-control" type="file" name="photo">
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
