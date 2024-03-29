<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id');
            $table->foreignId('employee_nbr')->constrained('employees','id');
            $table->foreignId('bike_id')->constrained('bike_details','id');
            $table->integer('payment_fee');
            $table->boolean('payment_status')->default(0);
            $table->boolean('rent_status')->default(0);
            $table->date('rental_start_date');
            $table->date('rental_end_date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
