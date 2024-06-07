<h2> Fornecedores </h2> 

{{-- Comentário blade --}}

{{-- count($fornecedores) --}}



<input type="hidden" {{$total = count($fornecedores) }}>

Quantidade de fornecedores {{ $total }} 

@if ($total > 0)
   <h2> Existem {{ $total }} fornecedores cadastrados </h2>

@else
<h2> Não existem fornecedores cadastrados </h2>
@endif

@unless ($utilizadores[0]['nome'] == 'Admin') {{--if (!$utilizadores[0]['nome'] == 'Admin')--}}
   <h3>Não é admin</h3>
@endunless

@isset($teste2) {{--Verifica a existência de uma variável/objecto/atributo--}}
   <h3>A variável existe </h3>
@endisset

@empty($teste2) 
<h3> A variável está vazia </h3>
@endempty

<hr>
@foreach ($fornecedores as $fornecedor)
         <h4> {{$fornecedor}} </h4>
         @if ($loop->first)
            <br> primeira interação
         @endif

         @if ($loop->last)
         <br> última interação
         <br> Total de itens: {{ $loop->count }}
         @endif
@endforeach



