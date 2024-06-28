<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'title', 'genre'
    ];
}
