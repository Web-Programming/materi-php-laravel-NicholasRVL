@extends('layout.master')

@section('content')

    <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="img/user2-160x160.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Jurusan</b> <a class="">Informatika</a>
                  </li>
                  <li class="list-group-item">
                    <b>Semeter</b> <a class="">2</a>
                  </li>
                  <li class="list-group-item">
                    <b>Tanggal Lahir</b> <a class="">2006-09-02</a>
                  </li>
                </ul>

               
        </div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Absensi</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Mata Kuliah</th>
                                <th>Kehadiran</th>
                                <th style="width: 40px">Label</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td>1.</td>
                                <td>Pemrograman Web</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-danger" style="width: 55%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-danger">55%</span></td>
                            </tr>
                            <tr class="align-middle">
                                <td>2.</td>
                                <td>Pemrograman Berorientasi Object</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-warning" style="width: 70%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-warning">70%</span></td>
                            </tr>
                            <tr class="align-middle">
                                <td>3.</td>
                                <td>Basis Data</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary" style="width: 30%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-primary">30%</span></td>
                            </tr>
                            <tr class="align-middle">
                                <td>4.</td>
                                <td>Algoritma Dan Struktur Data</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-success" style="width: 90%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success">90%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


                   
                    

@endsection
