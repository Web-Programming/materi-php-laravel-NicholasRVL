@extends('layout.master')

@section('content')

     <section class="content-header">
  <div class="container d-flex flex-column align-items-center ">
    <div class="row mb-4">
      <div class="text-align-center">
        <h1>Daftar Program Studi</h1>
      </div>
    </div>
  </div>
</section>


<section class="content">

  <div class="container d-flex flex-column align-items-center">
    

    <div class="card bg-info mb-4 w-100">

      <div class="card-body">

        <h1 class="card-title">Akuntansi </h1>

        <p class="card-text">Belajar Keuangan dan Memahami Keuangan Perusahaan </p>

      </div>
    </div>


    <div class="card bg-success mb-4 w-100">

      <div class="card-body">

        <h1 class="card-title">Management</h1>

        <p class="card-text">Belajar Menyusun, Merencanakan, Menggerakan, Dan Mengelola Sumber Daya Secara Efisien </p>

      </div>
    </div>


  </div>
  
</section>

@endsection