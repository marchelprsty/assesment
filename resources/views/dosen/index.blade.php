
@extends('layouts.master')

@section('content')
    <h1>Data Dosen</h1>
    <a href="{{ route('dosen.create') }}" class="btn btn-primary btn-sm">Tambah Dosen</a>
<br>
<br>
    <table class="table">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosens as $dosen)
                <tr>
                    <td>{{ $dosen->nip }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>
                        <a href="{{ route('dosen.show', $dosen->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display: inline;">
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
