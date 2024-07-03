<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValoresETaxas extends Model
{
    use HasFactory;

    protected $table = 'cadastro_taxa';

    protected $fillable = [
        'descricao',
        'valor',
        'taxa_perm_minima',
        'taxa_vlr_adicional',
        'taxa_perm_dia_adicional',
        'taxa_ativa'
    ];
}
