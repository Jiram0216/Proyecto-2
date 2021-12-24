<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    // Campos a agregaran a DB
    protected $fillable = [
        'empresa', 'contacto', 'correo', 'telefono', 'user_id', 'categoria_id', 'imagen'
    ];

    // Obtiene la categoria del proveedor via FK
    public function categoria()
    {
        return $this->belongsTo(CategoriaProveedors::class, 'categoria_id');
    }

    // Obtiene la informacion del usuario via FK
    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
