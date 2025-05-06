@extends('layouts.master')

@section('title', 'Tambah Fakultas')
@section('header', 'Form Tambah Fakultas')
@section('breadcrumb', 'Tambah Fakultas')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Fakultas Baru</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('fakultas.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kode_fakultas">Kode Fakultas</label>
                            <input type="text" class="form-control @error('kode_fakultas') is-invalid @enderror" 
                                   id="kode_fakultas" name="kode_fakultas" placeholder="Masukkan kode fakultas" 
                                   value="{{ old('kode_fakultas') }}">
                            @error('kode_fakultas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_fakultas">Nama Fakultas</label>
                            <input type="text" class="form-control @error('nama_fakultas') is-invalid @enderror" 
                                   id="nama_fakultas" name="nama_fakultas" placeholder="Masukkan nama fakultas" 
                                   value="{{ old('nama_fakultas') }}">
                            @error('nama_fakultas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="dekan">Dekan</label>
                            <input type="text" class="form-control @error('dekan') is-invalid @enderror" 
                                   id="dekan" name="dekan" placeholder="Masukkan nama dekan" 
                                   value="{{ old('dekan') }}">
                            @error('dekan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('fakultas.index') }}" class="btn btn-default">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection