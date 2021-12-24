<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
    // Campos a agregaran a DB
    protected $fillable = [
        'maquina', 'area', 'trabajo', 'horas', 'descripcion', 'causa', 'solucion', 'refacciones', 'monto', 'observaciones', 'fecha', 'imagen', 'categoria_id'
    ];
    // Obtiene la categorias via FK
    public function categorias()
    {
        return $this->belongsTo(CategoriaTipotrabajo::class, 'categoria_id');
    }

    // Obtiene la informacion del usuario via FK
    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    use HasFactory;
}
