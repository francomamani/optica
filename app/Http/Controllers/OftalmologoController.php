<?php

namespace App\Http\Controllers;

use App\Oftalmologo;
use App\User;
use Illuminate\Http\Request;
use Validator;
class OftalmologoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado = Oftalmologo::orderBy('nit', 'asc')->get();
        return view('oftalmologo.oftalmologo-index', ['listado' => $listado]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('oftalmologo.oftalmologo-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'cuenta' => 'required|unique',
            'password' => 'required|min:6|confirmed'
        ]);

        $usuario = new User();
        $usuario->nombres = $request->input('nombres');
        $usuario->apellido_paterno = $request->input('apellido_paterno');
        $usuario->apellido_materno = $request->input('apellido_materno');
        $usuario->cuenta = $request->input('cuenta');
        /*$usuario->password = Hash::make($request->input('password'));*/
        $usuario->password = bcrypt($request->input('password'));
        $usuario->email = $request->input('email');
        $usuario->tipo_usuario = 'oftalmologo';
        $usuario->save();

        $oftalmologo = new Oftalmologo();
        $oftalmologo->user_id = $usuario->id;
        $oftalmologo->nit = $request->input('nit');
        $oftalmologo->celular = $request->input('celular');
        $oftalmologo->save();

        return redirect('oftalmologos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
