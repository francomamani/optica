
{{ Form::open(["url" => "crear-backup"])}}
    <button type="submit">Descargar SQL</button>
{{ Form::close() }}


{{ Form::open(["url" => "enviar"])}}
    <button type="submit">Enviar correo</button>
{{ Form::close() }}