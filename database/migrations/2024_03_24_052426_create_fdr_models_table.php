<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdrModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdr_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('etin');
            $table->string('nid');            
            $table->string('nomonee_name');
            $table->string('nomonee_phone');
            $table->string('nomonee_relation');
            $table->string('nomonee_nid');
            $table->string('nomonee_etin');
            $table->string('post_code');
            $table->string('district');
            $table->string('state');   

            $table->string('banch_id')->default("")->nullable();            
            $table->boolean('branch_verifyed')->default(false)->nullable();
            $table->string('branch_comment')->default("no_comment");
            
            $table->string('bank_id')->default("")->nullable();            
            $table->boolean('brank_verifyed')->default(false)->nullable();
            $table->string('bank_comment')->default("no_comment");
                        
            $table->boolean('bdbank_verifyed')->default(false)->nullable();
            $table->string('bdbank_comment')->default("no_comment");
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fdr_models');
    }
}