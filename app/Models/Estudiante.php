<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';
    protected $primaryKey  = 'rut';
    protected $KeyType = 'string';
    public $incrementing = false;

    //public function estudiante():HasMany{
     //   return $this->hasMany(Estudiante::class);
    //}
    public function propuesta():HasMany{
        return $this->hasMany(Propuesta::class);
    }
}
