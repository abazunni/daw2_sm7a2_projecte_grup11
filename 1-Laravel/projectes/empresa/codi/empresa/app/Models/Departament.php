<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    use HasFactory;
    
    protected $table = 'departaments';
    protected $primaryKey = 'identificador';
    
    protected $fillable = [
        'nom',
        'localitzacio',
        'director_departament',
    ];
    
    public function professors()
    {
        return $this->hasMany(Professor::class, 'departament', 'identificador');
    }
}
