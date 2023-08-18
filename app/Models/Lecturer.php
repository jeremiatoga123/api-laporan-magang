<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    protected $table = 'lecturers';
    protected $primaryKey = 'lecturer_id';
    protected $fillable = [
        'user_id',
        'lecturer_name',
        'email',
        'lectureer_nip'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
