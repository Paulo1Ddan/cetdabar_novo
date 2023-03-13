@extends('site.layouts.site')
@section('title', 'Início')
@section('css-style', '/css/site/home.css')
@section('content')
    <section class="banner">
        <div class="container-banner p-2" default-position>
            <div class="title-banner">
                <p>Centro Educacional de Teologia DABAR</p>
            </div>
            <div class="slogan">
                <p>Trazendo Teologia para o crecimento do Reino de Deus</p>
            </div>
        </div>
    </section>
    @if (
        $errors->has('name_contact') ||
            $errors->has('email_contact') ||
            $errors->has('phone_contact') ||
            $errors->has('msg_contact'))
        <div class="error-contact alert alert-danger" role="alert">
            Houve um erro ao enviar a mensagem de contato. <a href="#contato" class="alert-link">Clique aqui</a> para verificar a sessão de contato e tentar novamente.
        </div>
    @endif
    <section class="sobre p-2" default-position>
        <div class="title-container mt-3">
            <h3>Sobre nós</h3>
        </div>
        <div class="sobre-text">
            <p>A escola teológica Dabar é sediada na Av. Deputado Castro de Carvalho, 1695, Vila Áurea, Poá – SP. Fone: 11 2891-8736/99318-2269.A mesma foi organizada em Janeiro de 2007, e as aulas tiveram inicio em 05/02/07. Sendo a primeira aula apenas inaugural, ou seja, uma apresentação formal da escola. Nesta apresentação foi notificada a sua identidade e as instituições de apoio que são: A Confradesb e a Universidade Corporativa Livre Átrios. Bem como o sistema de funcionamento da escola quanto ao corpo docente e discente.</p>
        </div>
        <div class="img-sobre mt-2" data-aos="fade-up" data-aos-duration="1000">
            <img src={{ asset('assets/site/sobre/sobre.webp') }} alt="Sobre a Dabar">
        </div>
    </section>
    <section class="cursos p-2" default-position>
        <div class="title-container mt-3">
            <h3>Cursos</h3>
        </div>
        <div class="cursos-online">
            <div class="title-cursos-online mt-2" data-aos="fade-up" data-aos-duration="1000">
                <h3>Cursos Online</h3>
            </div>
            <div class="container-cursos-online" data-aos="fade-up" data-aos-duration="1500">
                <a href="#" class="m-2">
                    <div class="card-curso">
                        <div class="img-curso">
                            <img src="{{ asset('/assets/site/cursos/sola-scriptura.webp') }}" alt="Sola Scriptura">
                        </div>
                        <div class="desc-curso">
                            <p class="title">Sola Scriptura</p>
                            <p class="instrutor">Fabio Jose dos Santos</p>
                            <p class="valor">R$499</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="m-2">
                    <div class="card-curso">
                        <div class="img-curso">
                            <img src="{{ asset('/assets/site/cursos/sola-scriptura.webp') }}" alt="Sola Scriptura">
                        </div>
                        <div class="desc-curso">
                            <p class="title">Sola Scriptura</p>
                            <p class="instrutor">Fabio Jose dos Santos</p>
                            <p class="valor">R$499</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="cursos-presenciais">
            <div class="title-cursos-presenciais mt-2" data-aos="fade-up" data-aos-duration="1000">
                <h3>Cursos presenciais</h3>
            </div>
            <div class="container-cursos-presenciais" data-aos="fade-up" data-aos-duration="1500">
                <a href="#" class="m-2">
                    <div class="card-curso">
                        <div class="img-curso">
                            <img src="{{ asset('/assets/site/cursos/sola-scriptura.webp') }}" alt="Sola Scriptura">
                        </div>
                        <div class="desc-curso">
                            <p class="title">Curso básico de teologia</p>
                            <p class="instrutor">Fabio Jose dos Santos</p>
                            <p class="valor">R$80/Mês</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="contato mt-2 mb-5" id="contato">
        <div class="container-contato" default-position>
            <div class="title-container pt-3">
                <h3>Contato</h3>
            </div>
            <form action="{{ route('site.contato') }}" method="POST" class="form-contato px-2">
                @csrf
                <div class="input-field my-2">
                    <label for="name_contact">Nome</label>
                    <input type="text" name="name_contact" id="name_contact" placeholder="{{ $errors->has('name_contact') ? $errors->first('name_contact') : '' }}">
                </div>
                <div class="input-field my-2">
                    <label for="email_contact">Email</label>
                    <input type="email" name="email_contact" id="email_contact" placeholder="{{ $errors->has('email_contact') ? $errors->first('email_contact') : '' }}">
                </div>
                <div class="input-field my-2">
                    <label for="phone_contact">Telefone</label>
                    <input type="text" name="phone_contact" id="phone_contact" placeholder="{{ $errors->has('phone_contact') ? $errors->first('phone_contact') : '' }}">
                </div>
                <div class="textarea-field my-2">
                    <label for="msg_contact">Mensagem</label>
                    <textarea name="msg_contact" id="msg_contact" cols="30" rows="5" placeholder="{{ $errors->has('msg_contact') ? $errors->first('msg_contact') : '' }}"></textarea>
                </div>
                <div class="button-field">
                    <button type="submit" class="btn-submit">Enviar</button>
                </div>
            </form>
        </div>
    </section>
@endsection
