<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningPathUser extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'user_id', 'path_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
