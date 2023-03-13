@extends('site.layouts.site')
@section('title', 'cursos')
@section('css-style', '/css/site/curso.css')
@section('content')
    <section class="cursos" default-position>
        <div class="title-container">
            <h3>Cursos</h3>
        </div>

        <div class="container-filter px-2 mb-4">
            <div class="title-filter">
                Filtro
            </div>
            <form action="{{route('site.cursos')}}" class="form-filter" method="get">
                <div class="select-filter">
                    <select name="type_curso" class="select-field">
                        <option value="">Selecione um Tipo de Curso</option>

                        <option value="1" {{isset($search['type_curso']) && $search['type_curso'] == '1' ? 'selected' : ''}}>Cursos Presenciais</option>

                        <option value="2" {{isset($search['type_curso']) && $search['type_curso'] == '2' ? 'selected' : ''}}>Cursos Online</option>
                    </select>
                </div>
                <div class="select-filter">
                    <select name="value" class="select-field">
                        <option value="">Selecione um Valor</option>
                        <option value="1" {{isset($search['value']) && $search['value'] == '1' ? 'selected' : ''}}>Menor valor</option>

                        <option value="2" {{isset($search['value']) && $search['value'] == '2' ? 'selected' : ''}}>Maior valor</option>
                    </select>
                </div>
                <button type="submit">Filtrar <i class="bi bi-filter"></i></button>
                @if(isset($search['type_curso']) || isset($search['value']))
                    <a href="{{route('site.cursos')}}" class="button-clear">Limpar <i class="bi bi-x-lg"></i></a>
                @endif
            </form>
        </div>

        <div class="container-cursos">
            @foreach ($courses as $course)
                <a href="#" class="m-2">
                    <div class="card-curso">
                        <div class="img-curso">
                            <img src="{{ asset('/assets/site/cursos/sola-scriptura.webp') }}" alt="Sola Scriptura">
                        </div>
                        <div class="desc-curso">
                            <p class="title">{{$course->name_course}}</p>
                            <p class="instrutor">Fabio Jose dos Santos</p>
                            <p class="valor">R${{str_replace('.', ',', $course->value_course )}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
