<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateReferenceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_reference_details', function (Blueprint $table) {
            $table->id();
            $table->integer('job_applications_id')->unsigned(); 
            $table->string('reference_name');
            $table->string('reference_phone');
            $table->string('relation_with');
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
        Schema::dropIfExists('candidate_reference_details');
    }
}
