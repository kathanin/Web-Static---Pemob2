@extends('layouts.app')

@section('title', 'Data Posts')

@section('header-title', 'Data Posts')

@section('content')
    <div class="card border-0 shadow-sm rounded">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title text-primary">Data Posts</h5>
                <a href="#" class="btn btn-success">TAMBAH POST</a>
            </div>
            <table class="table table-striped table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">GAMBAR</th>
                        <th scope="col">JUDUL</th>
                        <th scope="col">CONTENT</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">
                            <img src="{{ asset('images/sad (2).png') }}" class="rounded" style="width: 150px" alt="Post Image">
                        </td>
                        <td>Emoji Sad</td>
                        <td>Sad Face</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                <a href="{{ route('posts.view', 1) }}" class="btn btn-dark btn-sm">SHOW</a>
                                <a href="{{ route('posts.edit', 1) }}" class="btn btn-primary btn-sm">EDIT</a>
                                <button type="submit" class="btn btn-danger btn-sm">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
        </div>
    </div>
@endsection
