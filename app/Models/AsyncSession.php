<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsyncSession extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'session_name', 'session_date'
    ];
}
