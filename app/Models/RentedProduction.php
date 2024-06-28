<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentedProduction extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'user_id', 'rental_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
