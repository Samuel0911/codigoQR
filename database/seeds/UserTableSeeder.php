<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();//esto evita que elimine y se vuelva a crear datos duplicados
        //se debe llamar por consola "php artisan db:seed"
        factory(App\User::class)->create([
        	'name' => 'Samuel',
        	'lastName' => 'Vargas',
        	'email' => 'infosam@gmail.com',
        	'password' => '123',
        	'role' => 'admin'
    	]);
        factory(App\User::class, 4)->create();

    }
}
