<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyStoryTraining extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'user_id', 'training_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
