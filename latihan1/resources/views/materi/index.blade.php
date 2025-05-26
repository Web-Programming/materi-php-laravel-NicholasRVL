@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h3>Daftar Materi</h3>


        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pengenalan Laravel</td>
                    <td>Materi dasar tentang framework Laravel</td>
                    <td>
                        <center>
                            <a href="/detail/1" class="btn btn-info btn-sm">Lihat</a>
                            
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Routing Laravel</td>
                    <td>Membahas penggunaan route dan controller</td>
                    <td>
                        <center>
                            <a href="/detail/2" class="btn btn-info btn-sm">Lihat</a>

                        </center>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>CRUD</td>
                    <td>.......</td>
                    <td>
                        <center>
                            <a href="/detail/3" class="btn btn-info btn-sm">Lihat</a>

                        </center>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mysql</td>
                    <td>.......</td>
                    <td>
                        <center>
                            <a href="/detail/3" class="btn btn-info btn-sm">Lihat</a>

                        </center>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection