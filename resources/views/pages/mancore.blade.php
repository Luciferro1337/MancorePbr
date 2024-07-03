@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                            <div class="card-tools">
                                <form action="{{ route('mancore.search') }}" method="GET" id="searchForm">
                                    <div class="input-group">
                                        <input type="text" name="search" id="customSearchBox" placeholder="Search..." class="form-control" value="{{ request()->get('search') }}">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>STO</th>
                                        <th>ODC</th>
                                        <th>ODP Name</th>
                                        <th>ODC Out Pnl</th>
                                        <th>ODC Out Port</th>
                                        <th>Spl No</th>
                                        <th>Spl Port</th>
                                        <th>Distribusi</th>
                                        <th>DIST CORE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mancores as $index => $mancore)
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $mancore->STO }}</td>
                                            <td>{{ $mancore->ODC }}</td>
                                            <td>{{ $mancore->ODP_Name }}</td>
                                            <td>{{ $mancore->ODC_Out_Pnl }}</td>
                                            <td>{{ $mancore->ODC_Out_Port }}</td>
                                            <td>{{ $mancore->Spl_No }}</td>
                                            <td>{{ $mancore->Spl_Port }}</td>
                                            <td>{{ $mancore->Distribusi }}</td>
                                            <td>{{ $mancore->DIST_Core }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@push('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    // Initialize DataTable
    function initializeDataTable() {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false, // Disable built-in search
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    }

    // Call the function to initialize the DataTable
    initializeDataTable();

    // Handle the form submission for search
    $('#searchForm').on('submit', function(event) {
        event.preventDefault();
        let form = $(this);
        let url = form.attr('action');
        let formData = form.serialize();

        $.get(url, formData, function(data) {
            let newTableBody = $(data).find('#example2 tbody');
            $('#example2 tbody').replaceWith(newTableBody);
            // Reinitialize DataTable
            $('#example2').DataTable().destroy();
            initializeDataTable();
        });
    });
});
</script>
@endpush
