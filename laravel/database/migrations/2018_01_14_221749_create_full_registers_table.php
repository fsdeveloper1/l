<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFullRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	
        Schema::create('FullRegisters', function (Blueprint $table) {	
            $table->integer('id')->unsigned();
			$table->foreign('id')->references('id')->on('users')->onDelete('cascade');
			$table->string('name',15)->default($vale='N');
			$table->string('lastname',25)->default($vale='N');
			$table->string('sex',6);
			$table->string('meliNumber',15)->default($vale='N');
			$table->string('birthdate',15)->default($vale='N');
			$table->string('phone',15)->default($vale='N');
			$table->string('address',120)->default($vale='N');
			$table->string('postalcode',15)->default($vale='N');
			$table->binary('image');
			$table->binary('files');
			$table->rememberToken();
            $table->timestamps();
			$table->unique('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('full_registers');
    }
}
?>
