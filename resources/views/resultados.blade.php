@extends('layout.Padrao')

@section('container')
     <div class="Corpo">

         <div class="h3">
            <h3>Os números sorteados foram:</h3>
         </div>


        <div class="div-list">
            <ul>
            
        @for($i = 0; $i < count($nsor); $i++ )

        <li>{{$nsor[$i]}}</li>

        @endfor
            
            </ul>
        </div>
        <div class="rodape">       
            <a href="{{route('sortear')}}"><Button type="submit">Voltar para página principal</Button></a>
        </div>
    </div>
@endsection    