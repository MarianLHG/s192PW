<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('productos', function (Blueprint $table) {
          $table->string('sku')->nullable()->after('modelo');
          $table->string('anio_publicacion')->nullable();
          $table->string('mes')->nullable();
          $table->string('paginas')->nullable();
          $table->string('coleccion')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn(['sku', 'anio_publicacion', 'mes', 'paginas', 'coleccion']);
        });
    }
};
