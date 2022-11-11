<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonacionesGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donaciones_gastos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donacion_id')->nullable()->constrained('donaciones');
            $table->foreignId('beneficiario_id')->nullable()->constrained('personas');
            $table->date('fecha')->nullable();
            $table->decimal('monto', 10, 2)->nullable();
            $table->text('detalles')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donaciones_gastos');
    }
}
