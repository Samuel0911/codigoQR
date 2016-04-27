<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	

    	DB::table('companies')->truncate();//esto evita que elimine y se vuelva a crear datos duplicados
        //se debe llamar por consola "php artisan db:seed"
        factory(App\Company::class)->create([
        	'name' => 'WorkshopLabs',
        	'phone' => '4563255',
        	'address' => 'circunvalacion',
        	'emailContact' => 'infosam@gmail.com',
        	'website' => 'www.workshop.com',
        	'country' => 'Bolivia',
        	'city' => 'Cochabamba'

    	]);

        factory(App\Company::class, 4)->create();



    }
}
