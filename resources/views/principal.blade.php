@extends('layout.Padrao')

@section('container')
    
<div class="corpo index">
    <div class="title">
        <h1>Sorteador de números</h1>
    </div>
    <div class="form">
        <form id="for" id method="GET" action="{{ route('resultado') }}" >
            
            <input id="ng" name="ng" value="1" type="number" min="1" max="999999">
            <label for="ng">Quantidade de números a serem sorteados.</label> <br>
            <input id="min" name="min" type="number" value="1" min="1" max="999999">
            <label for="min">Número Inicial do sorteio.</label> <br>
            <input id="max" name="max" type="number" value="100" min="1" max="999999">
            <label for="max">Número final do sorteio.</label> <br>
            <input type="checkbox" id="checkbox" name="checkbox" />
            <label for="checkbox">Mostrar o resultado em ordem crescente!</label> <br>


            <Button id="btn" onclick="verificar()" type="submit">Sortear</Button>
        </form>
    </div>
</div>

@endsection