<?php

namespace App\Http\Controllers;

use App\Optica;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OpticaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
     * Listar varios registros
     * */
    public function index() {
        $listado = Optica::all();
        return view('optica.optica-index', ['listado' => $listado]);
    }
    /*
     * Muestra un registro dado un id o una instancia de registro
     * */
    public function show($optica_id) {
        $optica = Optica::find($optica_id);
        return view('optica.optica-show', ['optica' => $optica]);
    }
    /*
     * Mostrar una vista de formulario de registro(guardado)
     * */
    public function create() {
        return view('optica.optica-create');
    }
    /*
     * Guardar un registro
     * */
    public function store(Request $form) {
        $datos = $form->all();
        $registroCliente = Optica::create($datos);
        return redirect('opticas');
    }
    /*
     * Muestra un formulario de edicion de registro
     * dado un id
     * */
    public function edit($optica_id) {
        $optica = Optica::find($optica_id);
        return view('optica.optica-edit', ['optica' => $optica]);
    }
    /*
     * Actualizar un registro dado un identificador o una instancia del
     * registro y los nuevos datos
     * */
    public function update(Request $form, $optica_id) {
        $optica = Optica::find($optica_id);
        $optica->update($form->all());
        return redirect('opticas');
//        $this->index();
    }
    /*
     * Eliminar un registro dado un id o una instancia de registro
     * */





    public function listar() {
        $listado = Optica::get();
        return response()->json([
            'listado' => $listado
        ]);
    }
    /*eliminacion de un registro dado un id*/
    public function destroy ($optica_id) {
        $optica = Optica::find($optica_id);
        $optica->delete();
        return redirect('opticas');
    }

    public function buscar() {
        $busqueda = request()->input('busqueda');
        $listado = Optica::where('nombre', 'like', '%' . $busqueda . '%')
              ->orWhere('direccion', 'like', '%'. $busqueda . '%')
              ->orWhere('telefono', 'like', '%'. $busqueda . '%')
              ->orWhere('tipo_optica', 'like', '%'. $busqueda . '%')
              ->get();
        return view('optica.optica-index', ['listado' => $listado]);
    }
}