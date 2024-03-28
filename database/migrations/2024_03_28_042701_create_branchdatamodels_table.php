<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchdatamodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branchdatamodels', function (Blueprint $table) {
            $table->id();            
            $table->string('branch_address');
            $table->string('is_bank');
            $table->string('is_branch');
            $table->timestamps();        
            
            $table->bigInteger('bank_id')->unsigned();
            $table->foreign('bank_id')->references('id')->on('bankdatamodels')->onDelete('cascade');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branchdatamodels');
    }
}
