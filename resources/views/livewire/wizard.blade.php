<div>

	@if(!empty($jobs))
		<div>
  
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Candidate Name</th>
                <th>Designation</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
            <tr>
                <td>{{ $job->id }}</td>
                <td>{{ $job->first_name.'-'.$job->last_name }}</td>
                <td>{{ $job->designation }}</td>
                <td>
                <button wire:click="edit({{ $job->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $job->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
	@else
    @if(!empty($successMsg))
    <div class="alert alert-success">
        {{ $successMsg }}
    </div>
    @endif
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="multi-wizard-step">
                <a href="#step-1" type="button"
                    class="btn {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>Step 1</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-2" type="button"
                    class="btn {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>Step 2</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-3" type="button"
                    class="btn {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-4" type="button"
                    class="btn {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled">4</a>
                <p>Step 4</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-5" type="button"
                    class="btn {{ $currentStep != 5 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled">5</a>
                <p>Step 5</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-6" type="button"
                    class="btn {{ $currentStep != 6 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled">6</a>
                <p>Step 6</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-7" type="button"
                    class="btn {{ $currentStep != 7 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled">7</a>
                <p>Step 7</p>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
        <div class="col-md-12">
            <h3>Basic Details</h3>
            <div class="form-group col-md-6 text-inner-info">
                <label for="title">First Name: *</label>
                <input type="text" wire:model="first_name" class="form-control" id="first_name">
                @error('first_name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6 text-inner-info padding-left-10">
                <label for="title">Last Name: *</label>
                <input type="text" wire:model="last_name" class="form-control" id="last_name">
                @error('last_name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6 text-inner-info">
                <label for="title">Designation: *</label>
                <input type="text" wire:model="designation" class="form-control" id="designation">
                @error('designation') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6 text-inner-info padding-left-10">
                <label for="title">Address 1: *</label>
                <input type="text" wire:model="address1" class="form-control" id="address1">
                @error('address1') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6 text-inner-info">
                <label for="title">Address 2:</label>
                <input type="text" wire:model="address2" class="form-control" id="address2">
                @error('address2') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6 text-inner-info padding-left-10">
                <label for="detail">Email: *</label>
                <input type="email" wire:model="email" class="form-control" id="email">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
             <div class="form-group col-md-6 text-inner-info">
                <label for="detail">Phone Number: *</label>
                <input type="phone" wire:model="phone" class="form-control" id="phone">
                @error('phone') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6 text-inner-info padding-left-10">
                <label for="detail">City: *</label>
                <input type="city" wire:model="city" class="form-control" id="city">
                @error('city') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6 text-inner-info">
                <label for="detail">State: *</label>
                <select class="form-control" name="state" id="state" wire:model="state">
                	<option value="">Select State</option>
                	<option value="gujarat">Gujarat</option>
                	<option value="rajasthan">Rajasthan</option>
                	<option value="delhi">Delhi</option>
                	<option value="hariyana">Hariyana</option>
                </select>
                @error('state') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6 text-inner-info padding-left-10">
                <label for="detail">Zip Code: *</label>
                <input type="zipcode" wire:model="zipcode" class="form-control" id="zipcode">
                @error('zipcode') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6 text-inner-info">
                <label for="description">Gender</label><br />
                <label class="radio-inline"><input type="radio" wire:model="gender" value="m"
                        > Male</label>
                <label class="radio-inline"><input type="radio" wire:model="gender" value="f"
                        > Female</label>
                @error('gender') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6 text-inner-info padding-left-10">
                <label for="detail">Relationship Status: *</label>
                <select class="form-control" name="relationship_status" id="relationship_status" wire:model="relationship_status">
                	<option value="">Select Status</option>
                	<option value="single">Single</option>
                	<option value="married">Married</option>
                </select>
                @error('relationship_status') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6 text-inner-info">
                <label for="detail">Date Of Birth: *</label>
                <input type="date_of_birth" placeholder="DD-MM-YYYY" wire:model="date_of_birth" class="form-control" id="date_of_birth">
                @error('date_of_birth') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-12 padding-none">
            	<button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                type="button">Next</button>
                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="list"
                type="button">List</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
        <div class="col-md-12">
            <h3>Education Details</h3>
            <h4>SSC Result</h4>
            <div class="form-group col-md-4 text-inner-info-4">
                <label for="title">Name of board: *</label>
                <input type="text" wire:model="ssc_board_name" class="form-control" id="ssc_board_name">
                @error('ssc_board_name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-4 text-inner-info-4">
                <label for="title">Passing year: *</label>
                <input type="text" wire:model="ssc_passing_year" class="form-control" id="ssc_passing_year">
                @error('ssc_passing_year') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-4 text-inner-info-4">
                <label for="title">Percentage: *</label>
                <input type="text" wire:model="ssc_percentage" class="form-control" id="ssc_percentage">
                @error('ssc_percentage') <span class="error">{{ $message }}</span> @enderror
            </div>
            <hr>
            <h4>HSC/Diploma Result</h4>
            <div class="form-group col-md-4 text-inner-info-4">
                <label for="title">Name of board: *</label>
                <input type="text" wire:model="hsc_board_name" class="form-control" id="hsc_board_name">
                @error('hsc_board_name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-4 text-inner-info-4">
                <label for="title">Passing year: *</label>
                <input type="text" wire:model="hsc_passing_year" class="form-control" id="hsc_passing_year">
                @error('hsc_passing_year') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-4 text-inner-info-4">
                <label for="title">Percentage: *</label>
                <input type="text" wire:model="hsc_percentage" class="form-control" id="hsc_percentage">
                @error('hsc_percentage') <span class="error">{{ $message }}</span> @enderror
            </div>
            <hr>
            <h4>Bachelor Degree</h4>
            <div class="form-group col-md-4 text-inner-info-4">
                <label for="title">Course Name: *</label>
                <input type="text" wire:model="be_board_name" class="form-control" id="be_board_name">
                @error('be_board_name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-4 text-inner-info-4">
                <label for="title">Passing year: *</label>
                <input type="text" wire:model="be_passing_year" class="form-control" id="be_passing_year">
                @error('be_passing_year') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-4 text-inner-info-4">
                <label for="title">Percentage: *</label>
                <input type="text" wire:model="be_percentage" class="form-control" id="be_percentage">
                @error('be_percentage') <span class="error">{{ $message }}</span> @enderror
            </div>
            <hr>
            <h4>Master Degree</h4>
            <div class="form-group col-md-4 text-inner-info-4">
                <label for="title">Course Name: *</label>
                <input type="text" wire:model="me_board_name" class="form-control" id="me_board_name">
                @error('me_board_name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-4 text-inner-info-4">
                <label for="title">Passing year: *</label>
                <input type="text" wire:model="me_passing_year" class="form-control" id="me_passing_year">
                @error('me_passing_year') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-4 text-inner-info-4">
                <label for="title">Percentage: *</label>
                <input type="text" wire:model="me_percentage" class="form-control" id="me_percentage">
                @error('me_percentage') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-12 padding-none">
	            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
	                wire:click="secondStepSubmit">Next</button>
	            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
	        </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
    	<div class="col-md-12">
	    	<h3>Work Experience</h3>
	    	<div id="work_experience" style="display: inline">
		        <div class="form-group col-md-3 text-inner-info-3">
		            <label for="title">Company Name: *</label>
		            <input type="text" wire:model="company_name.0" class="form-control" id="company_name_0">
		            @error('company_name.0') <span class="error">{{ $message }}</span> @enderror
		        </div>
		        <div class="form-group col-md-3 text-inner-info-3">
		            <label for="title">Designation: *</label>
		            <input type="text" wire:model="company_designation.0" class="form-control">
		            @error('company_designation.0') <span class="error">{{ $message }}</span> @enderror
		        </div>
		        <div class="form-group col-md-3 text-inner-info-3">
		            <label for="title">From: *</label>
		            <input type="text" wire:model="from.0" placeholder="DD-MM-YYYY" class="form-control">
		            @error('from.0') <span class="error">{{ $message }}</span> @enderror
		        </div>
		        <div class="form-group col-md-3 text-inner-info-3">
		            <label for="title">To: *</label>
		            <input type="text"  placeholder="DD-MM-YYYY" wire:model="to.0" class="form-control" >
		            @error('to.0') <span class="error">{{ $message }}</span> @enderror
		        </div>
		        <button class="btn text-white btn-info btn-sm" wire:click.prevent="addWork({{$Work_i}})">Add</button>

			@foreach($WorkInputs as $key => $value)
			<div class="form-group col-md-3 text-inner-info-3">
	            <label for="title">Company Name: *</label>
	            <input type="text" wire:model="company_name.{{ $value }}" class="form-control">
	            @error('company_name.'.$value) <span class="error">{{ $message }}</span> @enderror
	        </div>
	         <div class="form-group col-md-3 text-inner-info-3">
		            <label for="title">Designation: *</label>
		            <input type="text" wire:model="company_designation.{{ $value }}" class="form-control">
		            @error('company_designation.'.$value) <span class="error">{{ $message }}</span> @enderror
		        </div>
		        <div class="form-group col-md-3 text-inner-info-3">
		            <label for="title">From: *</label>
		            <input type="text" wire:model="from.{{ $value }}" placeholder="DD-MM-YYYY" class="form-control" id="from_0">
		            @error('from.'.$value) <span class="error">{{ $message }}</span> @enderror
		        </div>
		        <div class="form-group col-md-3 text-inner-info-3">
		            <label for="title">To: *</label>
		            <input type="text"  placeholder="DD-MM-YYYY" wire:model="to.{{ $value }}" class="form-control" >
		            @error('to.'.$value) <span class="error">{{ $message }}</span> @enderror
		        </div>
                        <button class="btn btn-danger btn-sm" wire:click.prevent="removeWork({{$key}})">Cut</button>
                    
			   @endforeach

		    </div>
	        <div class="form-group col-md-12 padding-none">
		        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
		                wire:click="thirdStepSubmit">Next</button>
		        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
		    </div>
		</div>
    </div>
    <div class="row setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
    	<div class="col-md-12">
	    	<h3>Language Known</h3>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="hindi_language" id="hindi_language"> Hindi
	            @error('hindi_language') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="hindi_read" id="hindi_read"> Read
	            @error('hindi_read') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="hindi_write" id="hindi_write"> Write
	            @error('hindi_write') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="hindi_speak" id="hindi_speak"> Speak
	            @error('hindi_speak') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <hr>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="english_language" id="english_language"> English
	            @error('english_language') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="english_read" id="english_read"> Read
	            @error('english_read') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="english_write" id="english_write"> Write
	            @error('english_write') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="english_speak" id="english_speak"> Speak
	            @error('english_speak') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <hr>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="gujarati_language" id="gujarati_language"> Gujarati
	            @error('gujarati_language') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="gujarati_read" id="gujarati_read"> Read
	            @error('gujarati_read') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="gujarati_write" id="gujarati_write"> Write
	            @error('gujarati_write') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="gujarati_speak" id="gujarati_speak"> Speak
	            @error('gujarati_speak') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-12 padding-none">
		        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
		                wire:click="fourthStepSubmit">Next</button>
		        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Back</button>
		    </div>
		</div>
    </div>
    <div class="row setup-content {{ $currentStep != 5 ? 'display-none' : '' }}" id="step-5">
    	<div class="col-md-12">
	    	<h3>Technologies You Known</h3>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="php" id="php"> PHP
	            @error('php') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <label class="radio-inline"><input type="radio" wire:model="php_level" value="beginer"
                        > Beginer</label>
	            @error('php_level') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <label class="radio-inline"><input type="radio" wire:model="php_level" value="mideator"
                        > Mideator</label>
	            @error('php_level') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <label class="radio-inline"><input type="radio" wire:model="php_level" value="expert"
                        > Expert</label>
	            @error('php_level') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <hr>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="mysql" id="mysql"> MySQL
	            @error('mysql') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <label class="radio-inline"><input type="radio" wire:model="mysql_level" value="beginer"
                        > Beginer</label>
	            @error('php_level') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <label class="radio-inline"><input type="radio" wire:model="mysql_level" value="mideator"
                        > Mideator</label>
	            @error('php_level') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <label class="radio-inline"><input type="radio" wire:model="mysql_level" value="expert"
                        > Expert</label>
	            @error('php_level') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <hr>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="laravel" id="laravel"> Laravel
	            @error('laravel') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <label class="radio-inline"><input type="radio" wire:model="laravel_level" value="beginer"
                        > Beginer</label>
	            @error('php_level') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <label class="radio-inline"><input type="radio" wire:model="laravel_level" value="mideator"
                        > Mideator</label>
	            @error('php_level') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <label class="radio-inline"><input type="radio" wire:model="laravel_level" value="expert"
                        > Expert</label>
	            @error('php_level') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <hr>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <input type="checkbox" wire:model="oracle" id="oracle"> Oracle
	            @error('oracle') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <label class="radio-inline"><input type="radio" wire:model="oracle_level" value="beginer"
                        > Beginer</label>
	            @error('oracle_level') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <label class="radio-inline"><input type="radio" wire:model="oracle_level" value="mideator"
                        > Mideator</label>
	            @error('oracle_level') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-3 text-inner-info-3">
	            <label class="radio-inline"><input type="radio" wire:model="oracle_level" value="expert"
                        > Expert</label>
	            @error('oracle_level') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-12 padding-none">
		        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
		                wire:click="fifthStepSubmit">Next</button>
		        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(4)">Back</button>
		    </div>
		</div>
    </div>
    <div class="row setup-content {{ $currentStep != 6 ? 'display-none' : '' }}" id="step-6">
    	<div class="col-md-12">
	    	<h3>Reference contact</h3>
	    	<div id="referenceContact">
		        <div class="form-group col-md-4 text-inner-info-4">
		            <label for="title">Name: *</label>
	                <input type="text"  wire:model="reference_name.0" class="form-control" >
		            @error('reference_name.0') <span class="error">{{ $message }}</span> @enderror
		        </div>
		        <div class="form-group col-md-4 text-inner-info-4">
		            <label for="title">Contact number: *</label>
	                <input type="text" wire:model="reference_phone.0" class="form-control" >
		            @error('reference_phone.0') <span class="error">{{ $message }}</span> @enderror
		        </div>
		        <div class="form-group col-md-4 text-inner-info-4">
		            <label for="title">Relation: *</label>
	                <input type="text"  wire:model="relation_with.0" class="form-control" >
		            @error('relation_with') <span class="error">{{ $message }}</span> @enderror
		        </div>
		       <button class="btn text-white btn-info btn-sm" wire:click.prevent="addReference({{$Ref_i}})">Add</button>
		       @foreach($ReferenceInputs as $key => $value)
		       <div class="form-group col-md-4 text-inner-info-4">
		            <label for="title">Name: *</label>
	                <input type="text"  wire:model="reference_name.{{ $value }}" class="form-control" >
		            @error('reference_name'.$value) <span class="error">{{ $message }}</span> @enderror
		        </div>
		        <div class="form-group col-md-4 text-inner-info-4">
		            <label for="title">Contact number: *</label>
	                <input type="text" wire:model="reference_phone.{{ $value }}" class="form-control" >
		            @error('reference_phone'.$value) <span class="error">{{ $message }}</span> @enderror
		        </div>
		        <div class="form-group col-md-4 text-inner-info-4">
		            <label for="title">Relation: *</label>
	                <input type="text"  wire:model="relation_with.{{ $value }}" class="form-control" >
		            @error('relation_with'.$value) <span class="error">{{ $message }}</span> @enderror
		        </div>
		        <button class="btn btn-danger btn-sm" wire:click.prevent="removeReference({{$key}})">Cut</button>
		       @endforeach
		    </div>
	        <div class="form-group col-md-12 padding-none">
		        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
		                wire:click="sixthStepSubmit">Next</button>
		        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(5)">Back</button>
		    </div>
		</div>
    </div>
    <div class="row setup-content {{ $currentStep != 7 ? 'display-none' : '' }}" id="step-6">
    	<div class="col-md-12">
	    	<h3>Reference contact</h3>
	        <div class="form-group col-md-4 text-inner-info-4">
	            <label for="title">Prefered Location: *</label>
                <select class="form-control" name="prefered_location" id="prefered_location" wire:model="prefered_location">
                	<option value="">Select Location</option>
                	<option value="ahmedabad">Ahmedabad</option>
                	<option value="rajkot">Rajkot</option>
                	<option value="surat">Surat</option>
                </select>
	            @error('prefered_location') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-4 text-inner-info-4">
	            <label for="title">Department: *</label>
                <select class="form-control" name="department" id="department" wire:model="department">
                	<option value="">Select Department</option>
                	<option value="development">Development</option>
                	<option value="design">Design</option>
                	<option value="marketing">Marketing</option>
                </select>
	            @error('department') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-4 text-inner-info-4">
	            <label for="title">Notice period: *</label>
                <input type="text" wire:model="notice_period" class="form-control" id="notice_period">
	            @error('notice_period') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-4 text-inner-info-4">
	            <label for="title">Currect CTC: *</label>
                <input type="text" wire:model="current_ctc" class="form-control" id="current_ctc">
	            @error('current_ctc') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-4 text-inner-info-4">
	            <label for="title">Excepted CTC: *</label>
                <input type="text" wire:model="expected_ctc" class="form-control" id="expected_ctc">
	            @error('expected_ctc') <span class="error">{{ $message }}</span> @enderror
	        </div>
	        <div class="form-group col-md-12 padding-none">
		        <button class="btn btn-success btn-lg pull-right" wire:click="seventhStepSubmit" type="button">Finish!</button>
		        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(6)">Back</button>
		    </div>
		</div>
    </div>
</div>
@endif

