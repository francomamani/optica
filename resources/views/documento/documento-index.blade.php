<table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Descargar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($documentos as $documento)
        <tr>
            <td>{{ $documento->titulo }}</td>
            <td>
                <a href="http://localhost:8888/api/descargar-documento/{{$documento->documento_id}}"
                   class="btn btn-primary">Descargar</a>
                {{ Form::open(['url'=>"descargar-documento/" . $documento->documento_id ]) }}
                    <button type="submit">Descargar</button>
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>