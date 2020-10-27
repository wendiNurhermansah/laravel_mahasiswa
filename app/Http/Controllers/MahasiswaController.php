<?php

namespace App\Http\Controllers;

use DataTables;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\jurusan;
use App\Models\mapel;


class MahasiswaController extends Controller

{
	
	
    public function index () {
    	return view('index');
    }

  	
    public function data () {
       

        $students = Students::all();

    	return view('mahasiswa.index', compact(
            'students'));
    }

    public function create () {

        $jurusan = Jurusan::select('id', 'n_jurusan')->get();
        $mapel = Mapel::select('id', 'n_mapel')->get();

        return view('mahasiswa.create', compact(
            'jurusan',
            'mapel'
        ));
    }

    public function mapelByJurusan($jurusan_id)
    {
        return mapel::select('id', 'n_mapel')->where('jurusan_id', $jurusan_id)->get();
    }


    public function store (Request $request) 
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required'
        ]); 
        students::create($request->all());
        return redirect('/mahasiswa')->with('sukses', 'data berhasil di tambahkan');
    }

    public function show(Students $students)
    {
        return view('mahasiswa.show', compact('students'));
    }

    public function edit($id)
    {
        $jurusan = Jurusan::select('id', 'n_jurusan')->get();
        $mapel = Mapel::select('id', 'n_mapel')->get();


        $students = Students::find($id);
        return view('mahasiswa.edit', compact(
            'students',
            'jurusan',
            'mapel'
        ));
    }



    public function delete($id)
    {
        $students = Students::find($id);
        $students->delete($students);
        return redirect('/mahasiswa')->with('suksess', 'data berhasil di hapus');
    }
}
