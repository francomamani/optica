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
        Optica::create([
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
        ]);
        User::create([
            'nombres' => 'Daniela',
            'apellido_paterno' => 'Chumacero',
            'apellido_materno' => 'Perez',
            'cuenta' => 'daniela',
            'email' => 'daniela@gmail.com',
            'password' => bcrypt('daniela'),
        ]);
        Oftalmologo::create([
            'user_id' => 1,
            'nombres' => 'Franco Jesus',
            'apellidos' => 'Mamani Pozo',
            'nit' => '72750458016',
            'celular' => '76137653',
        ]);
        Oftalmologo::create([
            'user_id' => 2,
            'nombres' => 'Daniela',
            'apellidos' => 'Chumacero Perez',
            'nit' => '72512606016',
            'celular' => '761356423',
        ]);
        OftalmologoOptica::create([
            'oftalmologo_id' => 1,
            'optica_id' => 1,
        ]);
        OftalmologoOptica::create([
            'oftalmologo_id' => 2,
            'optica_id' => 2,
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
