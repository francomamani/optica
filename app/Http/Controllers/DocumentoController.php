<?php

namespace App\Http\Controllers;

use App\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Documento::orderBy('titulo', 'asc')->get();
        return view('documento.documento-index', ['documentos' => $lista]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documento.documento-create');
    }

    /*
     * ruta> (documento)
     * titulo XXXXXX
     * */
    public function store(Request $request)
    {
        if ($request->hasFile('ruta')) {
            $documento = new Documento();
            $ruta_documento = $request->file('ruta')->store('documentos');
            $documento->ruta = $ruta_documento;
            $documento->titulo = $request->input('titulo');
            $documento->save();
            return response()->json($documento, 200);
        }else {
            Documento::create($request->all());
            return response()->json(['error'=>'Se subio un archivo por defecto'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento $documento)
    {
        //
    }

    public function recuperarDocumento($document_id) {
        $documento = Documento::find($document_id);
        return response()->file( storage_path('app/' . $documento->ruta));
    }
    public function descargarDocumento($document_id) {
        $documento = Documento::find($document_id);
        return response()->download( storage_path('app/' . $documento->ruta));
    }
}
