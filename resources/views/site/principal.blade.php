@extends('site.layouts.basico')

@section('titulo', 'Home')


@section('conteudo')
    @include('site.layouts._partials.topo')
    <div class="conteudo-destaque">
        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.
                <p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">

                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>

        <div class="direita">
            <div class="contacto">
                <h1>contacto</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contacto com nossa equipe pelo formulário abaixo.
                <p>
                    {{-- @component('site.layouts._components.form_contacto', x => 4) --}}
                    @component('site.layouts._components.form_contacto', ['classe' => 'borda-branca'])
                    <p> A nossa equipa entrará em contacto e retornaremos o mais breve possível  </p>
                    <p> O tempo médio de resposta é de 48 horas </p>
                    @endcomponent
            </div>
        </div>
    </div>
    @include('site.layouts._partials.rodape')
