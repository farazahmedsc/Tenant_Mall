<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentTable extends Migration
{
    /**
     * Run the migrations.
     * id, t_id, month, pay_date, total_amount, pay_amount, status (paid, unpaid, partially_paid)
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent', function (Blueprint $table) {
            $table->id();
            $table->integer('t_id');
            $table->string('month',50);
            $table->date('pay_date');
            $table->double('total_amount' , 8, 2);
            $table->double('pay_amount' , 8, 2);
            $table->enum('status', ['paid' , 'unpaid' , 'partially_paid']);
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('rent');
    }
}
