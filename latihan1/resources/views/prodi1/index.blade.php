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

        <h1 class="card-title">Informatika</h1>

        <p class="card-text">Belajar pemrograman, AI, dan teknologi</p>

      </div>
    </div>


    <div class="card bg-success mb-4 w-100">

      <div class="card-body">

        <h1 class="card-title">Teknik Elektro</h1>

        <p class="card-text">Fokus pada kelistrikan dan sistem kontrol</p>

      </div>
    </div>


    <div class="card bg-danger mb-4 w-100">

      <div class="card-body">

        <h1 class="card-title">Sistem Informasi</h1>

        <p class="card-text">Gabungan antara teknologi dan manajemen informasi</p>

      </div>
    </div>


    <div class="card bg-primary mb-4 w-100">

      <div class="card-body">

        <h1 class="card-title">Manajemen Informatika</h1>

        <p class="card-text">Mempelajari bagaimana mengelola sistem TI dengan efisien</p>

      </div>
    </div>

  </div>
  
</section>

@endsection