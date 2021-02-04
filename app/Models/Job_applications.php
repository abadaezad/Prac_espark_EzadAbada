<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidate_educations;
use App\Models\Candidate_reference_details;
use App\Models\Candidate_work_experience;

class Job_applications extends Model
{
    use HasFactory;
    protected $guarded = []; 

     /**
     * Get the comments for the blog post.
     */
    public function educations()
    {
        return $this->hasMany(Candidate_educations::class);
    }
     /**
     * Get the comments for the blog post.
     */
    public function references()
    {
        return $this->hasMany(Candidate_reference_details::class);
    }
     /**
     * Get the comments for the blog post.
     */
    public function experience()
    {
        return $this->hasMany(Candidate_work_experience::class);
    }
     
}
