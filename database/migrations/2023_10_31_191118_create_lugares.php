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
        Schema::create('lugares', function (Blueprint $table) {
            $table->id();
            $table->string('lugar');

            
            $table->unsignedBigInteger('zona_id')->default(1);
            $table->foreign('zona_id')->references('id')->on('zonas');

            $table->string('action_by')->nullable();
            $table->enum('status', ['activo', 'inactivo'])->default("activo");
            $table->rememberToken();
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
        Schema::dropIfExists('lugares');
    }
};
