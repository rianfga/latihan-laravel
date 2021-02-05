@extends('siswa.master')

@section('judul', 'Edit Data Siswa')

@section('isi')
<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mt-5">
                    @if (\Session::has('gagal'))
                        {!! \Session::get('gagal') !!}
                    @endif                        
                    <form action="{{ route('siswa.update', $editSiswa->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{ $editSiswa->nama }}" @error('nama') autofocus @enderror>
                            @error('nama')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="telepon" value="{{ $editSiswa->telepon }}" @error('telepon') autofocus @enderror>
                            @error('telepon')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" value="{{ $editSiswa->alamat }}" @error('alamat') autofocus @enderror>
                            @error('alamat')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection