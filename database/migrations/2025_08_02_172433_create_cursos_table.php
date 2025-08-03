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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('institucion_id')->constrained('instituciones');
            $table->foreignId('idtipo_institucion')->constrained('tipo_institucion');
            $table->foreignId('idrubro')->constrained('rubros');
            $table->foreignId('idsubrubro')->constrained('subrubros');
            $table->foreignId('idnivel')->constrained('niveles');
            $table->text('descripcion');
            $table->integer('acceso'); // 0 presencial, 1 virtual, 2 híbrido
            $table->boolean('certificado')->default(false);
            $table->boolean('arancelado')->default(false);
            $table->integer('edadminima')->nullable();
            $table->integer('edadmaxima')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
