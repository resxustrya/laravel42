<?php
class TableController extends BaseController
{
    public function createTable()
    {
        Schema::create('applicant', function($table)
        {
            $table->increments("id");
            $table->string("fname");
            $table->string("mname");
            $table->string("lname");
            $table->string("province");
            $table->string("municipality");
            $table->string("street");
            $table->date("dateOfBirth");
            $table->char("gender",1);
            $table->string("nationality");
            $table->string("religion");
            $table->char("civilStatus",1);
            $table->binary("nbi");
            $table->string("healthClearance");
            $table->binary("certificate");
            $table->binary("profilePic");
            $table->string("contactNo");
            $table->date("preparedSchedule");
            $table->string("employementType");
            $table->string("verifiedIs");
            $table->string("verifiedBy");
            $table->boolean("accountStatus");
            $table->boolean("employementStatus");

            $table->timestamps();
        });

        Schema::create('employer', function($table)
        {
            $table->increments("id");
            $table->string("fname");
            $table->string("mname");
            $table->string("lname");
            $table->string("province");
            $table->string("municipality");
            $table->string("street");
            $table->date("dateOfBirth");
            $table->char("gender",1);
            $table->string("nationality");
            $table->string("religion");
            $table->char("civilStatus",1);
            $table->binary("nbi");
            $table->binary("profilePic");
            $table->string("contactNo");
            $table->string("verifiedIs");
            $table->string("verifiedBy");
            $table->boolean("accountStatus");
            $table->boolean("isHiring");

            $table->timestamps();
        });

        Schema::create('jobs', function($table)
        {
            $table->increments("id");
            $table->integer("aplicantId")->unsigned();
            $table->integer("employerId")->unsigned();
            $table->boolean("type");

            $table->foreign('aplicantId')->references('id')->on('applicant');
            $table->foreign('employerId')->references('id')->on('employer');
            $table->timestamps();
        });

        Schema::create('apply', function($table)
        {
            $table->increments("id");
            $table->integer("aplicantId")->unsigned();
            $table->integer("employerId")->unsigned();
            $table->date("dateApplied");
            $table->boolean("isConfirmed");
            $table->string("lname");
            $table->date("dateStarted");
            $table->date("dateEnded");

            $table->foreign('aplicantId')->references('id')->on('applicant');
            $table->foreign('employerId')->references('id')->on('employer');
            $table->timestamps();
        });

        Schema::create('recommendation', function($table)
        {
            $table->increments("id");
            $table->integer("aplicantId")->unsigned();
            $table->string("recommendedBy");
            $table->string("recommendedTo");
            $table->date("dateRecommended");
            $table->boolean("isEmpConfirmed");
            $table->boolean("isAppConfirmed");
            $table->date("dateStarted");
            $table->date("dateEnded");

            $table->foreign('aplicantId')->references('id')->on('applicant');
            $table->timestamps();
        });

        Schema::create('postJobs', function($table)
        {
            $table->increments("id");
            $table->integer("aplicantId")->unsigned();
            $table->integer("employerId")->unsigned();
            $table->boolean("jobType");
            $table->string("jobDescription");
            $table->string("languageSpoken");
            $table->date("datePosted");
            $table->boolean("isAvailable");

            $table->foreign('aplicantId')->references('id')->on('applicant');
            $table->foreign('employerId')->references('id')->on('employer');
            $table->timestamps();
        });

        Schema::create('hire', function($table)
        {
            $table->increments("id");
            $table->integer("aplicantId")->unsigned();
            $table->integer("employerId")->unsigned();
            $table->date("dateRequested");
            $table->boolean("isAppConfirmed");
            $table->date("dateStarted");
            $table->date("dateEnded");

            $table->foreign('aplicantId')->references('id')->on('applicant');
            $table->foreign('employerId')->references('id')->on('employer');
            $table->timestamps();
        });

        Schema::create('evaluation', function($table)
        {
            $table->increments("id");
            $table->integer("aplicantId")->unsigned();
            $table->integer("employerId")->unsigned();
            $table->string("comment");
            $table->date("dateEvaluated");
            $table->double("totalRating");

            $table->foreign('aplicantId')->references('id')->on('applicant');
            $table->foreign('employerId')->references('id')->on('employer');
            $table->timestamps();
        });

        Schema::create('admin', function($table)
        {
            $table->increments("id");
            $table->string("fullname");
            $table->string("email");
            $table->string("contactNo");
            $table->string("username");
            $table->string("password");

            $table->timestamps();
        });

        Schema::create('evaluationQuestion', function($table)
        {
            $table->increments("id");
            $table->integer("evaluationId")->unsigned();
            $table->string("question");
            $table->double("rating");
            $table->string("userQuestion");

            $table->foreign('evaluationId')->references('id')->on('evaluation');
            $table->timestamps();
        });
        Schema::create('users', function($table){
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->integer('applicantId')->unsigned();
            $table->integer('employerId')->unsigned();
            $table->integer('adminId')->unsigned();
            $table->foreign('applicantId')->references('id')->on('applicant');
            $table->foreign('employerId')->references('id')->on('employer');
            $table->foreign('adminId')->references('id')->on('admin');
            $table->rememberToken();
            $table->timestamps();
        });

        return "Table has been created";
    }

    public function dropTable()
    {
        Schema::drop('users');
        Schema::drop('jobs');
        Schema::drop('apply');
        Schema::drop('recommendation');
        Schema::drop('postJobs');
        Schema::drop('hire');
        Schema::drop('admin');
        Schema::drop('evaluationQuestion');
        Schema::drop('evaluation');
        Schema::drop('applicant');
        Schema::drop('employer');


        return "All table has been drop!";
    }
}
?>