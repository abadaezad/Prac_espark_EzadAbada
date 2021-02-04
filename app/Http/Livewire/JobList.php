<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Candidate_educations;
use App\Models\Candidate_reference_details;
use App\Models\Candidate_work_experience;
use App\Models\Job_applications;

class JobList extends Component
{
	public $Jobs = [];
    public function render()
    {
    	$this->Jobs = Job_applications::all();
        return view('livewire.job-list');
    }
}
