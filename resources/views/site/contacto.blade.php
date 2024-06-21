@extends('site.layouts.basico')

@section('titulo', 'Contactos')

@section('conteudo')
@include('site.layouts._partials.topo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>
        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contacto', ['classe' => 'borda-preta', 'motivo_contacto' => $motivo_contacto]) 
                    
                @endcomponent
            </div>
        </div>
    </div>

    @include('site.layouts._partials.rodape')
