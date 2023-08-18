<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalAssessment extends Model
{
    use HasFactory;
    protected $table = 'final_assessments';
    protected $primaryKey = 'assessment_id';
    protected $fillable = [
        'student_id',
        'assessment_parameter',
        'assessment_criteria',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');
    }
}
