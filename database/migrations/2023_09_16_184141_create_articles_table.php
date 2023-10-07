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
        Schema::create('articles', function (Blueprint $table) {
            $table->id()->nullable();

            $table->string('name')->nullable();
            $table->string("title")->nullable();
            $table->string("image")->nullable();
            $table->text("descripcion")->nullable();
            $table->text("price")->nullable();
            $table->text("body")->nullable();
         
                    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
