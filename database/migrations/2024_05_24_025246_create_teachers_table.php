<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('phone');
            $table->text('address');

            //Atributos foraneos
            $table->unsignedBigInteger('Module_id')->nullable();
           //referenciando la tabla modulo
            $table->foreign('Module_id')
                ->references('id')
                ->on('modules')->onDelete('set null');
                
            $table->timestamps();

            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
