<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listando Bicos</title>
</head>
<body>
   
    <script>
        function ConfirmDelete() {
            return confirm('Tem certeza que deseja excluir este registro?');
        }
    </script>

    <table class="table no-margin">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Bomba</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
 
          @foreach($bico as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->bomba_id }}</td>
                <td></td>
                <td>
                    <a href="{{ URL::to('bico/' . $value->id) }}">Visualizar</a>
                </td>

                <td>
                    <a href="{{ URL::to('bico/' . $value->id . '/edit') }}">Editar</a>
                </td>

                {{-- <td>        
                    {{ Form::open(array('url' => 'leitura/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td> --}}

            </tr>
           @endforeach
 
        </tbody>
    </table>

        {{-- Botão para criar contrato --}}
        <a href="{{ URL::to('bico/create') }}"><h2>Criar</h2></a>

        @if (Session::has('message'))
            <div> {{ Session::get('message') }} </div>      
        @endif

    

</body>
</html>
