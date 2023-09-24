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
                <div class="col-sm-12 col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('admin.slider_banner') }}" class="btn btn-dark">
                                    <i class="fas fa-backward"></i> Back
                                </a>
                            </div>
                            <form action="{{ route('admin.slider_banner.update', $exec->id) }}" method="post"
                                enctype="multipart/form-data">
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
                                    <label for="name">Nama Banner</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholders="Banner Name" value="{{ old('name') ?? $exec->name }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="url">URL</label>
                                    <input type="text" class="form-control" id="url" name="url"
                                        placeholders="URL" value="{{ old('url') ?? $exec->url }}" required />
                                    <span class="text-muted">Gunakan tanda <b>#</b> jika banner tidak redirect ke
                                        halaman lain</span>
                                </div>
                                <div class="form-group">
                                    <label>Banner Indonesia</label>
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <label class="input-group-text" style="min-width: 100px;"
                                                for="banner_desktop">Desktop</label>
                                        </div>
                                        <input type="file" class="form-control" id="banner_desktop" name="banner_desktop"
                                            accept="image/png, image/gif, image/jpeg, image/webp"
                                            onchange="showPreview('banner_desktop')" />
                                    </div>
                                    <span class="text-muted">size: 1921 x 751 px (kosongkan jika tidak ada perubahan)</span>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <label class="input-group-text" style="min-width: 100px;"
                                                for="banner_mobile">Mobile</label>
                                        </div>
                                        <input type="file" class="form-control" id="banner_mobile" name="banner_mobile"
                                            accept="image/png, image/gif, image/jpeg, image/webp"
                                            onchange="showPreview('banner_mobile')" />
                                    </div>
                                    <span class="text-muted">size: 1721 x 1801 px (kosongkan jika tidak ada
                                        perubahan)</span>
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
    <link href="https://cdn.datatables.net/v/bs4/jszip-3.10.1/dt-1.13.6/b-2.4.2/b-html5-2.4.2/datatables.min.css"
        rel="stylesheet">
@endsection

@section('vitamin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/jszip-3.10.1/dt-1.13.6/b-2.4.2/b-html5-2.4.2/datatables.min.js"></script>

    <script>
        $(document).ready(() => {})
    </script>
@endsection
