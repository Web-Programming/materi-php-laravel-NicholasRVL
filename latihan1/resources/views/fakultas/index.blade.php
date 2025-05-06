{{-- @include('layout.header', ['title' => 'Halaman Fakultas']) --}}

@extends('layouts.master')
@section('title', 'Halaman Fakultas')
    

@section('content')
    
<h2>Fakultas</h2>
<ul>
    @if (count($fakultas) > 0)
       @foreach ($fakultas as $item)
             <li>{{ $item }}</li>
           
       @endforeach
        <li>Belum ada data</li>
    @endif
</ul>
@endsection



@extends('layouts.master')

@section('title', 'Daftar Fakultas')
@section('header', 'Data Fakultas')
@section('breadcrumb', 'Fakultas')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Fakultas</h3>
                    <div class="card-tools">
                        <a href="{{ route('fakultas.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Tambah Fakultas
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Fakultas</th>
                                <th>Nama Fakultas</th>
                                <th>Dekan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fakultas as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kode_fakultas }}</td>
                                <td>{{ $item->nama_fakultas }}</td>
                                <td>{{ $item->dekan }}</td>
                                <td>
                                    <a href="{{ route('fakultas.show', $item->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('fakultas.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('fakultas.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
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
@endsection

@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
@endpush