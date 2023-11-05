<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acarreo', function (Blueprint $table) {
            $table->id();
            $table->string('TransactionId')->unique();
            $table->timestamp('CompletionDate');
            $table->string('AccountName');
            $table->string('VehicleName');
            $table->string('MaterialName');
            $table->float('GrossWeight');
            $table->float('NetWeight');
            $table->float('TareWeight');
            $table->string('Origen');
            $table->string('Sistema');
            $table->string('Persona');
            $table->enum('Estado', ['activo', 'inactivo', 'standby'])->default("activo");
            $table->string('Descripcion')->nullable();
            
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
        Schema::dropIfExists('acarreo');
    }
};
