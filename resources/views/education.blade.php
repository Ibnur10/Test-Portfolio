@extends('layouts.app')

@section('title', 'Education')
@section('content')
    <div class="container py-2">
        <h1 class="text-center mb-3">Riwayat Pendidikan</h1>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Sekolah Dasar</h5>
                        <h6 class="card-subtitle mb-2 text-muted">SDN 1 Contoh</h6>
                        <p class="card-text">
                            Tahun Ajaran: 2008 - 2014
                            <br>Lokasi: Kota Contoh
                            <br>Prestasi: Juara Kelas Setiap Tahun
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Sekolah Menengah Pertama</h5>
                        <h6 class="card-subtitle mb-2 text-muted">SMPN 2 Contoh</h6>
                        <p class="card-text">
                            Tahun Ajaran: 2014 - 2017
                            <br>Lokasi: Kota Contoh
                            <br>Ekstrakurikuler: Pramuka, Basket
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Sekolah Menengah Atas</h5>
                        <h6 class="card-subtitle mb-2 text-muted">SMAN 3 Contoh</h6>
                        <p class="card-text">
                            Tahun Ajaran: 2017 - 2020
                            <br>Jurusan: IPA
                            <br>Prestasi: Olimpiade Sains Nasional
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center my-3">Riwayat Pendidikan Perguruan Tinggi</h2>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Perguruan Tinggi</th>
                            <th>Program Studi</th>
                            <th>Jenjang</th>
                            <th>Tahun Masuk</th>
                            <th>Tahun Lulus</th>
                            <th>IPK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Universitas Contoh</td>
                            <td>Teknik Informatika</td>
                            <td>S1</td>
                            <td>2020</td>
                            <td>Sedang Berlangsung</td>
                            <td>3.75</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection