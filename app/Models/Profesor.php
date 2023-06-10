<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    protected $primaryKey  = 'rut';
    protected $KeyType = 'string';
    public $incrementing = false;

    public function profesor_propuesta():BelongsTo{
        return $this->belongsTo(ProfesorPropuesta::class);
    }
    

}
