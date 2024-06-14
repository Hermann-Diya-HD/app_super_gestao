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
                <form action={{route('site.contactos') }} method="POST">
                    @csrf
                    <input name="nome" type="text" placeholder="Nome" class="borda-preta">
                    <br>
                    <input name="telefone" type="text" placeholder="Telefone" class="borda-preta">
                    <br>
                    <input name="email" type="text" placeholder="E-mail" class="borda-preta">
                    <br>
                    <select name="motivo_contacto" class="borda-preta">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="">Dúvida</option>
                        <option value="">Elogio</option>
                        <option value="">Reclamação</option>
                    </select>
                    <br>
                    <textarea name="mensagem" class="borda-preta">Preencha aqui a sua mensagem</textarea>
                    <br>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>

    @include('site.layouts._partials.rodape')
