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
        Schema::create('cadastro_taxa', function (Blueprint $table) {
            $table->id('id_taxa');
            $table->smallInteger('taxa_perm_minima');
            $table->decimal('taxa_vlr_adicional', 10, 2);
            $table->smallInteger('taxa_perm_dia_adicional');
            $table->boolean('taxa_ativa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro_taxa');
    }
};
