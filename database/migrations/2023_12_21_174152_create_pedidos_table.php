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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subtotal')->nullable();
            $table->bigInteger('iva')->nullable();
            $table->bigInteger('total')->nullable();
            $table->string('modopago')->nullable();
            $table->dateTime('fechapedido')->nullable();
            $table->enum('estado',["nuevo","proceso", "entregado"])->default("nuevo");
            $table->timestamps();

            
            $table->foreignId('user_id')
                  ->references('id')
                  ->on('users');
                  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
