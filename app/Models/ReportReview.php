<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportReview extends Model
{
    use HasFactory;
    protected $table = 'report_reviews';
    protected $primaryKey = 'review_id';
    protected $fillable = [
        'report_id',
        'mentor_id',
        'comments'
    ];
    public function report()
    {
        return $this->belongsTo(Report::class, 'report_id', 'report_id');
    }
    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'mentor_id', 'mentor_id');
    }
}
