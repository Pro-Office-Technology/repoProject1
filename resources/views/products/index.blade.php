@extends('layouts.app')

@section('title', 'Index Field')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Index Field</h6>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col"></div>
            <div class="col text-center">
                <span class="font-weight-bold" style="font-size: 24px; color: black;">Index Field</span>
            </div>
            <div class="col"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                @if (auth()->user()->level == 'Admin')
                <a href="{{ route('products.add') }}" class="btn btn-primary mb-3" style="color: #333;">Add</a>
                @endif
            </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="feather icon-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Length</th>
                        @if (auth()->user()->level == 'Admin')
                        <th>Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->type }}</td>
                        <td>{{ $row->length }}</td>
                        @if (auth()->user()->level == 'Admin')
                        <td>
                            <a href="{{ route('products.update', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('products.delete', $row->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
<!-- Include DataTables library -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#dataTable').DataTable();

        // Add search functionality
        $('#searchInput').on('keyup', function() {
            $('#dataTable').DataTable().search($(this).val()).draw();
        });
    });
</script>
@endsection
