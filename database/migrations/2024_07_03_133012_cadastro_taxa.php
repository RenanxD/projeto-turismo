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
            $table->id();
            $table->string('descricao');
            $table->smallInteger('valor');
            $table->smallInteger('taxa_perm_minima')->default(0);
            $table->decimal('taxa_vlr_adicional', 10, 2)->default(0.00);
            $table->smallInteger('taxa_perm_dia_adicional')->default(0);
            $table->boolean('taxa_ativa')->default(true);
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
