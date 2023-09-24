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
                            <form action="{{ route('admin.panduan.update', $exec->id) }}" method="post"
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
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholders="Judul" value="{{ old('title') ?? $exec->title }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Deskripsi" required>{{ @old('description') ?? $exec->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="banner">Banner</label>
                                    <input type="file" class="form-control" id="banner" name="banner"
                                        accept="image/png, image/gif, image/jpeg, image/webp"
                                        onchange="showPreview('banner')" />
                                    <span class="text-muted">size: 1024 x 600 px</span>
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
    <script src="https://cdn.tiny.cloud/1/y1lbyegpvnufywjd7k7c8p0drp9rfup9gymycg4n6evr6nfs/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            image_class_list: [{
                title: 'img-fluid',
                value: 'img-fluid'
            }, ],
            height: 500,
            automatic_uploads: true,
            images_upload_url: '{{ route('admin.panduan.upload') }}',
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                };
                input.click();
            },
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
@endsection
