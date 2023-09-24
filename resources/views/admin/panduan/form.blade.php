@extends('layouts.admin')

@section('page-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $page_header }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-body')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('admin.panduan') }}" class="btn btn-dark">
                                    <i class="fas fa-backward"></i> Back
                                </a>
                            </div>
                            <form action="{{ route('admin.panduan.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @if (session('errors'))
                                    <div class="alert alert-warning pb-0">
                                        <ul>
                                            @foreach ($errors->all() as $message)
                                                <li>
                                                    {{ $message }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholders="Judul" value="{{ old('title') }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Deskripsi" required>{{ @old('description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="banner">Banner</label>
                                    <input type="file" class="form-control" id="banner" name="banner"
                                        accept="image/png, image/gif, image/jpeg, image/webp"
                                        onchange="showPreview('banner')" required />
                                    <span class="text-muted">size: 1921 x 751 px</span>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('gaya')
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />
@endsection

@section('vitamin')
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
    </script>

    <script>
        $(document).ready(() => {
            var editor = new FroalaEditor('#description');
        })
    </script>
@endsection
