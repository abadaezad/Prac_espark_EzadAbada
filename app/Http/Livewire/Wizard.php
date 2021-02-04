<?php
  
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Candidate_educations;
use App\Models\Candidate_reference_details;
use App\Models\Candidate_work_experience;
use App\Models\Job_applications;
  
class Wizard extends Component
{
    public $currentStep = 1;
    public $successMsg = '';
    public $first_name, $last_name, $designation, $address1, $address2, $email, $city, $phone, $state, $gender, $zipcode, $relationship_status, $date_of_birth, $job_id, $ssc_board_name, $ssc_passing_year, $ssc_percentage, $hsc_board_name, $hsc_passing_year, $hsc_percentage, $be_board_name, $be_passing_year, $be_percentage, $me_board_name, $me_passing_year, $me_percentage, $hindi_language, $english_language, $gujarati_language, $hindi_read, $gujarati_read, $english_read, $hindi_write, $gujarati_write, $english_write, $hindi_speak, $gujarati_speak, $english_speak;
    public $php, $mysql, $laravel, $oracle, $php_level, $mysql_level, $laravel_level, $oracle_level;
    public $reference_name, $reference_phone, $relation_with;
    public $prefered_location, $notice_period, $current_ctc, $expected_ctc, $department;
    public $company_name, $company_designation,$to,$from,$jobs;
    public $WorkInputs = [];
    public $Work_i = 1;
    public $ReferenceInputs = [];
    public $Ref_i = 1;
    
    
  
    /**
     * Write code on Method
     */
    public function render()
    {
        return view('livewire.wizard');
    }
  
