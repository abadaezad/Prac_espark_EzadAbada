<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job_applications;

class Candidate_reference_details extends Model
{
    use HasFactory;
    protected $guarded = []; 
	/**
	 * Get the job that owns the educations.
	 */
	public function job()
	{
	    return $this->belongsTo(Job_applications::class);
	}
}
