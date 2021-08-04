<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOfficeAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_office_address', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->string('area');
            $table->string('street')->nullable(true);
            $table->integer('house')->nullable(true);
            $table->text('info')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_office_address');
    }
}
