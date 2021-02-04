<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('designation');
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('email')->unique();
            $table->string('city')->nullable();
            $table->string('phone');
            $table->string('state')->nullable();
            $table->string('gender');
            $table->string('zipcode');
            $table->string('relationship_status');
            $table->string('date_of_birth');
            $table->string('languages')->nullable();
            $table->string('technologies')->nullable();
            $table->string('prefered_location')->nullable();
            $table->string('notice_period')->nullable();
            $table->string('current_ctc')->nullable();
            $table->string('expected_ctc')->nullable();
            $table->string('department')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}
