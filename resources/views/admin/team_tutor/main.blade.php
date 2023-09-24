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
                                <a href="{{ route('admin.team_tutor.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Create New
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table id="tables" class="table table-bordered" style="min-width: 99%">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 120px">
                                                <i class="fas fa-cog fa-spin"></i>
                                            </th>
                                            <th>Photo</th>
                                            <th>Nama Tutor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td class="text-center">
                                                    <a href="{{ route('admin.team_tutor.edit', $data->id) }}" type="button"
                                                        class="btn btn-info">
                                                        <i class="fas fa-pencil"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                                <td>
                                                    {!! $data->photo_be !!}
                                                </td>
                                                <td>
                                                    {{ $data->name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
        $(document).ready(() => {
            $('#tables').DataTable({
                scrollX: true,
                dom: 'Bfrtip',
                buttons: [
                    'excel'
                ],
                order: [
                    [1, 'asc']
                ],
                columnDefs: [{
                    targets: [0],
                    orderable: false,
                }]
            })
        })
    </script>
@endsection
