<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'nome',
        'dosagem',
        'dt_inicio',
        'dt_fim',
        'horarios',
        'continuo',
    ];

    public function user()
    {
	    return $this->belongsTo(User::class);
    }

}
