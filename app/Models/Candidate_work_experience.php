<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job_applications;

class Candidate_work_experience extends Model
{
    use HasFactory;
    protected $guarded = []; 
    protected $table = 'candidate_work_experience'; 
    /**
	 * Get the job that owns the educations.
	 */
	public function job()
	{
	    return $this->belongsTo(Job_applications::class);
	}
}
