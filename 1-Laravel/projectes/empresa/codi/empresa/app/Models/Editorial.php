<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;
    
    protected $table = 'editorials';
    protected $primaryKey = 'identificador';
    
    protected $fillable = [
        'nom',
        'nif_cif',
        'contacte',
        'telefon',
        'email',
    ];
    
    public function llibres()
    {
        return $this->hasMany(Llibre::class, 'editorial', 'identificador');
    }
}
