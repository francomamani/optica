{{ Form::open(['route'=> 'documento.store',
                'files' => 'true',
                'enctype'=>'multipart/form-data']) }}
    <section>
        <label>Titulo</label>
        <input type="text" name="titulo" required autofocus>
    </section>
    <section>
        <label>Subir Documento</label>
        <input type="file"  name="ruta" id="ruta">
    </section>
    <button type="submit">Registrar Documento</button>
{{ Form::close() }}

<script>
    var documento = documento.getElementById('ruta');
    documento.addEventListener('click', function () {
        console.log(documento);
    });
</script>