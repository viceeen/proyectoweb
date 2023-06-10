<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';
    protected $primaryKey = 'id';
    protected $KeyType = 'integer';

                
    public function estudiante():BelongsTo{
        return $this->belongsTo(Estudiante::class);
        
    }
    public function profesorpropuesta():BelongsTo{
        return $this->belongsTo(ProfesorPropuesta::class);

    }



}
