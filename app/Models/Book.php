<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'tittle',
        'descricao',
        'obra',
        'categoria1',
        'categoria2',
        'categoria3',
    ];
    public $timestamps = false;



    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
