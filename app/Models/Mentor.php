<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;
    protected $table = 'mentors';
    protected $primaryKey = 'mentor_id';
    protected $fillable = [
        'user_id',
        'company_id',
        'mentor_name',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
