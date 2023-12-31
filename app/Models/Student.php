<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'student_id';
    protected $fillable = [
        'user_id',
        'student_name',
        'student_nim',
        'email',
        'major'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
