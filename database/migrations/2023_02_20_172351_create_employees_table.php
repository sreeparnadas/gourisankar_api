<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name',255)->nullable(false);
            $table->string('contact_number',15)->nullable(false);
            $table->string('adderess_line_one',255)->nullable(false);
            $table->string('adderess_line_two',255)->nullable(false);
            $table->string('city',255)->nullable(false);
            $table->string('post_office',255)->nullable(false);
            $table->string('pincode',255)->nullable(false);
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('state_id');

            $table->foreign('district_id')
              ->references('id')->on('districts')->onDelete('cascade');

            $table->foreign('state_id')
              ->references('id')->on('states')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
