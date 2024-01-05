<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function Index(Request $request) {
        $paginaton = 5;

        $data = Siswa::where(function ($q) use ($request){
            $q->where('nm_siswa', 'LIKE' ,'%'. $request->search . '%');
        })->orderBy('id','asc')->paginate($paginaton);
        return view('siswa.Index', compact('data'));
    }

    public function Tambah() {

        return view('siswa.Tambah');
    }
    public function Send(Request $request) {

        $data = $request->validate([
            'NIS' => 'required',
            'NISN' => 'required',
            'nm_siswa' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'jurusan' => 'required',
            'no_telpon' => 'required',
            'photo' => 'required|image',
        ]);
        $photoPath = $request->file('photo')->store('photos', 'public');

        $data['photo'] = $photoPath;


        Siswa::create($data);

        return redirect()->route('siswa');
    }
    public function Edit($id) {

        $siswa = Siswa::find($id);
        return view('siswa.Edit', compact('siswa'));
    }
    public function Update(Request $request, $id) {
        $siswa = Siswa::find($id);

        $data = $request->validate([
            'NIS' => 'required',
            'NISN' => 'required',
            'nm_siswa' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'jurusan' => 'required',
            'no_telpon' => 'required',
            'photo' => 'image',
        ]);

        $siswa->update($data);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');

            $siswa->update(['photo' => $photoPath]);
        }

        return redirect()->route('siswa');
    }

    public function Delete($id) {
        $data = Siswa::find($id);

        $data->delete($id);

        return redirect()->route('siswa');
    }


}
