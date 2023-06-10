<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProfesorPropuesta extends Model
{
    use HasFactory;

    protected $table = 'profesor_propuesta';
    protected $primaryKey  = 'rut';
    protected $KeyType = 'string';
    public $incrementing = false;

    public function profesor():HasMany{ 
        return $this->hasMany(Profesor::class);
        
    }
    public function propuesta():HasMany{
        return $this->hasMany(Propuesta::class);
    }

}