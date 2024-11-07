@extends('layouts.app')

@section('title', 'Skill')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center bold">Skill</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center mb-0">Bahasa Pemrograman</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML Logo" class="img-fluid" style="max-height: 100px;">
                            <h4 class="mt-2">HTML</h4>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS Logo" class="img-fluid" style="max-height: 100px;">
                            <h4 class="mt-2">CSS</h4>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript Logo" class="img-fluid" style="max-height: 100px;">
                            <h4 class="mt-2">JavaScript</h4>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" alt="Java Logo" class="img-fluid" style="max-height: 100px;">
                            <h4 class="mt-2">Java</h4>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP Logo" class="img-fluid" style="max-height: 100px;">
                            <h4 class="mt-2">PHP</h4>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python Logo" class="img-fluid" style="max-height: 100px;">
                            <h4 class="mt-2">Python</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h2 class="text-center mb-0">Database</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL Logo" class="img-fluid" style="max-height: 100px;">
                            <h4 class="mt-2">MySQL</h4>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" alt="PostgreSQL Logo" class="img-fluid" style="max-height: 100px;">
                            <h4 class="mt-2">PostgreSQL</h4>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" alt="MongoDB Logo" class="img-fluid" style="max-height: 100px;">
                            <h4 class="mt-2">MongoDB</h4>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg" alt="SQLite Logo" class="img-fluid" style="max-height: 100px;">
                            <h4 class="mt-2">SQLite</h4>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/oracle/oracle-original.svg" alt="Oracle Logo" class="img-fluid" style="max-height: 100px;">
                            <h4 class="mt-2">Oracle</h4>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mariadb/mariadb-original.svg" alt="MariaDB Logo" class="img-fluid" style="max-height: 100px;">
                            <h4 class="mt-2">MariaDB</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 