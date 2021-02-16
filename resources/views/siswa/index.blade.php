@extends('siswa.master')

@section('judul', 'Daftar Isi Siswa')

@section('isi')

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <a href="{{ route('insert') }}" class="btn btn-primary">Tambah Data</a>
                <a href="/logout" class="btn btn-danger float-right">Log out</a>
                @if (\Session::has('gagal'))
                    {!! \Session::get('gagal') !!}
                @endif                        
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    @foreach($siswa as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->telepon }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>
                                <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-primary btn-xs">Edit</a> | <form action="{{ route('siswa.destroy', $data->id) }}" method="post" onsubmit="return confirm('apakah anda yakin ingin menghapus?');">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-xs" type="submit">Hapus</button>
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