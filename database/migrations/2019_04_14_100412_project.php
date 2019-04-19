<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Project extends Migration
{
    
    public function up()
    {
        Schema::create('project1', function (Blueprint $table) {
           
            $table->string('name'); 
            $table->string('email');
           $table->string('age');
           $table->string('bloodgrp');
           $table->string('contact');
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
        Schema::drop('project1');
    }
}
