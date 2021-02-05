<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    private $message = [
        'required' => 'kolom :attribute harus diisi!',
        'digits' => 'kolom :attribute diisi minimal :digits digit.'
    ];
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa/index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'telepon' => 'required|digits:11',
            'alamat' => 'required'
        ], $this->message);

        $data = Siswa::create($request->all());
        if ($data) {
           return redirect(route('siswa.index'));
        }else{
            return redirect()->back()->with("gagal", "<script>alert('gagal')</script>");
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editSiswa = Siswa::find($id);
        return view('siswa/edit', compact('editSiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'telepon' => 'required|digits:11',
            'alamat' => 'required'
        ], $this->message);

        $siswa = Siswa::find($id);
        $siswa->nama = $request->name;
        $siswa->telepon = $request->telepon;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        if($siswa) return redirect(route('siswa.index'));
        return redirect()->back()->with('gagal', "<script>alert('gagal update!')</script>");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);

        if($siswa->delete()){
            return redirect(route('siswa.index'));
        }else{
            return redirect()->back()->with('gagal', "<script>alert('gagal hapus!')</script>");
        }
    }
}
