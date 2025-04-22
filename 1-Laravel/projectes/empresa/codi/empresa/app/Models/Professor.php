<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    
    protected $table = 'professors';
    protected $primaryKey = 'identificador';
    
    protected $fillable = [
        'nom',
        'correu',
        'adreca',
        'ciutat',
        'mobil',
        'telefon',
        'departament',
    ];
    
    /**
     * Get the department that the professor belongs to.
     */
    public function departament()
    {
        return $this->belongsTo(Departament::class, 'departament', 'identificador');
    }
}
