<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastName');
            $table->string('doc_id');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->enum('role', ['member', 'admin']);
            $table->date('date');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('imageQR');
            $table->string('codigo_pin');            

            $table->rememberToken();
            $table->timestamps();
            $table->unsignedInteger('company_id')->nullable();
            $table->foreign('company_id')
                ->references('id')->on('companies');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
