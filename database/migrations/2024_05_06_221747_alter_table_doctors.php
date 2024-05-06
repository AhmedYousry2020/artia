<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctors',function(Blueprint $table){
            $table->text('educational_qualifications_en');
            $table->text('educational_qualifications_ar');
            $table->text('professional_experience_en');
            $table->text('professional_experience_ar');
            $table->text('certificate_en');
            $table->text('certificate_ar');
            $table->string('video');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
