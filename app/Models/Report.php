<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = 'reports';
    protected $primaryKey = 'report_id';
    protected $fillable = [
        'student_id',
        'start_time',
        'end_time',
        'internship_activity',
        'work_steps',
        'report_results',
        'date',
        'status'
    ];
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');
    }
}
