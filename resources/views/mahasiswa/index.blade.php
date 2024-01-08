
@extends('layouts.master')

@section('content')
    <h1>Data Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary btn-sm">Tambah Mahasiswa</a>
<br>
<br>
    <table class="table">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->prodi->nama_prodi }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
