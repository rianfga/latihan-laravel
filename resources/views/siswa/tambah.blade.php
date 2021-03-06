@extends('siswa.master')

@section('judul', 'Tambah Data Siswa')

@section('isi')
        @if (\Session::has('gagal'))
            {!! \Session::get('gagal') !!}
        @endif            
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mt-5">
                    <form method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="{{ old('nama') }}" @error('nama') autofocus @enderror>
                            @error('nama')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="telepon" value="{{ old('telepon') }}" @error('telepon') autofocus @enderror>
                            @error('telepon')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" value="{{ old('alamat') }}" @error('alamat') autofocus @enderror>
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