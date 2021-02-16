@extends('siswa.master')

@section('judul', 'Login Siswa')

@section('isi')
        @if (\Session::has('gagal'))
            {!! \Session::get('gagal') !!}
        @endif            
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
                    <form method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" @error('email') autofocus @enderror>
                            @error('email')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="password" value="{{ old('password') }}" @error('password') autofocus @enderror>
                            @error('password')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection