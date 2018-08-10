<?php

use Illuminate\Database\Seeder;
use App\Optica;
use App\User;
use App\Oftalmologo;
use App\OftalmologoOptica;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
/*        Optica::create([
            'nombre' => 'Nueva Vision',
            'direccion' => 'Soria Galvarro #630',
            'telefono' => '52-87553',
            'tipo_optica' => 'central',
        ]);
        Optica::create([
            'nombre' => 'Vision World',
            'direccion' => 'La Plata #505',
            'telefono' => '52-75221',
            'tipo_optica' => 'sucursal',
        ]);
        User::create([
            'nombres' => 'Franco Jesus',
            'apellido_paterno' => 'Mamani',
            'apellido_materno' => 'Pozo',
            'cuenta' => 'franco',
            'email' => 'mamamanipozofrancojesus@gmail.com',
            'password' => bcrypt('franco'),
            'tipo_usuario' => 'administrador',
        ]);
        User::create([
            'nombres' => 'Daniela',
            'apellido_paterno' => 'Chumacero',
            'apellido_materno' => 'Perez',
            'cuenta' => 'daniela',
            'email' => 'daniela@gmail.com',
            'password' => bcrypt('daniela'),
            'tipo_usuario' => 'recepcionista',
        ]);*/

/*        $cliente = \App\Cliente::create([
            'nombres' => 'Juan',
            'apellidos' => 'Mendoza',
            'celular' => '7123132',
            'nit' => '87512323',
            'razon_social' => 'Empresa',
            'tipo_cliente' => 'nuevo',
        ]);
        \App\Diagnostico::create([
            'oftalmologo_id' => 1,
            'cliente_id' => $cliente->id,
            'concepto' => 'revision',
            'medida_ojo_izquierdo' => 5,
            'medida_ojo_derecho' => 2,
            'tipo_enfermedad' => 'miopia',
            'circunferencia_ojo_izquierdo' => 3,
            'circunferencia_ojo_derecho' => 2,
            'adicion' => 2,
            'esfera' => 2,
            'cilindro' => 1,
            'dioptria' => 3,
        ]);*/
        \App\Diagnostico::create([
            'oftalmologo_id' => 2,
            'cliente_id' => 1,
            'concepto' => 'revision 4',
            'medida_ojo_izquierdo' => 5,
            'medida_ojo_derecho' => 2,
            'tipo_enfermedad' => 'miopia',
            'circunferencia_ojo_izquierdo' => 3,
            'circunferencia_ojo_derecho' => 2,
            'adicion' => 1,
            'esfera' => 3,
            'cilindro' => 1,
            'dioptria' => 3,
        ]);
        \App\Diagnostico::create([
            'oftalmologo_id' => 2,
            'cliente_id' => 1,
            'concepto' => 'revision 5',
            'medida_ojo_izquierdo' => 10,
            'medida_ojo_derecho' => 20,
            'tipo_enfermedad' => 'miopia',
            'circunferencia_ojo_izquierdo' => 3,
            'circunferencia_ojo_derecho' => 2,
            'adicion' => 2,
            'esfera' => 2,
            'cilindro' => 1,
            'dioptria' => 3,
        ]);


        // $this->call(UsersTableSeeder::class);
    }
}