    /**
     * Write code on Method
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'designation' => 'required',
            'address1' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'city' => 'required',
            'state' => 'required',
            'gender' => 'required',
            'zipcode' => 'required|numeric',
            'relationship_status' => 'required',
            'date_of_birth' => 'required|date',
        ]);
        $this->job_id = Job_applications::updateOrCreate(['email' => $validatedData['email']],$validatedData)->id;
        $this->getJobDetails();
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'ssc_board_name' => 'required',
            'ssc_passing_year' => 'required|numeric',
            'ssc_percentage' => 'required|numeric|between:0,99.99',
            'hsc_board_name' => 'required',
            'hsc_passing_year' => 'required|numeric',
            'hsc_percentage' => 'required|numeric|between:0,99.99',
            'be_board_name' => 'required',
            'be_passing_year' => 'required|numeric',
            'be_percentage' => 'required|numeric|between:0,99.99',
            'me_board_name' => 'required',
            'me_passing_year' => 'required|numeric',
            'me_percentage' => 'required|numeric|between:0,99.99'
        ]);

        $degree['ssc']['board_name'] =  $validatedData['ssc_board_name'];
        $degree['ssc']['passing_year'] =  $validatedData['ssc_passing_year'];
        $degree['ssc']['percentage'] =  $validatedData['ssc_percentage'];
        $degree['ssc']['degree_title'] =  'ssc';

        $degree['hsc']['board_name'] =  $validatedData['hsc_board_name'];
        $degree['hsc']['passing_year'] =  $validatedData['hsc_passing_year'];
        $degree['hsc']['percentage'] =  $validatedData['hsc_percentage'];
        $degree['hsc']['degree_title'] =  'hsc';

        $degree['be']['board_name'] =  $validatedData['be_board_name'];
        $degree['be']['passing_year'] =  $validatedData['be_passing_year'];
        $degree['be']['percentage'] =  $validatedData['be_percentage'];
        $degree['be']['degree_title'] =  'be';

        $degree['me']['board_name'] =  $validatedData['me_board_name'];
        $degree['me']['passing_year'] =  $validatedData['me_passing_year'];
        $degree['me']['percentage'] =  $validatedData['me_percentage'];
        $degree['me']['degree_title'] =  'me';
       	foreach ($degree as $key => $value) {
       		$value['job_applications_id'] = $this->job_id;
       		Candidate_educations::updateOrCreate(['job_applications_id' => $this->job_id, 'degree_title' => $key],$value)->id;
       	}
  		$this->getJobDetails();
        $this->currentStep = 3;
    }
    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'to.0' => 'required|date',
            'from.0' => 'required|date',
            'company_name.0' => 'required',
            'company_designation.0' => 'required',
            'to.*' => 'required|date',
            'from.*' => 'required|date',
            'company_name.*' => 'required',
            'company_designation.*' => 'required'
            
        ]);
        foreach ($this->to as $key => $value) {
        	$data['to'] = $this->to[$key];
        	$data['from'] = $this->from[$key];
        	$data['company_name'] = $this->company_name[$key];
        	$data['designation'] = $this->company_designation[$key];
        	$data['job_applications_id'] = $this->job_id;
        	Candidate_work_experience::updateOrCreate(['job_applications_id' => $this->job_id, 'company_name' => $data['company_name']],$data)->id;
        }
        
  		$this->getJobDetails();
        $this->currentStep = 4;
    }
    public function fourthStepSubmit()
    {
        $validatedData = $this->validate([
            'hindi_language' => '',
            'gujarati_language' => '',
            'english_language' => '',
            'hindi_read' => '',
            'gujarati_read' => '',
            'english_read' => '',
            'hindi_write' => '',
            'gujarati_write' => '',
            'english_write' => '',
            'hindi_speak' => '',
            'gujarati_speak' => '',
            'english_speak' => '',
        ]);
        $language = [];
  			if ($validatedData['hindi_language']) {
  				$language['hindi']['read'] = $validatedData['hindi_read'];
  				$language['hindi']['write'] = $validatedData['hindi_write'];
  				$language['hindi']['speak'] = $validatedData['hindi_speak'];
  			}
  			if ($validatedData['english_language']) {
  				$language['english']['read'] = $validatedData['english_read'];
  				$language['english']['write'] = $validatedData['english_write'];
  				$language['english']['speak'] = $validatedData['english_speak'];
  			}
  			if ($validatedData['gujarati_language']) {
  				$language['gujarati']['read'] = $validatedData['gujarati_read'];
  				$language['gujarati']['write'] = $validatedData['gujarati_write'];
  				$language['gujarati']['speak'] = $validatedData['gujarati_speak'];
  			}
  			$language=json_encode($language);
  			Job_applications::updateOrCreate(['id' => $this->job_id],['languages' => $language])->id;
  			$this->getJobDetails();
        	$this->currentStep = 5;
    }
    public function fifthStepSubmit()
    {
        $validatedData = $this->validate([
            'php' => '',
            'mysql' => '',
            'laravel' => '',
            'oracle' => '',
            'php_level' => '',
            'mysql_level' => '',
            'laravel_level' => '',
            'oracle_level' => '',
        ]);
        $technology = [];
        if ($validatedData['php']) {
        	$technology['php'] = $validatedData['php_level'];
        }
        if ($validatedData['mysql']) {
        	$technology['mysql'] = $validatedData['mysql_level'];
        }
        if ($validatedData['laravel']) {
        	$technology['laravel'] = $validatedData['laravel_level'];
        }
        if ($validatedData['oracle']) {
        	$technology['oracle'] = $validatedData['oracle_level'];
        }
        $technology=json_encode($technology);
  		Job_applications::updateOrCreate(['id' => $this->job_id],['technologies' => $technology])->id;
  		$this->getJobDetails();
        $this->currentStep = 6;
    }
    public function sixthStepSubmit()
    {
        $validatedData = $this->validate([
            'reference_name.0' => '',
            'reference_phone.0' => 'numeric',
            'relation_with.0' => '',
              'reference_name.*' => '',
            'reference_phone.*' => 'numeric',
            'relation_with.*' => '',
        ]);

        foreach ($this->reference_name as $key => $value) {
        	$data['reference_name'] = $this->reference_name[$key];
        	$data['reference_phone'] = $this->reference_phone[$key];
        	$data['relation_with'] = $this->relation_with[$key];
        	$data['job_applications_id'] = $this->job_id;
        	Candidate_reference_details::updateOrCreate(['job_applications_id' => $this->job_id, 'reference_name' => $data['reference_name']],$data)->id;
        }
  		
  		$this->getJobDetails();
        $this->currentStep = 7;
    }
  	
  	 public function seventhStepSubmit()
    {
        $validatedData = $this->validate([
            'prefered_location' => 'required',
            'notice_period' => 'required|numeric',
            'current_ctc' => 'required|numeric',
            'expected_ctc' => 'required|numeric',
            'department' => 'required',
        ]);
  		Job_applications::updateOrCreate(['id' => $this->job_id],$validatedData);
        $this->successMsg = 'Form Submited successfully.';
        
        $this->clearForm();
        $this->currentStep = 1;
        $this->job_id = '';
    }

  
    /**
     * Write code on Method
     */
    public function back($step)
    {
    	$this->successMsg = '';
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     */
    public function clearForm()
     {
      $this->first_name =  $this->last_name =  $this->designation =  $this->address1 =  $this->address2 =  $this->email =  $this->city =  $this->phone =  $this->state =  $this->gender =  $this->zipcode =  $this->relationship_status =  $this->date_of_birth =  $this->job_id =  $this->ssc_board_name =  $this->ssc_passing_year =  $this->ssc_percentage =  $this->hsc_board_name =  $this->hsc_passing_year =  $this->hsc_percentage =  $this->be_board_name =  $this->be_passing_year =  $this->be_percentage =  $this->me_board_name =  $this->me_passing_year =  $this->me_percentage =  $this->hindi_language =  $this->english_language =  $this->gujarati_language =  $this->hindi_read =  $this->gujarati_read =  $this->english_read =  $this->hindi_write =  $this->gujarati_write =  $this->english_write =  $this->hindi_speak =  $this->gujarati_speak =  $this->english_speak =$this->php =  $this->mysql =  $this->laravel =  $this->oracle =  $this->php_level =  $this->mysql_level =  $this->laravel_level =  $this->oracle_level =$this->reference_name =  $this->reference_phone =  $this->relation_with =  $this->prefered_location =  $this->notice_period =  $this->current_ctc =$this->expected_ctc =  $this->department = $this->company_name = $this->company_designation =$this->to = $this->from = '';
    }
    public function getJobDetails(){
    	if ($this->job_id){
    		$data =Job_applications::where('id', $this->job_id)->with(['experience','references','educations'])->get();
    		//echo "<prE>"; print_r($data[0]->experience);print_r($data[0]->references);print_r($data[0]->educations);die();
    		$this->first_name = ($data[0]->first_name) ? $data[0]->first_name : '';
    		$this->last_name = ($data[0]->last_name) ? $data[0]->last_name : '';
    		$this->designation = ($data[0]->designation) ? $data[0]->designation : '';
    		$this->address1 = ($data[0]->address1) ? $data[0]->address1 : '';
    		$this->address2 = ($data[0]->address2) ? $data[0]->address2 : '';
    		$this->email  = ($data[0]->email ) ? $data[0]->email  : '';
    		$this->city = ($data[0]->city) ? $data[0]->city : '';
    		$this->phone = ($data[0]->phone) ? $data[0]->phone : '';
    		$this->state = ($data[0]->state) ? $data[0]->state : '';
    		$this->gender = ($data[0]->gender) ? $data[0]->gender : '';
    		$this->zipcode = ($data[0]->zipcode) ? $data[0]->zipcode : '';
    		$this->relationship_status = ($data[0]->relationship_status) ? $data[0]->relationship_status : '';
    		$this->date_of_birth = ($data[0]->date_of_birth) ? $data[0]->date_of_birth : '';
    		
    		$this->notice_period = ($data[0]->notice_period) ? $data[0]->notice_period : '';
    		$this->current_ctc = ($data[0]->current_ctc) ? $data[0]->current_ctc : '';
    		$this->expected_ctc = ($data[0]->expected_ctc) ? $data[0]->expected_ctc : '';
    		$this->department = ($data[0]->department) ? $data[0]->department : '';'';
    		if (isset($data[0]->languages) && !empty($data[0]->languages)) {
    			$languages = json_decode($data[0]->languages);
    			if (isset($languages->hindi) && !empty($languages->hindi)) {
    				$this->hindi = 1;
	  				$this->hindi_read = $languages->hindi->read; 
	  				$this->hindi_write= $languages->hindi->write; 
	  				$this->hindi_speak= $languages->hindi->speak; 
  				}
	  			if (isset($languages->english) && !empty($languages->english) ) {
	  				$this->english = 1;
	  				$this->english_read = $languages->english->read;  
	  				$this->english_write= $languages->english->write; 
	  				$this->english_speak= $languages->english->speak; 
	  			}
	  			if (isset($languages->gujarati) && !empty($languages->gujarati) ) {
	  				$this->gujarati = 1;
	  				$this->gujarati_read =  $languages->gujarati->read; 
	  				$this->gujarati_write= $languages->gujarati->write; 
	  				$this->gujarati_speak= $languages->gujarati->speak; 
	  			}
    		}
    		if (isset($data[0]->technologies) && !empty($data[0]->technologies)) {
    			$technologies = json_decode($data[0]->technologies);
    			if (isset($technologies->php) && !empty($technologies->php)) {
    				$this->php = 1;
	  				$this->php_level = $technologies->php; 
  				}
  				if (isset($technologies->mysql) && !empty($technologies->mysql)) {
  					$this->mysql = 1;
	  				$this->mysql_level = $technologies->mysql; 
  				}
  				if (isset($technologies->laravel) && !empty($technologies->laravel)) {
  					$this->laravel = 1;
	  				$this->laravel_level = $technologies->laravel; 
  				}
  				if (isset($technologies->oracle) && !empty($technologies->oracle)) {
  					$this->oracle = 1;
	  				$this->oracle_level = $technologies->oracle; 
  				}
	  			
    		}
    		if (isset($data[0]->experience) && !empty($data[0]->experience))
    		{

    			foreach ($data[0]->experience as $key => $value) {
    				 $this->company_name[$key]  = $value->company_name;
    				 $this->company_designation[$key]  = $value->designation;
    				 $this->to[$key]  = $value->to;
    				 $this->from[$key]  = $value->from;
    			}
    			$this->Work_i = count($data[0]->experience);
    			//echo "<prE>"; print_r($this->Work_i);print_r($this->company_name.'1');die();
    		}
    		if (isset($data[0]->references) && !empty($data[0]->references))
    		{
    			foreach ($data[0]->references as $key => $value) {
    				 $this->reference_name[$key] = $value->reference_name;
    				 $this->reference_phone[$key]  = $value->reference_phone;
    				 $this->relation_with[$key]  = $value->relation_with;
    			}
    			$this->Ref_i = count($data[0]->references);
    		}
    		if (isset($data[0]->educations) && !empty($data[0]->educations))
    		{
    			foreach ($data[0]->educations as $key => $value) {
    				if ($value->degree_title == 'ssc') {
    					$this->ssc_board_name = $value->board_name;
    					 $this->ssc_passing_year = $value->passing_year;
    					 $this->ssc_percentage = $value->percentage;
    				}
    				if ($value->degree_title == 'hsc') {
    					$this->hsc_board_name = $value->board_name;
    				 	$this->hsc_passing_year = $value->passing_year;
    					$this->hsc_percentage = $value->percentage;
    				}
    				if ($value->degree_title == 'be') {
    					 $this->be_board_name = $value->board_name;
	    				 $this->be_passing_year = $value->passing_year;
	    				 $this->be_percentage = $value->percentage;
    				}
    				if ($value->degree_title == 'me') {
    					 $this->me_board_name = $value->board_name;
	    				 $this->me_passing_year = $value->passing_year;
	    				 $this->me_percentage = $value->percentage;
    				}
    			}
    		}
    	}
    }
    public function list()
    {
        $this->jobs = Job_applications::all();
        return view('livewire.wizard');
    }
    public function edit($id)
    {
    	$this->job_id = $id;
    	$this->jobs = [];
    	$this->getJobDetails();
    	return view('livewire.wizard');
    }
    public function delete($id)
    {
        Job_applications::find($id)->delete();
        session()->flash('message', 'Job Deleted Successfully.');
        $this->list();
    }
    public function addWork($i)
    {
        $i = $i + 1;
        $this->Work_i = $i;
        array_push($this->WorkInputs ,$i);
    }

    public function removeWork($i)
    {
        unset($this->WorkInputs[$i]);
    }
    public function addReference($i)
    {
        $i = $i + 1;
        $this->Ref_i = $i;
        array_push($this->ReferenceInputs ,$i);
    }

    public function removeReference($i)
    {
        unset($this->ReferenceInputs[$i]);
    }
}