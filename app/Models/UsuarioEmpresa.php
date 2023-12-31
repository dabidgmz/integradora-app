<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioEmpresa extends Model
{
    use HasFactory;
    protected $table = 'user_empresa';
    protected $primaryKey = ['user_id', 'empresa_id'];
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'empresa_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}
