@extends('app.layouts.app')
@section('page', 'Dashboard')
@section('css-style', 'css/app/dashboard.css')

@section('content')
    <div class="container-fluid">
        <div class="row g-3" default-position>
            <div class="col-lg-6 col-sm-12">
                <div class="p-0 d-flex align-itens-center bg-white rounded shadow-sm">
                    <div class="icon-options d-flex justify-content-center">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="container-options d-flex flex-column justify-content-center py-2 px-3">
                        <h3>Usuários</h3>
                        <p class="description">
                            Cadastre novos usuários para adiministrar o sistema
                        </p>
                        <div class="btn-options d-flex mt-2 justify-content-end">
                            <a href="#" class="btn btn-primary">Usuários</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="p-0 d-flex align-itens-center bg-white rounded shadow-sm">
                    <div class="icon-options d-flex justify-content-center">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="container-options d-flex flex-column justify-content-center py-2 px-3">
                        <h3>Alunos</h3>
                        <p class="description">
                            Gerencie registros de alunos
                        </p>
                        <div class="btn-options d-flex mt-2 justify-content-end">
                            <a href="#" class="btn btn-primary">Usuários</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="p-0 d-flex align-itens-center bg-white rounded shadow-sm">
                    <div class="icon-options d-flex justify-content-center">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="container-options d-flex flex-column justify-content-center py-2 px-3">
                        <h3>Cursos</h3>
                        <p class="description">
                            Gerencie registros de todos os cursos
                        </p>
                        <div class="btn-options d-flex mt-2 justify-content-end">
                            <a href="#" class="btn btn-primary">Usuários</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="p-0 d-flex align-itens-center bg-white rounded shadow-sm">
                    <div class="icon-options d-flex justify-content-center">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="container-options d-flex flex-column justify-content-center py-2 px-3">
                        <h3>Matrícula</h3>
                        <p class="description">
                            Gerencie registros de matriculas
                        </p>
                        <div class="btn-options d-flex mt-2 justify-content-end">
                            <a href="#" class="btn btn-primary">Usuários</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
