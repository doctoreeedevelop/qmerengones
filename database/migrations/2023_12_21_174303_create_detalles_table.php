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
        Schema::create('detalles', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->integer('precio');
            $table->integer('cantidad');
            $table->integer('importe');
            $table->timestamps();
            
           /*  $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('set null'); */

            $table->foreignId('product_id')
                  ->references('id')
                  ->on('products');      
            
            $table->foreignId('pedido_id')
                  ->references('id')
                  ->on('pedidos');
                  /* ->onDelete('set null'); */
            
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles');
    }
};
