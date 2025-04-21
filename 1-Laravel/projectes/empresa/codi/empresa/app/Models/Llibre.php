<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llibre extends Model
{
    use HasFactory;
    
    protected $table = 'llibres';
    protected $primaryKey = 'identificador';
    
    protected $fillable = [
        'nom',
        'autor',
        'isbn',
        'editorial',
    ];
    
    public function editorial()
    {
        return $this->belongsTo(Editorial::class, 'editorial', 'identificador');
    }
}
