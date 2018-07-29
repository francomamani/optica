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
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
