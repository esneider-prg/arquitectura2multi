<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningPathMedal extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'medal_name', 'description'
    ];
}
